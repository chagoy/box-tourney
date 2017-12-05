<header class="navbar" id="rnavbar">
	<section class="navbar-section">
		<a href="/" class="navbar-brand mr-2">Boxing Bud</a>
	</section>
	<section class="navbar-center">
        <a href="/about" class="btn btn-link">About</a>
		<a href="/tournament" class="btn btn-link r-link">Start Tournament</a>
		<a href="/boxers" class="btn btn-link">Boxers</a>
		<a href="/add" class="btn btn-link">Add Boxer</a>
		@if (Auth::guest())
            <a class="btn btn-link" href="{{ route('login') }}">Login</a>
            <a class="btn btn-link" href="{{ route('register') }}">Register</a>
        @else
            <a class="btn btn-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
		@endif
	</section>
	<section class="navbar-section">
		{{-- <a href="/tournament" class="btn btn-link">Start Tournament</a>
		<a href="/boxers" class="btn btn-link">Boxers</a>
		<a href="/add" class="btn btn-link">Add Boxer</a>
		@if (Auth::guest())
            <a class="btn btn-link" href="{{ route('login') }}">Login</a>
            <a class="btn btn-link" href="{{ route('register') }}">Register</a>
        @else
            <a class="btn btn-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
		@endif --}}
	</section>
</header>

