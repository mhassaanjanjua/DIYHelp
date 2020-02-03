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

        @if(count($applications) > 0)
        @foreach($applications as $app)
        @if ($app->get_services_id != null && $app->get_services->user->id == Auth::user()->id && $app['status'] == 'waiting' )
        <div class="all_items-box">
            <div class="item-box">
                <div class="row">
                    <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12">
                        <div class="all_items-box-text">
                            <h1>Get Service Application Details</h1>
                            <h2>Service Title: {{ $app->get_services->title }}</h2>
                            <span class="prize">Service wage: {{ $app->get_services->wage }}</span>
                        </div>
                        <div class="all_items-box-category">
                            <h3>Service Description: {{ $app->get_services->description }}</h3>
                            <h4>Service Location: {{ $app->get_services->city }}</h4>
                            <h1></h1>
                        </div>

                        <div class="all_items-box-text">
                            <h1>Application Posted By</h1>
                            <h2>User Name: {{ $app->get_services->user->name }}</h2>
                        </div>
                        <div class="all_items-box-category">
                            <h3>User Email: {{ $app->get_services->user->email }}</h3>
                            <h1></h1>
                        </div>

                        <div class="all_items-box-text">
                            <h1>Application Applied By</h1>
                            <h2>User Name: {{ $app->user->name }}</h2>
                        </div>
                        <div class="all_items-box-category">
                            <h3>User Email: {{ $app->user->email }}</h3>
                        </div>

                    </div>
                </div>
            </div>
            <div class="acknowledge-box-button">
                <form action="/approve" method="post">
                    @csrf

                    <input type="hidden" name="applications_id" class="form-control" value="{{$app->id}}">
                    <input type="hidden" name="get_services_id" class="form-control" value="{{$app->get_services->id}}">
                    <input type="hidden" name="status" class="form-control" value="accepted">
                    <button type="submit" class="btn btn-primary edit"><span>Accept</span></button>
                </form>

                <form action="/approves" method="post">
                    @csrf
                    <input type="hidden" name="applications_id" class="form-control" value="{{$app->id}}">
                    <input type="hidden" name="get_services_id" class="form-control" value="{{$app->get_services->id}}">
                    <input type="hidden" name="status" class="form-control" value="rejected">
                    <button type="submit" class="btn btn-primary edit"><span>Reject</span></button>
                </form>

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
       
    </div>
</section>