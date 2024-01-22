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
                        <a href="{{url('/index')}}" class="logo">Travel Agency<em> Website</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{url('/index')}}">Home</a></li>
                            <li><a href="{{url('/packages')}}">Packages</a></li>
                            <li><a href="{{url('/blog')}}" class="active">Blog</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>

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
                        <h2>Single <em>blog post</em></h2>
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
            <section class='tabs-content'>
              <article>
                <h4>Agra, Uttarpradesh, India</h4>


                <div><img src="{{url('frontends/assets/images/taj12.jpg')}}" alt=""></div>

                <br>

                <p>Agra is a city on the banks of the Yamuna river in the Indian state of Uttar Pradesh, about 230 kilometres south-east of the national capital New Delhi and 330 km west of the state capital Lucknow. </p>

                <p>Agra is one of the most popular tourist destinations in India. It is renowned for being home to one the Seven Wonders of the world, the Taj Mahal.
                   It is as loved by Indians as it is by foreigners who throng here in large numbers to admire its beauty. Along with Delhi and Jaipur, Agra forms the Golden Triangle of tourism in India. Situated in Uttar Pradesh, Agra is synonymous with the Taj Mahal however there's lot more to the city than this world-famous monument. </p>

                <p>Under the Mughal reign Agra was called Akbarabad and was ruled by greats like Akbar, Jehangir, Shah Jahan, etc. Their love for architecture, gardens and art and culture added a new dimension to Agra's personality.
                   From Persian gardens on the banks of the Yamuna to monuments and mausoleums, Agra's golden age started during their rule. It was after the decline of the Mughal Empire and during the reign of the Marathas that Akbarabad became Agra. By 1803, it came under the British Raj that remained strong for most part until India gained independence in 1947. </p>

                </article>
            </section>

            <br>
            <br>
            <br>

            <section class='tabs-content'>
                <div class="row">
                    <div class="col-md-8">
                        <h4><i class="fa fa-comments"></i> Comments</h4>
                        <ul class="features-items">
                            <li>
                                <div class="feature-item" style="margin-bottom:15px;">
                                    <div class="right-content">
                                        <h4>Molayam Yadav <small>27.06.2022</small></h4>
                                        <p><em>"Taaj Mahal is a dream place for many others one. I had visited there , It was cool. I can say it is the best things in India. I really ask to everyone please do visit once in taaj mahal!"</em></p>

                                    </div>
                                </div>

                                    <div class="feature-item" style="margin-bottom:15px;">
                                       <div class="right-content">
                                            <h4>Roni Chandra Sharkar<small> 12.10.2022</small></h4>
                                            <p><em>"The place needs no introduction or review as such. I am writing it just to express my feelings when I first saw this. Taj Mahal is huge. It is magnificent. No photographs or videos that I have seen till date do justice to it. This has to be seen to believe what it is!"</em></p>
                                        </div>
                                    </div>

                            </li>
                            <li class="feature-item" style="margin-bottom:15px;">
                               <div class="right-content">
                                    <h4>Afroj Ansari<small> 20.01.2023</small></h4>
                                    <p><em>"The Taj Mahal is a truly breathtaking sight. The white marble structure is a masterpiece of Mughal architecture and is widely considered one of the most beautiful buildings in the world. The intricate carvings and inlaid precious stones are a testament to the incredible skill of the artisans who built it.!"</em></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- ***** Blog End ***** -->
<div class="container-fluid" align="center">

    <ul class="social-icons">
        <li>Share this:</li>
        <li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="https://www.google.com"><i class="fa fa-google"></i></a></li>
        <li><a href="https://www.whatsapp.com"><i class="fa fa-whatsapp"></i></a></li>
        <li><a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>

    </ul>
</div>
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
