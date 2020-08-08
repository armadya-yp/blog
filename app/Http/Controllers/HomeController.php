<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class HomeController extends Controller
{
    //di sini isi controller Home
    public function home(){
        return view('home');
    }
}



