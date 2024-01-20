<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use \Hermawan\DataTables\DataTable;
use App\Models\PesertaIeltsModel;
use App\Models\PesertaModel;

use \Mpdf\Mpdf;
// library qrcode & pdf 
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;
use App\Libraries\Pdfgenerator;

class PesertaIelts extends BaseController
{
    public function formRegistrasi(){
        $data['title'] = 'Registrasi';
        return view('pages/registrasi', $data);
    }
    

    public function prosesRegistrasi(){
        $db = db_connect();
        $session = session();

        $validasi  = \Config\Services::validation();
        $aturan = [
            'nama' => [
                'label' => 'Nama',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'tgl_lahir' => [
                'label' => 'Tgl Lahir',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'email' => [
                'label' => 'Email',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'no_hp' => [
                'label' => 'No. Whatsapp',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
        ];

        $validasi->setRules($aturan);
        if ($validasi->withRequest($this->request)->run()) {
            $nama = $this->request->getPost('nama');
            $tgl_lahir = $this->request->getPost('tgl_lahir');
            $email = $this->request->getPost('email');
            $no_hp = $this->request->getPost('no_hp');

            $data = [
                'nama' => $nama,
                'tgl_lahir' => $tgl_lahir,
                'email' => $email,
                'no_hp' => $no_hp,
                'tgl_daftar' => date("Y-m-d")
            ];

            $model = new PesertaModel();

            $searchMember = $model->where(['hapus' => 0, 'nama' => $nama, 'email' => $email, 'no_hp' => $no_hp, 'tgl_lahir' => $tgl_lahir])->find();
            if ($searchMember) {
                
            } else {
                $model->save($data);
            }

            $replace_wa = array(
                ' ' => '%20',
                '"' => '%22',
                '/' => '%2F',
                '@' => '%40',
                '+' => '%2B'
            );
    
            $data_nama = str_replace(array_keys($replace_wa), $replace_wa, $nama);
            $data_email = str_replace(array_keys($replace_wa), $replace_wa, $email);
            $data_no_hp = str_replace(array_keys($replace_wa), $replace_wa, $no_hp);
            $wa_admin = $db->query("SELECT * FROM config WHERE field = 'no_wa'")->getRowArray();
    
            $link_konfirmasi = "https://wa.me/$wa_admin[value]?text=Halo%20kak%2C%20saya%20sudah%20berhasil%20mengisi%20format%20pendaftaran%20dengan%20detail%20sebagai%20berikut%2C%20%0ANama%20Lengkap%3A%20$data_nama%0AEmail%20Lengkap%3A%20$data_email%0ANo%20Whatsapp%3A%20$data_no_hp%0A";

            
            $data = $db->query("SELECT * FROM config WHERE field = 'msg_registrasi'")->getRowArray();

            $msg = '
            <div class="alert alert-important alert-success alert-dismissible" role="alert">
                <div class="d-flex">
                    <div class="text-light">
                        '.$data['value'].' dengan klik <a href="'.$link_konfirmasi.'" target="_blank">disini</a>
                    </div>
                </div>
            </div>';
            
            $session->setFlashdata('msg', $msg);
        } else {
            $session->setFlashdata('msg_error', 
                '
                <div class="alert alert-important alert-danger alert-dismissible" role="alert">
                    <div class="d-flex">
                        <div class="text-light">
                            ' . $validasi->listErrors() . '
                        </div>
                    </div>
                </div>
                ');
        }

        return redirect()->to(base_url('/form-registrasi'));
    }

    public function cekEmail(){
        $id_tes = $this->request->getPost('id_tes');
        $email = $this->request->getPost('email');

        $db = db_connect();
        $data = $db->query("SELECT * FROM peserta_ielts WHERE id_tes = '$id_tes' AND email = '$email'")->getRowArray();
        return json_encode($data);
    }

    public function passwordCheck(){
        $id_tes = $this->request->getPost("id");
        $password = $this->request->getPost("password");

        $db = db_connect();
        $data = $db->query("SELECT * FROM tes WHERE `password` = '$password' AND id_tes = '$id_tes'")->getRowArray();
        return json_encode($data);
    }

    public function addJawabanIelts(){
        $session = session();
        $db = db_connect();
        
        $data = $this->add_jawaban_soal_ielts();
        $session->setFlashdata('msg', $data['msg']);
        return redirect()->to(base_url("/$data[url]/$data[id_tes]"));
    }

    public function add_jawaban_soal_ielts(){
        $db = db_connect();
        helper("kuncijawaban_helper");
        
        $id_tes = $this->request->getPost("id_tes");

        $tes = $db->query("SELECT * FROM tes WHERE id_tes = '$id_tes'")->getRowArray();
        $client = $db->query("SELECT * FROM client WHERE id_client = $tes[fk_id_client]")->getRowArray();

        $jawaban_ielts = "";

        if($tes['tipe_soal'] == "Soal_001"){
            $data_koreksi = soal_001($this->request->getPost('jawaban_listening'), $this->request->getPost('jawaban_reading'));
            $jawaban_ielts = $data_koreksi['jawaban_ielts'];
            $benar_listening = $data_koreksi['benar_listening'];
            $benar_reading = $data_koreksi['benar_reading'];
        } else if($tes['tipe_soal'] == "Soal_002"){
            $data_koreksi = soal_002($this->request->getPost('jawaban_listening'), $this->request->getPost('jawaban_reading'));
            $jawaban_ielts = $data_koreksi['jawaban_ielts'];
            $benar_listening = $data_koreksi['benar_listening'];
            $benar_reading = $data_koreksi['benar_reading'];
        } else if($tes['tipe_soal'] == "Soal_003"){
            $data_koreksi = soal_003($this->request->getPost('jawaban_listening'), $this->request->getPost('jawaban_reading'));
            $jawaban_ielts = $data_koreksi['jawaban_ielts'];
            $benar_listening = $data_koreksi['benar_listening'];
            $benar_reading = $data_koreksi['benar_reading'];
        } else if($tes['tipe_soal'] == "Soal_004"){
            $data_koreksi = soal_004($this->request->getPost('jawaban_listening'), $this->request->getPost('jawaban_reading'));
            $jawaban_ielts = $data_koreksi['jawaban_ielts'];
            $benar_listening = $data_koreksi['benar_listening'];
            $benar_reading = $data_koreksi['benar_reading'];
        } else if($tes['tipe_soal'] == "Soal_005"){
            $data_koreksi = soal_005($this->request->getPost('jawaban_listening'), $this->request->getPost('jawaban_reading'));
            $jawaban_ielts = $data_koreksi['jawaban_ielts'];
            $benar_listening = $data_koreksi['benar_listening'];
            $benar_reading = $data_koreksi['benar_reading'];
        }

        $writing_text = $this->request->getPost("text_writing");
        $text_writing = "";

        foreach ($writing_text as $writing_text) {
            $text_writing .= $writing_text . "|||";
        }

        $text_writing = substr($text_writing, 0, -3);

        // nomor sertifikat 
        $date_year = date('Y', strtotime($tes['tgl_tes']));
        $date_month = date('m', strtotime($tes['tgl_tes']));

        $no_doc = $db->query("SELECT no_doc FROM peserta_ielts as a JOIN tes as b ON a.id_tes = b.id_tes WHERE YEAR(tgl_tes) = $date_year AND MONTH(tgl_tes) = $date_month ORDER BY no_doc DESC")->getRowArray();

        if(isset($no_doc)) $no = $no_doc['no_doc']+1;
        else $no = 1;
        
        $data = [
            "id_tes" => $tes['id_tes'],
            "first_name" => $this->request->getPost("first_name"),
            "last_name" => $this->request->getPost("last_name"),
            "t4_lahir" => $this->request->getPost("t4_lahir"),
            "tgl_lahir" => $this->request->getPost("tgl_lahir"),
            "email" => $this->request->getPost("email"),
            "nilai_listening" => $benar_listening,
            "nilai_reading" => $benar_reading,
            "text_listening_reading" => $jawaban_ielts,
            "text_writing" => $text_writing,
            "no_doc" => $no
        ];

        $model = new PesertaIeltsModel();
        $model->save($data);

        $replace_wa = array(
            ' ' => '%20',
            '"' => '%22'
        );
        $tgl_tes = date("d-M-Y", strtotime($tes['tgl_tes']));

        $replacements = array(
            '$first_name' => $this->request->getPost("first_name"),
            '$last_name' => $this->request->getPost("last_name"),
            '$email' => $this->request->getPost("email"),
            '$tes' => $tes['nama_tes']
        );

        $msg = str_replace(array_keys($replacements), $replacements, $tes['message']);

        $result = [
            'url' => $client['url'],
            'id_tes' => md5($tes['id_tes']),
            'msg' => $msg
        ];

        return $result;
    }
    
    public function pdfIelts($id_peserta){
        $db = db_connect();
        $data = $db->query("SELECT * FROM peserta_ielts as a JOIN tes as b ON a.id_tes = b.id_tes JOIN client as c ON b.fk_id_client = c.id_client WHERE md5(id) = '$id_peserta'")->getRowArray();

        $data['no_doc'] = no_doc($data['no_doc']);
        $data['hari'] = date('d', strtotime($data['tgl_tes']));
        $data['tahun'] = date('y', strtotime($data['tgl_tes']));
        $data['bulan'] = getHurufBulan(date('m', strtotime($data['tgl_tes'])));
        $writer = new PngWriter();

        // Create QR code
        $qrCode = QrCode::create(base_url()."c/ielts/".$data['url']."/".$id_peserta)
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(300)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(0, 0, 0));

        // Create generic logo
        $logo = Logo::create( FCPATH .'/public/assets/logo-client/'.$data['logo'])
            ->setResizeToWidth(150);

        $result = $writer->write($qrCode, $logo);
        
        $data['barcode'] = $result->getDataUri();

        $defaultConfig = (new \Mpdf\Config\ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        $defaultFontConfig = (new \Mpdf\Config\FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];

        // Create an instance of the class:
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L',
            'fontDir' => array_merge($fontDirs, [
                __DIR__ . '/lucida-calligraphy-italic.ttf',
            ]),
            'fontdata' => $fontData + [ // lowercase letters only in font key
                'lucida-calligraphy-italic' => [
                    'R' => 'lucida-calligraphy-italic.ttf'
                ],
                'Montserrat-SemiBold' => [
                    'R' => 'Montserrat-SemiBold.otf'
                ]
            ],
            'default_font' => 'Montserrat-SemiBold'
        ]);

        $html = view('pages/pdfIelts', $data);

        // Write some HTML code:
        $mpdf->WriteHTML($html);

        // $mpdf->Output();

        // Output a PDF file directly to the browser
        // return redirect()->to($mpdf->Output());
        $this->response->setHeader('Content-Type', 'application/pdf');
		$mpdf->Output("$data[first_name]-$data[last_name]-$data[tgl_tes]-IELTS.pdf", "I"); // opens in browser
    }

    public function spdfIelts($id_peserta){
        $db = db_connect();
        $data = $db->query("SELECT * FROM peserta_ielts as a JOIN tes as b ON a.id_tes = b.id_tes JOIN client as c ON b.fk_id_client = c.id_client WHERE md5(id) = '$id_peserta'")->getRowArray();

        $data['no_doc'] = no_doc($data['no_doc']);
        $data['hari'] = date('d', strtotime($data['tgl_tes']));
        $data['tahun'] = date('y', strtotime($data['tgl_tes']));
        $data['bulan'] = getHurufBulan(date('m', strtotime($data['tgl_tes'])));
        $writer = new PngWriter();

        // Create QR code
        $qrCode = QrCode::create(base_url()."c/ielts/".$data['url']."/".$id_peserta)
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(300)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(0, 0, 0));

        // Create generic logo
        $logo = Logo::create( FCPATH .'/public/assets/logo-client/'.$data['logo'])
            ->setResizeToWidth(150);

        $result = $writer->write($qrCode, $logo);
        
        $data['barcode'] = $result->getDataUri();

        $dompdf = new \Dompdf\Dompdf(); 
        $dompdf->loadHtml(view('pages/pdfIelts', $data));
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        // $dompdf->stream();
        $dompdf->stream("$data[first_name] $data[last_name] - $data[tgl_tes] - IELTS.pdf", array("Attachment" => false));
        exit(0);
        // $Pdfgenerator = new Pdfgenerator();
        // // filename dari pdf ketika didownload
        // $file_pdf = "$data[first_name] $data[last_name] - $data[tgl_tes]";
        // // setting paper
        // $paper = 'A4';
        // //orientasi paper potrait / landscape
        // $orientation = "potrait";

        // $html = view('pages/pdfIelts', $data);

        // // run dompdf
        // $Pdfgenerator->generate($html, $file_pdf, $paper, $orientation);

        // return view('pages/pdfIelts', $data);
    }

    public function feedbackIelts($id_peserta){
        $db = db_connect();
        $data = $db->query("SELECT * FROM peserta_ielts as a JOIN tes as b ON a.id_tes = b.id_tes JOIN client as c ON b.fk_id_client = c.id_client WHERE md5(id) = '$id_peserta'")->getRowArray();

        $text_writing = explode("|||", $data['text_writing']);

        $data['writing_1'] = $text_writing[0];
        $data['writing_2'] = $text_writing[1];

        $data['no_doc'] = no_doc($data['no_doc']);
        $data['hari'] = date('d', strtotime($data['tgl_tes']));
        $data['tahun'] = date('y', strtotime($data['tgl_tes']));
        $data['bulan'] = getHurufBulan(date('m', strtotime($data['tgl_tes'])));
        $writer = new PngWriter();

        // Create QR code
        $qrCode = QrCode::create(base_url()."c/ielts/".$data['url']."/".$id_peserta)
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(300)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(0, 0, 0));

        // Create generic logo
        $logo = Logo::create( FCPATH .'/public/assets/logo-client/'.$data['logo'])
            ->setResizeToWidth(150);

        $result = $writer->write($qrCode, $logo);
        
        $data['barcode'] = $result->getDataUri();

        $defaultConfig = (new \Mpdf\Config\ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        $defaultFontConfig = (new \Mpdf\Config\FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];

        // Create an instance of the class:
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P',
            'fontDir' => array_merge($fontDirs, [
                __DIR__ . '/lucida-calligraphy-italic.ttf',
            ]),
            'fontdata' => $fontData + [ // lowercase letters only in font key
                'lucida-calligraphy-italic' => [
                    'R' => 'lucida-calligraphy-italic.ttf'
                ],
                'Montserrat-SemiBold' => [
                    'R' => 'Montserrat-SemiBold.otf'
                ],
                'GothamBook' => [
                    'R' => 'GothamBook.ttf'
                ]
            ],
            'default_font' => 'Montserrat-SemiBold'
        ]);

        $html = view('pages/feedback/feedback-cover', $data);
        $mpdf->WriteHTML($html);

        $mpdf->AddPage();

        $html = view('pages/feedback/feedback-listening-reading', $data);
        $mpdf->WriteHTML($html);

        $mpdf->AddPage();

        $html = view('pages/feedback/feedback-writing-1', $data);
        $mpdf->WriteHTML($html);

        $mpdf->AddPage();

        $html = view('pages/feedback/feedback-writing-2', $data);
        $mpdf->WriteHTML($html);

        $mpdf->AddPage();

        $html = view('pages/feedback/feedback-speaking', $data);
        $mpdf->WriteHTML($html);

        // $mpdf->Output();

        // Output a PDF file directly to the browser
        // return redirect()->to($mpdf->Output());
        $this->response->setHeader('Content-Type', 'application/pdf');
		$mpdf->Output("$data[first_name]-$data[last_name]-$data[tgl_tes]-Feedback.pdf", "I"); // opens in browser
    }
}
