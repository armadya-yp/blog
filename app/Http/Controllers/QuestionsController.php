<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QuestionsController extends Controller
{
    // proses C from CRUD .... Create
    public function create(){
        return view('questions.create');
    }

    public function store(Request $request){
        $query = DB::table('questions')->insert([
            "judul"=>$request["judul1"],
            "isi"=>$request["isi1"]]);
        return redirect('/questions')->with('success','Posting Questions Berhasil');
    }

    // proses R from CRUD .... READ
    public function index(){
        $questions=DB::table('questions')->get();
        return view('questions.index',compact('questions'));
    }

    public function show($id){
        $questions=DB::table('questions')->where("id",$id)->first();
        return view('questions.show',compact('questions',$questions));
    }

    // proses U from CRUD .... UPDATE
    public function edit($id){
        $questions=DB::table('questions')->where("id",$id)->first();
        return view('questions.edit',compact('questions',$questions));
    }

    public function update($id,Request $request){
        $query=DB::table('questions')
                ->where("id",$id)
                ->update(["judul"=>$request["judul1"],
                        "isi"=>$request["isi1"]]);
        return redirect('/questions')->with('success','Berhasil update');
    }

    // prose D from CRUD .... DELETE
    public function destroy($id){
        $query=DB::table('questions')->where("id",$id)
        ->delete();
        return redirect('/questions')->with('success','Berhasil dihapus');
    }    
}
