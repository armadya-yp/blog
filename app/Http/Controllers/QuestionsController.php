<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Question;

class QuestionsController extends Controller
{
    // proses C from CRUD .... Create
    public function create(){
        return view('questions.create');
    }

    public function store(Request $request){
        // dengan cara query builder
        /*$query = DB::table('questions')->insert([
            "judul"=>$request["judul1"],
            "isi"=>$request["isi1"]]);*/

        // dengan cara MODEL ELOQUENT
        // 1. bila dengan penyimpanan dengan perintah save()
        /*$question = new Question;
        $question->judul = $request["judul1"];
        $question->isi   = $request["isi1"];
        $question->save(); /// ini disimpan dengan perintah save()
        */
        
        // 2. bila dengan penyimpanan mass
        $questions=Question::create([
            "judul"=>$request["judul1"],
            "isi"  =>$request["isi1"]]);
        return redirect('/questions')->with('success','Posting Questions Berhasil');
    }

    // proses R from CRUD .... READ
    public function index(){
        // dengan cara query builder
        /*        $questions=DB::table('questions')->get(); */

        // dengan cara MODEL ELOQUENT
        $questions=Question::all();
        return view('questions.index',compact('questions',$questions));
    }

    public function show($id){
        // dengan cara query builder
        /*$questions=DB::table('questions')->where("id",$id)->first();*/

        // dengan cara MODEL ELOQUENT
        $questions=Question::find($id);
        return view('questions.show',compact('questions',$questions));
    }

    // proses U from CRUD .... UPDATE
    public function edit($id){
        // dengan cara query builder
        /*$questions=DB::table('questions')->where("id",$id)->first();*/

        // dengan cara MODEL ELOQUENT
        $questions=Question::find($id);
        return view('questions.edit',compact('questions',$questions));
    }

    public function update($id,Request $request){
        // dengan cara query builder
        /*$query=DB::table('questions')
                ->where("id",$id)
                ->update(["judul"=>$request["judul1"],
                        "isi"=>$request["isi1"]]);*/

        // dengan cara MODEL ELOQUENT
        // 1. bila dengan penyimpanan dengan perintah save()
        $update=Question::where('id',$id)->update([
            "judul"=>$request["judul1"],
            "isi"=>$request["isi1"]]);
        return redirect('/questions')->with('success','Berhasil update');
    }

    // prose D from CRUD .... DELETE
    public function destroy($id){
        // dengan cara query builder
        /*        $query=DB::table('questions')->where("id",$id)
        ->delete(); */

        // dengan cara MODEL ELOQUENT
        Question::destroy($id);
        return redirect('/questions')->with('success','Berhasil dihapus');
    }    
}
