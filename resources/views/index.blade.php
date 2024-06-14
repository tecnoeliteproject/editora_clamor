<!DOCTYPE html>
<html>

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Coffo</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- font css -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
</head>

<body>
    <div class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="/">
                    <span class="h1 text-capitalize font-weight-bold text-secondary">Editora Clamor</span>
                </a>
                <div class="mr-5"></div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mr-5">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="coffees.html">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contacto</a>
                        </li>
                    </ul>
                    <li>
                        <a href="/client/login" class="btn btn-outline-info">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span class="padding_left_10">Entrar</span>
                        </a>
                    </li>
                    <li>
                        <a href="/client/login" class="btn btn-outline-danger ml-3">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span class="padding_left_10">Criar uma conta</span>
                        </a>
                    </li>
                </div>
            </nav>
        </div>
        <!-- banner section start -->
        <div class="banner_section layout_padding">
            <div class="container">
                <div id="banner_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="banner_taital_main">
                                        <h1 class="banner_taital">Editora <br>Clamor</h1>

                                        <div class="btn_main">
                                            <div class="about_bt active"><a href="#">Sobre nós</a></div>
                                            <div class="callnow_bt"><a href="#">Ligue agora</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="banner_taital_main">
                                        <h1 class="banner_taital">Coffee <br>Shop</h1>

                                        <div class="btn_main">
                                            <div class="about_bt active"><a href="#">Sobre nós</a></div>
                                            <div class="callnow_bt"><a href="#">Ligue agora</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="banner_taital_main">
                                        <h1 class="banner_taital">Coffee <br>Shop</h1>

                                        <div class="btn_main">
                                            <div class="about_bt active"><a href="#">Sobre nós</a></div>
                                            <div class="callnow_bt"><a href="#">Ligue agora</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- banner section end -->
    </div>
    <!-- header section end -->
    <!-- about section start -->
    <div class="about_section layout_padding">
        <div class="container">
            <div class="about_section_2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about_taital_box">
                            <h1 class="about_taital">Sobre nós shop</h1>
                            <h1 class="about_taital_1">Coffee distribution '</h1>
                            <p class=" about_text">has a more-or-less normal distribution of letters, as opposed to
                                using 'Content here, content here', making it look like readable English. Many desktop
                                publishing packages and web page editorhas a more-or-less normal distribution of
                                letters, as oppos</p>
                            <div class="readmore_btn"><a href="#">Read More</a></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image_iman"><img src="images/about-img.png" class="about_img"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section end -->
    <!-- coffee section start -->
    <div class="coffee_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="coffee_taital">OUR Coffee OFFER</h1>
                </div>
            </div>
        </div>
        <div class="coffee_section_2">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="images/img-1.png"></div>
                                    <div class="coffee_box">
                                        <h3 class="types_text">TYPES OF COFFEE</h3>
                                        <p class="looking_text">looking at its layout. The point of</p>
                                        <div class="read_bt"><a href="#">Read More</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="images/img-2.png"></div>
                                    <div class="coffee_box">
                                        <h3 class="types_text">BEAN VARIETIES</h3>
                                        <p class="looking_text">looking at its layout. The point of</p>
                                        <div class="read_bt"><a href="#">Read More</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="images/img-3.png"></div>
                                    <div class="coffee_box">
                                        <h3 class="types_text">COFFEE & PASTRY</h3>
                                        <p class="looking_text">looking at its layout. The point of</p>
                                        <div class="read_bt"><a href="#">Read More</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="images/img-4.png"></div>
                                    <div class="coffee_box">
                                        <h3 class="types_text">COFFEE TO GO</h3>
                                        <p class="looking_text">looking at its layout. The point of</p>
                                        <div class="read_bt"><a href="#">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="images/img-1.png"></div>
                                    <div class="coffee_box">
                                        <h3 class="types_text">TYPES OF COFFEE</h3>
                                        <p class="looking_text">looking at its layout. The point of</p>
                                        <div class="read_bt"><a href="#">Read More</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="images/img-2.png"></div>
                                    <div class="coffee_box">
                                        <h3 class="types_text">BEAN VARIETIES</h3>
                                        <p class="looking_text">looking at its layout. The point of</p>
                                        <div class="read_bt"><a href="#">Read More</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="images/img-3.png"></div>
                                    <div class="coffee_box">
                                        <h3 class="types_text">COFFEE & PASTRY</h3>
                                        <p class="looking_text">looking at its layout. The point of</p>
                                        <div class="read_bt"><a href="#">Read More</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="images/img-4.png"></div>
                                    <div class="coffee_box">
                                        <h3 class="types_text">COFFEE TO GO</h3>
                                        <p class="looking_text">looking at its layout. The point of</p>
                                        <div class="read_bt"><a href="#">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="images/img-1.png"></div>
                                    <div class="coffee_box">
                                        <h3 class="types_text">TYPES OF COFFEE</h3>
                                        <p class="looking_text">looking at its layout. The point of</p>
                                        <div class="read_bt"><a href="#">Read More</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="images/img-2.png"></div>
                                    <div class="coffee_box">
                                        <h3 class="types_text">BEAN VARIETIES</h3>
                                        <p class="looking_text">looking at its layout. The point of</p>
                                        <div class="read_bt"><a href="#">Read More</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="images/img-3.png"></div>
                                    <div class="coffee_box">
                                        <h3 class="types_text">COFFEE & PASTRY</h3>
                                        <p class="looking_text">looking at its layout. The point of</p>
                                        <div class="read_bt"><a href="#">Read More</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="images/img-4.png"></div>
                                    <div class="coffee_box">
                                        <h3 class="types_text">COFFEE TO GO</h3>
                                        <p class="looking_text">looking at its layout. The point of</p>
                                        <div class="read_bt"><a href="#">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- coffee section end -->
    <!-- client section start -->
    <div class="client_section layout_padding">
        <div class="container">
            <div id="custom_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="about_taital">What syas customers</h1>
                            </div>
                        </div>
                        <div class="client_section_2">
                            <div class="client_taital_main">
                                <div class="client_left">
                                    <div class="client_img"><img src="images/client-img1.png"></div>
                                </div>
                                <div class="client_right">
                                    <h3 class="moark_text">Joy Moark</h3>
                                    <p class="client_text">now use Lorem Ipsum as their default model text, and a
                                        search for 'lorem ipsum' will uncover many web sites still in their infancynow
                                        use Lorem Ipsum as their default model text, </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="about_taital">What syas customers</h1>
                            </div>
                        </div>
                        <div class="client_section_2">
                            <div class="client_taital_main">
                                <div class="client_left">
                                    <div class="client_img"><img src="images/client-img1.png"></div>
                                </div>
                                <div class="client_right">
                                    <h3 class="moark_text">Joy Moark</h3>
                                    <p class="client_text">now use Lorem Ipsum as their default model text, and a
                                        search for 'lorem ipsum' will uncover many web sites still in their infancynow
                                        use Lorem Ipsum as their default model text, </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="about_taital">What syas customers</h1>
                            </div>
                        </div>
                        <div class="client_section_2">
                            <div class="client_taital_main">
                                <div class="client_left">
                                    <div class="client_img"><img src="images/client-img1.png"></div>
                                </div>
                                <div class="client_right">
                                    <h3 class="moark_text">Joy Moark</h3>
                                    <p class="client_text">now use Lorem Ipsum as their default model text, and a
                                        search for 'lorem ipsum' will uncover many web sites still in their infancynow
                                        use Lorem Ipsum as their default model text, </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#custom_slider" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="carousel-control-next" href="#custom_slider" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- client section end -->
    <!-- blog section start -->
    <div class="blog_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="about_taital">Our Blog</h1>
                </div>
            </div>
            <div class="blog_section_2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="blog_box">
                            <div class="blog_img"><img src="images/blog-img1.png"></div>
                            <h4 class="date_text">05 April</h4>
                            <h4 class="prep_text">PREP TECHNIQUES Coffee</h4>
                            <p class="lorem_text">distracted by the readable content of a page when looking at its
                                layout. The point of using Lorem Ipsum is that it has a moredistracted by the readable
                                content of a page when looking at its layout. The point of using Lorem Ipsum is that it
                                has a more</p>
                        </div>
                        <div class="read_btn"><a href="#">Read More</a></div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog_box">
                            <div class="blog_img"><img src="images/blog-img2.png"></div>
                            <h4 class="date_text">05 April</h4>
                            <h4 class="prep_text">Enjoy Best Coffee</h4>
                            <p class="lorem_text">distracted by the readable content of a page when looking at its
                                layout. The point of using Lorem Ipsum is that it has a moredistracted by the readable
                                content of a page when looking at its layout. The point of using Lorem Ipsum is that it
                                has a more</p>
                        </div>
                        <div class="read_btn"><a href="#">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section end -->
    <!-- contact section start -->
    <div class="contact_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="contact_taital">Get In Touch</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="contact_section_2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mail_section_1">
                            <input type="text" class="mail_text" placeholder="Your Name" name="Your Name">
                            <input type="text" class="mail_text" placeholder="Your Email" name="Your Email">
                            <input type="text" class="mail_text" placeholder="Your Phone" name="Your Phone">
                            <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                            <div class="send_bt"><a href="#">Send</a></div>
                        </div>
                    </div>
                    <div class="map_main">
                        <div class="map-responsive">
                            <iframe
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France"
                                width="250" height="500" frameborder="0" style="border:0; width: 100%;"
                                allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact section end -->
    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer_social_icon">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="location_text">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">+01
                                        1234567890</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-envelope" aria-hidden="true"></i><span
                                        class="padding_left_10">demo@gmail.com</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="form-group">
                        <textarea class="update_mail" placeholder="Your Email" rows="5" id="comment" name="Your Email"></textarea>
                        <div class="subscribe_bt"><a href="#"><i class="fa fa-arrow-right"
                                    aria-hidden="true"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free
                            Html Templates</a>
                        Distribution by <a href="https://themewagon.com">ThemeWagon</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>