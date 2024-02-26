<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS File -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nav.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <!-- Font awesome -->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://www.fontstatic.com/f=dubai-medium,bahij" />

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrD25THgeVMAF6GepnMj8QT+n" crossorigin="anonymous">

    <!--  font awesome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Icon -->
    <link rel="shortcut icon" href="{{asset('assets/img/logo.png')}}" type="image/x-icon">

    <title>My Doctor | طبيبي</title>
</head>
<body>


    <!-- Loading Screen -->
    <div class="loading-screen" id="loading-screen">
        <img class="loader" src="{{asset('assets/img/logo.png')}}" alt="">
    </div>

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
                            <a  href="{{route('login')}}">
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

    <!-- Home Section -->
    <section class="header">
        <div class="text container">
            <div class="content-container">
                <div class="content">
                    <h1>أبحث عن طبيبك</h1>
                    <h1>&أحجز عبر الأنترنت</h1>
                </div>
                <p>احجز طبيبًا بسهولة في أي مكان باستخدام المستند القديم</p>

                <div class="search-container">
                    <div class="search-bar">
                        <input id="inputTxt" type="text" placeholder="أختار التخصص...">
                        <button class="search-btn" type="submit">
                            <i id="icon" class="fa-solid fa-magnifying-glass-location"></i>
                        </button>
                    </div>
                    <div class="list-group">
                    </div>
                </div>
            </div>
        </div>
        <a href="#footer" class="scroll-down">
            <div class="scrolldown" style="--color: skyblue">
                    <div class="chevrons">
                        <div class="chevrondown"></div>
                        <div class="chevrondown"></div>
                    </div>
            </div>
        </a>
    </section>

    <!-- About Section -->
    <div class="container">
        <div class="row justify-content-center aos-init aos-animate " id="about" >
            <div class="sentence-container">
                <div class="side-line"></div>
                <h2 class="title-section">من نحن</h2>
                <div class="side-line"></div>
            </div>

            <div class="col-lg-7" >

                <div class="about-title">
                    <p>
                        طبيبي هي المنصة الرائدة للرعاية الصحية الإلكترونية لحجز الأطباء و برنامج تنظيم إدارة العيادات في منطقة المنصورة.
                        نحن نقود تحويل حجز الأطباء و العيادات و المستشفيات إلكترونيتا وأوتوماتيكيا لتصبح الرعاية الصحية عالية الجودة.
                    </p>
                    <p>
                        يمكن للمريض أن يبحث، يقارن، و يحجز مع أفضل الأطباء في الحال. و يمكن أيضاً للأطباء أن يوفروا تجربة رعاية صحية سهلة و بدون عقبات.
                    </p>
                    <p>نحن متخصصون في الرعاية الطبية الأولية ورعاية كبار السن.</p>
                </div>

                <button class="btn-book">
                    <a href="">
                        <p>حجز موعد </p>
                        <i id="icon" class="fa-solid fa-calendar-days"></i>
                    </a>
                </button>
            </div>

            <div class="col-lg-3 img-div mx-auto fade-right scrolled">
                <img class="img" src="{{asset('assets/img/My Doctor2.png')}}" alt="" />
            </div>
            <!-- </div> -->
        </div>
    </div>

    <!-- Section Card -->
    <section id="page">
        <div class="container">
            <div class="max-w-3xl mx-auto mb-16 text-center ">
                <h2 class="mt-8 mb-10 title-section">Healthy body. Healthy mind. Healthy life.</h2>
                <p class="lead text-page">"My Doctor is like having a doctor in the family"</p>
            </div>
            <br> <br>

            <div class="islamic-card">
                    <!-- Card Three -->
                    <div class="cards akeda ">
                            <img class="cards-img mb-3" alt="" src="https://livehealthonline.com/wp-content/uploads/2023/11/LHO_Icon_Prescriptions-1-300x300.png">
                            <div class="desc" style="width: 15em; text-align: center;">
                                <h5>
                                <div class="why-title ">
                                    <span class="flex-shrink-0 align-items-center justify-content-center rounded-circle">3</span>
                                    كل احتياجاتك
                                </div>
                                </h5>
                                <p>ابحث و احجز كشف مع دكتور في عيادة، مستشفى، زيارة منزلية، أو عبر مكالمة. ممكن كمان تطلب أدوية، أو تحجز خدمة أو عملية بأحسن سعر.</p>
                            </div>
                    </div>
                    <!-- card  Two -->
                    <div class="cards feka " >
                            <img class="cards-img mb-3" alt="" src="https://livehealthonline.com/wp-content/uploads/2023/11/LHO_Icon_Doctor-1-1-300x300.png">
                            <div class="desc" style="width: 15em; text-align: center;">
                                <h5>
                                <div class="why-title">
                                    <span class="flex-shrink-0 align-items-center justify-content-center rounded-circle">2</span>
                                    سهوله الحجز
                                </div>
                                </h5>
                                <p>حجزك مؤكد بمجرد اختيارك من المواعيد المتاحة للدكتور.</p>
                            </div>
                    </div>
                    <!-- card One -->
                    <div class="cards sera " >
                            <img class="cards-img mb-3" alt="" src="https://livehealthonline.com/wp-content/uploads/2023/11/LHO_Icon_Desktop_Mobile-padding-300x300.png">
                            <div class="desc" style="width: 15em; text-align: center;">
                                <h5>
                                <div class="why-title">
                                    <span class="flex-shrink-0 align-items-center justify-content-center rounded-circle">1</span>
                                    احجز مجاناً
                                </div>
                                </h5>
                                <p>سعر الكشف على طبيبي نفس سعر الكشف في العيادة، بدون أي مصاريف إضافية.</p>
                            </div>
                    </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section id="contact">
    <div class="max-w-3xl mx-auto mb-16 text-center ">
        <h2 class="mt-8 mb-10 title-section">Contact Form</h2>
        <p class="lead text-muted">We'd love to hear from you!</p>
    </div>
    <div class="contact-box">
        <div class="contact-links">
            <div class="div-img">
                <img class="contact-img" src="{{asset('assets/img/logo-w.png')}}" alt="Logo">
            </div>
            <div class="links">
                <div class="link">
                    <a><img src="https://img.icons8.com/fluency/48/facebook-new.png" alt="facebook-new"/></a>
                </div>
                <div class="link">
                    <a><img src="https://img.icons8.com/fluency/48/instagram-new.png" alt="instagram-new"/></a>
                </div>
                <div class="link">
                    <a><img src="https://img.icons8.com/ios/50/twitterx--v1.png" alt="twitterx--v1"/></a>
                </div>
                <div class="link">
                    <a><img src="https://img.icons8.com/color/48/circled-envelope.png" alt="circled-envelope"/></a>
                </div>
            </div>
        </div>
        <div class="contact-form-wrapper" id="contact">
            <form class="form" id="form" method="post" action="{{route('contact-form')}}">
                @csrf
                <div class="form-group">
                    <label for="text">Your Name:</label>
                    <input type="text" id="text" name="text" required="">
                </div>
                <div class="form-group">
                    <label for="email">Your Email:</label>
                    <input type="text" id="email" name="email" required="">
                </div>
                <div class="form-group">
                    <label for="textarea">How Can We Help You?</label>
                    <textarea name="textarea" id="textarea" rows="10" cols="50" required=""></textarea>
                </div>
                <div class="btn-form">
                    <button class="form-submit-btn" type="submit">Send &nbsp; <i id="send-icon" class="fa-solid fa-paper-plane"></i></button>
                    <button class="form-reset-btn btn btn-danger" onclick="resetForm()">Reset form</button>
                </div>
            </form>
        </div>
    </div>
    </section>

    <!-- Footer -->
    <footer id="footer" class="text-center text-lg-start bg-body-tertiary text-muted">
    <!-- Section: Links  -->
    <section class="footer-links">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <img class="footer-logo" src="{{asset('assets/img/logo-w.png')}}" alt="logo">
                    </h6>
                    <p>
                        طبيبي هي منصة للرعاية الصحية الإلكترونية لحجز الأطباء و برنامج تنظيم إدارة العيادات , نحن نقود تحويل حجز
                        الأطباء و العيادات و المستشفيات إلكترونيتا وأوتوماتيكيا لتصبح الرعاية الصحية عالية الجودة سهلة المنال .
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        هل أنت طبيب ؟
                    </h6>
                    <p>
                        <a href="signUpDoctor.html" class="text-reset">انضم الى أطباء طبيبي</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                    <p>
                        <i class="fas fa-home me-3"></i>
                        Mansoura
                    </p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        mydoctor@gmail.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4" id="link-app">
                    <!-- Links -->
                        <a href="">
                            <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/57611/_next/static/images/google-play-badge.png" alt="">
                        </a>
                        <a href="">
                            <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/57611/_next/static/images/app-store-badge.png" alt="">
                        </a>
                        </div>
                    <!-- Grid column -->

            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="    background-color: rgb(1 123 109); color: #fff;">
        &copy; 2024 My Doctor Team. All rights reserved.
    </div>
    <!-- Copyright -->
    </footer>

    <!-- Scroll Section -->
    <div class="scrollBtn active" href="#" >
        <i class="fas fa-angle-double-up" aria-hidden="true"></i>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-eMNqVbJ6uK2VaUluOu9bgAc4TWdKA6U7zu8K6cjeYrN/x4YOGp4G1C2MeX85DeeD" crossorigin="anonymous"></script>


    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
    </body>
</html>
