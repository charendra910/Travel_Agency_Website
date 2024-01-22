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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
          $("#b5").click(function(){
            $("#our-classes").toggle();

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
                        <a href="{{url('/index')}}" class="logo">Everest Travel <em> Agency</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{url('/index')}}">Home</a></li>
                            <li><a href="{{url('/packages')}}">Packages</a></li>
                            <li><a href="{{url('/blog')}}" class="active">Blog</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item"  href="{{url('/about')}}">About Us</a>
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

    <section class="section section-bg" id="call-to-action" style="background-image: url({{url('frontends/assets/images/banner-image-1-1920x500.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Read our <em>Blog</em></h2>
                        <p>Different peoples have visited with us and they have been went through good experiance and no difficulty while travelling some of the documents from these local peoples are here!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Blog Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <br>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <section class='tabs-content'>
                        <article id='tabs-1'>
                            <img style="width:1050px;height:600px" src="{{url('frontends/assets/images/222.jpg')}}" alt="">                         <h4>Taj Mahal, Agra, Uttar Pradesh, India.</h4>
                                <p>One of the seven wonders of the world, Taj Mahal is located on the banks of River Yamuna in Agra. It was built by the Mughal Emperor Shah Jahan as a memorial for his third wife, Mumtaz Mahal. It also houses the tomb of Shah Jahan himself. Constructed entirely out of white marble in the 17th century, Taj Mahal is one of the most beautiful monuments in the world.</p>
                                    <div class="main-button" align="center">

                                        <a href="{{url('/blog-details')}}">Continue Reading</a>
                                    </div>
                                </article>
                            </section>
                        </div>
                        </div>
                        </div>
                        </section>
                        <p align="center">
                        <button id="b5" >Toggle</button></p>
    <!-- ***** Blog End ***** -->

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
