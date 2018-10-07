<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use App\Http\Requests;
use App\Models\Program;
use Auth;
class ProgramController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
    return view('backend.pages.program.index');
  }
  public function programstatus(Request $request,$id)
  {
    $dt=$request->all();
    $edit = Program::find($id)->update($dt);
    return response()->json($edit);
    // dd($dt);
  }
  public function data($id=-1)
  {
    $data['id']=$id;
      $c=Program::all();
      $cat=array();
    $cat=array();
    foreach ($c as $k => $v)
    {
      $cat[$v->id]=$v;
    }
    $data['data']=Program::orderBy('nama_program')->get();
    return view('backend.pages.program.data',$data);
  }

  public function form($id=-1)
  {
    $data['id']=$id;
      $cat=array();
      $data['det']=Program::find($id);
    return view('backend.pages.program.form',$data);
  }

  public function show($id)
  {
    $id=str_replace('-',' ',$id);
    $data['id']=$id;
    $program=Program::where('nama_program','like',$id)->first();
    // echo $program->nama_program;
    $data['program']=$program;
    return view('backend.pages.program.detail',$data);
  }
  public function store(Request $request) {
    $create = Program::create($request->all());
    // return response()->json($create);
    return redirect('program-radio')->with('pesan', 'Data Program Berhasil Di Simpan');
  }

  public function update(Request $request, $id)
  {
      $edit = Program::find($id)->update($request->all());
      // return response()->json($edit);
      return redirect('program-radio')->with('pesan', 'Data Program Berhasil Di Edit');
  }

  public function destroy($id) {
    Program::find($id)->delete();
    return response()->json(['done']);
  }
}
