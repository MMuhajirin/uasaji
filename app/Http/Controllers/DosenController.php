<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DosenModel;

class DosenController extends Controller
{
    public function profil()
    {
        $profil=DosenModel::all();
        $title="Profil";
        return view('dosen.profil', compact('title', 'profil'));
    }

    public function datapengampu()
    {
        $data_pengampu=DosenModel::all();
        $title="Data Pengampu";
        return view('dosen.datapengampu', compact('title', 'data_pengampu'));
    }

}
