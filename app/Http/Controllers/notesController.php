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
        
        $quantity=3;
        $notes->first_partial;
        $notes->second_partial;
        $notes->third_partial;
        $notes->final_note=($notes->first_partial + $notes->second_partial + $notes->third_partial)/$quantity;
        $notes->save();
        return $notes;
   }
}
