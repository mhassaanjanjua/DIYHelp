@extends('layouts.app')

@section('content')
<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
</div>

<section class="all_items">
    <div class="container">
        <div class="details-heading">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                    <h4>Your Order Details</h4>
                </div>
            </div>
        </div>
        <div class="all_items-box">
            <div class="item-box">
                <div class="row">
                    @foreach($offers as $offer)
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                        <div class="all_items-box-img">
                            <img src="img/Thank_you.png">
                        </div>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12">
                        <div class="all_items-box-text">
                            <h2>{{ $offer['profession'] }}</h2>
                            <span class="prize">50 Euro</span>
                        </div>
                        <div class="all_items-box-category">
                            <h3>{{ $offer->categories->name }}</h3>
                            <h4>{{ $offer->sub_categories->name }}</h4>
                        </div>
                        <div class="all_items-box-text all_items-box-text-info">
                            <h5>Addresss: {{ $offer['street'] }}, {{ $offer['city'] }}</h5>
                            <p>{{ $offer['description'] }}</p>
                            <ul>
                                <li><span>Availibility Hours: {{ $offer['availibility_hours'] }}</span> </li>
                                <li><span>Charges Per Hour: {{ $offer['charges'] }}</span> </li>
                                <li><span>Total Number of Hours: {{ $offer['total_hours'] }}</span> </li>
                            </ul>
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
                    <div class="acknowledge-box-button">
                        <a href="services/" class="btn btn-primary back"><span>Back (Fix This!!!)</span></a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-3 col xs-12">
                    <div class="acknowledge-box-button">
                        <a href="signUp.html" class="btn btn-primary edit"><span>Edit</span></a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-3 col xs-12">
                </div>
            </div>
        </div>
    </div>
</section>