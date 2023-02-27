<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class one extends Controller
{
    public function show() {
        $a = DB::table('ones')
        ->select('id','img','kategory','name','price','col-vo')
        ->orderby('name', 'desc')
        ->get('id','name','price','col-vo');
        $a == "0";
        return view('catalog', ['a' => $a]);
    }

    public function sortirov($name, $asc){
        $a = DB::table('ones')
        ->select('img','kategory','name','price','col-vo','id')
        ->where("id",">",0)
        ->orderby($name, $asc)
        ->get('img','kategory','name','price','col-vo','id');
        $a == "0";
        return view('catalog', ['a' => $a]);
    }
}
