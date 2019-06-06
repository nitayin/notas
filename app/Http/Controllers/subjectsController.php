<?php

namespace App\Http\Controllers;
use App\Model\subjects;
use Illuminate\Http\Request;

class subjectsController extends Controller
{
    public function show(){
        return subjects::all();
    }
}
