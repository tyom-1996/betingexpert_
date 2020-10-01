<div class="header">
        <div class="container">
    
            <div class="header__inner">
    
    
                <div class="header__logo">

      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('public/img/logo.png') }}" style="max-width: 100px;"class="align-baseline" alt="{{$settings->title}}" />
      </a>
				
				
				</div>
    
                <div class="menu">
                    <nav class="nav">
                        <div class="nav__left">
                            <a href="" class="nav__link">Explore  <span><i class="arrow down"></i></span></a>
                            <a href="" class="nav__link">What We Do <img src="{{ asset('public/img/search.png') }}" alt="">
                            </a>
                        </div>
                        <input type="text">
                        <div class="nav__right">
                            <a href="" class="nav__link">For Entrepreneurs</a>
                            <a href="https://bettingexpert.pro/create/campaign" class="nav__link nav__link--after">Start a Campaign</a>
							
							
							
							@auth
            <li class="nav-item mr-1 dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="{{ asset('public/avatar').'/'.auth()->user()->avatar }}" alt="User" class="rounded-circle avatarUser" width="25" height="25" />
                @php $name = explode(' ', auth()->user()->name); @endphp
                <span class="d-lg-none">{{ trans('users.my_profile') }}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dd-menu-user" aria-labelledby="dropdown03">

                @if (auth()->user()->role == 'admin')
                <a class="dropdown-item" href="{{ url('panel/admin') }}">{{ trans('admin.admin') }}</a>
                <div class="dropdown-divider"></div>
              @endif

              <a href="{{ url('dashboard') }}" class="dropdown-item">
                {{ trans('admin.dashboard') }}
                </a>

              <a href="{{ url('dashboard/campaigns') }}" class="dropdown-item">
              {{ trans('misc.campaigns') }}
                </a>

              <a href="{{ url('user/likes') }}" class="dropdown-item">
                {{ trans('misc.likes') }}
                </a>

              <a href="{{ url('account') }}" class="dropdown-item">
                {{ trans('users.account_settings') }}
                </a>
                <div class="dropdown-divider"></div>

              <a href="{{ url('logout') }}" class="logout dropdown-item">
                {{ trans('users.logout') }}
              </a>

              </div>
            </li>
							 @else
                            <a href="" class="nav__link" data-toggle="modal" data-target="#sign_up">Log In</a>
                            <a href="" class="nav__link" data-toggle="modal" data-target="#exampleModal">Sign Up</a>
							@endauth
                        </div>
                    </nav>
                </div>
    
    
            </div>
    
        </div>
    </div>
	
	