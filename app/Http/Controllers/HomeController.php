<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        return view('home.index');
    }

    public function aboutus()
    {
        return view('home.about');
    }

    public function test($id)
    {
        return view('home.test',['id'=>$id]);

        //        echo "Id number :",$id;
    }
}
