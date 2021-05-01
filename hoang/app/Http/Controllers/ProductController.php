<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Product;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getAdminId = Session::get('admin_id');
        $getProduct = Product::all();
        if($getAdminId != NULL){
            return view('Admin.Product.show',compact('getProduct'));
        }else{
            return Redirect()->Route('LOGINADMIN');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $getAdminId = Session::get('admin_id');
        if($getAdminId != NULL){
            return view('Admin.Product.create');
        }else{
            return Redirect()->Route('LOGINADMIN');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $add = new Product;

        if($request->file('product_image')){
            $destination_path = 'imageProduct';
            $product_image = $request->file('product_image');
            $image = $product_image->getClientOriginalName();
            $request->product_image->move($destination_path,$image);
            $add->product_image = $image;
        }
        $add->product_name = $request->product_name;
        $add->product_price = $request->product_price;
        $add->product_desc = $request->product_desc;
        $add->save();
        // dd($add);
        return Redirect()->Route('SHOWPRODUCT')->with('message','Thêm sản phẩm mới thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($product_id)
    {
        $getAdminId = Session::get('admin_id');
        if($getAdminId != NULL){
            $getProductId = Product::findOrFail($product_id);
            return view('Admin.Product.update',compact('getProductId'));
        }else{
            return Redirect()->Route('LOGINADMIN');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($product_id,Request $request)
    {
        $getProductId = Product::findOrFail($product_id);
        $product = $request->all();
        if($request->file('product_image')){
            $destination_path = 'imageProduct';
            $product_image = $request->file('product_image');
            $image = $product_image->getClientOriginalName();
            $request->product_image->move($destination_path,$image);
            $product['product_image'] = $image;
        }
        $getProductId->update($product);
        return Redirect()->Route('SHOWPRODUCT')->with('message','Cập nhật sản phẩm thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_id)
    {
        $getProductId = Product::Find($product_id);
        $getProductId->delete();
        return Redirect()->Route('SHOWPRODUCT')->with('message','Xóa sản phẩm thành công!');
    }
}
