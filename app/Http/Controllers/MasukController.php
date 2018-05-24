<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Users;

class MasukController extends Controller
{
    //
    public function index() {
      return view('login');
    }

    public function action(Request $request) {
      $data[0] = Users::where('username',$request->username)->where('password',$request->password)->count();

      if($data[0] > 0 ) {
        $data[1] = Users::where('username',$request->username)->where('password',$request->password)->with(['role'])->get();
        $request->session()->put('sessionUser',$data[1]);
        //var_dump(session('sessionUser')[0]);
        return redirect('/input');
      } else {
        return redirect()->back();
      }
    }

    public function logout() {
      session()->flush();
      if(empty(session('sessionUser'))) {
        return redirect('/masuk');
      }
    }
}
