<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Slider;
class SliderController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
    return view('backend.pages.slider.index');
  }
  public function data($id=-1)
  {
    $data['id']=$id;
    $data['data']=Slider::orderBy('title')->get();
    return view('backend.pages.slider.data',$data);
  }

  public function form($id=-1)
  {
    $data['id']=$id;
    if($id!=-1)
    {
      $data['det']=Slider::find($id);
    }
    return view('backend.pages.slider.form',$data);
  }

  public function store(Request $request) {
    $create = Slider::create($request->all());
    return response()->json($create);
    // return redirect('jurusan')->with('pesan', 'Data Gallery Berhasil Di Simpan');
  }

  public function update(Request $request, $id)
  {
      $edit = Slider::find($id)->update($request->all());
      // return redirect('jurusan')->with('pesan', 'Data Gallery Berhasil Di Edit');
      // echo '<pre>';
      // print_r($request->all());
      // echo '</pre>';
      return response()->json($edit);
  }

  public function destroy($id) {
    Slider::find($id)->delete();
    return response()->json(['done']);
  }
}
