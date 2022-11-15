<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo_app;

class Todo extends Controller
{
    public function index(){
        return view('welcome',['list' => todo_app::all()]);
    }

    public function saveTodo(Request $req){

        // print_r($req->all());

        $todoObj = new todo_app();
        $todoObj->title = $req->todo;

        $todoObj->save();
        return redirect('/');
    }
    public function update(Request $req){

        // print_r($req->all());

        $todoObj = todo_app::find($req->id);
        $todoObj->title = $req->todo;

        $todoObj->save();
        return redirect('/');
    }
    public function destroy($id){
        $data = todo_app::find($id);
        $data->delete();
        return redirect('/');
    }
    public function edit($id){
        $data = todo_app::find($id);
        return view('edit',['data'=>$data]);
    }
    public function back(){
        return redirect('/');
    }
    
}
