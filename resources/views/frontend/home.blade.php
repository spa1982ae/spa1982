

@extends('frontend.master')


@section('footer')

    <!-- Footer Start -->
    <div class="footer container-fluid position-relative bg-dark py-5" style="margin-top: 90px;">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5 mb-5">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="mb-3 text-white"><span class="text-primary">SPA</span> 1982</h1>
                    </a>
                    <p>Welcome to SPA 1982 for men, the ultimate destination for men’s wellness and relaxation. At our spa, we offer a wide range of services tailored specifically to the needs of men. </p>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>Al Mandous Blg. Floor 3, Hessa Bint Mohammed Street, Al Ain</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+971 50 771 8848</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+971 50 314 8653</p>
                    <p><i class="fa fa-envelope mr-2"></i>aywane82@gmail.com</p>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="https://www.facebook.com/share/ibXVjj7N97sKkLXr/?mibextid=wwXIfr"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="https://www.instagram.com/spa_center_1982/profilecard/?igsh=MXE1ZW01cTV3dTQwbg=="><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="https://youtube.com/@aywane82?si=R3TUIRqYg9DVPPi4"><i class="fab fa-youtube"></i></a>

                        <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="https://www.tiktok.com/@1982spallc?_t=ZS-8skzpVjvHI0&_r=1"><i class="bi bi-tiktok"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 pl-lg-5">
                    <div class="row">
                        <div class="col-sm-6 mb-5">
                            <h5 class="text-white text-uppercase mb-4">Quick Links</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                                <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                                <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                                <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Pricing Plan</a>
                                <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-5">
                            <h5 class="text-white text-uppercase mb-4">Our Services</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Body Massage</a>
                                <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Stone Therapy</a>
                                <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Facial Therapy</a>
                                <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Skin Care</a>
                                <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Nail Care</a>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-5">
                            <h5 class="text-white text-uppercase mb-4">We Accept Payment</h5>
                            <div class="w-100">
                                <div class="input-group">
                                    <img src="img/payments.jpg" alt="..." class="rounded mx-auto d-block">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light border-top py-4" style="border-color: rgba(256, 256, 256, .15) !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0 text-white">&copy; <a href="#">SPA 1982</a>. All Rights Reserved.</p>
                </div>
                {{-- <div class="col-md-6 text-center text-md-right">
                    <p class="m-0 text-white">Designed by <a href="https://htmlcodex.com">HTML Codex</a></p>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Footer End -->

@endsection
