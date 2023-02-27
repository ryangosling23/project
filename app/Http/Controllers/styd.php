<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class styd extends Controller
{
    public function stud(){
        $p=\App\Models\Studenty::OrderBy('id','desc')->get();
        return view ('stud', ['prod'=>$p]);
    }
}
