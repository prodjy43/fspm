<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index(){
        return view('pages.section');
    }

    public function section($id){
        return view('section.'.$id);
    }
}
