<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function profil()
    {
        $data = array('title' => 'Dosen');
        return view('dosen.profil', $data);
    }

    public function datapengampu()
    {
        $data = array('title' => 'Dosen');
        return view('dosen.datapengampu', $data);
    }
}
