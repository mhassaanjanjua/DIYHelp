@extends('theme.default')

@section('content')
<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
</div>
<section class="category">
    <div class="container">
        <div class="catagory-heading">
            <div class="row">
                <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12">
                </div>
                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-12">
                    <a href="../p/create-service" class="btn btn-primary"><span>Create a Service</span><img src="/images/right-white.png"></a>
                </div>
            </div>
        </div>
        
        @if (count($offers) == 0)
        <div class="all_items-box">
            <div class="item-box" align="center">
                <h4>No offers available right now. Post your required service to get one.</h4>
            </div>
        </div>
        @else
        @foreach($offers as $offer)
        <div class="all_items-box">
            <div class="item-box">
                <a href="{{ url('/offerdetails') }}/{{$offer->id}}">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                            <div class="all_items-box-img">
                                @if($offer->categories_id == 1)
                                <img src="/images/home-improvement1.png" height="200" width="200">
                                
                                @elseif($offer->categories_id == 2)
                                <img src="/images/garden.jpeg" height="200" width="200">

                                @elseif($offer->categories_id == 3)
                                <img src="/images/pool.png" height="200" width="200">

                                @elseif($offer->categories_id == 4)
                                <img src="/images/electric.png" height="200" width="200">

                                @elseif($offer->categories_id == 5)
                                <img src="/images/water.png" height="220" width="200">

                                @elseif($offer->categories_id == 6)
                                <img src="/images/family and child support.png" height="200" width="200">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12">
                            <div class="all_items-box-text">
                                <h2>{{ $offer['profession'] }}</h2>
                                <span class="prize">Hourly: €{{ $offer['charges'] }}</span>
                            </div>
                            <div class="all_items-box-text">
                                <p>{{ $offer['description'] }}</p>
                                <span class="prize">Posted on: {{ $offer['created_at']->format('d.m.Y') }}</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            @endif

        </div>
        <br>
        <br>
        <br>
    </div>
</section>
@endsection