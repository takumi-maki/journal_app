<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ManageUserController extends Controller
{
    function showUserList(){
        $user_list = User::orderBy("id", "desc")->paginate(10);
        return view("admin.user_list", [
            "user_list" => $user_list
            ]);
    }
    
    function showUserDetail($id){
        $user = User::find($id);
        return view("admin.user_detail", [
            "user" => $user
            ]);
    }
}
