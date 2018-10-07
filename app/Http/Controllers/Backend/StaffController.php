<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Staff;
use App\Models\User;
class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
      return view('backend.pages.staff.index');
    }
    public function data($id=-1)
    {
      $user=User::all();
      foreach ($user as $k => $v) {
        $us[$v->id]=$v;
      }
      $data['user']=$us;


      $staff=Staff::orderBy('nama','asc')->get();
      $data['staff']=$staff;
      return view('backend.pages.staff.data',$data);
    }

    public function form($id=-1)
    {
      $data['id']=$id;
      $user=User::all();
      $data['user']=$user;
      if($id!=-1)
      {
        $profil=Staff::find($id);
        $data['det']=$profil;
      }
      return view('backend.pages.staff.form',$data);
    }
    public function store(Request $request) {
      $create = Staff::create($request->all());
      $cat = $request->input('category');
      // return response()->json($create);
      return redirect('penyiar-radio')->with('pesan', 'Data Staff Berhasil Di Tambah');
    }
    public function update(Request $request, $id)
    {
        $edit = Staff::find($id)->update($request->all());
        $cat = $request->input('category');
        // return response()->json($edit);
        return redirect('penyiar-radio')->with('pesan', 'Data Staff Berhasil Di Edit');
    }

    public function destroy($id) {
      Staff::find($id)->delete();
      return response()->json(['done']);
    }
}
