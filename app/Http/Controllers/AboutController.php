<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $data=About::all() ;
        return view('admin.createAbout' , compact('data')) ;
    }
    public function create () {
        return view('admin.aboutcreate') ;
    }
    public function store(Request $request) {
        $data=new About ;
        $data->titre=$request->titre ;
        $data->description=$request->description ;
        $data->image=$request->image;
        $data->save() ;
        return redirect()->route('about.index');
    }
    public function show(About $id) {
        $data= $id ;
        return view('pages.show.aboutshow' , compact('data')) ;
    }
    public function destroy(About $id) {
        $id->delete();
        return redirect()->back() ;
    }
    public function edit (About $id) {
        $data=$id ;
        return view('admin.edit.about' , compact('data')) ;
    }
    public function update (About $id , Request $request) {
        $data=$id ;
        $data->titre = $request->titre ;
        $data->description=$request->description ;
        $data->image = $request->image ;
        $data->save() ;
        return redirect()->route('about.index');
    }
}
