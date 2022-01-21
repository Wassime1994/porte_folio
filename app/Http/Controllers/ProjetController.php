<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function index () {
        $data=Projet::all() ;
        return view('admin.create.projet' , compact('data')) ;
    }
    public function destroy(Projet $id) {
        $id->delete();
        return redirect()->back() ;
    }
    public function show(Projet $id) {
        $data= $id ;
        return view('pages.show.projetshow' , compact('data')) ;
    }
    public function create() {
        return view('admin.create.projetform');
    }
    public function store(Request $request) {
        $data=new Projet;
        $data->nom=$request->nom ;
        $data->language=$request->language ;
        $data->image=$request->image;
        $data->save() ;
        return redirect()->route('projet.index');
    }
    public function edit (projet $id) {
        $data=$id ;
        return view('admin.edit.projet' , compact('data')) ;
    }
    public function update (Projet $id , Request $request) {
        $data=$id ;
        $data->nom = $request->nom ;
        $data->language=$request->language ;
        $data->image = $request->image ;
        $data->save() ;
        return redirect()->route('projet.index');
    }
}
