<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Blank Page &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="/css/fontawesome.css">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="/css/stisla-admin/style.css">
  <link rel="stylesheet" href="/css/stisla-admin/components.css">

</head>

<body>
  
  <!-- STISLA App Container  -->
  <div id="app">
    
    <!-- Main Wrapper Start  -->
    <div class="main-wrapper main-wrapper-1">

      <!-- Navigation Background Color Start -->
      <div class="navbar-bg"></div>
      <!-- Navigation Background Color End -->
      
      <!-- Navigation Include -->
      @includeIf('components.navigation.navigation')

      <!-- Aise Include -->
      @includeIf('components.aside.aside')

      <!-- Main Content Start -->
      <div class="main-content">
        <!-- Section Wrapper Start -->
        <section class="section">
          @yield('content')
        </section>
        <!-- Section Wrapper End -->
      </div>
      <!-- Main Content End -->

      <!-- Footer Include -->
      @includeIf('components.footer.footer')

    </div>
    <!-- Main Wrapper End  -->

  </div>
  <!-- STISLA App Container End -->

  <!-- General JS Scripts -->
  <script src="/js/jquery.min.js"></script>
  <script src="/js/popper.js"></script>
  <script src="/js/tooltip.js"></script>
  <script src="/js/moment.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/jquery.nicescroll.min.js"></script>
  <script src="/js/stisla.js"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="/js/scripts.js"></script>

</body>
</html>