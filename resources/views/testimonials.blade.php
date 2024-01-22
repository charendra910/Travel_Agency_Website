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
    <style>
         img {
            border-radius: 05%;
        }
    </style>

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
                            <li><a href="{{url('/packages')}}">Packages</a></li>
                            <li><a href="{{url('/blog')}}">Blog</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item"  href="{{url('/about')}}">About Us</a>
                                    <a class="dropdown-item active" href="{{url('/testimonials')}}">Testimonials</a>
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

    <section class="section section-bg" id="call-to-action" style="background-image: url({{url('frontends/assets/images/banner-image-1-1920x500.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Read our <em>Testimonials</em></h2>
                        <p>This sections include the ideas and experiances of some traveller's baseed on their trip.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- ***** Testimonials Item Start ***** -->
     <section class="section" id="features">
        <div class="container">
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{url('frontends/assets/images/pradip11.jpg')}}" alt="Avatar" style="width:110px">
                            </div>
                            <div class="right-content">
                                <h4>Pradip Tharu</h4>
                                <p><em>"I thank you for all your effort and travel information. I really wasn't expecting that you do this. So thank you very much for everything!"</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{url('frontends/assets/images/hari22.jpg')}}" alt="Avatar" style="width:110px">
                            </div>
                            <div class="right-content">
                                <h4>Harisankar Yadav</h4>
                                <p><em>"The resort, amenities and service were amazing, and the food was over the top phenomenal! The places were so Beautiful and every facility we faced were too good!"</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{url('frontends/assets/images/jaynath12.jpg')}}" alt="Avatar" style="width:110px">
                            </div>
                            <div class="right-content">
                                <h4>Jaynath Gupta</h4>
                                <p><em>"Thank you so much for being proactive. Maybe it seems like no big deal to you but this is amazing customer service and is greatly appreciated!"</em></p>
                            </div>
                        </li>

                    </ul>
                </div>

                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{url('frontends/assets/images/narendra.jpg')}}" alt="Avatar" style="width:110px">
                            </div>
                            <div class="right-content">
                                <h4>Narendra Tharu</h4>
                                <p><em>"I think the trip, overall, was a huge success. Everything went as planned. The guide was very polite, helpful to everyone and he managed all our travelling very good!"</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{url('frontends/assets/images/roxan.jpg')}}" alt="Avatar" style="width:110px">
                            </div>
                            <div class="right-content">
                                <h4>Roshan Tharu</h4>
                                <p><em>"I was traveling alone but never felt alone. Your agency did a great job and I felt secure myself while travelling. Sure, I definitely work visit again in the near future!"</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{url('frontends/assets/images/ankur.jpg')}}" alt="Avatar" style="width:110px">
                            </div>
                            <div class="right-content">
                                <h4>Ankur Dutta</h4>
                                <p><em>"We are so pleased with you as well as the company you used for their trip. Thank you for setting up such an amazing trip for them and taking care!"</em></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Item End ***** -->

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
