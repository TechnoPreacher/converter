<div class="container-fluid">
	<ul class="navbar-nav me-auto mb-2 mb-lg-0">
		@isset($data)
			@foreach($data as $d)
				<li class="nav-item">
					<a class="nav-link" href="<?=$d->link; ?>"><?=$d->title; ?></a>
				</li>
			@endforeach
		@endisset
		@if (Route::has('login')) <!-- if there is "login" in routes - bootstrap auth mechanism is installed-->
		@auth
			<li class="nav-item">
				<a href="{{ url('/dashboard') }}" class="nav-link">{{ __('Dashboard') }}</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('logout') }}"
				   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
					{{ __('Logout') }}
				</a>
			</li>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
				@csrf
			</form>
		@else
			<li class="nav-item">
				<a href="{{ route('login') }}"
				   class="nav-link">{{ __('Login') }}</a>
			</li>
			@if (Route::has('register'))
				<li class="nav-item">
					<a href="{{ route('register') }}"
					   class="nav-link">{{ __('Register') }}</a>
				</li>
			@endif
		@endauth
		@endif
	</ul>
</div>
