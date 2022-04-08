<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0,user-scalable=no" name="viewport">

  <title>Wa Associates</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('frontend/assets/img/mainlogo.png')}}" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    
  <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  
  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('frontend/assets/css/beauty.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/css/internal.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/css/card.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/css/meet.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/css/contact.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: EstateAgency - v2.2.1
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
    .nav-logo{
      height:85px;
    }
    .service-icon{
      width: 100px;
      margin-bottom: 62px;
      padding: 10px;
      margin-left: -20px;
    }
    .about-img{
      width:100%;
    }
    .owl-carousel .owl-stage{
      margin-bottom:20px!important;
      margin-top:20px!important;
    }
    .blog-card{
      /* box-shadow: 0 5px 20px #acb1a5; */
      box-shadow: 0 0 11px rgba(44, 44, 44, 0.4);
      border-radius:20px;
    }
    .blog-title{
   font-size:17px;
    }
    .blog-card-img{
      height:220px!important;
      padding-right:5px;
      padding-bottom:5px;
      margin-left:-10px;
      margin-top:-10px;
      border-radius:20px;
      /* z-index: 1; */
    }
    .blog-date{
      margin-left:5px;
      font-size:11px;
    }
    .property-company-icon{
      width:50%;
    }
 
  </style>
</head>

<body>



  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
  
      <a class="navbar-brand text-brand" href="index.html"><img class="nav-logo" src="{{asset('frontend/assets/img/mainlogo.png')}}" alt="logo" /></a>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active " href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link scroll" href="#about">About</a>
          </li>
          <li class="nav-item">
          <a class="nav-link scroll" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link scroll" href="#property">Property</a>
          </li>
          <li class="nav-item">
            <a class="nav-link scroll" href="#gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link scroll" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
  


      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </nav><!-- End Header/Navbar -->



  <div>

  <main id="main">

  <div class="header-clip" id="home">
    <div class="row header-sec">
     <div class="col-md-7">
     <img class="about-img top-head-img" src="{{asset('frontend/assets/img/headerimg.png')}}"  alt="Card image cap">
     </div>
     <div class="col-md-5 header-sec-3">
     <div class="row">
       <div class="col-md-12 top-header-property-company-icon">
       <img  class="header-property-company-icon bahria"  src="{{asset('frontend/assets/img/bahria1.png')}}"  alt="Card image cap">
       <img  class="header-property-company-icon dhacity"  src="{{asset('frontend/assets/img/dhacity1.png')}}"  alt="Card image cap">
       <img  class="header-property-company-icon"  src="{{asset('frontend/assets/img/gawadar1.png')}}"  alt="Card image cap">
       <img  class="header-property-company-icon dha"  src="{{asset('frontend/assets/img/dha3.png')}}"  alt="Card image cap">
       </div>

     </div>
                  <div class="top-header-title">
                    <div class="wa-top-head dynamic-title cd-headline clip is-full-width">
                      <span>WA ASSOCIATES &nbsp;</span>
                      <span class="cd-words-wrapper">

                        <b class="is-visible"> at&nbsp;<span class="gold-top-header-title">BAHRIA TOWN.</span></b>
                                  <b> at&nbsp;<span class="gold-top-header-title">DHA CITY.</span></b>
                        <b>at&nbsp;<span class="gold-top-header-title">GAWADAR PORT.</span></b>

                      </span>
                    </div>
                
                <a href="#" title="Play video" class="type-pause-button">
                  <span class="icon-pause-circle-fill on" id="player"></span>
                </a>
              </div>

              <p class="top-header-text">Wa associates is a professional real estate company.We have built our reputation by providing hundreds of people, like you, with the highest quality in real estate sales, property management and investment services.</p>


              
     </div>
    </div>

  </div>


   <!-- ======= About Section ======= -->
   <section class="services section-bg aboutus-sec" >
  <div class="container about-sec-head" id="about">
    <header class="section-header">
      <h3>About Us</h3>

      <p class="sec-sub-head">Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
    </header>

<div class="row">
<div class="col-md-6">
<div class="title-writer">
			<div class="dynamic-title cd-headline clip is-full-width">
				<span>WA ASSOCIATES &nbsp;</span>
				<span class="cd-words-wrapper">

					<b class="is-visible"> a&nbsp;<span class="gold-title">SALE PROPERTY.</span></b>
                    <b> a&nbsp;<span class="gold-title">PURCHASE PROPERTY.</span></b>
					<b>a&nbsp;<span class="gold-title">RENT PROPERTY.</span></b>
                    <b>a&nbsp;<span class="gold-title">BOOKED PROPERTY.</span></b>
                    <b>an&nbsp;<span class="gold-title">RENOVATE .</span></b>
                    <b>an&nbsp;<span class="gold-title">MANTAINANCE.</span></b>


				</span>
			</div>
  
  <a href="#" title="Play video" class="type-pause-button">
    <span class="icon-pause-circle-fill on" id="player"></span>
  </a>
</div>


<p class="about-sec-des">Wa associates is a professional real estate company.We have built our reputation by providing hundreds of people, like you, with the highest quality in real estate sales, property management and investment services. Wa associates can make a difference and provide you the most beneficial and profitable deal. Trust, honesty and transparency are pillars of our dealings with the clients and are well versed in all kind of real estate needs. Please contact us with your real estate requirements and let us take care of everything else.</p>
</div>
<div class="col-md-6">
<img class="about-img" src="{{asset('frontend/assets/img/about.png')}}"  alt="Card image cap">
</div>
</div>
    </div>
    </section>

    <section>
    <div class="row">

    <div class="col-md-3  col-sm-6 col-6 text-center" data-aos="fade-right">
    <img class="property-company-icon" src="{{asset('frontend/assets/img/bahria.png')}}" alt="logo" />
    </div>
    <div class="col-md-3 col-sm-6  col-6 text-center" data-aos="fade-right">
    <img class="property-company-icon" src="{{asset('frontend/assets/img/dhacity.png')}}" alt="logo" />
    </div>
    <div class="col-md-3 col-sm-6  col-6 text-center" data-aos="fade-left">
    <img class="property-company-icon" src="{{asset('frontend/assets/img/dha.png')}}" alt="logo" />
    </div>
    <div class="col-md-3 col-sm-6  col-6 text-center" data-aos="fade-left">
    <img class="property-company-icon" src="{{asset('frontend/assets/img/gawadar.png')}}" alt="logo" />
    </div>
    </div>
  </section>

    <!-- ======= Services Section ======= -->
    <section class="services section-bg" >
  <div class="container" id="services">
    <header class="section-header">
      <h3>Services</h3>

      <p class="sec-sub-head">Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
    </header>

    <div class="row" data-aos="fade-up"
     data-aos-duration="1500">
      <div class="col-md-6 col-lg-4">
        <div class="box">
          <div class="icon">
          <img class="service-icon" src="{{asset('frontend/assets/img/sale1.png')}}" alt="logo" />
          </div>

          <h4 class="title"><a href="">Sale</a></h4>

          <p class="description">If you are looking to sell your property, so Wa Associates will assist you in the process of selling your property.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="box">
          <div class="icon">
          <img class="service-icon" src="{{asset('frontend/assets/img/purchase.png')}}" alt="logo" />
          </div>

          <h4 class="title"><a href="">Purchase</a></h4>

          <p class="description">If you are looking for the perfect home that will suit your family and your budget, then we are here to help.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="box">
          <div class="icon" >
          <img class="service-icon" src="{{asset('frontend/assets/img/sale.png')}}" alt="logo" />
          </div>

          <h4 class="title"><a href="">Rent</a></h4>

          <p class="description">If you are looking rental person so just connect with wa associates to find out perfect rental person.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="box">
          <div class="icon" >
          <img class="service-icon" src="{{asset('frontend/assets/img/maintain.png')}}" alt="logo" />
          </div>

          <h4 class="title"><a href="">Maintainance</a></h4>

          <p class="description">Wa associates provide maintainance service for home and offices renovate and construction under his supervisor.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="box">
          <div class="icon" >
          <img class="service-icon" src="{{asset('frontend/assets/img/booking.png')}}" alt="logo" />
          </div>

          <h4 class="title"><a href="">Booking</a></h4>

          <p class="description">If you are ready to Booking your luxious appartment and villas then just get in touch with Wa Associates.
            <!-- and plan your next move. -->
          </p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="box">
          <div class="icon" >
          <img class="service-icon" src="{{asset('frontend/assets/img/renovation.png')}}" alt="logo" />
          </div>

          <h4 class="title"><a href="">Renovation</a></h4>

          <p class="description">Wa Associates is also Renovate safe and secure! upgrade an existing structure. Fast and trusted.</p>
        </div>
      </div>


    </div>
  </div>
</section>
   <!-- End Services Section -->



<section class="property-card-section">
            
<div class="container property-container" id="property">
<header class="section-header">
      <h3>Latest Properties</h3>

      <p class="sec-sub-head" >Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
    </header>
<div class="carousel-wrap" data-aos="zoom-out-left" duration="3000">
  <div class="owl-carousel">
@foreach($properties as $property)
    <div class="item property-item">
       <div class="card card-area" >
         <img class="card-img-top card-area-img" src="https://picsum.photos/200/300"  alt="Card image cap">
             <div class="card-body">
             <span class="badge badge-success">{{ $property->purpose}}</span>
  
                 <h6 class="card-title">{{$property->property_title}}</h6>
                 <p class="property-details"><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $property->city}}</p>
                 <p class="card-text card-address">{{ $property->location}}</p>
                 <div class="property-detail-sec">
                 <div class="row">
                        <div class="col-md-6 col-6 prop-detail-icon property-details">
                        <i class="fa fa-bath" aria-hidden="true"></i>
                        {{ $property->baths}}
                        </div>
                        <div class="col-md-6  col-6 prop-detail-icon property-details">
                        <i class="fa fa-bed" aria-hidden="true"></i>
                        {{ $property->beds}}
                        </div>
                 </div>

                 <div class="row">
                            <div class="col-md-6  col-6 prop-detail-icon property-details">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            {{ !empty($property->category) ? $property->category->property_type:'' }}
                            </div>


                            <div class="col-md-6  col-6 prop-detail-icon property-details">
                            <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            {{ $property->land_area}}
                            </div>
                 </div>

                 
            
                 </div>
                 <a href="tel:{{ $property->contact_no}}" class="btn btn-success btn-sm"><i class="fa fa-phone" aria-hidden="true"></i> Call Now</a>
             </div>
        </div>
    </div>

