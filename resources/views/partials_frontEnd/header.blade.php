

<header class="top-area">
			<div class="header-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-2">
							<div class="logo">
								<a href="index.html">
									tour<span>Nest</span>
								</a>
							</div><!-- /.logo-->
						</div><!-- /.col-->
						<div class="col-sm-10">
							<div class="main-menu">
							
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<i class="fa fa-bars"></i>
									</button><!-- / button-->
								</div><!-- /.navbar-header-->
								<div class="collapse navbar-collapse">      
									<ul class="nav navbar-nav navbar-right">
									  <li class="smooth-menu"><a href="#home">home</a></li>
									  <li class="smooth-menu"><a href="#gallery">Destination</a></li>
									  <li class="smooth-menu"><a href="#pack">Packages </a></li>
									  <li class="smooth-menu"><a href="#spo">Special Offers</a></li>
									  <li class="smooth-menu"><a href="#blog">blog</a></li>
									  <li class="smooth-menu"><a href="#subs">subscription</a></li>
									  
									  @guest
									  @if (Route::has('login'))
										<li><a href="{{ route('login') }}" class="nav-item nav-link">{{ ('Login') }}</a></li>
									  @endif
								  
									  @if (Route::has('register'))
										<li><a class="nav-item nav-link" href="{{ route('register') }}">{{ ('Register') }}</a></li>
									  @endif
									  @else
									  <li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>
										<div class="dropdown-menu">
										  <a class="dropdown-item" href="{{ route('logout') }}"
											onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">
											  {{ __('Logout') }}
											</a>
										  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
											@csrf
										  </form>
										  @if(Auth::user()->is_admin == 1)
											<a class="dropdown-item" href="{{ url('dashboard')}}">Dashboard</a>
										  @endif
										</div>
									  </li>


									  @endguest
								  
									  <li>
										<button class="book-btn">book now</button>
									  </li><!--/.project-btn-->
									</ul>
								  </div><!--/.collapse.navbar-collapse-->
							</div><!-- /.main-menu-->
						</div><!-- /.col-->
					</div><!-- /.row -->
					<div class="home-border"></div><!-- /.home-border-->
				</div><!-- /.container-->
			</div><!-- /.header-area -->

		</header><!-- /.top-area-->