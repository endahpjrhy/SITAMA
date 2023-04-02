<!DOCTYPE html>

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Web Pendaftaran Magang">
    <meta name="author" content="Web Pendaftaran Magang">
    <meta name="keyword" content="Web Pendaftaran Magang">
    <title>Web Pendaftaran Magang</title>
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/assets/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/assets/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/assets/assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="/assets/vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="/assets/css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="/assets/css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="/assets/css/examples.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <link href="/assets/vendors/@coreui/icons/css/free.min.css" rel="stylesheet">


    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
    <link href="/assets/vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">

  </head>
  <body>

    {{-- sidebar --}}
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
      <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
          <use xlink:href="assets/brand/coreui.svg#full"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
          <use xlink:href="assets/brand/coreui.svg#signet"></use>
        </svg>
      </div>
        @include('partials/sidebar')
    </div>
    {{-- sidebar --}}
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <header class="header header-sticky mb-4">
        @include('partials/header')
      </header>
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
                 @yield('content')
        </div>
      </div>
      <footer class="footer">
            @include('partials/footer')
      </footer>
    </div>


        <!-- CoreUI and necessary plugins-->
    <script src="/assets/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="/assets/vendors/simplebar/js/simplebar.min.js"></script>

    <script src="/assets/vendors/chart.js/js/chart.min.js"></script>
    <script src="/assets/vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
    <script src="/assets/vendors/@coreui/utils/js/coreui-utils.js"></script>
  <script src="/assets/js/main.js"></script>

@yield('footer')
  </body>
</html>