<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{url('assets/css/admin.template.css')}}" />
</head>
<body>
    <nav>
        <div class="nav--top">
            <a href="{{url('/admin')}}">
                <img src="{{url('assets/images/pages.png')}}" width="28" />
            </a>
        </div>
        <div class="nav--bottom">
            <a href="{{url('/admin/logout')}}">
                <img src="{{url('assets/images/logout.png')}}" width="28" />
            </a>
        </div>
    </nav>
    <section class="container">
        @yield('content')
    </section>
</body>
</html>