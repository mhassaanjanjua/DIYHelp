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
                    <h4>Your Accepted Applications</h4>
                </div>
            </div>
        </div>

        @if(count($orders) > 0)
        @foreach($orders as $order)
        @if ($order->get_services_id != null && $order->get_services->user->id == Auth::user()->id && $order['status'] == "accepted" )
        <div class="all_items-box">
            <div class="item-box">
                <div class="row">
                    <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12">
                        <div class="all_items-box-text">
                            <h1>Get Service Application Details</h1>
                            <h2>Service Title: {{ $order->get_services->title }}</h2>
                            <span class="prize">Service wage: {{ $order->get_services->wage }}</span>
                        </div>
                        <div class="all_items-box-category">
                            <h3>Service Description: {{ $order->get_services->description }}</h3>
                            <h4>Service Location: {{ $order->get_services->city }}</h4>
                            <h1></h1>
                        </div>

                        <div class="all_items-box-text">
                            <h1>Application Posted By</h1>
                            <h2>User Name: {{ $order->get_services->user->name }}</h2>
                        </div>
                        <div class="all_items-box-category">
                            <h3>User Email: {{ $order->get_services->user->email }}</h3>
                            <h1></h1>
                        </div>

                        <div class="all_items-box-text">
                            <h1>Application Applied By</h1>
                            <h2>User Name: {{ $order->user->name }}</h2>
                        </div>
                        <div class="all_items-box-category">
                            <h3>User Email: {{ $order->user->email }}</h3>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        @endif
        @endforeach


        @else
        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12">
            <div class="all_items-box-text">
                <h1>You have not applied to any job</h1>
            </div>
        </div>

        @endif
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