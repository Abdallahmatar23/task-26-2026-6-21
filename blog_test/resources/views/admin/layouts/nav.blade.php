<nav class="navbar navbar-expand-lg navigation menu-white">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('client/images/logo-w.png') }}" alt="" class="img-fluid">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
        aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="ti-menu  text-white"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="menu navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('home') }}" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Home
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('blog') }}" id="navbarDropdown2" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Blog Posts
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                    <a class="dropdown-item" href="{{ route('full-width') }}">Standard Fullwidth</a>
                    <a class="dropdown-item" href="{{ route('left-sidebar') }}">Standard Left Sidebar</a>
                    <a class="dropdown-item" href="{{ route('right-sidebar') }}">Standard Right Sidebar</a>
                </div>
            </li>

            <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
            <li class="nav-item"><a href="{{ route('category') }}" class="nav-link">Category</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('blog') }}" id="navbarDropdown3" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Post Format
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                    <a class="dropdown-item" href="{{ route('video') }}">Video Formats</a>
                    <a class="dropdown-item" href="{{ route('audio') }}">Audio Format</a>
                    <a class="dropdown-item" href="{{ route('link') }}">Quote Format</a>
                    <a class="dropdown-item" href="{{ route('gallery') }}">Gallery Format</a>
                    <a class="dropdown-item" href="{{ route('image') }}">Image Format</a>
                </div>
            </li>

            <li class="nav-item"><a href="{{ url('contact') }}" class="nav-link">Contact</a></li>
        </ul>
        <div class="text-lg-right search ml-4">
            <div class="search_toggle"><i class="ti-search text-white"></i></div>
        </div>
    </div>
</nav>
