<?php

namespace App\Http\Controllers;
use App\Model\student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function show(){
        return student::all();
    }
}
