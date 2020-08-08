<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class AuthController extends Controller
{
    
    public function index(){
        return view('index');
    }
    
    public function create(){
        return view('create');
    }

    public function store(){
        return view('store');
    }

    public function show(){
        return view('show');
    }
    
    public function edit(){
        return view('edit');
    }

    public function update(){
        return view('update');
    }

    public function destroy(){
        return view('destroy');
    }

    public function welcome(Request $request)
    {
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $nama = $firstname . " " . $lastname;
        return view('welcome2', ['nama' => $nama]);
    }

}