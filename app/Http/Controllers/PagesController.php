<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        return view('index');
    }

    public function about(){
        $names= ['Samuel', 'Mama', 'Goodness', 'Linsey', 'Edet', 'Okon', 'Ekeh', 'Mfon', 'Udeme', 'Edima',];
        //return view('about')->with('name',$name);

        return view('about',[
            'names'=>$names
        ]);
    }
}
