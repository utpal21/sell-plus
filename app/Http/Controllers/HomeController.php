<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @description Show product home page
     * @author <utpal.uoda@mail.com>
     * @date 12/09/19
     */
    public function index()
    {
        return view('front.pages.index');
    }
}