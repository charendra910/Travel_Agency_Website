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
                        <a href="{{url('/index')}}" class="logo">Travel Agency<em> Website</em></a>
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
<br>
<br>
<br>

    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>

              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active ">
                  <img style="height:600px"class="d-block w-100" src="{{url('frontends/assets/images/lumbini11.jpg')}}" alt="First slide">
                  <div class="carousel-caption">
                    <h3>Lumbini</h3>
                </div>
                </div>
                <div class="carousel-item">
                    <img  style="height:600px"class="d-block w-100" src="{{url('frontends/assets/images/pokhra11.jpeg')}}" alt="Second slide">
                    <div class="carousel-caption">
                      <h3>Pokhara</h3>
                  </div>
                  </div>
                <div class="carousel-item">
                    <img style="height:600px"class="d-block w-100" src="{{url('frontends/assets/images/ktm11.jpg')}}" alt="third slide">
                    <div class="carousel-caption">
                      <h3>Kathmandu</h3>
                  </div>
                  </div>
                <div class="carousel-item">
                    <img style="height:600px"class="d-block w-100" src="{{url('frontends/assets/images/rajasthan11.jpg')}}" alt="fourth slide">
                    <div class="carousel-caption">
                      <h3>Udaypur</h3>
                  </div>
                  </div>
                <div class="carousel-item">
                  <img style="height:600px"class="d-block w-100" src="{{url('frontends/assets/images/kedarnath22.jpg')}}" alt="fifth slide">
                  <div class="carousel-caption">
                    <h3>Kedarnath</h3>
                </div>
                </div>
                <div class="carousel-item">
                  <img style="height:600px"class="d-block w-100" src="{{url('frontends/assets/images/agra44.jpg')}}" alt="sixth slide">
                  <div class="carousel-caption">
                    <h3>Agra Fort</h3>
                </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <div class="section-heading">
               <h2>Package <em> Details</em></h2>
           </div>

            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'></i>Lumbini, Nepal</a></li>
                  <li><a href='#tabs-2'></i>Pokhra, Nepal</a></li>
                  <li><a href='#tabs-3'></i>Kathmandu, Nepal</a></li>
                  <li><a href='#tabs-4'></i>Rajasthan, India</a></li>
                  <li><a href='#tabs-5'></i>Kedarnath, India</a></li>
                  <li><a href='#tabs-6'></i>Agra, India</a></li>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content' style="width: 100%;">
                  <article id='tabs-1'>
                    <h3>Package Info</h3>

                    <div class="row">
                       <div class="col-sm-6">
                            <label>Time</label>
                            <p>October-November</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Costs</label>
                            <p>$100-$200/night</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Flight included</label>
                            <p>Yes</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Address</label>
                            <p>Terai Region, Rupandehi, Nepal</p>
                       </div>
                       <br>
                       <p>
                         This is the palace where Lord Gautam Buddhha(Siddhartha) who is also known as the "Light of Asia" was born. Every year lots of tourist came here to visits Siddharth's place.There are lot of temples of different countries.</p>
                       <br>
                       <p>
                         For visitors, Lumbini is an incredibly spiritual place and the tranquillity of the site is felt the strongest in the Sacred Garden that surrounds the central Mayadevi Temple.
                         A large water feature, said to be the same pond where Prince Siddhartha was given his purification bath, reflects the trees of the garden. Prayer flags hang from the branches and gently sway in the breeze as worshippers sit below in deep meditation.</p> <br>
                       <p>
                         One of the most ancient Buddhist Temples in Lumbini, which is also a UNESCO World Heritage Site, Maya Devi Temple is one of the most well-known temples which is known as the birthplace of Gautam Buddha. The temple is situated in the middle of the park grounds called Lumbini Development Zone, it's continuous developments making it a must-visit attraction.
                         The monastery of differeent countries are made there in Lumbini, like you can find the monastery of Cambodia, Vietnam, Korea, China,Myanmar, Thailand, Japan and others country.
                       </p>
                     </div>
                  </article>
                  <article id='tabs-2'>
                    <h3>Package Info</h3>

                    <div class="row">
                       <div class="col-sm-6">
                            <label>Time</label>
                            <p>March-May</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Costs</label>
                            <p>$100-$150/night</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Flight included</label>
                            <p>Yes</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Address</label>
                            <p>Kedarnath, Uttarakhand, India</p>
                       </div>
                       <br>
                       <p>
                         Pokhara is a city on Phewa Lake, in central Nepal. It's known as a gateway to the Annapurna Circuit, a popular trail in the Himalayas.</p>   <br>
                         <p>
                         Tal Barahi Temple, a 2-story pagoda, sits on an island in the lake. On the eastern shore, the Lakeside district has yoga centers and restaurants. In the city's south, the International Mountain Museum has exhibits on the history of mountaineering and the people of the Himalayas.</p><br>
                       <p>
                         Pokhara's tranquil beauty has been the subject of inspiration for many travel writers. Its pristine air, spectacular backdrop of snowy peaks, blue lakes and surrounding greenery make it the jewel in the Himalaya, a place of remarkable natural disposition.
                         With the magnificent Annapurna range forming the backdrop and the serenity of the Cluster of 9 Lakes with three major ones - Phewa, Rupa and Begnas-Pokhara is a great destination for a weekend getaway as well as a long relaxing holiday. Pokhara Valley, gateway to the Annapurna region where many a trekker finds his Shangri-la, sits high on the list of must visit places in Nepal.</p>
                     </div>

                  </article>
                  <article id='tabs-3'>
                    <h3>Package Info</h3>

                    <div class="row">
                       <div class="col-sm-6">
                            <label>Time</label>
                            <p>September-November</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Costs</label>
                            <p>$100-$250/night</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Flight included</label>
                            <p>Yes</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Address</label>
                            <p>Kathmandu Capital City, Nepal</p>
                       </div>
                       <br>
                       <p>
                         Kathmandu is the capital city of Nepal as well as the largest metropolis in Nepal. The Kathmandu Valley includes the towns of Madhyapur, Lalitpur, Thimi, Kirtipur, and Bhaktapur and has a total population of about five million people.</p><br>
                       <p>
                         Thamel has and continues to be, one of the most popular and crowded commercial hubs in Kathmandu City of Nepal. Be it cultural monuments or pubs, cosy restaurants or magnificent temples, the narrow alleys of Thamel has never failed to serve the tourist industry of the country in over four decades.
                         Whether you are looking for good food or clothes, new music albums or in the hunt for trekking gear, the street shops in Thamel have got you covered. The entire area is a wi-fi zone.
                       </p><br>
                       <p>Kathmandu is and has been for many years the centre of Nepal's history, art, culture, and economy. It has a multi-ethnic population within a Hindu and Buddhist majority. Religious and cultural festivities form a major part of the lives of people residing in Kathmandu.
                         Tourism is an important part of the economy in the city. In 2013, Kathmandu was ranked third among the top ten upcoming travel destinations in the world by TripAdvisor, and ranked first in Asia.</p>
                     </div>
                  </article>
                  <article id='tabs-4'>
                    <h3>Package Info</h3>

                    <div class="row">
                       <div class="col-sm-6">
                            <label>Best Time</label>
                            <p>September-March</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Costs</label>
                            <p>$150-$500/night</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Flight included</label>
                            <p>Yes</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Address</label>
                            <p>Udaypur, Rajasthan, India</p>
                       </div>
                       <br>
                       <p>
                         Often referred to as the 'Venice of the East', the city of lakes Udaipur is located around azure water lakes and is hemmed in by lush green hills of Aravallis. The famous Lake Palace, located in the middle of Lake Pichola is one of the most beautiful sights of Udaipur.</p><br>
                       <p>
                         It is also home to Jaisamand Lake, claimed to be the second largest man-made sweet water lake in Asia. The beautiful City Palace and Sajjangarh (Monsoon Palace) add to the architectural beauty and grandeur of the city. The city is also known for its profusion of zinc and marble.
                         Solar observatory in Lake Fateh Sagar is the only observatory in India located on an island and has been made on the pattern of  Big Bear Lake in Southern California. The ten-day Shilpgram Festival which starts from 21 Dec to 30 Dec pulls in a large number of people interested in arts and crafts.</p><br>
                      <p>
                         Udaipur was founded in 1553 by Maharana Udai Singh II as the new capital of Mewar Kingdom. It is located in the fertile, circular Girwa Valley to the southwest of Nagda, which was the first capital of Mewar.
                         Come explore the wonders and sites that Udaipur has to offer. There's always something to see in Rajasthan. Most visited places for tourist are Moti Magri, City Palace,  Jag Mandir, Lake Palace, Monsoon palace and others.
                      </p>
                     </div>
                  </article>
                  <article id='tabs-5'>
                    <h3>Package Info</h3>

                    <div class="row">
                       <div class="col-sm-6">
                            <label>Time</label>
                            <p>April-June</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Costs</label>
                            <p>$100-$150/night</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Flight included</label>
                            <p>Yes</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Address</label>
                            <p>Kedarnath, Uttarakhand, India</p>
                       </div>
                       <br>
                       <p>
                         Kedarnath is a town and Nagar Panchayat in Rudraprayag district of Uttarakhand, India, known primarily for the Kedarnath Temple. It is approximately 86 kilometres from Rudraprayag, the district headquarter.</p><br>
                         <p>
                         Kedar meaning powerful is another name of Lord Shiva the protector and the destroyer. The beautiful ambiance around the temple looks like quite peace on heaven causes a beautiful place to do meditation.The main attractions here is the Shiva Temple, which is a popular Hindu shrine and pilgrimage, attracting devotees from all over the world.
                         </p><br>
                       <p>
                         Shri Badarinath Kedarnath Temple Committee (BKTC) was constituted as per 1939 Act. Shri Kedarnath Temple, dedicated to Lord Shiva, is the eleventh out of twelve Jyotirlingas of India, whie Shri Badarinath Temple is dedicated to Lord Vishnu. Both temples are situated in Garhwal Division of Uttarakhand at high altitudes in Himalayas and are believed to be established by Aadi Guru Shankaracharya.
                         Under the scheme of 1899, temples management was in hands of Rawal, while Tehri Darbar was invested with certain supervisory power. The defective nature of scheme was the source of friction between Rawal and Tehri Darbar. As a result, supervisions of temple suffered, its income was squandered and convenience of the pilgrims was neglected.
                       </p>
                     </div>
                  </article>
                    <article id="tabs-6">
                         <h3>Package Info</h3>

                         <div class="row">
                            <div class="col-sm-6">
                                 <label>Time</label>
                                 <p>October-March</p>
                            </div>

                            <div class="col-sm-6">
                                 <label>Costs</label>
                                 <p>$100-$400/night</p>
                            </div>

                            <div class="col-sm-6">
                                 <label>Flight included</label>
                                 <p>Yes</p>
                            </div>

                            <div class="col-sm-6">
                                 <label>Address</label>
                                 <p>Agra, Uttarpradesh, India</p>
                            </div>
                            <br>
                            <p>
                              Agra is a city on the banks of the Yamuna river in the Indian state of Uttar Pradesh, about 230 kilometres south-east of the national capital New Delhi and 330 km west of the state capital Lucknow.
                            </p><br>
                            <p>
                              Agra is one of the most popular tourist destinations in India. It is renowned for being home to one the Seven Wonders of the world, the Taj Mahal. It is as loved by Indians as it is by foreigners who throng here in large numbers to admire its beauty.
                              Along with Delhi and Jaipur, Agra forms the Golden Triangle of tourism in India. Situated in Uttar Pradesh, Agra is synonymous with the Taj Mahal however there's lot more to the city than this world-famous monument.
                            </p><br>
                            <p>
                              Under the Mughal reign Agra was called Akbarabad and was ruled by greats like Akbar, Jehangir, Shah Jahan, etc. Their love for architecture, gardens and art and culture added a new dimension to Agra's personality.
                              From Persian gardens on the banks of the Yamuna to monuments and mausoleums, Agra's golden age started during their rule. It was after the decline of the Mughal Empire and during the reign of the Marathas that Akbarabad became Agra. By 1803, it came under the British Raj that remained strong for most part until India gained independence in 1947.
                            </p>
                          </div>
                     </article>
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->

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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Enquiry</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-us">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter full name" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <div class="row">
                             <div class="col-md-6">
                                <fieldset>
                                  <input type="text" class="form-control" placeholder="From date" required="">
                                </fieldset>
                             </div>

                             <div class="col-md-6">
                                <fieldset>
                                  <input type="text" class="form-control" placeholder="To date" required="">
                                </fieldset>
                             </div>
                          </div>
                       </div>
                  </div>
              </form>
           </div>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Send Request</button>
          </div>
        </div>
      </div>
    </div>

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
