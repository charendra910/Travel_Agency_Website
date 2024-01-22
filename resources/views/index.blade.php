<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <title>Everest Travel Agency Website </title>
    <link rel="stylesheet" type="text/css" href="{{url('frontends/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('frontends/assets/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{url('frontends/assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    .carousel-inner img {
        width: 100%;
        height: 100%;
       }
    #img1 {
        border-radius: 05%;
        }
    </style>
<script>
    $(document).ready(function(){
    $("h6").mouseenter(function(){
    $("h6").css("background-color", "green");
      });
    $("h6").mouseleave(function(){
    $("h6").css("background-color", "");
      });
    });

    $(document).ready(function(){
    $("#b2").click(function(){
    $("#call-to-action").css("color", "red")
      .slideUp(2000)
      .slideDown(2000);
    });
    });

    $(document).ready(function(){
      $("#b1").click(function(){
        $("#abc1").animate({
          width:"300px",
          height:"300px"
        },5000).animate({
          width:"1050px",
          height:"600px"
        },5000);
      });
    });
      </script>
    </head>
    <body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{url('/index')}}" class="logo">Everest Travel <em>Agency</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{url('/index')}}" class="active">Home</a></li>
                            <li><a href="{{url('/packages')}}">Packages</a></li>
                            <li><a href="{{url('/blog')}}">Blog</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{url('/about')}}">About Us</a>
                                    <a class="dropdown-item" href="{{url('/testimonials')}}">Testimonials</a>
                                    <a class="dropdown-item" href="{{url('/terms')}}">Terms</a>
                                </div>
                            </li>
                            <li><a href="{{url('/contactform')}}">Contact</a></li>
                            {{-- <li><a href="{{url('/login')}}">Login</a></li>
                            <li><a href="{{url('/login')}}">Logout</a></li> --}}

                            <li><a href="{{ url('/dashboard') }}">Logout</a></li>
                            <li><a href="{{ url('/records') }}">Admin</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
              <li data-target="#demo" data-slide-to="3"></li>
              <li data-target="#demo" data-slide-to="4"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img style="height:760px" src="{{url('frontends/assets/images/mount.jpg')}}" alt="Pokhra">
               </div>
              <div class="carousel-item">
                <img style="height:760px" src="{{url('frontends/assets/images/lumbini33.jpg')}}" alt="Lumbini">
              </div>
              <div class="carousel-item">
                <img style="height:760px" src="{{url('frontends/assets/images/photo.avif')}}" alt="Kathmandu City">
              </div>
              <div class="carousel-item">
                <img style="height:760px" src="{{url('frontends/assets/images/taj11.jpg')}}" alt="Lumbini">
              </div>
              <div class="carousel-item">
                <img style="height:760px" src="{{url('frontends/assets/images/mahal.jpg')}}" alt="Kathmandu City">
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>Welcome to travel agency</h6>
                <h2><em>Explore</em> the world with Everest!</h2>
                <div class="main-button">
                    <a href="{{url('/contactform')}}">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

   <!-- ***** Cars Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Featured <em>Packages</em></h2>
                            <br>
                        <p>We are providing good accommodation with different bus facility for short travelling
                         and also fligt services. We provide independent tour, exclusive tour, escorted tour and business tour.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{url('frontends/assets/images/lumbini.jpg')}}" alt="">
                        </div>
                        <div class="down-content">

                            <h4>Birthpalace of Lord Gautam Buddhha, Lumbinin, Nepal.</h4>

                            <ul class="social-icons">
                                <li><a href="{{url('/package-details')}}">+ View Package</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{url('frontends/assets/images/pokhra.jpg')}}" alt="">
                        </div>
                        <div class="down-content">

                            <h4>Beautiful Mountains and Lakes Pokhra,Nepal.</h4>


                            <ul class="social-icons">
                                <li><a href="{{url('/package-details')}}">+ View Package</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{url('frontends/assets/images/boudhanath.jpg')}}" alt="">
                        </div>
                        <div class="down-content">

                            <h4>Kathmandu the Capital City of Beautiful Nepal</h4>

                            <ul class="social-icons">
                                <li><a href="{{url('/package-details')}}">+ View Package</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>



            <br>

            <div class="main-button text-center">
                <a href="{{url('/packages')}}">View Packages</a>
            </div>
        </div>
    </section>
    <!-- ***** Cars Ends ***** -->

    <section class="section section-bg" id="schedule" style="background-image: url({{url('frontends/assets/images/about-fullscreen-1-1920x700.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Read <em>About Us</em></h2>
                        <br>
                        <p>Our travel agency has been established to make more comfortable and relaxable for those who want to visit different places. In case this agency, will help you to guide properly </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content text-center">
                        <p>It is very important for the customer to pay attention to the adipiscing process. Work hard for pleasure! They providentially follow that we lead them to be easy, he is asperated here, at other times, he wants the pleasure of these things, for pleasure! They are indeed. Feel freely to contact us incase of any query.</p>
                        <p>Since the world is growing with different technological sector that has made the life of people eassier and faster as compared to the old generations. There are many agencies that are working under our agency. This agency include different services for making your travelling experiance good in affordable price.
                          This agency has been established for making the life easy for the travellers providing different accomodation. People face different problems while travelling so this agency help them in the time of need. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Blog Start ***** -->
    <section class="section" id="our-classes" >
        <div class="container" >
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Read our <em>Blog</em></h2>
                        <br>
                        <p>Different peoples have visited with us and they have been went through good experiance and no difficulty while travelling some of the documents from these local peoples are here. </p>
                    </div>
                </div>
            </div>

        <div class="col-lg-12">
            <section class='tabs-content'>
                <article id='tabs-1'>
                    <img id="abc1" style="width:1050px;height:600px" src="{{url('frontends/assets/images/222.jpg')}}" alt="">                         <h4>Taj Mahal, Agra, Uttar Pradesh, India.</h4>
                        <p>One of the seven wonders of the world, Taj Mahal is located on the banks of River Yamuna in Agra. It was built by the Mughal Emperor Shah Jahan as a memorial for his third wife, Mumtaz Mahal. It also houses the tomb of Shah Jahan himself. Constructed entirely out of white marble in the 17th century, Taj Mahal is one of the most beautiful monuments in the world.</p>
                            <div class="main-button" align="center">

                                <button id="b1">Start Animation</button><br><br>

                                <a href="{{url('/blog-details')}}">Continue Reading</a>
                            </div>
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url({{url('frontends/assets/images/banner-image-1-1920x500.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Send us a <em>message</em></h2>
                        <p>If want to know more about or incase of any query feel freely to contact us.</p>
                        <div class="main-button">
                            <button id="b2">Start Animation</button><br><br>
                            <a href="{{url('/contactform')}}">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Testimonials Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Read our <em>Testimonials</em></h2>
                        <br>
                        <p>Different people have given their best ideas and experiances they faced while travelling among them some of them are!</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img id="img1" src="{{url('frontends/assets/images/pradip11.jpg')}}" alt="Avatar" style="width:110px">
                            </div>
                            <div class="right-content">
                                <h4>Pradip Tharu</h4>
                                <p><em>"I thank you for all your effort and travel information. I really wasn't expecting that you do this. So thank you very much for everything!"</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img id="img1" src="{{url('frontends/assets/images/ankur.jpg')}}" alt="Avatar" style="width:110px">
                            </div>
                            <div class="right-content">
                                <h4>Ankur Dutta</h4>
                                <p><em>"We are so pleased with you as well as the company you used for their trip. Thank you for setting up such an amazing trip for them and taking care!"</em></p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img id="img1" src="{{url('frontends/assets/images/narendra.jpg')}}" alt="Avatar" style="width:110px">
                            </div>
                            <div class="right-content">
                                <h4>Narendra Tharu</h4>
                                <p><em>"I think the trip, overall, was a huge success. Everything went as planned. The guide was very polite, helpful to everyone and he managed all our travelling very good!"</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img id="img1" src="{{url('frontends/assets/images/roxan.jpg')}}" alt="Avatar" style="width:110px">
                            </div>
                            <div class="right-content">
                                <h4>Roshan Tharu</h4>
                                <p><em>"I was traveling alone but never felt alone. Your agency did a great job and I felt secure myself while travelling. Sure, I definitely work visit again in the near future!"</em></p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

            <br>

            <div class="main-button text-center">
                <a href="{{url('/testimonials')}}">Read More</a>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Item End ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container" style="height:30px;background-image: url(https://images.unsplash.com/photo-1613375920388-f1f70f341f8a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Ymx1ZSUyMHBhcGVyfGVufDB8fDB8fA%3D%3D&w=1000&q=80)">
                <div class="col-lg-12">
                    <p>
                     <h5> <a style="color:red;" href="#">Designed by </a>: Harendra Chaudhary and Angad Gupta</h5>
                    </p>
                </div>
        </div>
    </footer>



      <!-- jQuery -->
      <script src="{{url('frontends/assets/js/jquery-2.1.0.min.js')}}"></script>

      <!-- Bootstrap -->
      <script src="{{url('frontends/assets/js/popper.js')}}"></script>
      <script src="{{url('frontends/assets/js/bootstrap.min.js')}}"></script>

      <!-- Plugins -->
      <script src="{{url('frontends/assets/js/scrollreveal.min.js')}}"></script>
      <script src="{{url('frontends/assets/js/waypoints.min.js')}}"></script>
      <script src="{{url('frontends/assets/js/jquery.counterup.min.js')}}"></script>
      <script src="{{url('frontends/assets/js/imgfix.min.js')}}"></script>
      <script src="{{url('frontends/assets/js/mixitup.js')}}"></script>
      <script src="{{url('frontends/assets/js/accordions.js')}}"></script>

      <!-- Global Init -->
      <script src="{{url('frontends/assets/js/custom.js')}}"></script>

  </body>
</html>
