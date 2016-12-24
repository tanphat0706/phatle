<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Phat Le - My profile and information</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,600,700,800" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Preloader -->
    <link rel="stylesheet" href="{{asset('css/preloader.css')}}" type="text/css" media="screen, print"/>
    <!-- Icon Font-->
    <link rel="stylesheet" href="{{asset('css/icon.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.css')}}">
    <!-- Animate CSS-->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Style -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('plugins/malihu_scrollbar/jquery.mCustomScrollbar.css')}}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{asset('js/lte-ie7.js')}}"></script>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<header id="HOME">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="{{asset('images/phat_logo.png')}}" alt=""></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#HOME">Home</a></li>
                    <li><a href="#ABOUT">About</a></li>
                    <li><a href="#FUNFACT">Funfact</a></li>
                    <li><a href="#WORK">Work</a></li>
                    <li><a href="#CONTACT">Contact</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container banner">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="home_text wow fadeInUp animated">
                    <img class="profile-pic" src="{{asset('images/me_avt.jpg')}}" alt="">
                    <h2>I'm Le Tan Phat</h2>
                    <p>
                        hi ! just call me <span style="color: #fff">Phat</span>. i'm web developer<br>
                        with 3+ years experience in <span style="color: #fff">php</span>, worked with some popular <br><span style="color: #fff">php framework</span> and <span style="color: #fff">agile process</span>. Let's <span style="color: #fff">start scrolling </span>and find out more <span style="color: #fff">about me :)</span>
                    </p>
                    <img src="{{asset('images/shape.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>

    <p class="scrolldown">
        {{--<a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>--}}
        <a class="smoothscroll" href="#ABOUT"><img class="img-responsive" src="{{asset('images/scroll_white_mini.png')}}" alt=""></a>
    </p>

</header> <!-- Header End -->

<section class="about_us_area" id="ABOUT">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="about_title">
                    <h2>About Me</h2>
                    <img src="{{asset('images/shape.png')}}" alt="">

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft animated">
                <p class="about_us_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Sed quia non
                    numquam eius modi tempora.</p>
            </div>
            <div class="col-md-6 wow fadeInRight animated">
                <p class="about_us_p">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                    quia consequuntur magni dolores eos
                    qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                    amet, consectetur,
                    adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam
                    quaerat voluptatem.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <h4 style="margin-top:40px;margin-bottom: 40px; text-align: center">My knowledges</h4>
        <div class="row">
            <div class="col-xs-6 col-md-2 text-center">
                <div class="single_service wow fadeInUp" data-wow-delay="0.3s">
                    <img src="{{asset('images/html-logo.png')}}" class="img-responsive" >
                </div>
            </div>
            <div class="col-xs-6 col-md-2 text-center">
                <div class="single_service wow fadeInUp" data-wow-delay="0.3s">
                    <img src="{{asset('images/css3-logo.png')}}" class="img-responsive" >
                </div>
            </div>
            <div class="col-xs-6 col-md-2 text-center">
                <div class="single_service wow fadeInUp" data-wow-delay="0.3s">
                    <img src="{{asset('images/jquery-logo.jpg')}}" class="img-responsive" >
                </div>
            </div>
            <div class="col-xs-6 col-md-2 text-center">
                <div class="single_service wow fadeInUp" data-wow-delay="0.3s">
                    <img src="{{asset('images/php7-logo.png')}}" class="img-responsive" >
                </div>
            </div>
            <div class="col-xs-6 col-md-2 text-center">
                <div class="single_service wow fadeInUp" data-wow-delay="0.3s">
                    <img src="{{asset('images/ubuntu-logo.png')}}" class="img-responsive" >
                </div>
            </div>
            <div class="col-xs-6 col-md-2 text-center">
                <div class="single_service wow fadeInUp" data-wow-delay="0.3s">
                    <img src="{{asset('images/centos-logo.png')}}" class="img-responsive" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-md-2 text-center">
                <div class="single_service wow fadeInUp" data-wow-delay="0.7s">
                    <img src="{{asset('images/mysql-logo.png')}}" class="img-responsive" >
                </div>
            </div>
            <div class="col-xs-6 col-md-2 text-center">
                <div class="single_service wow fadeInUp" data-wow-delay="0.7s">
                    <img src="{{asset('images/postgresql-logo.png')}}" class="img-responsive" >
                </div>
            </div>
            <div class="col-xs-6 col-md-2 text-center">
                <div class="single_service wow fadeInUp" data-wow-delay="0.7s">
                    <img src="{{asset('images/laravel-logo.png')}}" class="img-responsive" >
                </div>
            </div>
            <div class="col-xs-6 col-md-2 text-center">
                <div class="single_service wow fadeInUp" data-wow-delay="0.7s">
                    <img src="{{asset('images/codeigniter-logo.jpg')}}" class="img-responsive" >
                </div>
            </div>
            <div class="col-xs-6 col-md-2 text-center">
                <div class="single_service wow fadeInUp" data-wow-delay="0.7s">
                    <img src="{{asset('images/drupal-logo.png')}}" class="img-responsive" >
                </div>
            </div>
            <div class="col-xs-6 col-md-2 text-center">
                <div class="single_service wow fadeInUp" data-wow-delay="0.7s">
                    <img src="{{asset('images/git-logo.png')}}" class="img-responsive" >
                </div>
            </div>
        </div>
    </div>

    <div class="testimonial wow fadeInUp animated">
        <div class="container">
            <div class="owl-carousel">
                <div class="single_testimonial text-center wow fadeInUp animated">
                    <h2 class="top-h2">Education</h2>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                        magni dolores<br/> eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
                <div class="single_testimonial">
                    <h2 class="top-h2">Experience</h2>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed
                        quia non numquam eius<br/> modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                        voluptatem.</p>
                </div>
                <div class="single_testimonial">
                    <h2 class="top-h2">Skills</h2>
                    <div class="col-md-7">
                        <div class="single_progress_bar">
                            <h2>DESIGN - 90%</h2>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 90%;">
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="single_progress_bar">
                            <h2>DEVELOPMENT - 60%</h2>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 60%;">
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="single_progress_bar">
                            <h2>MARKETING - 75%</h2>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 75%;">
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="single_progress_bar">
                            <h2>SEO - 95%</h2>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 95%;">
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5"></div>
                </div>
            </div>
            <section id="FUNFACT" style="height: 10px;"></section>
        </div>
    </div>
