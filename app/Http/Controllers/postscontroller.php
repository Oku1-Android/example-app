<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class postscontroller extends Controller
{
    //
    public function index(){

        //Non-fluent 
        //DB::select(['table' => 'posts', 'where'=>['id'=>1]])
        //Fluent

    //$posts = DB::select('select * from posts');

    //selecting from the database table posts
    /*$id = 2;
    $posts = DB::table('posts')
                ->where('id',$id)
                ->get();*/
                
                $id=3;
                
        $posts = DB::table('posts')
                    /*SELECTING DATA IN DATABASE*/
                    //->where('created_at', '<', now()->subDAY())
                    //->orWhere('title', 'Mr')
                    //->WhereBetween('id', [2,5])
                    //->WhereNotNull('title')
                      //->Where('title', 'Mrs.')
                      /*->select('body')
                        ->distinct()*/
                      //->inRandomOrder()
                      //->orderBy('created_at', 'desc')
                        //->max('id');
                        //->count(id);
                        //->avg('id');
            /*INSERTING INTO DATABASE*/
            /*->insert(['title' =>'new post',
             'body'=>'this is the new post']);*/
             ->where('id','=', 7)
             /*->update([
                 'title'=>'Prince',
                 'body'=>'Okon Udo Ekpo'
             ]);*/
             ->delete();
                      //->get();


    dd($posts);

        return view('posts.index');
    }
} 
