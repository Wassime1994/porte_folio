<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function destroy(Skill $id) {
        $id->delete();
        return redirect()->back() ;
    }
    public function show(Skill $id) {
        $data= $id ;
        return view('pages.skillshow' , compact('data')) ;
    }
    public function create() {
        return view('admin.create');
    }
    public function store(Request $request) {
        $data=new Skill ;
        $data->nom=$request->nom ;
        $data->description=$request->description ;
        $data->image=$request->image;
        $data->difficulte=$request->difficulte;
        $data->save() ;
        return redirect()->route('user.dashboard');
    }
    public function edit (Skill $id) {
        $data=$id ;
        return view('admin.edit.skill' , compact('data')) ;
    }
    public function update (Skill $id , Request $request) {
        $data=$id ;
        $data->nom = $request->nom ;
        $data->description=$request->description ;
        $data->difficulte=$request->difficulte ;
        $data->image = $request->image ;
        $data->save() ;
        return redirect()->route('user.dashboard');
    }
}
