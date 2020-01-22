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
        @if(count($applications) > 0)
        @foreach($applications as $app)
        @if($app->get_services_id != null)
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
        @if($app->get_services_id != null)
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
                            <p style="font-size:150%;"><b>City: </b><span>{{ $app->get_services->city }}</span> </p>
                            <p style="font-size:150%;"><b>Status: </b><span>{{ $app->status }}</span> </p>
                            <p style="font-size:150%;"><b>Applied On: </b><span> {{ $app['created_at']->format('d.m.Y') }}</span> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
        
        @foreach($applications as $app)
        @if($app->offer_services_id != null)
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
        @if($app->offer_services_id != null)
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
                            <p style="font-size:150%;"><b>Total Hours: </b><span>{{ $app->offer_services->total_hours }}</span> </p>
                            <p style="font-size:150%;"><b>Status: </b><span>{{ $app->status }}</span> </p>
                            <p style="font-size:150%;"><b>Applied On: </b><span> {{ $app['created_at']->format('d.m.Y') }}</span> </p>
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
                <div class="col-md-2 col-lg-2 col-sm-2 col xs-12">
                </div>
                <div class="col-md-4 col-lg-4 col-sm-4 col xs-12">
                    <div class="acknowledge-box-button">
                        <a href="../services" class="btn btn-primary"><span>All Services</span></a>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-4 col xs-12">
                    <div class="acknowledge-box-button">
                        <a href="../offers" class="btn btn-primary"><span>All Offers</span></a>
                    </div>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-2 col xs-12">
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

</section>
@endsection