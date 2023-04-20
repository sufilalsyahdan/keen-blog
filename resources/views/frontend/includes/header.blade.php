  <!-- BEGIN HEADER -->
  <div class="header">
    <div class="container">
      <a class="site-logo" href="index.html"><img src="{{ asset('assets/corporate/img/logos/logo-corp-red.png') }}" alt="Metronic FrontEnd"></a>

      <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

      <!-- BEGIN NAVIGATION -->
      <div class="header-navigation pull-right font-transform-inherit">
        <ul>
          <li class="{{ (request()->is('home')) ? 'active' : '' }}"><a href="/">Home</a></li>

          <li class="{{ (request()->is('blog*')) ? 'active' : '' }}"><a href="/blog">My Blog</a></li>

          {{-- <li class="dropdown active">
            <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
              Home 
            </a>
              
            <ul class="dropdown-menu">
              <li><a href="index.html">Home Default</a></li>
              <li><a href="index-header-fix.html">Home with Header Fixed</a></li>
              <li class="active"><a href="index-without-topbar.html">Home without Top Bar</a></li>
            </ul>
          </li> --}}

          <!-- BEGIN TOP SEARCH -->
          {{-- <li class="menu-search">
            <span class="sep"></span>
            <i class="fa fa-search search-btn"></i>
            <div class="search-box">
              <form action="#">
                <div class="input-group">
                  <input type="text" placeholder="Search" class="form-control">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Search</button>
                  </span>
                </div>
              </form>
            </div> 
          </li> --}}
          <!-- END TOP SEARCH -->
        </ul>
      </div>
      <!-- END NAVIGATION -->
    </div>
  </div>
  <!-- Header END -->