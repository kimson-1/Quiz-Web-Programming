<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    
</head>
<body class="d-flex flex-column min-vh-100">

    {{--Navigation Bar--}}

    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg bg-light border shadow fixed-top">
                <a class="navbar-brand ps-4 col-1">
                    <img src="{{asset('assets/logo.png')}}" width="50" height="50">
                </a>
                <div class="d-flex ms-auto">
                    <div class="nav-text">
                        @if (isset($activePage) && $activePage === 'dashboard')
                            <a class="nav-link text-decoration-underline" style="color:rgb(41, 38, 107)">Home</a>
                        @else
                            <a class="nav-link" href="{{route('home')}}">Home</a>
                        @endif
                    </div>

                    <div class="nav-text dropdown">
                        @if (isset($activePage) && $activePage === 'category')
                            <a class="nav-link dropdown-toggle text-decoration-underline" style="color:rgb(41, 38, 107)" href="" id="category" data-bs-toggle="dropdown" aria-expanded="false">Category</a>
                        @else
                            <a class="nav-link dropdown-toggle" href="" id="category" data-bs-toggle="dropdown" aria-expanded="false">Category</a>
                        @endif
                        
                        <ul class="dropdown-menu" aria-labelledby="category">
                             <li><a class="dropdown-item" href="{{route('category.show', ['slug'=> 'DS'])}}">Data Science</a></li>
                            <li><a class="dropdown-item" href="{{route('category.show', ['slug'=> 'NW'])}}">Network Security</a></li>
                        </ul>
                    </div>
                    <div class="nav-text">
                        @if (isset($activePage) && $activePage === 'writer')
                            <a class="nav-link text-decoration-underline" style="color:rgb(41, 38, 107)" href="{{route('writer.show')}}">Writers</a>
                        @else
                            <a class="nav-link" href="{{route('writer.show')}}">Writers</a>
                        @endif
                    </div>
                    <div class="nav-text">
                        @if (isset($activePage) && $activePage === 'about')
                            <a class="nav-link text-decoration-underline" style="color:rgb(41, 38, 107)" href="">About Us</a>
                        @else
                            <a class="nav-link" href="{{route('about.show')}}">About Us</a>
                        @endif
                    </div>
                    <div class="nav-text">
                        @if (isset($activePage) && $activePage === 'popular')
                            <a class="nav-link text-decoration-underline" style="color:rgb(41, 38, 107)" href="">Popular</a>
                        @else
                            <a class="nav-link" href="{{route('popular.show')}}">Popular</a>
                        @endif
                    </div>
                </div>
            </nav>
        </div>
    </div>

    {{--End of NavBar--}}

    <main class="flex-fill mt-4 pt-5">
        @yield('content')
    </main>

    {{--footer--}}
   
   
    <footer class="col-12 pt-4 pb-4 text-center" style="background-color: #111744">
        <a style="color: #FFFFFF">@EduFun 2024 | Web Programming | Kimson Mcklain | 2602184233</a>
    </footer>

    {{--end of footer--}}

</body>
</html>    

    