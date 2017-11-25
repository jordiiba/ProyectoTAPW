<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Proyecto-Tienda - @yield('titulo')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Delicious Food Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    @section('styles')
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--// bootstrap-css -->
    <!-- css -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!--// css -->
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
    <link href="css/owl.theme.css" rel="stylesheet">
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <!-- //font -->
    @show
    @section('javascripts')
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({

                autoPlay: 3000, //Set AutoPlay to 3 seconds
                autoPlay:true,
                items : 4,
                itemsDesktop : [640,5],
                itemsDesktopSmall : [414,4]

            });

        });
    </script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    @show
    <![endif]-->
</head>
<body>
<!-- banner -->
@section('banner')
<div class="banner jarallax">
    <div class="w3layouts-header-top">
        <div class="container">
            <div class="w3-header-top-grids">
                <div class="w3-header-top-left">
                    <p><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +52 461 - 184 - 0145</p>
                </div>
                <div class="w3-header-top-right">
                    <div class="agileinfo-social-grids">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="banner-info">
        <div class="banner-info-text">
            <div class="container">
                <div class="agileits-logo">
                    <h1><a href="/">Proyecto<span> Tienda</span></a></h1>
                </div>
                <div class="wthree-banner">
                    <div class="slider">
                        <script src="js/responsiveslides.min.js"></script>
                        <script>
                            // You can also use "$(window).load(function() {"
                            $(function () {
                                // Slideshow 4
                                $("#slider3").responsiveSlides({
                                    auto: true,
                                    pager: true,
                                    nav: true,
                                    speed: 500,
                                    namespace: "callbacks",
                                    before: function () {
                                        $('.events').append("<li>before event fired.</li>");
                                    },
                                    after: function () {
                                        $('.events').append("<li>after event fired.</li>");
                                    }
                                });
                            });
                        </script>
                        <div  id="top" class="callbacks_container-wrap">
                            <ul class="rslides" id="slider3">
                                <li>
                                    <div class="slider-info">
                                        <h3>Categoria 1</h3>
                                        <p >Curabitur eget metus eget erat vehicula semper vitae sed leo</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="slider-info">
                                        <h3>Categoria 2</h3>
                                        <p>Quisque nisl risus, egestas in convallis vitae, fringilla cursus magna</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="slider-info">
                                        <h3>Categoria 3</h3>
                                        <p> Suspendisse bibendum dictum metus, at finibus elit dignissim nec	</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- //banner -->
            </div>
        </div>
        <div class="header-top">
            <div class="container">
                <div class="header-top-info">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                            <nav>
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="/">Inicio</a></li>
                                    <li><a href="#about" class="scroll">Acerca de</a></li>
                                    <li><a href="#services" class="scroll">Servicios</a></li>
                                    <li><a href="#specials" class="scroll">Especial</a></li>
                                    <li><a href="#team" class="scroll">Equipo</a></li>
                                    <li><a href="#news" class="scroll">Noticias</a></li>
                                    <li><a href="#mail" class="scroll">Contacto</a></li>
                                    <li><a href="#" data-toggle="modal" data-target="#myModal" class="scroll">Login</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@show
<!-- //banner -->
<!-- login -->
<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Iniciar seción</h4>
            </div>
            <div class="modal-body">
                <form action="/prueba" method="get" class="form-signin">
                    <br>
                    <label class="sr-only">Usuario</label>
                    <input type="text" id="Usuario" class="form-control" placeholder="Usuario" required autofocus>
                    <br>
                    <label class="sr-only">Contraseña</label>
                    <input type="password" id="Contrasena" class="form-control" placeholder="Contraseña" required>
                    <br><br>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">INICIAR</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- //login -->
<!-- welcome -->
@section('contenido')
<div class="welcome" id="welcome">
    <div class="container">
        <div class="w3-welcome-heading">
            <h2>Bienvenido</h2>
        </div>
        <div class="w3l-welcome-info">
            <div class="col-sm-6 welcome-grids">
                <div class="welcome-img">
                    <img src="images/2.jpg" class="img-responsive zoom-img" alt="">
                </div>
            </div>
            <div class="col-sm-6 welcome-grids">
                <div class="welcome-img">
                    <img src="images/3.jpg" class="img-responsive zoom-img" alt="">
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="w3l-welcome-text">
            <p>Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus omnis optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae </p>
        </div>
    </div>
