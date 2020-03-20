<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class Userscontroller extends Controller
{
    // headerの名前表示

public function getUsers(){ 
//   $userId= Auth::id();
  $users = Auth::user();
//   $users = User::where('user_id','=', $userId)->get();
   return $users;
}

// user情報更新

public function updateUsers(Request $request){
  // Print $request;
  $users = User::where('id',$request->id);
  $users->update($request->user);
  return response()->json(['user' => $users]);
}


}
