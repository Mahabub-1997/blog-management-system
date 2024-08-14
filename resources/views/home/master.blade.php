<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('asset')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('asset')}}/css/style.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg bg-dark-subtle">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{route('home')}}">Home</a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{route('new.blog')}}">Add Blog</a>--}}
{{--                            </li>--}}
                            <li class="nav-item">
                                <a class="nav-link btn" href="{{route('login')}}">Login</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

@yield('content')

<script src="{{asset('asset')}}/js/bootstrap.bundle.js"></script>
</body>
</html>
