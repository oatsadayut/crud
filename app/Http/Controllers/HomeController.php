<?php

namespace App\Http\Controllers;

use File;
use App\Member;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $qd = Member::all();
        return view('welcome',['qd'=>$qd]);
    }

    public function store(Request $request){

        $img = $request->file_img;
        $extension = $img->getClientOriginalExtension();
        $date = date_create();
        $random_name = date_timestamp_get($date);
        $img_name = $random_name.'.'.$extension;
        $img->move(public_path('img'), $img_name);

        $q = new Member;
        $q->fname = $request->fname;
        $q->lname = $request->lname;
        $q->position = $request->position;
        $q->img_path = 'img/'.$random_name.'.'.$extension;
        $q->save();

        return back();
    }
}
