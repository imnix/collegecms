 <nav class="main-header navbar navbar-expand-md navbar-light navbar-dark">
  <div class="container">
    <a href="{{ url('/') }}" class="navbar-brand">
      <img src="http://college.scrimatec.com/assets/images/logo_new.png" alt="" height="30">
    </a>

    <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse order-3" id="navbarCollapse">
      <!-- Left navbar links -->
      <ul class="navbar-nav  ml-auto">
        @foreach(config('cms.navs') as $navtitle => $dropnavs)
        @if($dropnavs['dopnavs'])
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            {{$navtitle}}
          </a>
          <div class="dropdown-menu dropdown-menu-md dropdown-menu-left"> 
            @foreach($dropnavs['navs'] as $dropnav)
            <a href="{{$dropnav['link']}}" class="dropdown-item">
              {{$dropnav['title']}}
            </a> 
            @endforeach  
          </div>
        </li>
        @else
        <li class="nav-item">
          <a href="{{ $dropnavs['link']}}" class="nav-link">{{$navtitle}}</a>
        </li>
        @endif
        @endforeach
      </ul>
      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
          
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>

      </ul>
    </div>
  </nav>