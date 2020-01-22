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
                    <h4>Applications Dashboard</h4>
                </div>
            </div>
        </div>
        @if(count($applications) > 0)
        @foreach($applications as $app)
        @if ($app->get_services_id != null && $app->get_services->user->id == Auth::user()->id && $app['status'] == 'waiting' )
        <div class="details-heading">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                    <h4>My Applications for services</h4>
                </div>
            </div>
        </div>
        @break
        @endif
        @endforeach

        @foreach($applications as $app)
        @if ($app->get_services_id != null && $app->get_services->user->id == Auth::user()->id && $app['status'] == 'waiting' )
        <div class="all_items-box">
            <div class="item-box">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="all_items-box-text">
                            <h2>Service Title: {{ $app->get_services->title }}</h2>
                            <span class="prize">Hourly: €{{ $app->get_services->wage }}</span>
                        </div>
                        <div class="all_items-box-category">
                            <h3>Sub Category: {{ $app->get_services->sub_categories->name }}</h3>
                        </div>
                        <div class="all_items-box-text all_items-box-text-info">
                            <h5>Description</h5>
                            <p>{{ $app->get_services->description }}</p>
                        </div>
                        <div class="all_items-box-text all_items-box-text-info">
                            <p style="font-size:150%;"><b>Status: </b><span>{{ $app->status }}</span> </p>
                            <p style="font-size:150%;"><b>Applied On: </b><span> {{ $app['created_at']->format('d.m.Y') }}</span> </p>
                        </div>
                        <div class="all_items-box-text all_items-box-text-info">
                            <p style="font-size:150%;"><b>Applicant's Name: </b><span>{{ $app->user->name }}</span> </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="all_items-box-order-detail-button">

                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="acknowledge-box-button">
                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                <form action="/approve" method="post">
                                    @csrf

                                    <input type="hidden" name="applications_id" class="form-control" value="{{$app->id}}">
                                    <input type="hidden" name="get_services_id" class="form-control" value="{{$app->get_services->id}}">
                                    <input type="hidden" name="status" class="form-control" value="accepted">
                                    <button type="submit" class="btn btn-primary back"><span>Accept</span></button>
                                </form>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                <form action="/approves" method="post">
                                    @csrf
                                    <input type="hidden" name="applications_id" class="form-control" value="{{$app->id}}">
                                    <input type="hidden" name="get_services_id" class="form-control" value="{{$app->get_services->id}}">
                                    <input type="hidden" name="status" class="form-control" value="rejected">
                                    <button type="submit" class="btn btn-primary edit"><span>Reject</span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach

        @foreach($applications as $app)
        @if ($app->offer_services_id != null && $app->offer_services->user->id == Auth::user()->id && $app['status'] == 'waiting' )
        <div class="details-heading">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                    <br>
                    <br>
                    <h4>My Applications for offers</h4>
                </div>
            </div>
        </div>
        @break
        @endif
        @endforeach

        @foreach($applications as $app)
        @if ($app->offer_services_id != null && $app->offer_services->user->id == Auth::user()->id && $app['status'] == 'waiting' )
        <div class="all_items-box">
            <div class="item-box">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="all_items-box-text">
                            <h2>Applicant's Profession: {{ $app->offer_services->profession }}</h2>
                            <span class="prize">Hourly: €{{$app->offer_services->charges }}</span>
                        </div>
                        <div class="all_items-box-category">
                            <h3>Sub Category: {{ $app->offer_services->sub_categories->name }}</h3>
                        </div>
                        <div class="all_items-box-text all_items-box-text-info">
                            <h5>Description</h5>
                            <p>{{ $app->offer_services->description }}</p>
                        </div>
                        <div class="all_items-box-text all_items-box-text-info">
                            <p style="font-size:150%;"><b>Status: </b><span>{{ $app->status }}</span> </p>
                            <p style="font-size:150%;"><b>Applied On: </b><span> {{ $app['created_at']->format('d.m.Y') }}</span> </p>
                        </div>
                        <div class="all_items-box-text all_items-box-text-info">
                            <p style="font-size:150%;"><b>Applicant's Name: </b><span>{{ $app->user->name }}</span> </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="all_items-box-order-detail-button">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="acknowledge-box-button">
                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                <form action="/approve" method="post">
                                    @csrf
                                    <input type="hidden" name="applications_id" class="form-control" value="{{$app->id}}">
                                    <input type="hidden" name="offer_services_id" class="form-control" value="{{$app->offer_services->id}}">
                                    <input type="hidden" name="status" class="form-control" value="accepted">
                                    <button type="submit" class="btn btn-primary back"><span>Accept</span></button>
                                </form>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                <form action="/approves" method="post">
                                    @csrf
                                    <input type="hidden" name="applications_id" class="form-control" value="{{$app->id}}">
                                    <input type="hidden" name="offer_services_id" class="form-control" value="{{$app->offer_services->id}}">
                                    <input type="hidden" name="status" class="form-control" value="rejected">
                                    <button type="submit" class="btn btn-primary edit"><span>Reject</span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
        @else
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="all_items-box-text">
                <h1>You have not applied to any job.</h1>
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
@endsection