<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Mirrored from www.xpertpoin8.com/demo/restimo/restaurant/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jun 2020 08:08:55 GMT -->
<head>
    <meta charset="utf-8">

    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->

    <title>{{config('app.name')}}</title>

    <meta name="description" content="{{config('app.name')}} | A Premium Restaurant, Cakes and Coffee Shop">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Restimo, restaurant, cakes, cake, coffee, bakery, theme, template, html5, csp3, jquery, responsive, retina, Coffee Shop"/>

    <meta property="og:title" content="{{config('app.name')}}" />
    <meta property="og:description" content="{{config('app.name')}}" />

    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/ws/bootstrap.min.css">
    <link rel="stylesheet" href="css/ws/flexslider.css">
    <link rel="stylesheet" href="css/ws/jquery.jscrollpane.custom.css">
    <link rel="stylesheet" href="css/ws/jquery.bxslider.css">
    <link rel="stylesheet" href="css/ws/lightbox.css">
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css">
    <link rel="stylesheet" href="icons/flaticon.css">
    <link rel="stylesheet" href="css/ws/styles.css">

</head>
<body data-spy="scroll" data-offset="100" id="sTop">

<div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>

<!-- fixed top navigation & logo -->
<header>
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">
            <div class="logo"><a href="#"><img src="img/logo.png" alt="logo" /></a></div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-nav">
                    <i class="fa fa-align-justify"></i>
                </button>
            </div>
            <nav class="collapse navbar-collapse" id="menu-nav">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#sTop">Home</a></li>
                    <li><a href="#p1">Menu</a></li>
                    <!--<li><a href="#p4">Dishes</a></li>-->
                    <li><a href="#p3">About</a></li>
                    <li><a href="#p5">Testimonials</a></li>
                    <li><a href="#p6">Contact</a></li>
                </ul>
            </nav> <!-- End nav-collapse -->
        </div> <!-- End container -->
    </div> <!-- End navbar -->
</header>

<!-- Slider -->
<section class="flexslider">
    <ul class="slides">
        @foreach($formi as $key=>$value)
            <li class="slide{{$key}}" style="background: url('img/sliders/{{$value->image}}') no-repeat center center!important;;background-size:cover!important;">
            <div class="container">
                <div class="middle-slide">
                    <div class="inner-md">
                        <h1>{{$value->title}}</h1>
                        <h2>{{$value->descriere}}</h2>
                    </div>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</section> 
<!-- End Slider -->

<!-- Menu -->
<section class="restaurant-mn bg-menu" id="p1">
    <div class="container">
        <article class="row nomgbtm section p1" >
            <div class="col-md-12">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h2>
                        <span class="side-img left-side-img"><i></i><i></i><i></i></span>
                        Food Menu
                        <span class="side-img right-side-img"><i></i><i></i><i></i></span>
                    </h2>
                    <p class="paragraph-heading">Explore the food</p>
                </div>
            </div>
        </article>
        <article class="accordion">

            <h3><span class="menuhead">Our Ice Cream</span></h3>
            <div class="section">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <img class="thumb" src="img/menu/3.jpg" alt="" />
                        <div class="item simpleCart_shelfItem" id="item-05">
                            <div class="info">
                                <span class="name item_name">Forest fruits icecream</span>
                            </div>
                            <div class="description">All the Lorem Ipsum generators on the Internet tend to repeat</div>
                            <div class="legend"><span>$ 8.50</span></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <img class="thumb" src="img/menu/4.jpg" alt="" />
                        <div class="item simpleCart_shelfItem" id="item-06">
                            <div class="info">
                                <span class="name item_name">Vanilla strawberry</span>
                            </div>
                            <div class="description">All the Lorem Ipsum generators on the Internet tend to repeat</div>
                            <div class="legend"><span>$ 8.50</span></div>
                        </div>
                    </div>
                </div><!-- end .row -->
            </div><!-- end .section-->

            <h3><span class="menuhead">Fruit  Salads</span></h3>
            <div class="section">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <img class="thumb" src="img/menu/1.jpg" alt="" />
                        <div class="item simpleCart_shelfItem" id="item-01">
                            <div class="info">
                                <span class="name item_name">Strawberry mint mousse</span>
                            </div>
                            <div class="description">All the Lorem Ipsum generators on the Internet tend to repeat</div>
                            <div class="legend"><span>$ 8.50</span></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <img class="thumb" src="img/menu/2.jpg" alt="" />
                        <div class="item simpleCart_shelfItem" id="item-02">
                            <div class="info">
                                <span class="name item_name">wild berries basket salad</span>
                            </div>
                            <div class="description">All the Lorem Ipsum generators on the Internet tend to repeat</div>
                            <div class="legend"><span>$ 4.50</span></div>
                        </div>
                    </div>
                </div><!-- end .row -->
            </div><!-- end .section -->

            <h3><span class="menuhead">Our Cakes</span></h3>
            <div class="section">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <img class="thumb" src="img/menu/5.jpg" alt="" />
                        <div class="item simpleCart_shelfItem" id="item-07">

                            <div class="info">
                                <span class="name item_name">Italian panacotta </span>
                            </div>

                            <div class="description">All the Lorem Ipsum generators on the Internet tend to repeat</div>
                            <div class="legend"><span>$ 8.50</span></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <img class="thumb" src="img/menu/6.jpg" alt="" />
                        <div class="item simpleCart_shelfItem" id="item-08">
                            <div class="info">
                                <span class="name item_name">Hazelnut cake</span>
                            </div>
                            <div class="description">All the Lorem Ipsum generators on the Internet tend to repeat</div>
                            <div class="legend"><span>$ 8.50</span></div>
                        </div>
                    </div>
                </div><!-- end .row -->
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <img class="thumb" src="img/menu/7.jpg" alt="" />
                        <div class="item simpleCart_shelfItem" id="item-09">
                            <div class="info">
                                <span class="name item_name">Whipped cream & chocolate cake </span>
                            </div>
                            <div class="description">All the Lorem Ipsum generators on the Internet tend to repeat</div>
                            <div class="legend"><span>$ 8.50</span></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <img class="thumb" src="img/menu/8.jpg" alt="" />
                        <div class="item simpleCart_shelfItem" id="item-10">
                            <div class="info">
                                <span class="name item_name">Breaded cake with cherries</span>
                            </div>
                            <div class="description">All the Lorem Ipsum generators on the Internet tend to repeat</div>
                            <div class="legend"><span>$ 8.50</span></div>
                        </div>
                    </div>
                </div><!-- end .row -->
            </div><!-- end .section -->



        </article><!-- end .accordion -->
    </div>
