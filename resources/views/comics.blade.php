@extends('layouts.app')

@section('content')

<section>
    <div class="jumbotron">
        <a href="" class="btn btn-primary jmb-btn ml-2"> CURRENT SERIES </a>
    </div>

    <div class="container mt-5">
        <div class="row row-cols-4">
            @foreach ($current_series as $series)
            <div class="col">
                <div class="card">
                    <img src="{{ $series['thumb'] }}" class="card-img-top" alt="{{ $series['series'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $series['series'] }}</h5>
                        <p class="card-text">{{ $series['price'] }}</p>
                        <p class="card-text">{{ $series['type'] }}</p>
                    </div>
                </div>


            </div>
            @endforeach


        </div>
    </div>

</section>
@endsection