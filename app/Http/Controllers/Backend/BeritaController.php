<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Berita;
use App\Models\CatBerita;

use Auth;
class BeritaController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
    return view('backend.pages.berita.index');
  }
  public function beritastatus(Request $request,$id)
  {
    $dt=$request->all();
    $edit = Berita::find($id)->update($dt);
    return response()->json($edit);
    // dd($dt);
  }
  public function data($id=-1)
  {
    $data['id']=$id;
    $c=CatBerita::all();
    
    $cat=array();
    foreach ($c as $k => $v)
    {
      $cat[$v->id]=$v;
    }
    $data['cat']=$cat;
    $data['data']=Berita::orderBy('created_at','desc')->get();
    return view('backend.pages.berita.data',$data);
  }

  public function form($id=-1)
  {
    $data['id']=$id;
    $cat=CatBerita::all();
    
    $data['cat']=$cat;
    if($id!=-1)
    {
      $data['det']=Berita::find($id);
    }
    // dd($cat);
    return view('backend.pages.berita.form',$data);
  }

  public function store(Request $request) {
    $create = Berita::create($request->all());
    // return response()->json($create);
    return redirect('berita')->with('pesan', 'Data Berita Berhasil Di Simpan');
  }

  public function update(Request $request, $id)
  {
      $edit = Berita::find($id)->update($request->all());
      // return response()->json($edit);
      return redirect('berita')->with('pesan', 'Data Berita Berhasil Di Edit');
  }

  public function destroy($id) {
    Berita::find($id)->delete();
    return response()->json(['done']);
  }
}
