<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use Auth;

class TodosController extends Controller
{


// 登録todo表示

public function getTodos(){ 
  $userId= Auth::id();
  $todos = Todo::where('user_id','=', $userId)->get();
   return $todos;
}

// todo登録

    public function addTodo(Request $request){ 
      $todos = new Todo;
      $todos->user_id = Auth::id();
      $todos->name = $request->name;
      $todos->save();
      $todos = Todo::all();
     return $todos;
  }

  // todo削除
   public function destroy(Request $request){ 
    $todo = Todo::where('id', $request->id)->delete();
    $todos = Todo::all();
    return $todos;
  }

}
