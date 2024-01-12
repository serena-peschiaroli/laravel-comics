
<header>
    <div class="header-top" style="height: 1rem;"></div>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC" style="height: 3rem;">
            </a>
            <nav class="navbar">
                <ul class="nav">
                    @foreach ($navItems as $item)
                        <li class="nav-item">
                         <a href="{{ $item['url'] }}" class="nav-link">{{ $item['title'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </nav>
</header>