</div>
<!-- //welcome -->
<!-- about -->
<div class="about" id="about">
    <div class="container">
        <div class="w3-welcome-heading">
            <h3>About Us</h3>
        </div>
        <div class="w3-about-grids">
            <div class="col-md-6 w3-about-left">
                <h5>Lorem ipsum dolor sit amet</h5>
                <p>Ut fringilla euismod sagittis. Cras semper ante sapien, in ornare nisi euismod eu. Morbi dapibus est non leo vestibulum aliquet. Sed viverra nisi pharetra, scelerisque nisi eu, tempus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In pellentesque, lectus at auctor luctus, lacus nibh dignissim ante, sed maximus arcu odio vitae lectus. <span>Phasellus vestibulum velit sed nisi ultricies scelerisque. Vivamus ligula mauris, euismod in dictum id, tempus ac odio. Etiam tristique felis eros, tincidunt interdum elit gravida et. Donec porttitor vehicula tortor, malesuada aliquet nibh finibus ac. Maecenas consectetur nisi ipsum, blandit finibus quam tristique vitae.</span></p>
                <div class="w3l-button">
                    <a href="#" data-toggle="modal" data-target="#myModal">More</a>
                </div>
            </div>
            <div class="col-md-6 w3-about-right">
                <div class="about-img-grids">
                    <div class="col-md-7 about-img">
                        <img src="images/4.jpg" alt=" " />
                    </div>
                    <div class="col-md-5 about-img about-img1">
                        <img src="images/6.jpg" alt=" " />
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="about-img-grids">
                    <div class="col-md-5 about-img about-img1">
                        <img src="images/7.jpg" alt=" " />
                    </div>
                    <div class="col-md-7 about-img">
                        <img src="images/5.jpg" alt=" " />
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //welcome -->
<!-- services -->
<div class="services" id="services">
    <div class="container">
        <div class="w3-welcome-heading">
            <h3>Our Services</h3>
        </div>
    </div>
    <div class="services-grids">
        <div id="owl-demo" class="owl-carousel owl-theme">
            <div class="item">
                <div class="services-grid-info">
                    <img src="images/s1.jpg" alt="" />
                    <div class="services-grid-caption">
                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                        <h4>Justo congue</h4>
                        <p>Fusce laoreet</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="services-grid-info">
                    <img src="images/s2.jpg" alt="" />
                    <div class="services-grid-caption">
                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                        <h4>Nulla facilisi</h4>
                        <p>Lorem ipsum</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="services-grid-info">
                    <img src="images/s3.jpg" alt="" />
                    <div class="services-grid-caption">
                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                        <h4>Aenean sed</h4>
                        <p>Nunc tincidunt</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="services-grid-info">
                    <img src="images/s4.jpg" alt="" />
                    <div class="services-grid-caption">
                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                        <h4>Justo congue</h4>
                        <p>Phasellus magna</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="services-grid-info">
                    <img src="images/s5.jpg" alt="" />
                    <div class="services-grid-caption">
                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                        <h4>Justo congue</h4>
                        <p>Fusce laoreet</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="services-grid-info">
                    <img src="images/s6.jpg" alt="" />
                    <div class="services-grid-caption">
                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                        <h4>Nulla facilisi</h4>
                        <p>Lorem ipsum</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="services-grid-info">
                    <img src="images/s7.jpg" alt="" />
                    <div class="services-grid-caption">
                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                        <h4>Aenean sed</h4>
                        <p>Nunc tincidunt</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="services-grid-info">
                    <img src="images/s1.jpg" alt="" />
                    <div class="services-grid-caption">
                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                        <h4>Justo congue</h4>
                        <p>Phasellus magna</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //services -->
