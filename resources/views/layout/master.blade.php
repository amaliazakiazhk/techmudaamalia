<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Front page</title>

    <link href="{{ asset('/master')}}/https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('/master')}}/https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/master')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/master')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/master')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/master')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('/master')}}/style.css">
    <link rel="stylesheet" href="{{ asset('/master')}}/responsive.css">
</head>

<body>

    <!-- WRAPPER -->
    <div class="wrapper">
        <!-- NAVBAR-->
     @include('layout.includes._navbar')   
        <!--END NAVBAR--> 
        <!--KONTEN1-->
    @include('layout.includes._konten') 
        <!--ENDKONTEN1-->
    @yield('content')
    
                        
       <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="footer-charity-text">
                            <h2>HELP CHARITY</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
                            <hr>
                            <p><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-4 col-sm-5">
                                <div class="footer-text one">
                                    <h3>RECENT POST</h3>
                                    <ul>
                                        <li><a href="#"><i class="material-icons">keyboard_arrow_right</i> Consectetur Adipisicing Elit</a></li>
                                        <li><a href="#"><i class="material-icons">keyboard_arrow_right</i> Consectetur Adipisicing </a></li>
                                        <li><a href="#"><i class="material-icons">keyboard_arrow_right</i> Consectetur Adipisicing Elit</a></li>
                                        <li><a href="#"><i class="material-icons">keyboard_arrow_right</i> Consectetur Adipisicing</a></li>
                                        <li><a href="#"><i class="material-icons">keyboard_arrow_right</i> Consectetur Adipisicing Elit</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-3">
                                <div class="footer-text two">
                                    <h3>USEFUL LINKS</h3>
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Causes</a></li>
                                        <li><a href="#">Event</a></li>
                                        <li><a href="#">Blog</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="footer-text one">
                                    <h3>CONTACT US</h3>
                                    <ul>
                                        <li><a href="#"><i class="material-icons">location_on</i>1 Street, derby, FL 2147, USA</a></li>
                                        <li><a href="#"><i class="material-icons">email</i>dartthemes@gmail.com</a></li>
                                        <li><a href="#"><i class="material-icons">call</i>+123456789</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </footer>
    </div>
    <script src="{{ asset('/master')}}/js/jquery-3.1.1.min.js"></script>
    <script src="{{ asset('/master')}}/js/animationCounter.js"></script>
    <script src="{{ asset('/master')}}/js/bootstrap.min.js"></script>
    <script src="{{ asset('/master')}}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('/master')}}/js/active.js"></script>

    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>


    <section class="footer_carosal">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer_carosal_icon owl-carousel owl-theme">
                            <div class="item">
                                <img src="{{ asset('/master')}}/img/microsoft.png" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('/master')}}/img/envato.png" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('/master')}}/img/yahoo.png" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('/master')}}/img/jquery.png" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('/master')}}/img/amazon.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    </section>
                     <div class="footer_bottom">
                <p>Copyright @ 2017 <a href="#">DartThemes</a> | All Rights Reserved </p>
            </div>
</body>

</html>