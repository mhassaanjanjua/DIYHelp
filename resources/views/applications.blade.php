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
                    <h4>Your Applications</h4>
                </div>
            </div>
        </div>
        <div class="all_items-box">
            <div class="item-box">
                <div class="row">
                    @foreach($applications as $app)
                    <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12">
                        <div class="all_items-box-text">
                            <h1>Application Details</h1>
                            <h2>{{ $app->get_services->title }}</h2>
                            <span class="prize">{{ $app->get_services->wage }}</span>
                        </div>
                        <div class="all_items-box-category">
                            <h3>{{ $app->get_services->description }}</h3>
                            <h4>add something here</h4>
                        </div>
                        <!-- <div class="all_items-box-text all_items-box-text-info">
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
                        </div> -->

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
                        <a href="../notification" class="btn btn-primary edit"><span>Apply</span></a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-3 col xs-12">
                </div>
            </div>
        </div>
    </div>
</section>