<!--gallery-->
<div class="gallery" id="specials">
    <div class="container">
        <div class="w3-welcome-heading">
            <h3>Today Specials</h3>
        </div>
        <div class="agileinfo-gallery">
            <div class="col-md-3 w3-agileits-gallery-grids">
                <a class="w3 wow zoomIn animated" data-wow-delay=".5s" href="images/g1.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                    <img src="images/g1.jpg" class="img-responsive zoom-img" alt=""/>
                    <div class="agile-b-wrapper">
                        <h5><span>$</span>12</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-3 w3-agileits-gallery-grids">
                <a class="wow zoomIn animated" data-wow-delay=".7s" href="images/g3.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                    <img src="images/g3.jpg" class="img-responsive zoom-img" alt=""/>
                    <div class="agile-b-wrapper">
                        <h5><span>$</span>20</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-6 w3-agileits-gallery-grids gallery-two wthree">
                <a class="wow zoomIn animated" data-wow-delay=".9s" href="images/g2.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen book It has survived not only five centuries, but also remaining essentially unchanged. ">
                    <img src="images/g2.jpg" class="img-responsive zoom-img" alt=""/>
                    <div class="agile-b-wrapper">
                        <h5><span>$</span>09</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-3 w3-agileits-gallery-grids agileits-gallery-grids">
                <a class="wow zoomIn animated" data-wow-delay=".5s" href="images/g4.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                    <img src="images/g4.jpg" class="img-responsive zoom-img" alt=""/>
                    <div class="agile-b-wrapper">
                        <h5><span>$</span>15</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-3 w3-agileits-gallery-grids agileits-gallery-grids">
                <a class="wow zoomIn animated" data-wow-delay=".7s" href="images/g6.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                    <img src="images/g6.jpg" class="img-responsive zoom-img" alt=""/>
                    <div class="agile-b-wrapper">
                        <h5><span>$</span>10</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-6 w3-agileits-gallery-grids agileits-gallery-grids gallery-two">
                <a class="wow zoomIn animated" data-wow-delay=".9s" href="images/g5.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen book It has survived not only five centuries, but also essentially unchanged. ">
                    <img src="images/g5.jpg" class="img-responsive zoom-img" alt=""/>
                    <div class="agile-b-wrapper">
                        <h5><span>$</span>25</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-6 w3-agileits-gallery-grids gallery-two w3agile-two">
                <a class="wow zoomIn animated" data-wow-delay=".5s" href="images/g7.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen book It has survived not only five centuries, remaining essentially unchanged. ">
                    <img src="images/g7.jpg" class="img-responsive zoom-img" alt=""/>
                    <div class="agile-b-wrapper">
                        <h5><span>$</span>16</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-3 w3-agileits-gallery-grids">
                <a class="wow zoomIn animated" data-wow-delay=".7s" href="images/g8.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                    <img src="images/g8.jpg" class="img-responsive zoom-img" alt=""/>
                    <div class="agile-b-wrapper">
                        <h5><span>$</span>05</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-3 w3-agileits-gallery-grids">
                <a class="wow zoomIn animated" data-wow-delay=".9s" href="images/g9.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                    <img src="images/g9.jpg" class="img-responsive zoom-img" alt=""/>
                    <div class="agile-b-wrapper">
                        <h5><span>$</span>22</h5>
                    </div>
                </a>
            </div>
            <div class="clearfix"> </div>
            <script src="js/lightbox-plus-jquery.min.js"> </script>
        </div>
    </div>
</div>
<!--//gallery-->
<!-- team -->
<div class="team jarallax" id="team">
    <div class="container">
        <div class="w3-welcome-heading team-heading">
            <h3>Our Chefs</h3>
        </div>
        <div class="agile_team_grids">
            <div class="col-md-3 agile_team_grid">
                <div class="view w3-agile-view">
                    <img src="images/t1.jpg" alt=" " class="img-responsive" />
                    <div class="w3lmask">
                        <h5>quis nostrud</h5>
                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>
                        <div class="social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 agile_team_grid">
                <div class="view w3-agile-view">
                    <img src="images/t2.jpg" alt=" " class="img-responsive" />
                    <div class="w3lmask">
                        <h5>quis nostrud</h5>
                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>
                        <div class="social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 agile_team_grid">
                <div class="view w3-agile-view">
                    <img src="images/t3.jpg" alt=" " class="img-responsive" />
                    <div class="w3lmask">
                        <h5>quis nostrud</h5>
                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>
                        <div class="social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 agile_team_grid">
                <div class="view w3-agile-view">
                    <img src="images/t4.jpg" alt=" " class="img-responsive" />
                    <div class="w3lmask">
                        <h5>quis nostrud</h5>
                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>
                        <div class="social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //team -->
