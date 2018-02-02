<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    Public function index(){
        $title='Welcome to laravel!';
        return view('pages/index')->with('title',$title);

    }
    Public function about(){
        $title='welcome to the about';
        return view('pages/about')->with('title',$title);

    }
    Public function services(){
        $data = array(
            'title'=> 'Services',
            'services'=>['web developing','programming','SEO']
        );
    return view('pages/services')->with($data);

    }
}
