<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class AdminController extends Controller
{
    //
    public function index() {
      $data = Users::with(['role'])->get();
      return view('admin.index',compact('data'));
    }

    public function store(Request $request) {
      $data = new Users();
      $data->fullname = $request->fullname;
      $data->id_role = $request->id_role;
      $data->username = $request->username;
      $data->password = $request->password;
      $data->save();
      return redirect()->back();
    }

    public function edit($id) {
      $data = Users::where('id',$id)->with(['role'])->first();
      return view('admin.edit',compact('data'));
    }

    public function update(Request $request, $id) {
      $data = Users::where('id',$id)->first();
      $data->fullname = $request->fullname;
      $data->id_role = $request->id_role;
      $data->username = $request->username;
      $data->password = $request->password;
      //dd($data);
      $data->save();
      return redirect('/admin');
    }

    public function delete($id) {
      $data = Users::where('id',$id)->first();
      $data->delete();
      return redirect()->back();
    }

}
