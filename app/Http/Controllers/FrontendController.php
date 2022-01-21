<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Skill;
use App\Models\Projet;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home() {
        $data=Skill::all() ;
        return view('welcome' , compact('data'));
    }
    public function about() {
        $data=About::all() ;
        return view('pages.about ' , compact('data')) ;

    }
    public function contact() {
        return view('pages.contact') ;

    }
    public function show () {
        return view('pages.show') ;

    }
    public function projet() {
        $data=Projet::all() ;
        return view('pages.projet' , compact('data')) ;
    }
    public function dashboard () {
        $data=Skill::all() ;
        return view('admin.dashboard',compact('data')) ;
    }


}
