<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Everest Travel Agency Website</title>
<link rel="stylesheet" type="text/css" href="{{url('frontends/assets/css/bootstrap.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('frontends/assets/css/font-awesome.css')}}">

<link rel="stylesheet" href="{{url('frontends/assets/css/style.css')}}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/c26cd2166c.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<style>
    .error{
        color:red;
    }
</style>
</head>
<body>
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
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{url('/about')}}">About Us</a>
                                        <a class="dropdown-item" href="{{url('/testimonials')}}">Testimonials</a>
                                        <a class="dropdown-item" href="{{url('/terms')}}">Terms</a>
                                    </div>
                                </li>
                                <li><a href="{{url('/contactform')}}" class="active">Contact</a></li>
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
        <section class="section section-bg" id="call-to-action" style="background-image: url(https://wallpaperaccess.com/full/1454737.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="cta-content">
                            <br>
                            <br>
                            <h2><em>Contact Us</em></h2>
                            <p>Any visitor can fill out the form and submit it to send a message to the site owner.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ***** Features Item End ***** -->

    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>contact <em> information</em></h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <h5><a href="#">+91 9956303809 </a></h5>
                    <br>
                </div>
                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <h5><a href="#">contact@everest.com</a></h5>
                    <br>
                </div>
                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <h5><a href="#"></a>Butwal,Rupandehi,Nepal</a></h5>
                    <br>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->

        <br><br><br><br>

   <!-- ***** Contact Us Area Starts ***** -->
<section class="section" id="contact-us" style="margin-top:0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div id="map">
                   <iframe style="width:650px"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113060.34562301457!2d83.36249506870178!3d27.682197357587945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3996864275d9755f%3A0x2b1e92d89d4bb3ae!2sButwal%2C%20Nepal!5e0!3m2!1sen!2sin!4v1675797541626!5m2!1sen!2sin" width="600" height="720" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
    <div class="contact-form section-bg" style="background-image: url({{url('frontends/assets/images/contact-1-720x480.jpg')}})">
        <form id="contact" class="form" name="contact" action="{{url('edit-form/'.$data->id)}}" method="post" >
            @csrf

            <div class="row">
                <div class="col-md-6 col-sm-12">
                  <fieldset>
                    <input name="name" type="text" id="name" placeholder="Your Name*" value="{{ $data->name }}" >
                  </fieldset>
                  <span class="text-danger">
                    @error('name')
                      {{$message}}
                    @enderror
                  </span>
                </div>

            <div class="col-md-6 col-sm-12">
                  <fieldset>
                    <input name="email" type="text" id="email"  placeholder="Your Email*" value="{{ $data->email }}">
                  </fieldset>
                  <span class="text-danger">
                    @error('email')
                      {{$message}}
                    @enderror
                          </span>
                        </div>

            <div class="col-md-12 col-sm-12">
                          <fieldset>
                <input name="phonenumber" type="number" id="phonenumber" placeholder="PhoneNumber" value="{{ $data->phonenumber }}">
                   </fieldset>
                   <span class="text-danger">
                     @error('phonenumber')
                       {{$message}}
                     @enderror
                   </span>
                 </div>

                 <div class="col-lg-12">
                   <fieldset>
                     <textarea  type="text" name="message" rows="6" id="message" placeholder="Message" value="{{ $data->message }}"></textarea>
                   </fieldset>
                   <span class="text-danger">
                     @error('message')
                       {{$message}}
                     @enderror
                   </span><br><br>
                 </div>

                 <div class="col-lg-12">
                          <fieldset>
                            <button type="submit" id="submit" name="submit" >Send Message </button>
                          </fieldset>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- ***** Contact Us Area Ends ***** -->
    <br>
    <br>

{{-- @if(session('flash'))
    <p style="color:lawngreen">{{session('flash')}} </p>
@endif
    <h1>Elegent Contact Form</h1> --}}



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
 <!-- ***** Footer end ***** -->





</body>
</html>
