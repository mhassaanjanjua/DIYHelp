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
                    <h4>Service Details</h4>
                </div>
            </div>
        </div>
        <div class="all_items-box">
            <div class="item-box">
                <div class="row">
                    @foreach($services as $service)
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                        <div class="all_items-box-img">
                            @if($service->categories_id == 1)
                            <img src="/images/home-improvement1.png" height="300" width="200">
                            
                            @elseif($service->categories_id == 2)
                            <img src="/images/garden.jpeg" height="300" width="200">

                            @elseif($service->categories_id == 3)
                            <img src="/images/pool.png" height="300" width="200">

                            @elseif($service->categories_id == 4)
                            <img src="/images/electric.png" height="300" width="200">

                            @elseif($service->categories_id == 5)
                            <img src="/images/water.png" height="300" width="200">

                            @elseif($service->categories_id == 6)
                            <img src="/images/family and child support.png" height="300" width="200">
                            @endif
                        </div>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12">
                        <div class="all_items-box-text">
                            <h2>{{ $service->title }}</h2>
                            <span class="prize">Hourly: €{{ $service->wage }}</span>
                        </div>
                        <div class="all_items-box-category">
                            <h3>Sub Category: {{ $service->sub_categories->name }}</h3>
                        </div>
                        <div class="all_items-box-text all_items-box-text-info">
                            <h5>Description</h5>
                            <p>{{ $service->description }}</p>
                        </div>
                        <div class="all_items-box-text all_items-box-text-info">
                            <p style="font-size:150%;"><b>City: </b><span>{{ $service->city }}</span> </p>
                            <p style="font-size:150%;"><b>Total Hours: </b><span>{{ $service->duration }}</span> </p>
                            <p style="font-size:150%;"><b>Posted By: </b><span> {{ $service->user->name }}</span> </p>
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
                    <form action="../services">
                        <div class="acknowledge-box-button">
                            <button style="height:50px;width:200px" type="submit" href="../services" class="btn btn-primary e"><span>Back</span></button>

                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-3 col xs-12">
                    <form action="/details" method="post">
                        @csrf
                        <div class="acknowledge-box-button">
                            @foreach($services as $service)
                            @if($service->user_id != Auth::user()->id)

                            @if(count($applications) > 0)
                            @foreach($applications as $app)
                            @if($app->get_services_id != null && $app->user_id != Auth::user()->id)

                            <input type="hidden" name="get_services_id" class="form-control" value="{{$service->id}}">
                            <input type="hidden" name="user_id" class="form-control" value="{{Auth::user()->id}}">
                            <input type="hidden" name="status" class="form-control" value="waiting">
                            <button style="height:50px;width:200px" type="submit" class="btn btn-primary edit"><span>Apply</span></button>

                            @else
                            <input type="hidden" name="get_services_id" class="form-control" value="{{$service->id}}">
                            <input type="hidden" name="user_id" class="form-control" value="{{Auth::user()->id}}">
                            <input type="hidden" name="status" class="form-control" value="waiting">
                            <button style="height:50px;width:200px" type="submit" class="btn btn-primary edit"><span>Apply</span></button>
                            @endif
                            @endforeach
                            @endif
                            @if(count($applications) == 0)
                            <input type="hidden" name="get_services_id" class="form-control" value="{{$service->id}}">
                            <input type="hidden" name="user_id" class="form-control" value="{{Auth::user()->id}}">
                            <input type="hidden" name="status" class="form-control" value="waiting">
                            <button style="height:50px;width:200px" type="submit" class="btn btn-primary edit"><span>Apply</span></button>
                            @endif
                            @endif
                            @endforeach

                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-3 col xs-12">
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