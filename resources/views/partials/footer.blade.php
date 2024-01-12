<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <h3>{{ $footerItems['Item1']['title'] }}</h3>
                    <ul class="list-unstyled">
                        @foreach ($footerItems['Item1']['links'] as $link)
                            <li>{{ $link }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-2">
                    <h3>{{ $footerItems['Item2']['title'] }}</h3>
                    <ul class="list-unstyled">
                        @foreach ($footerItems['Item2']['links'] as $link)
                            <li>{{ $link }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-2">
                    <h3>{{ $footerItems['Item3']['title'] }}</h3>
                    <ul class="list-unstyled">
                        @foreach ($footerItems['Item3']['links'] as $link)
                            <li>{{ $link }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-6">
                    <img src="{{Vite::asset('resources/img/dc-logo-bg-png') }}" alt="">

                </div>
                <div class="col-2">
                    <h3>{{ $footerItems['Item4']['title'] }}</h3>
                    <ul class="list-unstyled">
                        @foreach ($footerItems['Item4']['links'] as $link)
                            <li>{{ $link }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    
    </div>
    <div class="footer-btm">

    </div>
</footer>