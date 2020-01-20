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
                    @foreach($services as $service)
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                        <div class="all_items-box-img">
                            <img src="img/Thank_you.png">
                        </div>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12">
                        <div class="all_items-box-text">
                            <h1>Order Details</h1>
                            <h2>{{ $service['title'] }}</h2>
                            <span class="prize">50 Euro</span>
                        </div>
                        <div class="all_items-box-category">
                            <h3>{{ $service->categories->name }}</h3>
                            <h4>{{ $service->sub_categories->name }}</h4>
                        </div>
                        <div class="all_items-box-text all_items-box-text-info">
                            <h5>Addresss: {{ $service['street'] }}, {{ $service['city'] }}</h5>
                            <p>{{ $service['description'] }}</p>
                            <ul>
                                <li><span>Duration: {{ $service['duration'] }}</span> </li>
                                <li><span>Charges Per Hour: {{ $service['wage'] }}</span> </li>
                                <li><span>Total Number of Hours: {{ $service['duration'] }}</span> </li>
                            </ul>
                        </div>

                        <div class="all_items-box-text all_items-box-text-info">
                            <h1>User Details</h1>
                            <p>{{ $service->user->name }}</p>
                            <ul>
                                <li><span>Phone number: ((Add Rating Here))</span> </li>
                                <li><span>Email ID: ((Add Email ID Here))</span> </li>
                                <li><span>Rating: ((Add Rating Here))</span> </li>
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
                    <form action="/details" method="post">
                        @csrf
                        <div class="acknowledge-box-button">
                            @foreach($services as $service)
                            <input  name="get_services_id" value="{{$service->id}}">
                            <input  name="user_id" value="{{Auth::user()->id}}">
                            <input  name="status" value="waiting">

                            <button  type="submit" class="btn btn-primary edit"><span>Apply</span></button>
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