<!-- news -->
<div class="news" id="news">
    <div class="container">
        <div class="w3-welcome-heading">
            <h3>News & Events</h3>
        </div>
        <div class="agile-news-grids">
            <div class="agile-news-grid">
                <div class="col-md-6 agile-news-left">
                    <div class="col-md-6 news-left-img">
                        <div class="news-left-text">
                            <h5>Delicious Food</h5>
                        </div>
                    </div>
                    <div class="col-md-6 news-grid-info-bottom">
                        <div class="news-left-top-text">
                            <a href="#" data-toggle="modal" data-target="#myModal">Cras efficitur nunc at erat ullamcorper blandit.</a>
                        </div>
                        <div class="date-grid">
                            <div class="admin">
                                <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Admin</a>
                            </div>
                            <div class="time">
                                <p><i class="fa fa-calendar" aria-hidden="true"></i> May 09,2016</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="news-grid-info-bottom-text">
                            <p>Aliquam erat volutpat. Duis vulputate tempus laoreet. Integer viverra eleifend neque, eget dictum lectus. Quisque eu tempor dolor.</p>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 agile-news-left">
                    <div class="col-md-6 news-left-img news-left-img1">
                        <div class="news-left-text">
                            <h5>Delicious Food</h5>
                        </div>
                    </div>
                    <div class="col-md-6 news-grid-info-bottom">
                        <div class="news-left-top-text">
                            <a href="#" data-toggle="modal" data-target="#myModal">Cras efficitur nunc at erat ullamcorper blandit.</a>
                        </div>
                        <div class="date-grid">
                            <div class="admin">
                                <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Admin</a>
                            </div>
                            <div class="time">
                                <p><i class="fa fa-calendar" aria-hidden="true"></i> Aug 01,2016</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="news-grid-info-bottom-text">
                            <p>Aliquam erat volutpat. Duis vulputate tempus laoreet. Integer viverra eleifend neque, eget dictum lectus. Quisque eu tempor dolor.</p>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="agile-news-grid">
                <div class="col-md-6 agile-news-left">
                    <div class="col-md-6 news-left-img news-left-img2">
                        <div class="news-left-text">
                            <h5>Delicious Food</h5>
                        </div>
                    </div>
                    <div class="col-md-6 news-grid-info-bottom">
                        <div class="news-left-top-text">
                            <a href="#" data-toggle="modal" data-target="#myModal">Cras efficitur nunc at erat ullamcorper blandit.</a>
                        </div>
                        <div class="date-grid">
                            <div class="admin">
                                <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Admin</a>
                            </div>
                            <div class="time">
                                <p><i class="fa fa-calendar" aria-hidden="true"></i> Sept 24,2016</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="news-grid-info-bottom-text">
                            <p>Aliquam erat volutpat. Duis vulputate tempus laoreet. Integer viverra eleifend neque, eget dictum lectus. Quisque eu tempor dolor.</p>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 agile-news-left">
                    <div class="col-md-6 news-left-img news-left-img3">
                        <div class="news-left-text">
                            <h5>Delicious Food</h5>
                        </div>
                    </div>
                    <div class="col-md-6 news-grid-info-bottom">
                        <div class="news-left-top-text">
                            <a href="#" data-toggle="modal" data-target="#myModal">Cras efficitur nunc at erat ullamcorper blandit.</a>
                        </div>
                        <div class="date-grid">
                            <div class="admin">
                                <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Admin</a>
                            </div>
                            <div class="time">
                                <p><i class="fa fa-calendar" aria-hidden="true"></i> June 17,2016</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="news-grid-info-bottom-text">
                            <p>Aliquam erat volutpat. Duis vulputate tempus laoreet. Integer viverra eleifend neque, eget dictum lectus. Quisque eu tempor dolor.</p>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- //news -->
