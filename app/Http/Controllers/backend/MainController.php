<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Main;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function view(){
        $main = Main::first();
        return view('backend.main', compact('main'));
    }

    public function store(Request $request){
        // return $request;
        $main = Main::first();
        $main->title = $request->title;
        $main->sub_title = $request->sub_title;
        if($request->file('img')){
            $img = $request->file('img');
            $img->storeAs('public/img/','home-banner.'. $img->getClientOriginalExtension());
            $main->bc_image =  'storage/img/home-banner.'. $img->getClientOriginalExtension();
        }
        if($request->file('resume')){
            $file = $request->file('resume');
            $file->storeAs('public/pdf/','Antarip_CV.'. $file->getClientOriginalExtension());
            $main->resume =  'storage/pdf/Antarip_CV.'.$file->getClientOriginalExtension();
        }
        $main->save();
        return redirect()->back()->with('success','Data Updated');
    }
}
