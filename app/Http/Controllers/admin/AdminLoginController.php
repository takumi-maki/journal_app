<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
    function showLoginForm() {
        return view("admin.admin_login");
    }
    
    function login(Request $request) {
        $user_id = $request->input("user_id");
        $password = $request->input("password");
        // ログイン成功
        if($user_id == "takumi" && $password == "Af2DKLNa") {
            $request->session()->put("admin_auth", true);
            return redirect("admin");
        }
        // ログイン失敗
        return redirect("admin/login")->withErrors([
            "login" => "ユーザーIDまたはパスワードが違います"
            ]);
    }
}
