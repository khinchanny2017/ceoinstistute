@extends('layoutsfrontend.app')

@section('content')
  <!-- <body id="page-top" data-spy="scroll" data-target=".navbar-custom"> -->
  <div id="wrapper">
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="top-area base">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <p class="bold text-left">Monday - Saturday, 8am to 10pm </p>
            </div>
            <div class="col-sm-6 col-md-6">
              <p class="bold text-right fa fa-envelope-o fa-stack-1x fa-inverse"> ceo-info@ceoinstistute.com </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container navigation">
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
          <a class="navbar-brand" href="/">
              <img class="log-img" src="{{ asset('img/logo_ceoins.png') }}" alt="" />              
          </a>
          <a class="navbar-brand" href="http://www.ceomasterclub.com/">
            <img class="log-img img-ceo" src="{{ asset('img/frontend/logo_ceo.png') }}" alt="">
          </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#intro">Home</a></li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Colleges<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="index.html">Faculty of International Bussiness Management</a></li>
                <li><a href="index.html">Faculty of Accounting and Finance </a></li>
                <li><a href="index.html">Faculty of Marketing and Sale Management</a></li>
                <li><a href="index.html">Faculty of Information Systems</a></li>
                <li><a href="index.html">Faculty of Hospitality and Tourism Management</a></li>
                <li><a href="index.html">Faculty of Design and Film Production </a></li>
                <li><a href="index.html">Faculty of Foreign Languages </a></li>
              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Academic<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="index.html">Foundation Year Program</a></li>
                <li><a href="index.html">Associate Degrees</a></li>
                <li><a href="index.html">Bachelor Degrees</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="index.html">Asia Economic Forum</a></li>
                <li><a href="index.html">Global Network of ASEAN Study Centers</a></li>
                <li><a href="index.html">CEO Institute Foundation</a></li>
              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Students<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="index.html">Scholarships</a></li>
                <li><a href="index.html">Application Forms</a></li>
                <li><a href="index.html">Student Code of Conduct</a></li>
                <li><a href="index.html">Rights and Responsibilities</a></li>
                <li><a href="index.html">Student Organizations</a></li>
                <li><a href="index.html">Study Abroad</a></li>
                <li><a href="index.html">Graduate Students' Booklet</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Research<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="index.html">ASEAN Study Center</a></li>
                <li><a href="index.html">Council for Research and Creativity</a></li>
                <li><a href="index.html">Institute for Research and Advanced Studies</a></li>
              </ul>
            </li>
            <li>
              <a href="">About CEO</a>
            </li>  
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>
    <!-- Section: intro -->
    <section id="intro" class="intro">
      <div class="intro-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                <h2 class="h-ultra">MESSAGE FROM CHAIRMAN</h2>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                <h4 class="h-light">Affordable monthly premium packages</h4>
              </div>
              <div class="well well-trans">
                <div class="wow fadeInRight" data-wow-delay="0.1s">

                  <ul class="lead-list">
                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>CEO INSTITUTE</strong><br />Cambodia since January 2014 with a strong social mission</span></li>
                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Member Benefit</strong><br />Our success principle is that we can succeed.</span></li>
                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Choaching Program</strong><br />Our Program in CEO INSTITUTE</span></li>
                  </ul>
                  <p class="text-right wow bounceIn" data-wow-delay="0.4s">
                    <a href="#" class="btn btn-skin btn-lg">Learn more <i class="fa fa-angle-right"></i></a>
                  </p>
                </div>
              </div>


            </div>
            <div class="col-lg-6">
              <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                <img src="{{ asset('img/frontend/03.png') }}" class="img-responsive img-respo" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- /Section: intro -->

    <!-- Section: team -->
    <section id="doctor" class="home-section bg-gray paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">PROFESSOR</h2>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <div id="grid-container" class="cbp-l-grid-team">
              <ul>
                <li class="cbp-item psychiatrist">
                  <a href="doctors/member1.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="{{ asset('img/frontend/team/1.jpg') }}" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW PROFILE</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="doctors/member1.html" class="cbp-singlePage cbp-l-grid-team-name">Om Seng Bora</a>
                  {{-- <div class="cbp-l-grid-team-position">Psychiatrist</div> --}}
                </li>
                <li class="cbp-item cardiologist">
                  <a href="doctors/member2.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="{{ asset('img/frontend/team/2.jpg') }}" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW PROFILE</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="doctors/member2.html" class="cbp-singlePage cbp-l-grid-team-name">Soum Sambath</a>
                  {{-- <div class="cbp-l-grid-team-position">Cardiologist</div> --}}
                </li>
                <li class="cbp-item cardiologist">
                  <a href="doctors/member3.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="{{ asset('img/frontend/team/3.jpg') }}" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW PROFILE</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="doctors/member3.html" class="cbp-singlePage cbp-l-grid-team-name">Tan Monivann</a>
                  {{-- <div class="cbp-l-grid-team-position">Cardiologist</div> --}}
                </li>
                <li class="cbp-item neurologist">
                  <a href="doctors/member4.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="{{ asset('img/frontend/team/4.jpg') }}" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW PROFILE</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="doctors/member4.html" class="cbp-singlePage cbp-l-grid-team-name">Thorng Sokhom</a>
                  {{-- <div class="cbp-l-grid-team-position">Neurologist</div> --}}
                </li>

              </ul>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- /Section: team -->  

    <section id="callaction" class="home-section paddingtop-40">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="callaction bg-gray">
              <div class="row">
                <div class="col-md-8">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="cta-text">
                      <h3>What is subject? Who is learing?</h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipiscing elit uisque interdum ante eget faucibus. </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                    <div class="cta-btn">
                      <a href="#" class="btn btn-skin btn-lg">Choaching Program</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Section: services -->
    <section id="service" class="home-section nopadding paddingtop-60">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <img src="{{ asset('img/frontend/dummy/img-1.jpg') }}" class="img-responsive" alt="" />
            </div>
          </div>
          <div class="col-sm-3 col-md-3">

            <div class="wow fadeInRight" data-wow-delay="0.1s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-stethoscope fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">International Business Managemant</h5>
                  <p>Vestibulum tincidunt enim in pharetra malesuada
                  Vestibulum tincidunt enim in pharetra malesuada..</p>
                </div>
              </div>
            </div>

            <div class="wow fadeInRight" data-wow-delay="0.2s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-wheelchair fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Accounting & Finnce</h5>
                  <p>Vestibulum tincidunt enim in pharetra malesuada 
                  Vestibulum..</p>
                </div>
              </div>
            </div>
            <div class="wow fadeInRight" data-wow-delay="0.3s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-plus-square fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Marketing & Sale</h5>
                  <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                </div>
              </div>
            </div>


          </div>
          <div class="col-sm-3 col-md-3">

            <div class="wow fadeInRight" data-wow-delay="0.1s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-h-square fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Information System</h5>
                  <p>
                    Vestibulum tincidunt enim in pharetra malesuada 
                    Vestibulum tincidunt enim in pharetra malesuada..
                  </p>
                </div>
              </div>
            </div>

            <div class="wow fadeInRight" data-wow-delay="0.2s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-filter fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Hospital and Tourism</h5>
                  <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                </div>
              </div>
            </div>
            <div class="wow fadeInRight" data-wow-delay="0.3s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-user-md fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Design and Firm Production</h5>
                  <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>
    <!-- /Section: services -->

      <!-- Section: boxes -->
    <section id="boxes" class="home-section paddingtop-80">
      <div class="container">
        <div class="row">
               <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">ACADEMIC</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">
                <i class="fa fa-check fa-3x circled bg-skin"></i>
                <h4 class="h-bold">Foundation Year Program</h4>
                <p>
                 Established in Cambodia since January 2014 with a strong social mission, CEO Master Club is the first business coaching, networking
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">

                <i class="fa fa-list-alt fa-3x circled bg-skin"></i>
                <h4 class="h-bold">Associate Degrees</h4>
                <p>
                  Established in Cambodia since January 2014 with a strong social mission, CEO Master Club is the first business coaching, networking
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">
                <i class="fa fa-user-md fa-3x circled bg-skin"></i>
                <h4 class="h-bold">Bachelor Degrees</h4>
                <p>
                 Established in Cambodia since January 2014 with a strong social mission, CEO Master Club is the first business coaching, netwOrthopedic Surgeryorking
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">

                <i class="fa fa-hospital-o fa-3x circled bg-skin"></i>
                <h4 class="h-bold">Master Degrees</h4>
                <p>
                 Established in Cambodia since January 2014 with a strong social mission, CEO Master Club is the first business coaching, networking
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- /Section: boxes -->

    <!-- Section: works -->
    <section id="facilities" class="home-section paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">STUDENTS</h2>
                <p>Ea melius ceteros oportere quo, pri habeo viderer facilisi ei</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="wow bounceInUp" data-wow-delay="0.2s">
              <div id="owl-works" class="owl-carousel">
                <div class="item">
                	<a href="{{ asset('img/frontend/photo/1.jpg')}}" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
                		<img src="{{ asset('img/frontend/photo/1.jpg')}}" class="img-responsive" alt="img">
                	</a>
                </div>
                <div class="item">
                	<a href="{{ asset('img/frontend/photo/2.jpg') }}" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/2@2x.jpg">
                		<img src="{{ asset('img/frontend/photo/2.jpg') }}" class="img-responsive " alt="img">
                	</a>
                </div>
                <div class="item">
                	<a href="{{ asset('img/frontend/photo/3.jpg')}}" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/3@2x.jpg">
                		<img src="{{ asset('img/frontend/photo/3.jpg') }}" class="img-responsive " alt="img">
                	</a>
                </div>
                <div class="item">
                	<a href="{{ asset('img/frontend/photo/4.jpg')}}" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/4@2x.jpg">
                		<img src="{{ asset('img/frontend/photo/4.jpg') }}" class="img-responsive " alt="img">
                	</a>
                </div>
                <div class="item">
                	<a href="{{ asset('img/frontend/photo/5.jpg')}}" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/5@2x.jpg">
                		<img src="{{ asset('img/frontend/photo/5.jpg') }}" class="img-responsive " alt="img">
                	</a>
                </div>
                <div class="item">
                	<a href="{{ asset('img/frontend/photo/6.jpg')}}" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/6@2x.jpg">
                		<img src="{{ asset('img/frontend/photo/6.jpg') }}" class="img-responsive " alt="img">
                	</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Section: works -->
    <!-- Section: testimonial -->
    <section id="testimonial" class="home-section paddingbot-60 parallax" data-stellar-background-ratio="0.5">

      <div class="carousel-reviews broun-block">
        <div class="container">
          <div class="row">
            <div id="carousel-reviews" class="carousel slide" data-ride="carousel">

               <div class="container marginbot-50">
                <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                      <div class="section-heading text-center as">
                        <h2 class="h-bold partner">Official Partners</h2>
                        <p>Take charge of your health today with our specially designed health packages</p>
                      </div>
                    </div>
                    <div class="divider-short"></div>
                  </div>
                </div>
              </div> 


              <div class="carousel-inner">
                <div class="item active">
                  <div class="col-md-4 col-sm-6">
                    
                    <div class="person-text rel text-light">
                      <img src="{{ asset('img/frontend/testimonials/1.jpg') }}" alt="" class="person img-circle" />
                      <a title="" href="#">Brain Scan</a>
                      <span>Cambodia</span>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 hidden-xs">
                    
                    <div class="person-text rel text-light">
                      <img src="{{ asset('img/frontend/testimonials/2.jpg') }}" alt="" class="person img-circle" />
                      <a title="" href="#">Matthew G</a>
                      <span>San Antonio, Texas</span>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">                  
                    <div class="person-text rel text-light">
                      <img src="{{ asset('img/frontend/testimonials/3.jpg') }}" alt="" class="person img-circle" />
                      <a title="" href="#">Scarlet Smith</a>
                      <span>Dallas, Texas</span>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="col-md-4 col-sm-6">                    
                    <div class="person-text rel text-light">
                      <img src="{{ asset('img/frontend/testimonials/4.jpg') }}" alt="" class="person img-circle" />
                      <a title="" href="#">Lucas Thompson</a>
                      <span>Austin, Texas</span>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 hidden-xs">                   
                    <div class="person-text rel text-light">
                      <img src="{{ asset('img/frontend/testimonials/5.jpg')}}" alt="" class="person img-circle" />
                      <a title="" href="#">Ella Mentree</a>
                      <span>Fort Worth, Texas</span>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">                   
                    <div class="person-text rel text-light">
                      <img src="{{ asset('img/frontend/testimonials/6.jpg') }}" alt="" class="person img-circle" />
                      <a title="" href="#">Suzanne Adam</a>
                      <span>Detroit, Michigan</span>
                    </div>
                  </div>
                </div>


              </div>

              <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
              <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Section: testimonial -->
    <section id="partner" class="home-section paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow lightSpeedIn" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">RESOURCE</h2>
                <p>Take charge of your health today with our specially designed health packages</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="partner">
              <a href="#"><img src="{{ asset('img/frontend/dummy/partner-1.jpg') }}" alt="" /></a>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="partner">
              <a href="#"><img src="{{ asset('img/frontend/dummy/partner-2.jpg') }}" alt="" /></a>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="partner">
              <a href="#"><img src="{{ asset('img/frontend/dummy/partner-3.jpg') }}" alt="" /></a>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="partner">
              <a href="#"><img src="{{ asset('img/frontend/dummy/partner-4.jpg') }}" alt="" /></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>About Us</h5>
                <p>
                  Established in Cambodia since January 2014 with a strong social mission, CEO Master Club is the first business coaching, networking.
                </p>
              </div>
            </div>
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Address</h5>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Laboratory</a></li>
                  <li><a href="#">Medical treatment</a></li>
                  <li><a href="#">Terms & conditions</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>CEO Master</h5>
                <p>
                  Nam leo lorem, tincidunt id risus ut, ornare tincidunt naqunc sit amet.
                </p>
                <ul>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> Monday - Saturday, 8am to 5:30pm
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> +855 98 77 88 42
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> ceo-info@ceoinstitute.com
                  </li>

                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Our location</h5>
                <p>អគារលេខ០២ ផ្លូវ ៤៨៤ កែងផ្លូវ ៩៧ សង្កាត់ផ្សារដើមថ្កូវ ខណ្ឌ ចំការមន 
      រាជធានីភ្នំពេញ</p>

              </div>
            </div>
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Follow us</h5>
                <ul class="company-social">
                  <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                  <li class="social-dribble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="sub-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInLeft" data-wow-delay="0.1s">
                <div class="text-left">
                  <p>&copy;Copyright - Life Education. All rights reserved.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="text-right">
                  <div class="credits">
                    <!--
                      All the links in the footer should remain intact. 
                      You can delete the links only if you purchased the pro version.
                      Licensing information: https://bootstrapmade.com/license/
                      Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Medicio
                    -->
                    <a href="https://bootstrapmade.com/bootstrap-education-templates/">Design</a> by LIFE EDUCTION
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div>
  <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

 


@endsection