<!-- testimonial -->
<div class="testimonial jarallax">
    <div class="container">
        <div class="agileits-w3layouts-info">
            <div class="testimonial-grid">
                <div class="slider">
                    <div class="callbacks_container">
                        <ul class="rslides" id="slider4">
                            <li>
                                <div class="testimonial-top">
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                    <p>Donec feugiat tellus sem, laoreet iaculis orci lobortis vel. Sed sed luctus orci, at lacinia risus. Ut porttitor ante ac tincidunt elementum. Curabitur ex dolor, condimentum vitae nunc vel, pulvinar semper justo. Vestibulum et aliquet magna, maximus dapibus enim. Vestibulum ex lectus, posuere eu viverra at, mattis et enim. Nam efficitur sem et lectus fringilla, at pharetra nulla luctus. Nunc cursus, augue ac ultricies volutpat, neque erat congue justo, ac pretium tellus eros a neque. Integer ipsum sem, consectetur a mollis ac, cursus eu ipsum.</p>
                                    <h5>John Smith <span>- Founder</span></h5>
                                </div>
                            </li>
                            <li>
                                <div class="testimonial-top">
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                    <p>Pellentesque urna ex, ultricies a nunc at, pretium maximus nisi. Vestibulum non auctor diam. Mauris eget consectetur mauris. Aenean leo elit, accumsan vel elit vitae, mattis ultricies lacus. Cras consectetur justo lorem, sed dictum sapien eleifend at.Donec sed orci a dui aliquam tempor. Praesent in ipsum ut nunc porttitor lacinia.Donec eu sapien et arcu dictum rutrum.Ut laoreet vitae augue at accumsan. Nam pharetra sagittis purus et condimentum. Vestibulum cursus porttitor pretium.In egestas finibus rutrum. Nulla facilisi.</p>
                                    <h5>Divide Rule <span>- CEO</span></h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <script>
                        // You can also use "$(window).load(function() {"
                        $(function () {
                            // Slideshow 4
                            $("#slider4").responsiveSlides({
                                auto: true,
                                pager:false,
                                nav:false,
                                speed: 500,
                                namespace: "callbacks",
                                before: function () {
                                    $('.events').append("<li>before event fired.</li>");
                                },
                                after: function () {
                                    $('.events').append("<li>after event fired.</li>");
                                }
                            });

                        });
                    </script>
                    <!--banner Slider starts Here-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //testimonial -->
<!-- contact -->
<div class="contact" id="mail">
    <div class="container">
        <div class="w3-welcome-heading">
            <h3>Contacto</h3>
        </div>
        <div class="agile-contact-grids">
            <div class="col-md-6 agile-contact-left">
                <div class="address-grid">
                    <h4>Dirección</h4>
                    <ul class="w3_address">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i>+52 461 - 184 - 0145</li>
                    </ul>
                </div>
                <div class="contact-form">
                    <h4>Formulario de contacto</h4>
                    <form action="#" method="post">
                        <div class="styled-input agile-styled-input-top">
                            <input type="text" name="Name" required="">
                            <label>Nombre</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="email" name="Email" required="">
                            <label>Email</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="text" name="Subject" required="">
                            <label>Asunto</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <textarea name="Message" required=""></textarea>
                            <label>Mensaje</label>
                            <span></span>
                        </div>
                        <input type="submit" value="ENVIAR">
                    </form>
                </div>
            </div>
            <div class="col-md-6 agile-contact-right">
                <div class="agileits-map">
                    <h4>Locación</h4>
                </div>
                <div class="map-grid">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.8400948023!2d-74.25819082602831!3d40.70583163923578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1470295981376" allowfullscreen></iframe>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
@show
<!-- //contact -->
<!-- footer -->
@section('footer')
<div class="footer">
    <div class="container">
        <div class="w3-agile-social-grids">
            <h4>Redes Sociales</h4>
            <div class="border"></div>
            <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            </ul>
        </div>
        <div class="copyright">
            <p>All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
        </div>
    </div>
</div>
@show
<!-- //footer -->
<script src="js/jarallax.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript">
    /* init Jarallax */
    $('.jarallax').jarallax({
        speed: 0.5,
        imgWidth: 1366,
        imgHeight: 768
    })
</script>
<script src="js/responsiveslides.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
<!-- Tabs-JavaScript -->
<script src="js/owl.carousel.js"></script>
</body>
</html>