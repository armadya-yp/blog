<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class AuthController extends Controller
{
    //Route::get('dosen', 'DosenController@index');
    /*    public function index(){
        return "Halo ini adalah method index, dalam controller AuthController. ";
    } */
    public function register(){
        return view('register');
    }
    
    public function welcome(Request $request)
    {
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $nama = $firstname . " " . $lastname;
        return view('welcome2', ['nama' => $nama]);
    }

}