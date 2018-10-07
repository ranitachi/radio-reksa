<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\CatBerita;
use App\Models\Testimony;
use App\Models\Program;
use App\Models\Profile;
use App\Models\Gallery;
use App\Models\Video;
use App\Models\Event;
use App\Models\Promo;
class FrontController extends Controller
{
    public function index()
    {
        return view('pages.front.dashboard.index');
    }

    public function sejarah()
    {
        $profil=Profile::where('category','like',"%sejarah%")->first();
        return view('pages.front.tentang.sejarah')->with('profil',$profil);
    }
    public function visi_misi()
    {
        $profil=Profile::where('category','like',"%visi-misi%")->first();
        return view('pages.front.tentang.visi-misi')->with('profil',$profil);
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
        $gal=Gallery::all();
        $galeri=array();
        foreach($gal as $k=>$v)
        {
            $galeri[$v->category][]=$v;
        }
        return view('pages.front.galeri.foto')->with('galeri',$galeri);
    }
    public function video()
    {
        $gal=Video::all();
        // $galeri=array();
        // foreach($gal as $k=>$v)
        // {
        //     $galeri[$v->category][]=$v;
        // }
        return view('pages.front.galeri.video')->with('galeri',$gal);
    }
     
    public function program($judul=null)
    {
        if($judul==null)
        {
            $program=Program::where('flag',1)->get();
            return view('pages.front.program.index')
                ->with('program',$program);
        }
        else
        {
            $pr=Program::where('flag',1)->get();
            $program=$lain=array();
            $nm_pr='Program Radio';
            foreach($pr as $k=>$v)
            {
                if($judul==str_slug($v->nama_program))
                {
                    $program[]=$v;
                    $nm_pr=$v->nama_program;
                }
                else
                {
                    $lain[]=$v;
                }
            }
            return view('pages.front.program.detail')
                ->with('lain',$lain)
                ->with('nm_pr',$nm_pr)
                ->with('program',$program);
        }
    }
    public function event_promo($jenis=null,$judul=null)
    {
        $event=Event::where('flag',1)->orderBy('created_at','desc')->get();
        $promo=Promo::where('flag',1)->orderBy('created_at','desc')->get();

        if($judul==null && $jenis==null)
            return view('pages.front.event-promo.index')->with(['event'=>$event,'promo'=>$promo]);    
        else
        {
            $det=array();
            if($jenis=='promo')
            {
                foreach($promo as $k=>$v)
                {
                    if($judul==str_slug($v->nama_promo))
                    {
                        $det[]=$v;
                    }
                }
            }
            elseif($jenis=='event')
            {
                foreach($event as $k=>$v)
                {
                    if($judul==str_slug($v->nama_event))
                    {
                        $det[]=$v;
                    }
                }
            }
            return view('pages.front.event-promo.detail')->with(['event'=>$event,'promo'=>$promo,'jenis'=>$jenis,'judul'=>$judul,'det'=>$det]);
        }
    }
    
    public function info($kat=null,$judul=null)
    {
        $cat=CatBerita::all();
        $testi=Testimony::orderByRaw('RAND()')->limit(3)->get();

        if($kat==null && $judul==null)
        {
            $br=Berita::with('cat_berita')->orderBy('created_at','desc')->get();
            foreach($br as $k=>$v)
            {
                $berita[$v->id_kategori][]=$v;
            }
            return view('pages.front.info.index')
                ->with(['cat'=>$cat,'testi'=>$testi,'berita'=>$berita]);
        }
        elseif($kat!=null && $judul==null)
        {
            $ct=$berita=array();
            $nm_kat='Kategori Info';
            foreach($cat as $k=>$v)
            {
                $kt=strtolower(str_slug($v->nama_kategori));
                if($kt==$kat)
                {
                    $nm_kat=$v->nama_kategori;
                    $ct[]=$v;
                }
            }
            if(count($ct)!=0)
            {
                $br=Berita::where('id_kategori',$ct[0]->id)->with('cat_berita')->orderBy('created_at','desc')->get();
                foreach($br as $k=>$v)
                {
                    $berita[]=$v;
                }
            }
            
                
            return view('pages.front.info.kategori')
                    ->with('berita',$berita)
                    ->with('nm_kat',$nm_kat)
                    ->with('cat',$cat)
                    ->with('testi',$testi);
        }
        else
        {
            $berita=Berita::with('cat_berita')->get();
            $brt=$lain=array();
            foreach($berita as $k=>$v)
            {
                $title=strtolower(str_slug($v->title));
                if($judul==$title)
                {
                    $brt[]=$v;
                }
                else
                    $lain[]=$v;
            }
            return view('pages.front.info.detail')
                    ->with('berita',$brt)
                    ->with('testi',$testi)
                    ->with('lain',$lain);
        }

    }

    public function addview($id)
    {
        $berita=Berita::find($id);
        $berita->view = ($berita->view+1);
        $berita->save();
    }
}
