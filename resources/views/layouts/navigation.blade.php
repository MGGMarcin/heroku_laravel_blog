<nav class="navbar navbar-expand-xxl navbar-dark bg-dark fixed-top" aria-label="Seventh navbar example">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarsExampleXxl">
            <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/blog">Blog</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto mb-2 mb-xl-0">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown04">
                            <li><a class="dropdown-item" href="{{ route('blog.list') }}">{{ __('My posts') }}</a></li>
                            <li>
                                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest    
            </ul>
        </div>
    </div>
</nav>
