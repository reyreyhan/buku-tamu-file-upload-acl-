<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class ProfileController extends Controller
{
    public function index() {
      $data = Users::where('id',session('sessionUser')[0]->id)->with(['role'])->first();
      //dd($data);
      return view('profile.index',compact('data'));
    }

    public function update(Request $request, $id) {
      $data = Users::where('id',$id)->first();
      $data->fullname = $request->fullname;
      $data->password = $request->password;
      //dd($data);
      $data->save();
      return redirect()->back();
    }
}
