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
                <h2 class="h-bold text-center">SPEED FEATURE</h2><hr>
              </div>
            </div>
                        
          </div>
      </div>
    </section>
    <div class="container">
    	<div class="row">
    		<div class="col-md-12 text-center">
    			<img src="{{ asset('img/frontend/profiles/Profile.jpg') }}" class="img-responsive thumbnail" alt="">
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-md-12 text-center">
    			<img src="{{ asset('img/frontend/profiles/Profile-01.jpg') }}" class="img-responsive thumbnail" alt="">
    		</div>
    	</div>

    	<div class="row">
    		<div class="col-md-12 text-center">
    			<img src="{{ asset('img/frontend/profiles/Profile-Moa Savin.jpg') }}" class="img-responsive thumbnail" alt="">
    		</div>
    	</div>
    </div>

   
       
    <!-- /Section: boxes -->

   	@include ('layoutsfrontend.footer')

  </div>
  <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>


@endsection()