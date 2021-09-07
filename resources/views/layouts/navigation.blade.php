<nav class="navbar navbar-expand-xl navbar-dark bg-dark fixed-top" aria-label="Sixth navbar example">
    <div class="container">
        <a class="navbar-brand" href="/">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample06"
            aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample06">
            <ul class="navbar-nav me-auto mb-2 mb-xl-0">
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
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown06" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown06">
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
