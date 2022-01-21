<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home() {
        return view('welcome');
    }
    public function about() {
        return view('pages.about') ;

    }
    public function contact() {
        return view('pages.contact') ;

    }
    public function show () {
        return view('pages.show') ;

    }
    public function projet() {
        $data=Skill::all() ;
        return view('pages.projet', compact('data')) ;
    }
    public function dashboard () {
        $data=Skill::all() ;

        return view('admin.dashboard',compact('data')) ;
    }


}
