<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function visiMisi()
    {
        return view('pages.visi-misi');
    }

    public function sejarah()
    {
        return view('pages.sejarah');
    }

    public function karakteristik()
    {
        return view('pages.karakteristik');
    }

    public function kegiatan()
    {
        return view('pages.kegiatan');
    }

    public function pendidikan()
    {
        return view('pages.pendidikan');
    }

    public function pojokBaca()
    {
        return view('pages.pojok-baca');
    }
}