</section>
<!-- End Menu -->

<!-- Main Content -->
<!-- About -->
<section class="restaurant-mn bg-grey about-us" id="p3">
    <div class="container">
        <article class="row puretext section p3" >
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h2>
                    <span class="side-img left-side-img"><i></i><i></i><i></i></span>
                    About Us
                    <span class="side-img right-side-img"><i></i><i></i><i></i></span>
                </h2>
                <p class="paragraph-heading">we create history</p>
            </div>
            <div class="col-md-5 col-sm-6 col-xs-12"><img src="img/about.png" class="img-responsive" alt=""></div>
            <div class="col-md-7 col-sm-5 col-xs-12">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam id ullamcorper mauris. In pulvinar turpis a justo facilisis ultrices. Suspendisse et arcu odio. In ut ex vel nisi facilisis eleifend ut nec nunc. Aliquam erat volutpat. Aenean faucibus sem vel vehicula suscipit. Morbi et sapien a magna vulputate eleifend. Quisque at augue justo. Mauris scelerisque id velit ut congue. Donec ut semper ipsum. Suspendisse potenti. Sed ipsum urna, varius eu nulla ut, suscipit vestibulum nulla. In sit amet fermentum</p>
                <p>Nam id ullamcorper mauris. In pulvinar turpis a justo facilisis ultrices. Suspendisse et arcu odio. In ut ex vel nisi facilisis eleifend ut nec nunc. Aliquam erat volutpat. Aenean faucibus sem vel vehicula suscipit. Morbi et sapien a magna vulputate eleifend. Quisque at augue justo. Mauris scelerisque id velit ut congue. Donec ut semper ipsum. Suspendisse potenti.</p>
                <p>Nam id ullamcorper mauris. In pulvinar turpis a justo facilisis ultrices. Suspendisse et arcu odio. In ut ex vel nisi facilisis eleifend ut nec nunc. Aliquam erat volutpat. Aenean faucibus sem vel vehicula suscipit. Morbi et sapien a magna vulputate eleifend. Quisque at augue justo. Mauris scelerisque id velit ut congue. Donec ut semper ipsum. Suspendisse potenti.</p>
            </div>
        </article><!-- end .row -->
    </div>
</section>
<!-- End About -->


