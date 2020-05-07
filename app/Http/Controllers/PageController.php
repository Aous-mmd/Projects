<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $title = 'Home';
        return view('pages.index')->with('title', $title);
    }
    public function about(){
        $title = 'About';
        return view('pages.about')->with('title', $title);
    }
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['web design', 'web developement']
        );
        return view('pages.services')->with($data);
    }

}
