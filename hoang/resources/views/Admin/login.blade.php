@extends('parentlayoutAdmin')
@section('loginadminblade')
<div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
      <div class="row w-100">
        <div class="col-lg-4 mx-auto">
          <div class="auto-form-wrapper">
            <center>
                <div class="col-sm-10 abc">
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
            <form action="{{Route('EXECUTELOGINADMIN')}}" method="post">
                @csrf
              <div class="form-group">
                <label class="label">Username</label>
                <div class="input-group">
                  <input type="text" name="admin_email" class="form-control" placeholder="Username">
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="mdi mdi-check-circle-outline"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="label">Password</label>
                <div class="input-group">
                  <input type="password" name="admin_password" class="form-control" placeholder="*********">
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="mdi mdi-check-circle-outline"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary submit-btn btn-block">Login</button>
              </div>
            </form>
          </div>
          <ul class="auth-footer">
            <li>
              <a href="#">Conditions</a>
            </li>
            <li>
              <a href="#">Help</a>
            </li>
            <li>
              <a href="#">Terms</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div>
@endsection