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
              <div class="section-heading text-center">
                <h2 class="h-bold">Faculty of Information Systems</h2><hr>
              </div>
            </div>
            <div class="section-12">
            	<img src="{{ asset('img/frontend/colleges/faculty.jpg')}}" class="img-responsive thumbnail" alt="">
            </div>
          </div>
      </div>
      
    </section>
    <!-- /Section: boxes -->

  
  

   	@include ('layoutsfrontend.footer')

  </div>
  <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>


@endsection()