</section>
<div class="fun_facts">
    <section class="header parallax home-parallax page" id="fun_facts" style="background-position: 50% -150px;">
        <div class="section_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 wow fadeInLeft animated">
                        <div class="row">
                            <div class="col-md-4 col-xs-4">
                                <div class="single_count">
                                    <i class="icon-toolbox"></i>
                                    <h3>300</h3>
                                    <p>Project Done</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-4">
                                <div class="single_count">
                                    <i class="icon-clock"></i>
                                    <h3>1700+</h3>
                                    <p>Hours Worked</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-4">
                                <div class="single_count">
                                    <i class="icon-trophy"></i>
                                    <h3>37</h3>
                                    <p>Awards Won</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-md-offset-1 wow fadeInRight animated pc-display">
                        <div class="imac">
                            <img src="{{asset('images/my_imac.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 wow fadeInLeft animated">
                        <div class="row">
                            <div class="col-md-4 col-xs-4">
                                <div class="single_count">
                                    <i class="icon-toolbox"></i>
                                    <h3>300</h3>
                                    <p>Project Done</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-4">
                                <div class="single_count">
                                    <i class="icon-clock"></i>
                                    <h3>1700+</h3>
                                    <p>Hours Worked</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-4">
                                <div class="single_count">
                                    <i class="icon-trophy"></i>
                                    <h3>37</h3>
                                    <p>Awards Won</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 wow fadeInRight animated">
                        <div class="row">
                            <div class="col-md-4 col-xs-4">
                                <div class="single_count">
                                    <i class="icon-toolbox"></i>
                                    <h3>300</h3>
                                    <p>Project Done</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-4">
                                <div class="single_count">
                                    <i class="icon-clock"></i>
                                    <h3>1700+</h3>
                                    <p>Hours Worked</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-4">
                                <div class="single_count">
                                    <i class="icon-trophy"></i>
                                    <h3>37</h3>
                                    <p>Awards Won</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="work_area" id="WORK">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="work_title  wow fadeInUp animated">
                    <h1>Latest Works</h1>
                    <img src="{{asset('images/shape.png')}}" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna
                        <br> aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 no_padding">
                <div class="single_image">
                    <img src="{{asset('images/w1.jpg')}}" alt="">
                    <div class="image_overlay">
                        <a href="">View Full Project</a>
                        <h2>drawing</h2>
                        <h4>with pencil colors</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 no_padding">
                <div class="single_image">
                    <img src="{{asset('images/w2.jpg')}}" alt="">
                    <div class="image_overlay">
                        <a href="">View Full Project</a>
                        <h2>drawing</h2>
                        <h4>with pencil colors</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 no_padding">
                <div class="single_image">
                    <img src="{{asset('images/w3.jpg')}}" alt="">
                    <div class="image_overlay">
                        <a href="">View Full Project</a>
                        <h2>drawing</h2>
                        <h4>with pencil colors</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pad_top">
            <div class="col-md-4 no_padding">
                <div class="single_image">
                    <img src="{{asset('images/w4.jpg')}}" alt="">
                    <div class="image_overlay">
                        <a href="">View Full Project</a>
                        <h2>drawing</h2>
                        <h4>with pencil colors</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 no_padding">
                <div class="single_image">
                    <img src="{{asset('images/w5.jpg')}}" alt="">
                    <div class="image_overlay">
                        <a href="">View Full Project</a>
                        <h2>drawing</h2>
                        <h4>with pencil colors</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 no_padding">
                <div class="single_image last_padding">
                    <img src="{{asset('images/w6.jpg')}}" alt="">
                    <div class="image_overlay">
                        <a href="">View Full Project</a>
                        <h2>drawing</h2>
                        <h4>with pencil colors</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="call_to_action">
    <div class="container">
        <div class="row">
            <div class="col-md-8 wow fadeInLeft animated">
                <div class="left">
                    <h2>LOOKING FOR EXCLUSIVE DIGITAL SERVICES?</h2>
                    <p>Proin fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Integer non
                        dapibus diam, ac eleifend
                        lectus.</p>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-1 wow fadeInRight animated">
                <div class="baton">
                    <a href="#CONTACT">
                        <button type="button" class="btn btn-primary cs-btn">Let's Talk</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact" id="CONTACT">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="contact_title  wow fadeInUp animated">
                    <h1>get in touch</h1>
                    <img src="{{asset('images/shape.png')}}" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna<br/> aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3  wow fadeInLeft animated">
                <div class="single_contact_info">
                    <h2>Call Me</h2>
                    <p>0933 224 xxx</p>
                </div>
                <div class="single_contact_info">
                    <h2>Email Me</h2>
                    <p>letanphat0706@gmail.com</p>
                </div>
                <div class="single_contact_info">
                    <h2>Address</h2>
                    <p>xxx Binh Tien, Ward 7, District 6, Ho Chi Minh city, Vietnam</p>
                </div>
            </div>
            <div class="col-md-9  wow fadeInRight animated">
                <form class="contact-form" action="">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="name" placeholder="Name">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                        </div>
                        <div class="col-md-6">
                            <textarea class="form-control" id="message" rows="25" cols="10"
                                      placeholder="  Message Texts..."></textarea>
                            <button type="button" class="btn btn-default submit-btn form_submit">SEND MESSAGE</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="work-with   wow fadeInUp animated">
                    <h3>looking forward to hearing from you!</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="footer_logo   wow fadeInUp animated">
                        <img src="{{asset('images/phat_logo.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center   wow fadeInUp animated">
                    <div class="social">
                        <h2>Follow Me on Here</h2>
                        <ul class="icon_list">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="copyright_text   wow fadeInUp animated">
                        <p>&copy; phat le 2016. All Right Reserved By</p>
                        <p>Made with love for creative people.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- =========================
   SCRIPTS
============================== -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('js/owl.carousel.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('plugins/malihu_scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($("body").scrollTop() > 100) {
               $("nav").css('background','#333')
            } else{
                $("nav").css('background','transparent')
            }

            if ($(window).width() < 768) {
                $('#FUNFACT').removeAttr('id');
                $('.fun_facts').attr('id','FUNFACT');
            }
        });
        // $("body").mCustomScrollbar({
		// 			theme:"minimal"
		// });
    });

	
</script>
</body>

</html>