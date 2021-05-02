@extends('Admin/dashboard')
@section('showblade')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <center>
                    <div class="col-sm-5 abc">
                      @if(session()->has('message'))
                      <div class="alert alert-success">
                        {!! session()->get('message') !!}
                      </div>
                      @elseif(session()->has('error'))
                      <div class="alert alert-danger">
                        {!! session()->get('error') !!}
                      </div>
                      @endif
                   </div>
                </center>
                <center><h4 class="card-title">Product Management</h4></center>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th> No </th>
                      <th> Name </th>
                      <th> Image </th>
                      <th> Price </th>
                      <th> Description </th>
                      <th> Action </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($getProduct as $item)
                        <tr>
                            <td> {{$loop->iteration}} </td>
                            <td> {{$item->product_name}} </td>
                            <td> 
                                <img src="{{asset("imageProduct/$item->product_image")}}"> 
                            </td>
                            <td> {{$item->product_price}} </td>
                            <td> {{$item->product_desc}} </td>
                            <td>
                                <a href="{{Route('manage_product.edit',$item->product_id)}}" ui-toggle-class="">
                                    <i class="fa fa-check text-success text-active"></i>{{-- edit --}}
                                </a>
                                <a href="{{URL('admin/delete/'.$item->product_id)}}" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không?')" ui-toggle-class="" >
                                    <i class="fa fa-times text-danger text"></i>
                                  </a>
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection