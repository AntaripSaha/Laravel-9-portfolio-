<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Main;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(){
        $main = Main::first();
        return view('frontend.index', compact('main'));
    }
}
