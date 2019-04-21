<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>@yield('title')</title>
        @include('includes.css')
    </head>
    <body>
        <div id="main">
            @include('includes.header')
            <!-- Section -->
            <section>
                @yield('content')
            </section>
            @include('includes.footer')
        </div>
        @include('includes.js')
        @yield('page_js')

    </body>
</html>
