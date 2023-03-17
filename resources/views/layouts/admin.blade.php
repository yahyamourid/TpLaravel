<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        ...
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        ...
        <div class="wrapper">
            <!-- Main content -->
            <section class="content">
                @yield('content')
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @yield('js')
    </body>
</html>
