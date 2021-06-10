<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        //$name='Mufrad';
        //$id='12345';

      //return view('home.index',compact('name','id'));

      //return view('home.index',['name'=>'mufrad','id'=>'1234']);

      //return view('home.index')
                //->with('id','12')
               // ->with('name','mufrad');

    return view('home.index')
                ->withId('12')
               ->withName('MMufrad');

} 
}