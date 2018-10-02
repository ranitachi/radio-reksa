<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('pages.front.dashboard.index');
    }

    public function sejarah()
    {
        return view('pages.front.tentang.sejarah');
    }
    public function visi_misi()
    {
        return view('pages.front.tentang.visi-misi');
    }
    public function kontak()
    {
        return view('pages.front.tentang.kontak');
    }
     
    public function penyiar($id=null)
    {
        return view('pages.front.penyiar.index');
    }
    public function foto()
    {
        return view('pages.front.galeri.foto');
    }
    public function video()
    {
        return view('pages.front.galeri.video');
    }
     
    public function program($judul=null)
    {
        if($judul==null)
            return view('pages.front.program.index');    
        else
            return view('pages.front.program.detail');
    }
    public function event_promo($jenis=null,$judul=null)
    {
        if($judul==null && $jenis==null)
            return view('pages.front.event-promo.index');    
        else
            return view('pages.front.event-promo.detail');
    }
    
    public function info($kat=null,$judul=null)
    {
        if($kat==null && $judul==null)
            return view('pages.front.info.index');
        elseif($kat!=null && $judul==null)
            return view('pages.front.info.kategori');    
        else
            return view('pages.front.info.detail');

    }
}
