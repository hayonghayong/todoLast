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


}
