<?php

namespace App\Http\Controllers;

use DB;
use File;
use App\Member;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $qd = Member::orderBy('id','desc')->get();
        return view('create',['qd'=>$qd]);
    }

    public function uploadImg($file_img){
        $img = $file_img;
        $extension = $img->getClientOriginalExtension();
        $date = date_create();
        $random_name = date_timestamp_get($date);
        $img_name = $random_name.'.'.$extension;
        $img->move(public_path('img'), $img_name);
        $name_file = 'img/'.$random_name.'.'.$extension;

        return $name_file;
    }

    public function frmUpdate($id){

        $qe = Member::find($id);

        return view('update',['qe' => $qe]);
    }

    public function store(Request $request){

        $q = new Member;
        $q->fname = $request->fname;
        $q->lname = $request->lname;
        $q->position = $request->position;
        if($request->file_img <> null || $request->file_img <> 0){
            $uploadImg = $this->uploadImg($request->file_img);
            $q->img_path = $uploadImg;
        }
        $q->save();

        return back();
    }

    public function update(Request $request){



        $q = Member::find($request->id_member_update);
        $q->fname = $request->fname;
        $q->lname = $request->lname;
        $q->position = $request->position;

        if($request->file_img <> null || $request->file_img <> 0){
            $uploadImg = $this->uploadImg($request->file_img);
            $q->img_path = $uploadImg;
        }

        $q->save();

        return back();
    }

    public function delete(Request $request){

        $d = Member::find($request->id_member_delete);
        $d->delete();

        return redirect()->route('home');
    }
}
