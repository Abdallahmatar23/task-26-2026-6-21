<nav class="navbar navbar-expand-lg navigation menu-black">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('client/images/logo.png') }}" alt="" class="img-fluid">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
        aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="ti-menu  text-black"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="menu navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}" id="navbarDropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">
                    Home
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('dashboard') }}" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dashboard
                </a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('all-categories') }}" id="navbarDropdown2"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Administrator
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                    <a class="dropdown-item" href="{{ route('all-categories') }}">Categories</a>
                    <a class="dropdown-item" href="{{ route('all-posts') }}">Posts</a>
                    {{-- <a class="dropdown-item" href="{{ route('all-users') }}">Users</a> --}}
                    {{-- <a class="dropdown-item" href="{{ route('all-comments') }}">Comments</a> --}}
                    {{-- <a class="dropdown-item" href="{{ route('all-contacts') }}">Contacts</a> --}}
                </div>
            </li>
            <li class="nav-item"><a href="{{ url('contact') }}" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
        </ul>
        <div class="text-lg-right search ml-4">
            <div class="search_toggle"><i class="ti-search text-white"></i></div>
        </div>
    </div>
</nav>
