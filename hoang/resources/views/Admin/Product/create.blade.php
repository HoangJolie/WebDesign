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
                <div class="form-group">
                    <label for="exampleInputFile1">Upload Image</label>
                    <div class="input-group">
                        <input type="file" name="product_image" class="custom-file-input" id="exampleInputFile1">
                        <label class="custom-file-label" for="exampleInputFile1">Choose image</label>
                    </div>
                  </div>
                <div class="form-group">
                  <label for="exampleInputCity1">Price</label>
                  <input type="text" name="product_price" class="form-control" id="exampleInputCity1" placeholder="Price">
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">Description</label>
                  <textarea class="form-control" name="product_desc" id="exampleTextarea1" rows="3"></textarea>
                </div>
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