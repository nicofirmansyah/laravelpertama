<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index()
    {
            return 'test berhasil';
    }

    public function urutan($ke)
    {

        $friends = Friends ::all();


            return view ('friend', compact ('friends'));
    }
    public function coba($ke)
    {
            return view ('coba', ['ke' => $ke]);
    }
}
