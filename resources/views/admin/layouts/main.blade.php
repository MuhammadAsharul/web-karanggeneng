<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    @include('admin.include.style')
</head>

<body>
    <script src="assets/js/initTheme.js"></script>
    <div id="app">
        @include('admin.partials.sidebar')
        <div id="main">
            @include('admin.partials.header')

            <div class="page-heading">
                <div class="page-content">
                    @yield('content')
                </div>
            </div>
            @include('admin.partials.footer')
        </div>
    </div>
    @include('admin.include.script')
</body>

</html>
