<?php

namespace App\Http\Controllers;
use App\Model\notes;
use Illuminate\Http\Request;

class notesController extends Controller
{
    public function show(){
        return notes::all();
    }
   function store(Request $request){
        $notes = new notes($request->all());
        
        $
   }
}
