@extends('layouts.app')

@section('content')

<section>
    <div class="jumbotron">
        <a href="" class="btn btn-primary jmb-btn ml-2 gap-1"> CURRENT SERIES </a>
    </div>

    <div class="container mt-5 p-3">
        <div class="row row-cols-4 p-1 align-items-stretch">
            @foreach ($current_series as $series)
            <div class="col align-items-stretch">
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
        <div class="row justify-content-center">
            <div class="col-md-6 offset-md-3 mt-2">
                <button class="btn btn-primary"> Learn more </button>
            </div>
        </div>

    </div>
    <div class="banner bg-primary p-2">
    
        <div class="container">
            <div class="row d-flex">
                @foreach ($shop_online as $item)
                    <div class="col _ms-col p-2 text-center">
                       
                            <img src="{{ Vite::asset($item['image']) }}" alt="Image description" class="_ms-card-img">
                            <p>{{ $item['sub'] }}</p>
                       
                    </div>
                @endforeach
            </div>
        </div>

    </div>


</section>
@endsection