@endforeach

    <div class="item property-item">
       <div class="card card-area" >
         <img class="card-img-top card-area-img" src="https://picsum.photos/200/300"  alt="Card image cap">
             <div class="card-body">
             <span class="badge badge-success">For Sale</span>
  
                 <h6 class="card-title">Card title</h6>
                 <p class="property-details"><i class="fa fa-map-marker" aria-hidden="true"></i> Karachi</p>
                 <p class="card-text card-address">Some quick example text to build </p>
                 <div class="property-detail-sec">
                 <div class="row">
                        <div class="col-md-6 col-6 prop-detail-icon property-details">
                        <i class="fa fa-bath" aria-hidden="true"></i>
                        2
                        </div>
                        <div class="col-md-6  col-6 prop-detail-icon property-details">
                        <i class="fa fa-bed" aria-hidden="true"></i>
                        5
                        </div>
                 </div>

                 <div class="row">
                            <div class="col-md-6 col-6 prop-detail-icon property-details">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            office
                            </div>


                            <div class="col-md-6 col-6 prop-detail-icon property-details">
                            <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            2500sqft
                            </div>
                 </div>

                 
            
                 </div>
                 <a href="tel:8665562570" class="btn btn-success btn-sm"><i class="fa fa-phone" aria-hidden="true"></i> Call Now</a>
             </div>
        </div>
    </div>


    <div class="item property-item">
       <div class="card card-area" >
         <img class="card-img-top card-area-img" src="https://picsum.photos/200/300"  alt="Card image cap">
             <div class="card-body">
             <span class="badge badge-success">For Sale</span>
  
                 <h6 class="card-title">Card title</h6>
                 <p class="property-details"><i class="fa fa-map-marker" aria-hidden="true"></i> Karachi</p>
                 <p class="card-text card-address">Some quick example text to build </p>
                 <div class="property-detail-sec">
                 <div class="row">
                        <div class="col-md-6 col-6 prop-detail-icon property-details">
                        <i class="fa fa-bath" aria-hidden="true"></i>
                        2
                        </div>
                        <div class="col-md-6  col-6 prop-detail-icon property-details">
                        <i class="fa fa-bed" aria-hidden="true"></i>
                        5
                        </div>
                 </div>

                 <div class="row">
                            <div class="col-md-6 col-6 prop-detail-icon property-details">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            office
                            </div>


                            <div class="col-md-6 col-6 prop-detail-icon property-details">
                            <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            2500sqft
                            </div>
                 </div>

                 
            
                 </div>
                 <a href="tel:8665562570" class="btn btn-success btn-sm"><i class="fa fa-phone" aria-hidden="true"></i> Call Now</a>
             </div>
        </div>
    </div>


    <div class="item property-item">
       <div class="card card-area" >
         <img class="card-img-top card-area-img" src="https://picsum.photos/200/300"  alt="Card image cap">
             <div class="card-body">
             <span class="badge badge-success">For Sale</span>
  
                 <h6 class="card-title">Card title</h6>
                 <p class="property-details"><i class="fa fa-map-marker" aria-hidden="true"></i> Karachi</p>
                 <p class="card-text card-address">Some quick example text to build </p>
                 <div class="property-detail-sec">
                 <div class="row">
                        <div class="col-md-6 col-6 prop-detail-icon property-details">
                        <i class="fa fa-bath" aria-hidden="true"></i>
                        2
                        </div>
                        <div class="col-md-6  col-6 prop-detail-icon property-details">
                        <i class="fa fa-bed" aria-hidden="true"></i>
                        5
                        </div>
                 </div>

                 <div class="row">
                            <div class="col-md-6 col-6 prop-detail-icon property-details">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            office
                            </div>


                            <div class="col-md-6 col-6 prop-detail-icon property-details">
                            <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            2500sqft
                            </div>
                 </div>

                 
            
                 </div>
                 <a href="tel:8665562570" class="btn btn-success btn-sm"><i class="fa fa-phone" aria-hidden="true"></i> Call Now</a>
             </div>
        </div>
    </div>


    <div class="item property-item">
       <div class="card card-area" >
         <img class="card-img-top card-area-img" src="https://picsum.photos/200/300"  alt="Card image cap">
             <div class="card-body">
             <span class="badge badge-success">For Sale</span>
  
                 <h6 class="card-title">Card title</h6>
                 <p class="property-details"><i class="fa fa-map-marker" aria-hidden="true"></i> Karachi</p>
                 <p class="card-text card-address">Some quick example text to build </p>
                 <div class="property-detail-sec">
                 <div class="row">
                        <div class="col-md-6 col-6 prop-detail-icon property-details">
                        <i class="fa fa-bath" aria-hidden="true"></i>
                        2
                        </div>
                        <div class="col-md-6  col-6 prop-detail-icon property-details">
                        <i class="fa fa-bed" aria-hidden="true"></i>
                        5
                        </div>
                 </div>

                 <div class="row">
                            <div class="col-md-6 col-6 prop-detail-icon property-details">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            office
                            </div>


                            <div class="col-md-6 col-6 prop-detail-icon property-details">
                            <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            2500sqft
                            </div>
                 </div>

                 
            
                 </div>
                 <a href="tel:8665562570" class="btn btn-success btn-sm"><i class="fa fa-phone" aria-hidden="true"></i> Call Now</a>
             </div>
        </div>
    </div>


    <div class="item property-item">
       <div class="card card-area" >
         <img class="card-img-top card-area-img" src="https://picsum.photos/200/300"  alt="Card image cap">
             <div class="card-body">
             <span class="badge badge-success">For Sale</span>
  
                 <h6 class="card-title">Card title</h6>
                 <p class="property-details"><i class="fa fa-map-marker" aria-hidden="true"></i> Karachi</p>
                 <p class="card-text card-address">Some quick example text to build </p>
                 <div class="property-detail-sec">
                 <div class="row">
                        <div class="col-md-6 col-6 prop-detail-icon property-details">
                        <i class="fa fa-bath" aria-hidden="true"></i>
                        2
                        </div>
                        <div class="col-md-6  col-6 prop-detail-icon property-details">
                        <i class="fa fa-bed" aria-hidden="true"></i>
                        5
                        </div>
                 </div>

                 <div class="row">
                            <div class="col-md-6 col-6 prop-detail-icon property-details">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            office
                            </div>


                            <div class="col-md-6 col-6 prop-detail-icon  property-details">
                            <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            2500sqft
                            </div>
                 </div>

                 
            
                 </div>
                 <a href="tel:8665562570" class="btn btn-success btn-sm"><i class="fa fa-phone" aria-hidden="true"></i> Call Now</a>
             </div>
        </div>
    </div>

    


    <!-- <div class="item"><img src="http://placehold.it/150x150"></div>
    <div class="item"><img src="http://placehold.it/150x150"></div>
    <div class="item"><img src="http://placehold.it/150x150"></div>
    <div class="item"><img src="http://placehold.it/150x150"></div>
    <div class="item"><img src="http://placehold.it/150x150"></div>
    <div class="item"><img src="http://placehold.it/150x150"></div>
    <div class="item"><img src="http://placehold.it/150x150"></div>
    <div class="item"><img src="http://placehold.it/150x150"></div>
    <div class="item"><img src="http://placehold.it/150x150"></div>
    <div class="item"><img src="http://placehold.it/150x150"></div>
    <div class="item"><img src="http://placehold.it/150x150"></div> -->
  </div>
</div>
</section>


<section>
<div class="container">
<br>
<br><br>
<br>
<div class="title-box">
                <h2 class="title-a">Our Experience Team</h2>
                <p class="sec-sub-head">Coming together is a beginning, staying together is progress, and working together is success.</P>
              </div>
        <div class="grid">
            <div class="card meet-card-sec" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                <div class="card_img meet-card-sec-img">
                    <img src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1051&q=80" alt="">
                </div>
                <div class="card_body meet-card-sec-body">
                    <h2 class="card_title meet-card-sec-title">Qamar Shahzad</h2>
                    <h6 class="designation">CEO & CO-FOUNDER</h6>
                    <div class="call_btn">
                        <a href="tel:03003618219" class="btn_icon">
                            <!-- <i class="fas fa-phone-alt"></i> -->
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span class="circle"></span>
                        </a>
                    </div>
                </div>
            </div>


            <div class="card meet-card-sec" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                <div class="card_img meet-card-sec-img">
                    <img src="https://images.unsplash.com/photo-1577880216142-8549e9488dad?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="">
                </div>
                <div class="card_body meet-card-sec-body">
                    <h2 class="card_title meet-card-sec-title">Waqas Awan</h2>
                    <h6 class="designation">MANAGING DIRECTOR</h6>
                    <div class="call_btn">
                        <a href="tel:03003618219" class="btn_icon">
                            <!-- <i class="fas fa-phone-alt"></i> -->
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span class="circle"></span>
                        </a>
                    </div>
                </div>
            </div>


            <div class="card meet-card-sec" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">

                    <img src="{{asset('frontend/assets/img/pattern_8.png')}}" alt="">
             

  </div>
            
        </div>
    </div>
    
</section>

<div class="container">
<header class="section-header" id="gallery">
      <h3>Gallery</h3>

      <p class="sec-sub-head">Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
    </header>


<div class="container">

<div class="row" data-aos="fade-up"
     data-aos-duration="1500">
     @foreach($galleries as $gallery)
        <div class="col-md-3 col-6 gall ">
        <a href="{{asset('uploads/gallery').'/'.$gallery->image}}" class="gallery-img" >
        <img src="{{asset('uploads/gallery').'/'.$gallery->image}}"/>
      </a>
        </div>
        @endforeach


</div>
 



    <!-- ======= blog Section ======= -->
    <!-- <section class="section-testimonials section-t8 nav-arrow-a" id="blog">
    <header class="section-header">
      <h3>Latest Blogs</h3>

      <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
    </header>
      <div class="carousel-wrap">
  <div class="owl-carousel" style="padding:20px;">

  @foreach($blogs as $blog)
    <div class="item property-item">
       <div class="card blog-card" >
         <img class="card-img-top blog-card-img" src="https://picsum.photos/200/300"  alt="Card image cap">
             <div class="card-body">
             <span class="badge badge-success">Blog</span>
                <br/>
                 <a href="#" class="blog-title">Card title</a>
                 <p class="card-text card-address">Some quick example text to build </p>
                 <br/>
                 <div class="row">
                      <div class="col-md-6" style="display:flex;">
                      <i class="fa fa-clock-o" aria-hidden="true"></i><p class="blog-date" >29,Aug,2021</p>
                      </div>
                      <div class="col-md-6">
                      <a href="#" class="btn btn-success btn-sm">Read More</a>
                      </div>
                 </div>
                
             </div>
        </div>
    </div>

    @endforeach

    <div class="item property-item">
       <div class="card blog-card" >
         <img class="card-img-top blog-card-img" src="https://picsum.photos/200/300"  alt="Card image cap">
             <div class="card-body">
             <span class="badge badge-success">Blog</span>
                <br/>
                 <a href="#" class="blog-title">Card title</a>
                 <p class="card-text card-address">Some quick example text to build </p>
                 <br/>
                 <div class="row">
                      <div class="col-md-6" style="display:flex;">
                      <i class="fa fa-clock-o" aria-hidden="true"></i><p class="blog-date" >29,Aug,2021</p>
                      </div>
                      <div class="col-md-6">
                      <a href="#" class="btn btn-success btn-sm">Read More</a>
                      </div>
                 </div>
                
             </div>
        </div>
    </div>


    <div class="item property-item">
       <div class="card blog-card" >
         <img class="card-img-top blog-card-img" src="https://picsum.photos/200/300"  alt="Card image cap">
             <div class="card-body">
             <span class="badge badge-success">Blog</span>
                <br/>
                 <a href="#" class="blog-title">Card title</a>
                 <p class="card-text card-address">Some quick example text to build </p>
                 <br/>
                 <div class="row">
                      <div class="col-md-6" style="display:flex;">
                      <i class="fa fa-clock-o" aria-hidden="true"></i><p class="blog-date" >29,Aug,2021</p>
                      </div>
                      <div class="col-md-6">
                      <a href="#" class="btn btn-success btn-sm">Read More</a>
                      </div>
                 </div>
                
             </div>
        </div>
    </div>


    <div class="item property-item">
       <div class="card blog-card" >
         <img class="card-img-top blog-card-img" src="https://picsum.photos/200/300"  alt="Card image cap">
             <div class="card-body">
             <span class="badge badge-success">Blog</span>
                <br/>
                 <a href="#" class="blog-title">Card title</a>
                 <p class="card-text card-address">Some quick example text to build </p>
                 <br/>
                 <div class="row">
                      <div class="col-md-6" style="display:flex;">
                      <i class="fa fa-clock-o" aria-hidden="true"></i><p class="blog-date" >29,Aug,2021</p>
                      </div>
                      <div class="col-md-6">
                      <a href="#" class="btn btn-success btn-sm">Read More</a>
                      </div>
                 </div>
                
             </div>
        </div>
    </div>


    <div class="item property-item">
       <div class="card blog-card" >
         <img class="card-img-top blog-card-img" src="https://picsum.photos/200/300"  alt="Card image cap">
             <div class="card-body">
             <span class="badge badge-success">Blog</span>
                <br/>
                 <a href="#" class="blog-title">Card title</a>
                 <p class="card-text card-address">Some quick example text to build </p>
                 <br/>
                 <div class="row">
                      <div class="col-md-6" style="display:flex;">
                      <i class="fa fa-clock-o" aria-hidden="true"></i><p class="blog-date" >29,Aug,2021</p>
                      </div>
                      <div class="col-md-6">
                      <a href="#" class="btn btn-success btn-sm">Read More</a>
                      </div>
                 </div>
                
             </div>
        </div>
    </div>


    <div class="item property-item">
       <div class="card blog-card" >
         <img class="card-img-top blog-card-img" src="https://picsum.photos/200/300"  alt="Card image cap">
             <div class="card-body">
             <span class="badge badge-success">Blog</span>
                <br/>
                 <a href="#" class="blog-title">Card title</a>
                 <p class="card-text card-address">Some quick example text to build </p>
                 <br/>
                 <div class="row">
                      <div class="col-md-6" style="display:flex;">
                      <i class="fa fa-clock-o" aria-hidden="true"></i><p class="blog-date" >29,Aug,2021</p>
                      </div>
                      <div class="col-md-6">
                      <a href="#" class="btn btn-success btn-sm">Read More</a>
                      </div>
                 </div>
                
             </div>
        </div>
    </div>


  </div>
</div>
    </section> -->
    <!-- End blog Section -->

    <section>
    <div class="content">
    <header class="section-header">
      <h3>Get Into Touch</h3>

      <p class="sec-sub-head">Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
    </header>
    <div class="container">
      <div class="row">
        <div class="col-md-5 mr-auto">
          <div class="responsive-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2822.7806761080233!2d-93.29138368446431!3d44.96844997909819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52b32b6ee2c87c91%3A0xc20dff2748d2bd92!2sWalker+Art+Center!5e0!3m2!1sen!2sus!4v1514524647889" width="350" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>

<br/>
          <ul class="list-unstyled  mb-5">
            <li class="d-flex text-black mb-2">
              <span class="mr-3"><i class="fa fa-map-marker"></i></span> Office #02, Building No 3c, 18 Commercial Street <br> DHA Phase II Ext Karachi.
            </li>
            <li class="d-flex text-black mb-2"><span class="mr-3"><i class="fa fa-phone"></i></span><a href="tel:03003618219"> +92 (300) 361 8219</a></li>
            <li class="d-flex text-black"><span class="mr-3"><i class="fa fa-envelope-o"></i></span><a href="mailto:info@waassociates.com.pk">info@waassociates.com.pk</a> </li>
          </ul>
        </div>

        <div class="col-md-6">
          <form class="mb-5" id="contactForm"  action="{{ route('contact-form.store') }}"  name="contactForm">
 
          <input type="hidden" id="token" name="token" value="{{ csrf_field() }} " />
          <div class="row">
              
              <div class="col-md-12 form-group">
                <label for="name" class="col-form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name...">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="email" class="col-form-label">Email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Enter Your Email...">
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 form-group">
                <label for="message" class="col-form-label">Message</label>
                <textarea class="form-control" name="message" id="message" cols="20" rows="5" placeholder="How Can We Help You...."></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <button type="submit"  class="btn btn-success rounded-0 py-2 px-4">Send Message</button>
              </div>
            </div>
          </form>

          <div id="form-message-warning mt-4"></div> 
          <div id="form-message-success">
            Your message was sent, thank you!
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
            <img class="nav-logo" src="{{asset('frontend/assets/img/mainlogo.png')}}" alt="logo" />
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
              <span class="mr-3"><i class="fa fa-map-marker"></i></span> Office #02, Building No 3c, 18 Commercial Street DHA Phase II Extension Karachi.
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
               <span class="mr-3"><i class="fa fa-phone"></i></span><a href="tel:03003618219"> +92 (300) 361 8219</a>
                </li>
                <li class="color-a">
                <span class="mr-3"><i class="fa fa-envelope-o"></i></span><a href="mailto:info@waassociates.com.pk">info@waassociates.com.pk</a> 
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Wa Associates</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Home</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">About</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Property</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Contact Us</a>
                  </li>
                   <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Privacy Policy</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Social Media</h3>
            </div>
            <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-dribbble" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">

        
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">wa Associates</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
          -->
            Designed by <a href="https://orbixcode.com/" target="_blank">OrbixCode</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->



  <!-- <script>
    $('.owl-carousel').owlCarousel({
  loop: true,
  margin: 30,
  dots: true,
  nav: false,
  responsiveClass: true,
  responsive: {
    0: {
      items: 2,
      margin: 10,
      stagePadding: 20,
    },
    600: {
      items: 3,
      margin: 20,
      stagePadding: 50,
    },
    1000: {
      items: 4
    }
  }
});
  </script> -->
  <script>
   $(document).ready(function(){
     $("#contactForm").submit(function(e){
       e.preventDefault();
       let url=$(this).attr("action");
       $.post(url,{
         'token':$("#token").val(),
         name:$("#name").val(),
         email:$("#email").val(),
         msg:$("#message").val(),
       },function(response){
         console.log(response);
       });
     });
   });
    </script>
    
    <script>
$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  navText: [
    // "<i class='fa fa-caret-left'></i>",
    // "<i class='fa fa-caret-right'></i>"
  ],
  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 3
    },
    900: {
      items: 3
    },
    1000: {
      items: 4
    }
  }
})
    </script>
<script>
$(document).ready(function(){
  var docEl = $(document),
      headerEl = $('header'),
      headerWrapEl = $('.wrapHead'),
      navEl = $('nav'),
      linkScroll = $('.scroll');
  
  docEl.on('scroll', function(){
    if ( docEl.scrollTop() > 60 ){
      headerEl.addClass('fixed-to-top');
      headerWrapEl.addClass('fixed-to-top');
      navEl.addClass('fixed-to-top');
    }
    else {
      headerEl.removeClass('fixed-to-top');
      headerWrapEl.removeClass('fixed-to-top');
      navEl.removeClass('fixed-to-top');
    }
  });
  
  linkScroll.click(function(e){
      e.preventDefault();
      $('body, html').animate({
         scrollTop: $(this.hash).offset().top
      }, 500);
   });
});
</script>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>
  <script>
    var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
  </script>
  <script src="{{asset('frontend/assets/js/card.js')}}"></script>
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>
  <script src="{{asset('frontend/assets/js/typewriter.js')}}"></script>
  <!-- Vendor JS Files -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="{{asset('frontend/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/scrollreveal/scrollreveal.min.js')}}"></script>

  <script>
  AOS.init();
</script>

</body>

</html>