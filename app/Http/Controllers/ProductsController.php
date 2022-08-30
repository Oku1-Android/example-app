<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $title = 'WElcome to my Laravel 8 course';
        $description= 'My name is Oku Imeh';

        //passing data using compact method:This method is for multiple data
        //return view('products.index', compact('title','name'));
        //note:the '.' represents '/' in the above. that is it can also be written as 'products/index'

        //passing data using a with method
        //return view('products.index')->with('title',$title);


            print_r(route('products'));

        return view('products.index');

       /*$data = [
            'productone'=>'Iphone',
            'productTwo'=>'Samsung',
            'product3'=>'Techno',
            'product4'=>'Infinix',
            'product5'=>'LG',
            'product6'=>'Gioni'
        ];
        // the 'with' method is for a single data.
       // return view('products.index')->with('data',$data);
        //passing directly to view
        return view('products.index',[
            'data'=>$data
        ]);*/
    }
    public function about(){
        return 'Welcome to our about page';
    }


  /* public function show($name,$id){
        $data = [
            'iphone'=>'Iphone',
            'samsung'=>'Samsung',
            'techno'=>'Techno',
            'infinix'=>'Infinix',
            'LG'=>'LG',
            'gioni'=>'Gioni'
        ];
        //comparing if the variable $name match the products in the array
        return view('products.index',[
            'product'=>$data[$name] ?? 'Product '.$name. 'does not exist'
        ]);
    } */

    /*public function show($id){
      
      return $id;
    }*/  
}