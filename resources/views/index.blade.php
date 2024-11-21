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
                            <a class="nav-link" href="about.html">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="coffees.html">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">Notícias</a>
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
                                        <h1 class="banner_taital">Editora<br>Clamor</h1>

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
                            <h1 class="about_taital">Sobre nós</h1>
                            <h1 class="about_taital_1">Editora Clamor '</h1>
                            <p class=" about_text">A Editora Clamor nasceu com o propósito de dar voz às histórias, ideias e sonhos que clamam por serem ouvidos. Nossa missão é conectar autores e leitores, publicando obras que inspiram, educam e transformam vidas. Com dedicação à qualidade editorial, buscamos destacar talentos e contribuir para um mundo mais reflexivo e consciente</p>
                            <div class="readmore_btn"><a href="#">Ler mais</a></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image_iman"><img src="images/editora2.png" class="about_img"></div>
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
                                @foreach ($servicos as $key => $service)
                                    <div class="col-lg-3 col-md-6">
                                        <div class="coffee_img"><img src="{{ url('storage/'.$service->imagem) }}"></div>
                                        <div class="coffee_box">
                                            <h3 class="types_text">{{ $service->nome }}</h3>
                                            <p class="looking_text">Entre em contacto para mais informações</p>
                                            <div class="read_bt"><a href="#">Mais Detalhes</a></div>
                                        </div>
                                    </div>
                                @endforeach
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
                                <h1 class="about_taital">O que os nossos clientes dizem</h1>
                            </div>
                        </div>
                        <div class="client_section_2">
                            <div class="client_taital_main">
                                <div class="client_left">
                                    <div class="client_img"><img src="images/1.png"></div>
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
                    <h1 class="about_taital">Notícias</h1>
                </div>
            </div>
            <div class="blog_section_2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="blog_box">
                            <div class="blog_img"><img src="images/diploma.png"></div>
                            <h4 class="date_text">16 Setembro</h4>
                            <h4 class="prep_text">Entrega de Certificado dos Vencedores ao concurso de Redação de contos</h4>
                            <p class="lorem_text">A cerimônia de entrega dos certificados aos vencedores do Concurso de Redação de Contos foi marcada por emoção e celebração do talento literário. Realizado na Mediateca Abel Abraão, o evento reuniu participantes, familiares e convidados para prestigiar os autores que se destacaram com suas narrativas criativas e cativantes</p>
                        </div>
                        <div class="read_btn"><a href="#">Ler Mais</a></div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog_box">
                            <div class="blog_img"><img src="images/venda.png"></div>
                            <h4 class="date_text">10 Novembro</h4>
                            <h4 class="prep_text">Lançamento do Livro "O que os líderes não têm coragem de falar"</h4>
                            <p class="lorem_text">Em uma noite marcada por debates instigantes e reflexões profundas, foi realizado o aguardado lançamento do livro "O que os Líderes Não Têm Coragem de Falar", de Galvão Chalale. O evento, que ocorreu no Auditório da Politécnica, reuniu líderes empresariais, acadêmicos e leitores interessados em explorar os desafios e dilemas enfrentados no mundo da liderança</p>
                        </div>
                        <div class="read_btn"><a href="#">Ler Mais</a></div>
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
                    <h1 class="contact_taital">Entre em contacto</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="contact_section_2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mail_section_1">
                            <input type="text" class="mail_text" placeholder="Seu Nome" name="Seu Nome">
                            <input type="text" class="mail_text" placeholder="Seu Email" name="Seu Email">
                            <input type="text" class="mail_text" placeholder="Seu Telefone" name="Seu Telefone">
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
                                        936971764</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-envelope" aria-hidden="true"></i><span
                                        class="padding_left_10">fadilia@gmail.com</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="form-group">
                        <textarea class="update_mail" placeholder="Seu Email" rows="5" id="comment" name="Your Email"></textarea>
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
                    <p class="copyright_text">2024 . ISPB <a href="https://html.design">Engenharia Informática</a>
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
