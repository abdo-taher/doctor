<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign-up patient | My Doctor</title>
    <!-- CSS File -->
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
                        <a href="signUpPatient.html">
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
                        <a class="nav-link" href="#contact"  >أتصل بنا</a>
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
            <h1 class="text-center fw-bold">Patient Registration</h1>
        </div>
        <div class="container d-flex justify-content-center align-items-center mt-5 main-div">
            <div class="min-div">
                <div class="head text-center">
                    <h1> Sign-UP</h1>
                    <p> Patient Account Information  </p>
                </div>
                <div class="form-container">
                    <form class="row g-3" action="{{route('sign-check')}}" method="post">
                        @csrf
                        <div class="col-md-12">
                            <label for="FirstName" class="form-label">Name</label>
                            <input type="FirstName" class="form-control" name="firstName" value="{{old('firstName')}}" id="FirstName">
                        </div>
                        @error('FirstName')
                        <blockquote class="quote-danger">
                            <p style="color: #dc3545"> {{$message}}</p>
                        </blockquote>
                        @enderror
                        <div class="col-md-12">
                            <label for="formMobile" class="form-label">Mobile Number</label>
                            <input class="form-control" name="mobile" type="tel" id="formMobile" value="{{old('mobile')}}" placeholder="010 0000 0000">
                        </div>
                        @error('mobile')
                        <blockquote class="quote-danger">
                            <p style="color: #dc3545"> {{$message}}</p>
                        </blockquote>
                        @enderror
                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="{{old('email')}}" id="inputEmail4">
                        </div>
                        @error('email')
                        <blockquote class="quote-danger">
                            <p style="color: #dc3545"> {{$message}}</p>
                        </blockquote>
                        @enderror
                        <div class="col-md-12">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" value="{{old('password')}}" id="inputPassword4">
                        </div>
                        @error('Password')
                        <blockquote class="quote-danger">
                            <p style="color: #dc3545"> {{$message}}</p>
                        </blockquote>
                        @enderror
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="birthday">Birth Date :</label>
                                <input type="date" id="birthDate" class="form-control"  name="birthday"  value=" yyyy-MM-dd">
                            </div>
                            @error('birthday')
                            <blockquote class="quote-danger">
                                <p style="color: #dc3545"> {{$message}}</p>
                            </blockquote>
                            @enderror
                            <div class="col-md-6 check-box mt-4">
                                <p>Gender :</p>
                                <div class="check">
                                        <input type="radio" id="html" name="gender" value="{{old('gender') == 1 ? 1 : ''}}">
                                        <label for="html">Male</label>
                                        <input type="radio" id="css" name="gender" value="{{old('gender') == 0 ? 0 : ''}}">
                                        <label for="css">Female</label><br>
                                </div>
                            </div>
                            @error('gender')
                            <blockquote class="quote-danger">
                                <p style="color: #dc3545"> {{$message}}</p>
                            </blockquote>
                            @enderror
                        </div>
                        <div class= "mb-3 submit-btn text-center">
                            <a href=""></a><button type="submit" > Submit </button>
                            <p>Don't have an account? <span><a href="{{route('sign')}}"> LogIn</a></span></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.js')}}"></script>
</body>
</html>