<!-- Testimonials -->
<div class="section p5" id="p5">
    <!-- Testimonials -->
    <div class="fullspan">
        <article id="parallax">
            <div class="bg" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" data-anchor-target="#parallax">
                <div class="container">
                    <div class="row testimonials">
                        <div class="col-md-12">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h3>
                                    <span class="side-img left-side-img"><i></i><i></i><i></i></span>
                                    Testimonialele noastre
                                    <span class="side-img right-side-img"><i></i><i></i><i></i></span>
                                </h3>
                                <p class="paragraph-heading">Ce spun utilizatorii nostri despre noi</p>
                            </div>
                          <!-- First -->
                          @foreach($termi as $testimonial)
                            <div class="col-md-6 col-sm-6 col-xs-12 margin">
                                 
                                <img class="thumb" src="img/sliders_2/{{$testimonial->Poza_de_profil}}" alt="" style="height: 103px;">
                                <div class="item simpleCart_shelfItem">
                                    <div class="info">
                                        <span class="name item_name">{{$testimonial->nume}}</span>
                                        <div class="legend"><span>{{$testimonial->categorie}}</span></div>
                                    </div>
                                    <div class="description">{{$testimonial->descriere}}</div>
                                </div>
                            </div>
                            <!-- End First -->
                          @endforeach
                        </div>
                    </div>
                </div><!-- end .container -->
            </div>
        </article>
    </div>
</div>
<!-- Testimonials -->


<!-- Footer Inner -->
<footer>
    <div class="fullspan dark" id="p6">
        <div class="container">

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h2>
                        <span class="side-img left-side-img"><i></i><i></i><i></i></span>
                        Contact Us
                        <span class="side-img right-side-img"><i></i><i></i><i></i></span>
                    </h2>
                    <p class="paragraph-heading">You can send us message</p>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <h4>Detalii Contact</h4>
                     <p>Sunatine acum pentru a efectua comanda dumneavoastra , iar daca intampinati orice problema nu ezitati sa ne lasa-ti un mesaj</p>
                    <ul class="contact-info">
                        <li><i class="fa fa-home"></i>445 Street, your address in Wherever you are</li>
                        <li><i class="fa fa-phone"></i>Telefon: +04 07 99 888 333</li>
                        <li><i class="fa fa-print"></i>Fax: +386 10 555 66677</li>
                        <li><i class="fa fa-envelope"></i>Email: <a href="mailto:info@xpertpoin8.com">cibus@gmail.com</a></li>
                    </ul>
                </div>
            <div class="col-md-6 col-sm-6 col-xs-12 contact">
                    <form action="{{route('contact.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                        <input type="text" name="name" id="name" class="input" value="Name" onclick="javascript:if($(this).val() == 'Enter your Name') {$(this).val('');} return false;" onfocus="javascript:if($(this).val() == 'email') {$(this).val('');} return false;" onblur="javascript:if($(this).val() == '') {$(this).val('name');} return false;" />
                        <input type="text" name="email" id="email" class="input" value="email" onclick="javascript:if($(this).val() == 'Enter your email') {$(this).val('');} return false;" onfocus="javascript:if($(this).val() == 'email') {$(this).val('');} return false;" onblur="javascript:if($(this).val() == '') {$(this).val('email');} return false;" />
                        <textarea name="message" id="message" class="textarea" onclick="javascript:if($(this).val() == 'message') {$(this).val('');} return false;" onfocus="javascript:if($(this).val() == 'message') {$(this).val('');} return false;" onblur="javascript:if($(this).val() == '') {$(this).val('message');} return false;">message</textarea>
                        <input type="submit" class="submit sendmessage" value="SEND" />
                    </form>
            </div>
        </div><!-- end .container -->
    </div><!-- end .fullspan -->
    <!-- Footer Inner -->

    <!-- Footer Copyright -->
    <div class="fullspan copy">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <p class="para-in">copyright &copy; {{date("Y")}}} | All rights reserved. Development by <a href="https://vinovat.ro/" target="_blank">vinovat.ro</a></p>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="social-mid">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Copyright -->

</footer>



<script src="js/ws/jquery.min.js"></script>
<script src="js/ws/jquery-ui-1.10.4.custom.min.js"></script>
<script src="js/ws/bootstrap.min.js"></script>
<script src="js/ws/jquery.flexslider-min.js"></script>
<script src="js/ws/jquery.bxslider.min.js"></script>
<script src="js/ws/lightbox-2.6.min.js"></script>
<script src="js/ws/accordion.js"></script>
<script src="js/ws/skroll.js"></script>
<script src="js/ws/modernizr-2.6.2.min.js"></script>
<script src="js/ws/main.js"></script>

</body>

<!-- Mirrored from www.xpertpoin8.com/demo/restimo/restaurant/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jun 2020 08:15:02 GMT -->
</html>