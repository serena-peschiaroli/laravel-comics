
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
                            {{-- classe condizionale che richiama ulr() metodo su facade Reqyest--}}
                         <a href="{{ $item['url'] }}" class="nav-link {{Request::url() == url($item['url']) ? 'active' : '' }}">{{ $item['title'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </nav>
</header>
