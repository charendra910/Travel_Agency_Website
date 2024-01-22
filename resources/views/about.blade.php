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
    <body style="background-image: url(https://cdn.crispedge.com/f7e5a9.png)">
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
                                    <a class="dropdown-item active"  href="{{url('/about')}}">About Us</a>
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

    <section class="section section-bg" id="call-to-action" style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/thumb/c/c8/Altja_j%C3%B5gi_Lahemaal.jpg/1200px-Altja_j%C3%B5gi_Lahemaal.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Learn more <em>About Us</em></h2>
                        <p>A travel agency is a private retailer or public service that provides travel and tourism-related services to the general public on behalf of accommodation</p>
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
            <br>
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><i class="fa fa-soccer-ball-o"></i> Our Goals</a></li><br><br><br>
                  <li><a href='#tabs-2'><i class="fa fa-briefcase"></i> Our Work</a></a></li>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src="assets/images/about-image-1-940x460.jpg" alt="">
                    <h4>Our Goals</h4>
                  <p><b> ensure satisfaction and safety for our customers. To develop consistent and long-term relationships with our clients and suppliers.</b></p>
                    <p><b>Provide a high standard of services suitable for individuals seeking relaxing, comfortable and memorable experiences in the hospitality and tourism industry.</b ></p>
                  </article>
                  <article id='tabs-2'>
                    <img style="width:1000px;height:350px" src="https://media.istockphoto.com/id/905431708/photo/businesscouple-at-the-travel-agency-office.jpg?b=1&s=170667a&w=0&k=20&c=nMHesWKc0I_oYko0B88-lN7Ax5XzGe89EmkQzAGObcE=" alt="">
                    <h4>Our Work</h4>
                    <p><b>We are responsible for advising clients about suitable travel options in accordance with their needs, wants and capabilities.</b></p>
                    <p><b>In addition, we help them plan trips to domestic or international destinations, tours, accommodation, transport, insurance and fares.</b></p>
                </article>
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Classes End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Send us a <em>message</em></h2>
                        <p>Any visitor can fill out the form and submit it to send a message to the site owner.</p>
                        <div class="main-button">
                            <a href="contact.html">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

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
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/mixitup.js"></script>
    <script src="assets/js/accordions.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>
