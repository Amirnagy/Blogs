<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Blogs website">
    <meta name="author" content="Amir nagy">
    <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
    <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
    <title> Blogs </title>
    <!-- Icons -->
    <link href="{{ asset('adminassets') }}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('adminassets') }}/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application -->
    <link href="{{ asset('adminassets') }}/dest/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
</head>


<body class="navbar-fixed sidebar-nav fixed-nav">
    <header class="navbar">
        @include('dashboard.layouts.header')
    </header>
    <div class="sidebar">
        @include('dashboard.layouts.sidebar1')
    </div>
    <!-- Main content -->
    <main class="main">
        @yield('body')
    </main>

    <aside class="aside-menu">
        @include('dashboard.layouts.sidebar2')
    </aside>

    <footer class="footer">
        @include('dashboard.layouts.footer')
    </footer>
    <!-- Bootstrap and necessary plugins -->
    <script src="{{ asset('adminassets') }}/js/libs/jquery.min.js"></script>
    <script src="{{ asset('adminassets') }}/js/libs/tether.min.js"></script>
    <script src="{{ asset('adminassets') }}/js/libs/bootstrap.min.js"></script>
    <script src="{{ asset('adminassets') }}/js/libs/pace.min.js"></script>

    <!-- Plugins and scripts required by all views -->
    <script src="{{ asset('adminassets') }}js/libs/Chart.min.js"></script>

    <!-- CoreUI main scripts -->

    <script src="{{ asset('adminassets') }}js/app.js"></script>

    <!-- Plugins and scripts required by this views -->
    <!-- Custom scripts required by this view -->
    <script src="{{ asset('adminassets') }}js/views/main.js"></script>

    <!-- Grunt watch plugin -->
    <script src="{{ asset('adminassets') }}//localhost:35729/livereload.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
</body>

</html>
