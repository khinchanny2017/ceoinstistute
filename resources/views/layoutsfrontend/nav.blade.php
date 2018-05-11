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
          <div class="container-logo">
             <a class="navbar-brand" href="/">
              <img class="log-img ceo-institute" src="{{ asset('img/logo_ceoins.png') }}" alt="" />              
          </a>
          <a class="navbar-brand" href="http://www.ceomasterclub.com/">
            <img class="log-img img-ceo" src="{{ asset('img/frontend/logo_ceo.png') }}" alt="">
          </a>
          </div>
         
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
           
             <li class="dropdown">
              <a href="{{ url('/about-us') }}" class="dropdown-toggle" data-toggle="dropdown">About US<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{ url('/about-us') }}">About CEO Institute</a></li>                
                <li><a href="{{ url('/speed-feature') }}">Speed Feature</a></li>                
              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Colleges<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{ url('#') }}">Faculty of International Bussiness Management</a></li>
                <li><a href="{{ url('/account-finance') }}">Faculty of Accounting and Finance </a></li>
                <li><a href="{{ url('/marketing-sales') }}">Faculty of Marketing and Sale Management</a></li>
                <li><a href="{{ url('/infor-system') }}">Faculty of Information Systems</a></li>
                <li><a href="{{ url('/hospi-tourism') }}">Faculty of Hospitality and Tourism Management</a></li>
                <li><a href="{{ url('/design-firm') }}">Faculty of Design and Film Production </a></li>
                <li><a href="{{ url('/foreign-language') }}">Faculty of Foreign Languages </a></li>
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
              
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>