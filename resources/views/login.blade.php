<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login | My Doctor</title>
    <!-- Css File -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nav.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/specialty-table-dr.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
    <!-- Icon -->
    <link rel="shortcut icon" href="{{asset('assets/img/logo.png')}}" type="image/x-icon">
    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!--  toastr  -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;800&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark active" id="nav" >
        <div class="container-fluid" style="flex-direction: row-reverse;">
        <a class="navbar-brand" href="#">
            <img src="{{asset('assets/img/logo-w.png')}}" alt="" srcset="">
        </a>
        <button class="navbar-toggler" style="border: 0; color: transparent;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <label class="hamburger">
                <input type="checkbox">
                <svg viewBox="0 0 32 32">
                    <path class="line line-top-bottom" d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22"></path>
                    <path class="line" d="M7 16 27 16"></path>
                </svg>
            </label>
        </button>
            <div class="collapse navbar-collapse active" id="navbarSupportedContent" >
                <ul class="navbar-nav ml-auto " >
                    <li class="nav-item">
                        <a href="#login">
                            <button class="login-btn">
                                <p>دخول &nbsp; <i class="fa-solid fa-right-to-bracket"></i></p>
                            </button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">تسجيل دكتور</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">جدول المواعيد</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index')}}#contact"  >أتصل بنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" >أرشادات طبية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">التخصصات الطبية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('index')}}" >الصفحة الرئيسية</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Form Section -->
    <div class="wrapper">
        <!-- main title -->
        <div class="main-title position-relative">
            <h1 class="text-center fw-bold">Patient Login</h1>
        </div>
        <div class="container d-flex justify-content-center align-items-center mt-5 main-div">
            <div class="min-div">
                <div class="head text-center">
                    <h1> Login</h1>
                    <p>Patient Information</p>
                </div>
{{--                @if(isset ($errors) && count($errors) > 0)--}}
{{--                    <div class="alert alert-warning" role="alert">--}}
{{--                        <ul class="list-unstyled mb-0">--}}
{{--                            @foreach($errors->all() as $error)--}}
{{--                                <li>{{ $error }}</li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                @endif--}}
                <div class="form-container" id="login">
                    <form class="row g-3" action="{{route('login-check')}}" method="post">
                        @csrf
                        <div class="col-md-12">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="email" name="email" value="{{old('email')}}" class="form-control" id="inputEmail4">
                        </div>
                        @error('email')
                        <blockquote class="quote-danger">
                            <p style="color: #dc3545"> {{$message}}</p>
                        </blockquote>
                        @enderror

                        <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="inputPassword4">
                        </div>
                        @error('password')
                        <blockquote class="quote-danger">
                            <p style="color: #dc3545"> {{$message}}</p>
                        </blockquote>
                        @enderror
                        <div class= "mb-3 submit-btn text-center">
                            <a href=""></a><button type="submit"> Submit </button>
                            <p>Don't have an account? <span><a href="{{route('sign')}}"> Sign-up</a></span></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-eMNqVbJ6uK2VaUluOu9bgAc4TWdKA6U7zu8K6cjeYrN/x4YOGp4G1C2MeX85DeeD" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        @if (\Illuminate\Support\Facades\Session::has('message'))
        var type = "{{ \Illuminate\Support\Facades\Session::get('alert-type', 'info') }}"
        switch (type) {
            case 'info':

                toastr.options.timeOut = 100000;
                toastr.info("{{ \Illuminate\Support\Facades\Session::get('message') }}");
                var audio = new Audio('audio.mp3');
                audio.play();
                break;
            case 'success':

                toastr.options.timeOut = 100000;
                toastr.success("{{ \Illuminate\Support\Facades\Session::get('message') }}");
                var audio = new Audio('audio.mp3');
                audio.play();

                break;
            case 'warning':

                toastr.options.timeOut = 100000;
                toastr.warning("{{ \Illuminate\Support\Facades\Session::get('message') }}");
                var audio = new Audio('audio.mp3');
                audio.play();

                break;
            case 'error':

                toastr.options.timeOut = 100000;
                toastr.error("{{ \Illuminate\Support\Facades\Session::get('message') }}");
                var audio = new Audio('audio.mp3');
                audio.play();

                break;
        }
        @endif
    </script>

    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.js')}}"></script>
</body>
</html>
