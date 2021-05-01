<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('BE/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('BE/vendors/iconfonts/ionicons/dist/css/ionicons.css')}}">
    <link rel="stylesheet" href="{{asset('BE/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('BE/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('BE/vendors/css/vendor.bundle.addons.css')}}">
    <link rel="stylesheet" href="{{asset('BE/vendors/icheck/skins/all.css')}}">
    <link rel="stylesheet" href="{{asset('BE/css/shared/style.css')}}">
    <link rel="stylesheet" href="{{asset('BE/css/demo_1/style.css')}}">
    <link rel="shortcut icon" href="{{asset('BE/images/favicon.ico')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  </head>
  <body>
    <div class="container-scroller">
      @yield('loginadminblade')
      @yield('dashboardblade')
    </div>

    <script src="{{asset('BE/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('BE/vendors/js/vendor.bundle.addons.js')}}"></script>
    <script src="{{asset('BE/js/shared/off-canvas.js')}}"></script>
    <script src="{{asset('BE/js/shared/misc.js')}}"></script>
    <script src="{{asset('BE/js/shared/jquery.cookie.js')}}" type="text/javascript"></script>
    <script>
      // Add the following code if you want the name of the file appear on select
      $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
      });
    </script>
  </body>
  
</html>

