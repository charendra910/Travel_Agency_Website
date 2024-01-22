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
                        <a href="{{url('/index')}}" class="logo">Everest Travel <em> Agency</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{url('/index')}}">Home</a></li>
                            <li><a href="{{url('/packages')}}" class="active">Packages</a></li>
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
                            <li><a href="{{ url('/dashboard') }}">Logout</a></li>

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

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url({{url('frontends/assets/images/banner-image-1-1920x500.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Our <em>Packages</em></h2>
                        <p>Let's have a look of all the details packages that we have included for you!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->

   <!-- ***** Cars Starts ***** -->
   <section class="section" id="trainers">
    <div class="container">
       <br>
       <br>
       <br>
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

        <div class="row">
            <div class="col-lg-4">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img src="{{url('frontends/assets/images/udaypur.jpg')}}" alt="">
                    </div>
                    <div class="down-content">

                        <h4>Colorful City of Udaypur, Rajasthan, India.</h4>

                        <ul class="social-icons">
                            <li><a href="{{url('/package-details')}}">+ View Package</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img src="{{url('frontends/assets/images/ddd.avif')}}" alt="">
                    </div>
                    <div class="down-content">

                        <h4>Hindu Temple Kedarnath, Uttrakhand, India.</h4>

                        <ul class="social-icons">
                            <li><a href="{{url('/package-details')}}">+ View Package</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img src="{{url('frontends/assets/images/taj.jpg')}}" alt="">
                    </div>
                    <div class="down-content">

                        <h4>Taj Mahal Agra, Uttar Pradesh, India</h4>

                        <ul class="social-icons">
                            <li><a href="{{url('/package-details')}}">+ View Package</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Cars Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container" style="background-image: url(https://images.unsplash.com/photo-1613375920388-f1f70f341f8a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Ymx1ZSUyMHBhcGVyfGVufDB8fDB8fA%3D%3D&w=1000&q=80)">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                     <h5> <a href="#">Designed by </a>: Harendra Chaudhary and Angad Gupta</h5>
                    </p>
                </div>
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
