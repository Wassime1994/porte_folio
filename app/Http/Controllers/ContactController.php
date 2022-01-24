<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store (Request $request) {
        $data=new Email;
        $data->firstname=$request->firstname ;
        $data->lastname=$request->lastname ;
        $data->email=$request->email ;
        $data->message = $request->message ;
        $data->save() ;
        return redirect()->back() ;
    }
}
