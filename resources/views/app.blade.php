<!DOCTYPE html>
<html lang="en">
<head>
  @include('asset.css.css_link')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  @include('navigation.navbar')

  @include('navigation.sidebar')

  <!-- Content Wrapper. Contains page content -->
  @yield('main-content')
  <!-- /.content-wrapper -->

  @include('navigation.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('asset.js.js_link')
</body>
</html>



