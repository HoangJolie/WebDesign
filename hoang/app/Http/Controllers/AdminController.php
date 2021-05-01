<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function getLogin(){
        return view('Admin.login');
    }

    public function postLogin(Request $request){
        $admin_email = $request->admin_email;
        $admin_password = $request->admin_password;
        $result = DB::table('admin')->WHERE('admin_email',$admin_email)->WHERE('admin_password',$admin_password)->first();
        // dd($result);
        if($result == true){
            Session::put('admin_id',$result->admin_id);
    	    Session::put('admin_name',$result->admin_name);
            Session::put('admin_email',$result->admin_email);
            // return "1";
            return Redirect()->Route('CREATEPRODUCT');
        }else{
            return Redirect()->Route('LOGINADMIN')->with('error','Sai email hoặc mật khẩu!');
        }
    }

    public function getLogout(){
        Session::forget('admin_id');
        return Redirect()->Route('LOGINADMIN');
    }

    public function createProduct(){
        $getAdminId = Session::get('admin_id');
        if($getAdminId != NULL){
            return view('Admin.Product.create');
        }else{
            return Redirect()->Route('LOGINADMIN');
        }
    }
}
