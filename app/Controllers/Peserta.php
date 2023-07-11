<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use \Hermawan\DataTables\DataTable;

class Peserta extends BaseController
{
    public function index()
    {
        $data['sidebar'] = "peserta";
        $data['title'] = "Peserta";
        $data['breadcrumbs'] = ["Peserta"];
        $data['searchButton'] = false;

        return view('pages/peserta', $data);
    }

    public function getAllPeserta(){
        $db = db_connect();
        $builder = $db->table('peserta');

        return DataTable::of($builder)->toJson(true);
    }
}
