@extends('Admin/dashboard')
@section('createblade')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-10 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <center><h1 class="card-title">Add Product</h1></center>
              <form action="{{Route('EXECUTECREATEPRODUCT')}}" class="forms-sample" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="exampleInputName1">Name</label>
                  <input type="text" name="product_name" class="form-control" id="exampleInputName1" placeholder="Name">
                </div>
                @if ($errors->has('product_name'))
                  <p class="help is-danger" style="color: red">Vui lòng nhập tên sản phẩm.</p>
                @endif
                <div class="form-group">
                    <label for="exampleInputFile1">Upload Image</label>
                    <div class="input-group">
                        <input type="file" name="product_image" class="custom-file-input" id="exampleInputFile1">
                        <label class="custom-file-label" for="exampleInputFile1">Choose image</label>
                    </div>
                </div>
                @if ($errors->has('product_image'))
                  <p class="help is-danger" style="color: red">Vui lòng tải ảnh sản phẩm.</p>
                @endif
                <div class="form-group">
                  <label for="exampleInputCity1">Price</label>
                  <input type="text" name="product_price" class="form-control" id="exampleInputCity1" placeholder="Price">
                </div>
                @if ($errors->has('product_price'))
                  <p class="help is-danger" style="color: red">Vui lòng nhập giá tiền.</p>
                @endif
                <div class="form-group">
                  <label for="exampleTextarea1">Description</label>
                  <textarea class="form-control" name="product_desc" id="exampleTextarea1" rows="3"></textarea>
                </div>
                @if ($errors->has('product_desc'))
                  <p class="help is-danger" style="color: red">Mô tả sản phẩm!</p>
                @endif
                <button type="submit" class="btn btn-success mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection