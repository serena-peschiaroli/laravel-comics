<footer>
    <div class="footer-top pt-3 d-flex align-items-start">
        <div class="container p2">
            <div class="row">
                <div class="col-2 flex-shrink-1">
                    <h3>{{ $footerItems['Item1']['title'] }}</h3>
                    <ul class="list-unstyled">
                        @foreach ($footerItems['Item1']['links'] as $link)
                            <li> <a href="" class="list-group-item list-group-item-action">{{ $link }}</li></a>
                        @endforeach
                    </ul>
                </div>
                <div class="col-2 flex-shrink-1">
                    <h3>{{ $footerItems['Item2']['title'] }}</h3>
                    <ul class="list-unstyled">
                        @foreach ($footerItems['Item2']['links'] as $link)
                            <li><a href="" class="list-group-item list-group-item-action"> {{ $link }}</li></a>
                        @endforeach
                    </ul>
                </div>
                <div class="col-2 flex-shrink-1">
                    <h3>{{ $footerItems['Item3']['title'] }}</h3>
                    <ul class="list-unstyled">
                        @foreach ($footerItems['Item3']['links'] as $link)
                            <li><a href="" class="list-group-item list-group-item-action"> {{ $link }}</li></a>
                        @endforeach
                    </ul>
                </div>
                <div class="col-6 ms_footer_col">
                    {{-- <img src="{{Vite::asset('resources/img/dc-logo-bg-png') }}" alt=""> --}}

                </div>
                <div class="col-2 mb-0 mt-0 align-self-start flex-shrink-1">
                    <h3>{{ $footerItems['Item4']['title'] }}</h3>
                    <ul class="list-unstyled">
                        @foreach ($footerItems['Item4']['links'] as $link)
                            <li> <a href="" class="list-group-item list-group-item-action"> {{ $link }}</li> </a>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    
    </div>
    <div class="footer-btm d-flex justify-content-between">
        <div class="btn">
            <a href="" class="btn login-btn">SIGN-UP NOW!</a>
        </div>
        <div class="nav-icons">
            <ul class="list-unstyled d-flex gap-2">
                @foreach ($socialIcons as $icon)
                <li> <a href=""><img src="{{ Vite::asset($icon['icon']) }}" alt="{{ $icon['name'] }}"></li></a>
                    
                @endforeach
            </ul>
            
        </div>
    </div>

    </div>
</footer>