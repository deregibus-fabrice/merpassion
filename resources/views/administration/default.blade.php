<!doctype html>
<html>
<head>
    @include('administration.head')
</head>
<body>
<div class="container">

    <header class="row">
        @include('administration.header')
    </header>

    <div id="main" class="row">

            @yield('content')

    </div>
</div>
</body>
</html>