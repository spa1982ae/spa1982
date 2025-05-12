<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>SPA 1982 LLC</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Spa1982" name="keywords">
    <meta content="Spa1982" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light d-none d-lg-block">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small><i class="fa fa-phone-alt mr-2"></i>+971 50 771 8848</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-phone-alt mr-2"></i>+971 50 314 8653</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope-alt mr-2"></i>aywane82@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-primary px-2" href="https://www.facebook.com/share/nfqo6MKwfapFcYAT/?mibextid=wwXIfr">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-primary px-2" href="https://www.instagram.com/spa_center_1982/profilecard/?igsh=MXE1ZW01cTV3dTQwbg==">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-primary px-2" href="https://youtube.com/@aywane82?si=R3TUIRqYg9DVPPi4">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a class="text-primary px-2" href="https://snapchat.com/t/r3b5dHPA">
                        <i class="fab fa-snapchat"></i>
                    </a>
                    <a class="text-primary px-2" href="https://x.com/1982spa?s=21&t=uisgt9VdliDpwBltykZ3lA">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5" id="nav-scroll">
            <a class="navbar-brand ml-lg-3" href="{{url('/')}}"><img src="img/spa1982logo.png" width="200" height="80" class="d-inline-block align-top" alt=""></a>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <ul class="navbar-nav m-auto py-0">
                    <li class="nav-item active"><a href="#home-sec" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#about-sec" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="#services-sec" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="#availability-sec" class="nav-link">Work Hours</a></li>
                </ul>
                <span class="navbar-text">
                    <a href="#appointment-sec" class="btn btn-primary d-none d-lg-block">Book Now</a>
                </span>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5" data-spy="scroll" data-target="#nav-scroll" data-offset="0">
        <div id="header-carousel home-sec" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="min-height: 80vh;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">SPA 1982 & Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Massage Treatment</h3>
                            <p class="mx-md-5 px-5">"Experience ultimate relaxation and stress relief with our expert massage treatments, designed to rejuvenate your body, calm your mind, and restore your natural balance for a renewed sense of well-being."</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Make Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 80vh;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-2.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">SPA 1982 & Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Facial Treatment</h3>
                            <p class="mx-md-5 px-5">"Indulge in a luxurious facial treatment tailored to your skin's unique needs, enhancing your complexion with deep cleansing, nourishing ingredients, and soothing techniques for a radiant, youthful glow and rejuvenated skin."</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Make Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 80vh;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-3.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">SPA 1982 & Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Hair Care</h3>
                            <p class="mx-md-5 px-5">
                                "Transform your hair with our personalized hair care treatments, designed to nourish, strengthen, and revitalize your strands, leaving you with healthy, shiny, and beautifully styled hair that radiates confidence and vitality."</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Make Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5" data-spy="scroll" data-target="#nav-scroll" data-offset="0">
        <div class="container py-5" id="about-sec">
            <div class="row align-items-center">
                <div class="col-lg-6 pb-5 pb-lg-0">
                    <img class="img-fluid w-100" src="img/about.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">About Us</h6>
                    <h1 class="mb-4">Your Best Spa, Beauty & Skin Care Center</h1>
                    <p class="pl-4 border-left border-primary">Welcome to SPA 1982 for men, the ultimate destination for men’s wellness and relaxation. At our spa, we offer a wide range of services tailored specifically to the needs of men. Whether you're looking to unwind after a long day, treat yourself to a rejuvenating experience, or simply enjoy some well-deserved self-care, we are here to help you achieve a sense of relaxation and renewal.</p>
                    <div class="row pt-3">
                        <div class="col-6">
                            <div class="bg-light text-center p-4">
                                <h3 class="display-4 text-primary" data-toggle="counter-up">5</h3>
                                <h6 class="text-uppercase">Spa Specialist</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-light text-center p-4">
                                <h3 class="display-4 text-primary" data-toggle="counter-up">1,156</h3>
                                <h6 class="text-uppercase">Happy Clients</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid py-5" data-spy="scroll" data-target="#nav-scroll" data-offset="0">
        <div class="container pt-5" id="services-sec">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6">
                    <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Our Services</h6>
                    <h1 class="mb-5">Spa & Beauty Services</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="img/price2.jpg" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Hand and Foot</h5>
                                <p class="m-0">Care Section</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="img/price1.jpg" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Body Massage</h5>
                                <p class="m-0">Relaxation Section</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="img/price3.jpg" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Personal Care</h5>
                                <p class="m-0">Oriental Bath Section</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="img/price4.jpg" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Hair and Body</h5>
                                <p class="m-0">Care Section</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->



    <!-- Open Hours Start -->
    <div class="container-fluid py-5" data-spy="scroll" data-target="#nav-scroll" data-offset="0">
        <div class="container py-5" id="availability-sec">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/opening.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="hours-text bg-light p-4 p-lg-5 my-lg-5">
                        <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Open Hours</h6>
                        <h1 class="mb-4">Best Relax And Spa Zone</h1>
                        <p>Unwind and recharge with our tailored spa treatments for men, offering a blend of relaxation, rejuvenation, and expert care to address your unique needs, leaving you refreshed, revitalized, and ready to take on the world.</p>
                        <ul class="list-inline">
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Mon - Thu, Sat - Sun : 10:00 AM - 10:30 PM</li>
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Friday : 2:00 PM - 10:30 PM</li>
                        </ul>
                        <a href="" class="btn btn-primary mt-2">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Open Hours End -->



    <!-- YT Shorts Start -->

    <div class="embed-responsive embed-responsive-4by3">
        <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/SF0GUeeL4r0?si=uNTPa6bBwUdkbDQu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
    <!-- YT Shorts End -->




        <!-- Appointment Start -->
        <div class="container-fluid px-0 py-5 my-5" data-spy="scroll" data-target="#nav-scroll" data-offset="0">


            <div class="row justify-content-center bg-appointment mx-0" id="appointment-sec">
                <div class="col-lg-6 py-5">
                    <div class="p-5 my-5" style="background: rgba(33, 30, 28, 0.7);">
                        <h1 class="text-white text-center mb-4">Make Appointment</h1>
                        <form>
                            <div class="form-row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control bg-transparent p-4" placeholder="Your Name" required="required" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control bg-transparent p-4" placeholder="Your Email" required="required" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="date" id="date" data-target-input="nearest">
                                            <input type="text" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Select Date" data-target="#date" data-toggle="datetimepicker"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="time" id="time" data-target-input="nearest">
                                            <input type="text" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Select Time" data-target="#time" data-toggle="datetimepicker"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select class="custom-select bg-transparent px-4" style="height: 47px;">
                                            <option selected>Select A Service</option>
                                            <option value="1">Manicure</option>
                                            <option value="2">Pedicure</option>
                                            <option value="3">Manicure/pedicure Footspa</option>
                                            <option value="4">Footspa</option>
                                            <option value="5">Manicure/pedicure</option>
                                            <option value="6">Relaxing Massage</option>
                                            <option value="7">Sport Massage</option>
                                            <option value="8">Stone Massage</option>
                                            <option value="9">Hot Oil Massage</option>
                                            <option value="10">Swedish Massage</option>
                                            <option value="11">Combination Massage Swedish</option>
                                            <option value="12">Lomi-Lomi Massage</option>
                                            <option value="13">Normal Morroccan Bath</option>
                                            <option value="14">Special Morroccan Bath</option>
                                            <option value="15">VIP Morroccan Bath Oud amber</option>
                                            <option value="16">Oxygen Morroccan Bath</option>
                                            <option value="17">Morroccan Bath with Optional Flavor</option>
                                            <option value="18">Body Scrub Normal</option>
                                            <option value="19">Body Scrub with Steam</option>
                                            <option value="20">Legs Shaving</option>
                                            <option value="21">Chest Shaving</option>
                                            <option value="22">Back Shaving</option>
                                            <option value="23">Hand Shaving</option>
                                            <option value="24">Wax Legs</option>
                                            <option value="25">Wax Chest</option>
                                            <option value="26">Wax Back</option>
                                            <option value="27">Whole Body Wax</option>
                                            <option value="28">Whole Body Shave Machine</option>
                                            <option value="29">Beard Shaving</option>
                                            <option value="30">Hair Cutting</option>
                                            <option value="31">Beard Color</option>
                                            <option value="32">Hair Color</option>
                                            <option value="33">Nose and Ear Waxing</option>
                                            <option value="34">Blow Dry Short Hair</option>
                                            <option value="35">Blow Dry Long Hair</option>
                                            <option value="36">Hair Keratin Short</option>
                                            <option value="37">Hair Keratin Long</option>
                                            <option value="38">Hair Protien</option>
                                            <option value="39">Hair Botox</option>
                                            <option value="40">Hair Straightening</option>
                                            <option value="41">Normal Facial</option>
                                            <option value="42">Special Facial</option>
                                            <option value="43">Royal Facial</option>
                                            <option value="44">1982 Facial</option>
                                            <option value="45">Deep Tissue Facial</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <button class="btn btn-primary btn-block" type="submit" style="height: 47px;">Make Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Appointment End -->

        <!-- Location Start -->
        <div class="embed-responsive embed-responsive-16by9">

            <iframe class="embed-responsive-item"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1081.7201176767956!2d55.75710069546188!3d24.22574534133848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e8ab1b2b88a76f9%3A0x6026da310a8424ee!2sSpa%20%26%20center%201982!5e0!3m2!1sen!2sae!4v1746969404159!5m2!1sen!2sae" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- Location End -->


    @yield('footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->

    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>
