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
        <div class="details-heading">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                    <h4>Offered Service Details</h4>
                </div>
            </div>
        </div>
        <div class="all_items-box">
            <div class="item-box">
                <div class="row">
                    @foreach($offers as $offer)
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
                        <div class="all_items-box-category">
                            <h3>Sub Category: {{ $offer->sub_categories->name }}</h3>
                        </div>
                        <div class="all_items-box-text all_items-box-text-info">
                            <h5>Description</h5>
                            <p>{{ $offer['description'] }}</p>
                        </div>
                        <div class="all_items-box-text all_items-box-text-info">
                            <p style="font-size:150%;"><b>Total Hours: </b><span>{{ $offer['total_hours'] }}</span> </p>
                            <p style="font-size:150%;"><b>Posted By: </b><span> {{ $offer->user->name }}</span> </p>
                        </div>

                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="all_items-box-order-detail-button">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-3 col xs-12">
                </div>
                <div class="col-md-3 col-lg-3 col-sm-3 col xs-12">
                    <form action="../offers">
                        <div class="acknowledge-box-button">
                            <button style="height:50px;width:200px" type="submit" href="../offers" class="btn btn-primary "><span>Back</span></button>

                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-3 col xs-12">
                    <form action="/offerdetails" method="post">
                        @csrf
                        <div class="acknowledge-box-button">
                            @foreach($offers as $offer)
                            <input type="hidden" name="get_offers_id" class="form-control" value="{{$offer->id}}">
                            <input type="hidden" name="user_id" class="form-control" value="{{Auth::user()->id}}">
                            <input type="hidden" name="status" class="form-control" value="waiting">

                            <button style="height:50px;width:200px" type="submit" class="btn btn-primary edit"><span>Apply</span></button>
                            @endforeach
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-3 col xs-12">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection