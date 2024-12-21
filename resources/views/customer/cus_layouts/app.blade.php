<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Dashboard</title>
  <link rel="stylesheet" href="{{ url('assets/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/dist/css/custom.css') }}">
  @yield('style') <!-- Page-specific styles -->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    @include('customer.cus_layouts.header') <!-- Include header -->
    
    <!-- Sidebar -->
    @include('customer.cus_layouts.sidebar') <!-- Include sidebar -->
    
    <!-- Content Wrapper -->
    <div class="content-wrapper">
      <section class="content">
        <div class="container-fluid">
          @yield('content') <!-- Page-specific content -->
        </div>
      </section>
    </div>
    
    <!-- Footer -->
    @include('customer.cus_layouts.footer') <!-- Include footer -->
  </div>
  
  <!-- Scripts -->
  <script src="{{ url('assets/plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('assets/dist/js/adminlte.min.js') }}"></script>
  @yield('script') <!-- Page-specific scripts -->
</body>
</html>
