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
    <title>Editora Clamor</title>
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
                            <a class="nav-link" href="#sobre">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#servicos">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contacto">Contacto</a>
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
                                        <h1 class="banner_taital">Faça a venda <br>de seus livros</h1>

                                        <div class="btn_main">
                                            <div class="about_bt active"><a href="#">Fale conosco</a></div>
                                            <div class="callnow_bt"><a href="#">Ligue agora</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="banner_taital_main">
                                        <h1 class="banner_taital">Editora<br>Clamor</h1>

                                        <div class="btn_main">
                                            <div class="about_bt active"><a href="#">Sobre nós</a></div>
                                            <div class="callnow_bt"><a href="#">Ligue agora</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
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
    <div class="about_section layout_padding" id="sobre">
        <div class="container">
            <div class="about_section_2">
                <div class="row">
                    <div class="col">
                        <div class="about_taital_box">
                            <h1 class="about_taital">Sobre nós</h1>
                            <h1 class="about_taital_1">Editora</h1>
                            <p class=" about_text">has a more-or-less normal distribution of letters, as opposed to
                                using 'Content here, content here', making it look like readable English. Many desktop
                                publishing packages and web page editorhas a more-or-less normal distribution of
                                letters, as oppos</p>
                            <div class="readmore_btn"><a href="#">Read More</a></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image_iman"><img src="images/home/home_banner.jpg" class="about_img"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section end -->
    <!-- coffee section start -->
    <div class="coffee_section layout_padding" id="servicos">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="coffee_taital">Nossos serviços</h1>
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
                                    <div class="coffee_img"><img src="images/home/publicacao.jpg"></div>
                                    <div class="coffee_box">
                                        <h3 class="types_text">Publicação de Livros</h3>
                                        <p class="looking_text">Edição, revisão, diagramação e registro de obras
                                            físicas e digitais.</p>
                                        {{-- <div class="read_bt"><a href="#">Read More</a></div> --}}
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="images/home/consultoria.jpg"></div>
                                    <div class="coffee_box">
                                        <h3 class="types_text">Consultoria Literária</h3>
                                        <p class="looking_text">Avaliação de manuscritos e mentoria personalizada para
                                            autores.</p>
                                        {{-- <div class="read_bt"><a href="#">Read More</a></div> --}}
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="images/home/marketing.jpg"></div>
                                    <div class="coffee_box">
                                        <h3 class="types_text">Marketing e Divulgação</h3>
                                        <p class="looking_text">Campanhas promocionais, redes sociais e assessoria de
                                            imprensa.</p>
                                        {{-- <div class="read_bt"><a href="#">Read More</a></div> --}}
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="images/home/distribuicao.jpg"></div>
                                    <div class="coffee_box">
                                        <h3 class="types_text">Distribuição</h3>
                                        <p class="looking_text">Logística, envio e parcerias com marketplaces
                                            literários.</p>
                                        {{-- <div class="read_bt"><a href="#">Read More</a></div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="images/home/producao_conteudo.jpg"></div>
                                    <div class="coffee_box">
                                        <h3 class="types_text">Produção de Conteúdo</h3>
                                        <p class="looking_text">Ghostwriting, materiais corporativos e livros
                                            educativos.</p>
                                        {{-- <div class="read_bt"><a href="#">Read More</a></div> --}}
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="images/home/multimidia.jpg"></div>
                                    <div class="coffee_box">
                                        <h3 class="types_text">Criação Multimídia</h3>
                                        <p class="looking_text">Audiobooks, livros interativos e podcasts literários.
                                        </p>
                                        {{-- <div class="read_bt"><a href="#">Read More</a></div> --}}
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="images/home/formacao.jpg"></div>
                                    <div class="coffee_box">
                                        <h3 class="types_text">Formação e Cursos</h3>
                                        <p class="looking_text">Workshops de escrita criativa e palestras para
                                            escritores.</p>
                                        {{-- <div class="read_bt"><a href="#">Read More</a></div> --}}
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="images/home/direitos.jpg"></div>
                                    <div class="coffee_box">
                                        <h3 class="types_text">Gestão de Direitos Autorais</h3>
                                        <p class="looking_text">Registro de obras, licenciamento e proteção de
                                            propriedade intelectual.</p>
                                        {{-- <div class="read_bt"><a href="#">Read More</a></div> --}}
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
                                <h1 class="about_taital">O que dizem os nossos clientes</h1>
                            </div>
                        </div>
                        <div class="client_section_2">
                            <div class="client_taital_main">
                                <div class="client_left">
                                    <div class="client_img"><img src="images/client-img2.png"></div>
                                </div>
                                <div class="client_right">
                                    <h3 class="moark_text">Jão Domingos</h3>
                                    <p class="client_text">A Editora Clamor superou minhas expectativas! Meu livro ficou incrível, e o suporte durante todo o processo foi impecável. Recomendo demais!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="about_taital">O que os nossos clientes dizem</h1>
                            </div>
                        </div>
                        <div class="client_section_2">
                            <div class="client_taital_main">
                                <div class="client_left">
                                    <div class="client_img"><img src="images/2.png"></div>
                                </div>
                                <div class="client_right">
                                    <h3 class="moark_text">Fadília Adriano</h3>
                                    <p class="client_text">Os títulos da Editora Clamor são sempre envolventes e bem trabalhados. Dá para sentir o cuidado com cada detalhe. Sou fã!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="about_taital">O que os nossos clientes dizem</h1>
                            </div>
                        </div>
                        <div class="client_section_2">
                            <div class="client_taital_main">
                                <div class="client_left">
                                    <div class="client_img"><img src="images/3.png"></div>
                                </div>
                                <div class="client_right">
                                    <h3 class="moark_text">Elisa Antónia</h3>
                                    <p class="client_text">Publicar com a Editora Clamor foi um sonho realizado. Eles acreditaram na minha ideia e transformaram meu projeto em uma obra que toca o coração das pessoas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </a>
            </div>
        </div>
    </div>
    <!-- blog section end -->
    <!-- contact section start -->
    <div class="contact_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="contact_taital">Deixe uma mensagem</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="contacto">
            <div class="contact_section_2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mail_section_1">
                            <input type="text" class="mail_text" placeholder="Seu nome" name="Your Name">
                            <input type="text" class="mail_text" placeholder="Seu email" name="Your Email">
                            <input type="text" class="mail_text" placeholder="Seu telefone" name="Your Phone">
                            <textarea class="massage-bt" placeholder="Mensagem" rows="5" id="comment" name="Massage"></textarea>
                            <div class="send_bt"><a href="#">Enviar</a></div>
                        </div>
                    </div>
                    <div class="map_main">
                        <div class="map-responsive">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m24!1m12!1m3!1d6256.578671964034!2d16.93868083703145!3d-12.38453090965461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m9!3e6!4m3!3m2!1d-12.3848842!2d16.9389737!4m3!3m2!1d-12.3844804!2d16.9402139!5e0!3m2!1spt-PT!2sao!4v1718373777962!5m2!1spt-PT!2sao"
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
                                    <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">+244
                                        999 999 999</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-envelope" aria-hidden="true"></i><span
                                        class="padding_left_10">editoraclamor@gmail.com</span>
                                </a>
                            </li>
                        </ul>
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
                    <p class="copyright_text">2024. Todos os direitos reservados.</p>
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
