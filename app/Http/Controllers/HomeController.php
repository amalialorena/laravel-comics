<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $nav= ['menu1', 'menu2', 'menu3'];
    public function index()
    {
        // $nav = $this-> nav;
        // return  view('pages.home' compact('nav'));
        $data = ['nav' => $this -> nav];
        return  view('pages.home' , $data);
       
    }

    public function test()
    {
        return  view('pages.test', ['nav' => $this -> nav]);
    }
}
