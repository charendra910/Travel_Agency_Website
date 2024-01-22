<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Everest Travel Agency Website</title>
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
                        <a href="{{url('/index')}}" class="logo">Everest Travel <em>Agency</em></a>
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
                                    <a class="dropdown-item" href="{{url('/testimonials')}}">Testimonials</a>
                                    <a class="dropdown-item active" href="{{url('/terms')}}">Terms</a>
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

    <section class="section section-bg" id="call-to-action" style="background-image: url(https://images.pexels.com/photos/87452/flowers-background-butterflies-beautiful-87452.jpeg?cs=srgb&dl=pexels-pixabay-87452.jpg&fm=jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Terms and <em>Condition</em></h2>
                        <p>The Terms & Conditions is the best way to protect our agency from liability, manage user behavior, and create reasonable expectations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Our Classes Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <br>
            <br>
            <section class='tabs-content'>
              <article>
                <h4>1. Customer service is important</h4>
                <p><b>It is very important for the customer to pay attention to the adipiscing process. Or the most deserving of those who were born, because of hatred.</b></p>
                <h4>2. It is important that the customer is successful.</h4>
                <p><b>It is very important for the customer to pay attention to the adipiscing process. To desire any exercise of that trouble? For the great are often the elders of life!</b></p>
                <h4>3.Booking your holiday.</h4>
                <p> <b>If you book within 30 days of your departure date payment must be made in full at the time of booking.</b></p>
                <h4>4.Cancellation and Changes by the Company</h4>
                <p><b>No compensation will be payable for minor changes. Minor changes include minimal changes to departure and arrival times, changes to the type of aircraft used and restaurant and accommodation changes to a comparable or superior standard.</b></p>
                <h4>5.Our Responsibilities</h4>
                <p><b> The Company regret that no refund will be made on unused tickets where travel, sporting event or other types of ticket, unless a refund can be obtained from the carrier or provider.</b></p>
            </article>
            </section>
        </div>
    </section>
<!-- ***** Our Classes End ***** -->


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
