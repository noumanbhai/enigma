<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Twitter -->
  <meta name="twitter:site" content="@themepixels">
  <meta name="twitter:creator" content="@themepixels">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Starlight">
  <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="twitter:image" content="http://themepixels.me/starlightadmin/assets/img/starlight-social.png">

  <!-- Facebook -->
  <meta property="og:url" content="http://themepixels.me/starlight">
  <meta property="og:title" content="Starlight">
  <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

  <meta property="og:image" content="http://themepixels.me/starlightadmin/assets/img/starlight-social.png">
  <meta property="og:image:secure_url" content="http://themepixels.me/starlightadmin/assets/img/starlight-social.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="600">

  <!-- Meta -->
  <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="author" content="ThemePixels">

  <title>Starlight Responsive Bootstrap 4 Admin Template</title>
  <!-- style start -->
  @include('admin.layouts.style')
  <!-- style end -->

</head>

<body>

  <!-- ########## Sidebar start ########## -->
  @include('admin.layouts.sidebar')
  <!-- ########## Sidebar end ########## -->

  <!-- ########## Navbar start  ########## -->

  @include('admin.layouts.navbar')
  <!-- ########## START: RIGHT PANEL Notification########## -->
  <!-- ########## END: RIGHT PANEL Notification ########## --->
  <!-- ########## Navbar end ########## -->

  <!-- ########## START: MAIN PANEL   ########## -->
  <div class="sl-mainpanel">
    @yield('navbar')

    <div class="sl-pagebody">
      @yield('main')

    </div><!-- row -->
  </div>
  <!-- sl-pagebody -->
  <!-- footer start -->
  @include('admin.layouts.footer')
  <!-- footer end -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->
<!-- script start -->
@include('admin.layouts.script')
<!-- script start -->
</body>
</html>
