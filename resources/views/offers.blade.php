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
                                <img src="/images/Thank_you.png">
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
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col xs-12">
                <div class="acknowledge-box-button">
                    <a href="../p/create-service" class="btn btn-primary"><span>Post an Ad</span><img src="/images/right-white.png"></a>
                </div>
            </div>
        </div>
        <!-- <div class="pagination">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <ul class="page_navi">
                        <li>
                            <a href="javascript:;">Pages</a>
                        </li>
                        <li class="current">
                            <a href="javascript:;">1</a>
                        </li>
                        <li>
                            <a href="javascript:;">2</a>
                        </li>
                        <li>
                            <a href="javascript:;">3</a>
                        </li>
                        <li>
                            <a href="javascript:;">4</a>
                        </li>
                        <li>
                            <a href="javascript:;">5</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> -->
    </div>
</section>
@endsection