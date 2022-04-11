<!DOCTYPE html>

<html lang="en">

@include('backend.includes.header')

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        @include('backend.includes.navbar')

        @include('backend.includes.sidebar')

        <div class="content-wrapper">

            @include('backend.includes.breadcrumb')

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

        </div>

        <aside class="control-sidebar control-sidebar-dark">
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>

        @include('backend.includes.footer')

    </div>

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

    @yield('js')
</body>

</html>
