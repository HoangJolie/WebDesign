<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use DB;
use Mail;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\CustomerRequest;
use Illuminate\Support\Facades\Redirect;
use App\Product;

class CustomerController extends Controller
{
    public function getHomepage(){
        $getProduct = Product::all();
        return view('Customer.home',compact('getProduct'));
    }

    public function getLogin(){
        return view('Customer.login');
    }

    public function postLogin(Request $request){
        $customer_email = $request->customer_email;
        $customer_password = $request->customer_password;
        $result = DB::table('customer')->WHERE('customer_email',$customer_email)->WHERE('customer_password',$customer_password)->first();
        // dd($result);
        if($result == true){
            Session::put('customer_id',$result->customer_id);
    	    Session::put('customer_name',$result->customer_name);
            Session::put('customer_phone',$result->customer_phone);
            Session::put('customer_email',$result->customer_email);
            return Redirect()->Route('HOMEPAGE');
        }else{
            return Redirect()->Route('LOGIN')->with('error','Sai email hoặc mật khẩu!');
        }
    }

    public function getLogout(){
        Session::forget('customer_id');
        return Redirect()->Route('HOMEPAGE');
    }

    public function getRegister(){
        return view('Customer.register');
    }

    public function postRegister(CustomerRequest $request){
        $customer = new Customer;
        $customer->customer_name = $request->customer_name;
        $customer->customer_email = $request->customer_email;
        $customer->customer_password = $request->customer_password;
        $customer->customer_phone = $request->customer_phone;
        $customer->save();
        return Redirect()->Route('LOGIN')->with('message','Tạo tài khoản mới thành công!');
    }


    public function getProfile(){
        // return "1";
        $getCustomerId = Session::get('customer_id');
        if($getCustomerId != NULL){
            // return Redirect()->Route('PROFILE');
            return view('Customer.profile');
        }else{
            return Redirect()->Route('LOGIN');
        }
        
        // return Redirect()->Route('PROFILE');
    }
}
