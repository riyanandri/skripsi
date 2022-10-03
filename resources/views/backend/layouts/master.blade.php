<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.layouts.head')
</head>

<body>
    <div id="app">
        <div id="main" class='layout-navbar'>

            @include('backend.layouts.nav')

            @include('backend.layouts.sidebar')

            @yield('content')
        </div>
    </div>

    @include('backend.layouts.footer')
</body>

</html>

