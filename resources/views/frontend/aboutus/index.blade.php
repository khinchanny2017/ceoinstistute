@extends('layoutsfrontend.app')

@section('content')
	
	<!-- <body id="page-top" data-spy="scroll" data-target=".navbar-custom"> -->
  <div id="wrapper">
  		@include('layoutsfrontend.nav')
   
      <!-- Section: boxes -->
    <section class="home-section boxs-padding">
        <div class="container">
          <div class="col-md-12">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading">
                <h2 class="h-bold">ABOUT US</h2><hr>
              </div>
            </div>
            <div class="col-md-12 clearfix">
              <div class="col-md-8 param  clearfix">
               <h2> MESSAGE FROM CHAIRMAN</h2>
               <p>Let me extend my warm welcome and deep appreciation to Samdach, Excellency, Oknha, Lork Chumteav, ladies and gentlemen, and not least students for your trust in CEO Master Club, which is the first business coaching, networking, and awarding platform in Cambodia that empowers Cambodian SME business leaders to transform their family businesses into more standard, corporate ones, thus contributing to the enhancement of the quality and sustainability of local enterprises and to the development of the county’s domestic economy and preparing Cambodia to better benefit from the ASEAN integration and globalization processes. </p>
               <p>Due to the high quality and effectiveness of its training as well as its continuous support to its members, CEO Master Club has been highly appreciated by its members and all relevant entities, enabling it to rise to fame in a short period of time with the current membership of 500 business owners, who are operating over a thousand companies and providing over 30000 jobs. </p>
               <p>Seeing the shortage of quality human resources, which is a key factor in boosting productivity and efficiency at CEO Master Club’s members’ enterprises and businesses in particular and in the country as a whole in the current context of ASEAN integration and globalization processes, CEO Institute has been founded to offer students the opportunity to receive special undergraduate-course training that focuses primarily on hands-on learning at the workplace, guaranteeing that all students will get jobs upon graduation. In this regard, the key factors that enable CEO Institute to secure jobs for its students include: </p>               
              </p>
              </div>
              <div class="col-md-4">
                  <img src="{{ asset('img/frontend/03.png') }}" class="img-responsive" alt="" />
              </div>
              <div class="col-md-12">
                <p>1.  Our training is especially designed to train students to become great employees, great managers and great business leaders. </p>
              <p>2.  Our training is strict with a prime focus on teaching/learning quality and discipline, helping students to get hands-on knowledge and to adopt the right mindset and right character at the workplace. </p>
              <p>3.  Our trainers are chief executives (CEOs), business owners, managers, and professionals with high expertise and great practical experience.</p>
              <p>4.  There exists great support among CEO Master Club’s members and other business partners that are always in need of graduates from CEO Institute.</p>
              <p>Owing to the high quality of training at CEO Institute and our students’ diligence, our students have obtained jobs within a short period of time of their study. This is great pride of CEO Institute in particular and of Cambodia as a whole in our effort to contribute to the development of standard human resources in Cambodia.</p><br>

              <p>We welcome Samdach, Excellency, Oknha, Lork Chumteav, and all students to our institute at all times. </p>
              <p>Best wishes,</p>

              <h5>Om Seng Bora, Chairman of CEO Insitute</h5> <hr>
              </div>
            </div>
            <div class="col-md-12">
              <h2>SUB DEGREE</h2>
               <div class="sub-degree">
                  <div class="img-responsive">
                    <img src="{{ asset('img/frontend/photo/sub-degree.jpg') }}" class="img-responsive thumbnail" alt="">
                  </div>
               </div>
            </div>
          </div>
      </div>
      
    </section>
    <!-- /Section: boxes -->

  
  

   	@include ('layoutsfrontend.footer')

  </div>
  <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>


@endsection()