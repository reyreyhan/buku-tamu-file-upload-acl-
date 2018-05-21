<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use File;

class VisitorController extends Controller
{
    //

    public function index() {
      if(session('sessionUser')[0]->role->role == "Admin") {
        $data = Report::with(['user'])->get();
      } else {
        $data = Report::with(['user'])->where('id_user',session('sessionUser')[0]->id)->get();
      }
        return view('visitor.index',compact('data'));
    }

    public function store(Request $request) {
       $data = new Report();
       $data->name = $request->name;
       $data->nrp = $request->nrp;
       $data->content = $request->content;
       $data->status = $request->status;
       $data->id_user = session('sessionUser')[0]->id;
       $data->date = new \DateTime();
       $data->phone = $request->phone;

       $file = $request->file('file');
       $path = public_path() . '/image' . '/';
       //dd($path);
       if(empty($request->file('file'))) {
         $data->photo = "";
       } else {
         $photoName = explode('.',$file->getClientOriginalName());
         $upName = session('sessionUser')[0]->username . "_" . date('Ymd_his') . "." . $photoName[1];
         $up = $request->file('file')->move($path,$upName);
         $data->photo = $upName;
       }

       $data->save();
       return redirect()->back();

    }

    public function edit($id) {
      $data = Report::with(['user'])->where('id',$id)->first();
      return view('visitor.edit',compact('data'));
    }

    public function update(Request $request, $id) {
      $data = Report::where('id',$id)->first();
      $data->name = $request->name;
      $data->nrp = $request->nrp;
      $data->status = $request->status;
      $data->content = $request->content;
      $data->phone = $request->phone;
      //dd($data);
      $data->save();
      return redirect('/visitor');
    }

    public function detail($id) {
      $data = Report::with(['user'])->where('id',$id)->first();
      return view('visitor.detail',compact('data'));
    }

    public function delete($id) {
      $data = Report::where('id',$id)->first();
      //dd($data->photo);
      if($data->photo == "") {

      } else {
        $path = public_path() . '/image' . '/' . $data->photo;
        \File::delete($path);
      }

      $data->delete();
      return redirect()->back();
    }
}
