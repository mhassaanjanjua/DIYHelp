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

        <div class="tab">
            <button id="profilebtn" class="tablinks" href="profile" onclick="openCity(event,'Profile')">Profile</button>
            <button class="tablinks" onclick="openCity(event, 'Applications')">Applications</button>
            <button class="tablinks" href="profile" onclick="openCity(event,'Manage')">Manage Posts</button>
            <button class="tablinks" onclick="openCity(event, 'Orders')">Orders</button>
        </div>

        <!-- Profile -->
        <div id="Profile" class="tabcontent">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <div class="category">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-lg-5 col-sm-5 col-xs-12">
                            <div class="form-img">
                                <img src="{{asset(Auth::user()->avatar)}}" onerror="this.onerror=null;this.src='/images/profile.png';" />
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-7 col-sm-7 col-xs-12">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-xs-12">
                                        <div class="well well-sm">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12 col-xs-12">
                                                    <br>
                                                    <h4> Name: {{ Auth::user()->name }}</h4>
                                                    <p></p>
                                                    <h4> Email Address: {{ Auth::user()->email }}</h4>
                                                    <p></p>
                                                    <h4> Username: {{ Auth::user()->username }}</h4>
                                                    <p></p>
                                                    <h4> Date of Birth:{{ Auth::user()->date_of_birth }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Applications -->
        <div id="Applications" class="tabcontent">
            @if(count($applications) > 0)
            @foreach($applications as $app)
            @if ($app->get_services_id != null && $app->user_id == Auth::user()->id)
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
            @if ($app->get_services_id != null && $app->user_id == Auth::user()->id)
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
            @if ($app->offer_services_id != null && $app->user_id == Auth::user()->id)
            <div class="details-heading">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                        <h4>My Applications for offers</h4>
                    </div>
                </div>
            </div>
            @break
            @endif
            @endforeach

            @foreach($applications as $app)
            @if($app->offer_services_id != null && $app->user_id == Auth::user()->id)
            <div class="all_items-box">
                <div class="item-box">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="all_items-box-text">
                                <label style="font-size:200%;"><b>Applicant's Profession: </b><span>{{ $app->offer_services->profession }}</span></label>
                                <span class="prize">Hourly: €{{$app->offer_services->charges }}</span>
                            </div>
                            <div class="all_items-box-category">
                                <p style="font-size:180%;"><b>Sub Category:</b><span> {{ $app->offer_services->sub_categories->name }}</span></p>
                            </div>
                            <div class="all_items-box-text all_items-box-text-info">
                                <p style="font-size:200%;"><b>Service Description: </b><span>{{ $app->offer_services->description }}</span></p>

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

        <!-- Manage Posts -->
        <div id="Manage" class="tabcontent">
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
                    <div class="col-md-2 col-lg-2 col-sm-2 col-xs-12">
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-3 col xs-12">
                            <form action="/profile" method="post">
                                @csrf

                                <input type="hidden" name="applications_id" class="form-control" value="{{$app->id}}">
                                <input type="hidden" name="get_services_id" class="form-control" value="{{$app->get_services->id}}">
                                <input type="hidden" name="status" class="form-control" value="accepted">
                                <button type="submit" class="btn btn-primary back"><span>Accept</span></button>
                            </form>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-3 col xs-12">
                            <form action="/profiles" method="post">
                                @csrf
                                <input type="hidden" name="applications_id" class="form-control" value="{{$app->id}}">
                                <input type="hidden" name="get_services_id" class="form-control" value="{{$app->get_services->id}}">
                                <input type="hidden" name="status" class="form-control" value="rejected">
                                <button type="submit" class="btn btn-primary edit"><span>Reject</span></button>
                            </form>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                            <form action="/delete" method="post">
                                @csrf
                                <input type="hidden" name="applications_id" class="form-control" value="{{$app->id}}">
                                <input type="hidden" name="get_services_id" class="form-control" value="{{$app->get_services->id}}">
                                <input type="hidden" name="status" class="form-control" value="deleted">
                                <button type="submit" class="btn btn-primary edit"><span>Delete</span></button>
                            </form>
                        </div>
                        <div class="col-md-1 col-lg-1 col-sm-1 col-xs-12">
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
                        <div class="col-md-2 col-lg-2 col-sm-2 col xs-12">
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-3 col xs-12">
                            <div class="acknowledge-box-button">
                                <form action="/profile" method="post">
                                    @csrf
                                    <input type="hidden" name="applications_id" class="form-control" value="{{$app->id}}">
                                    <input type="hidden" name="offer_services_id" class="form-control" value="{{$app->offer_services->id}}">
                                    <input type="hidden" name="status" class="form-control" value="accepted">
                                    <button type="submit" class="btn btn-primary back"><span>Accept</span></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-3 col xs-12">
                            <div class="acknowledge-box-button">
                                <form action="/profiles" method="post">
                                    @csrf
                                    <input type="hidden" name="applications_id" class="form-control" value="{{$app->id}}">
                                    <input type="hidden" name="offer_services_id" class="form-control" value="{{$app->offer_services->id}}">
                                    <input type="hidden" name="status" class="form-control" value="rejected">
                                    <button type="submit" class="btn btn-primary edit"><span>Reject</span></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                            <div class="acknowledge-box-button">
                                <form action="/delete" method="post">
                                    @csrf
                                    <input type="hidden" name="applications_id" class="form-control" value="{{$app->id}}">
                                    <input type="hidden" name="offer_services_id" class="form-control" value="{{$app->offer_services->id}}">
                                    <input type="hidden" name="status" class="form-control" value="deleted">
                                    <button type="submit" class="btn btn-primary edit"><span>Delete</span></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-1 col-lg-1 col-sm-1 col xs-12">
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            @else
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="all_items-box-text">
                    <h1>You do not any jobs to manage.</h1>
                </div>
            </div>
            @endif
            <br>
        </div>

        <!-- Orders -->
        <div id="Orders" class="tabcontent">

            <div class="details-heading">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                        <h4>Your Accepted Applications</h4>
                    </div>
                </div>
            </div>

            @if(count($applications) > 0)
            @foreach($applications as $order)
            @if ($order->get_services_id != null && ($order->get_services->user->id == Auth::user()->id || $order->user_id == Auth::user()->id) && $order['status'] == "accepted" )
            <div class="all_items-box">
                <div class="item-box">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="all_items-box-text">
                                <label style="font-size:250%;"><b>Service Title: </b><span>{{ $order->get_services->title }}</span> </label>
                                <span class="prize">Service wage: {{ $order->get_services->wage }}</span>
                            </div>
                            <div class="all_items-box-category">
                                <p style="font-size:200%;"><b>Service Description: </b><span>{{ $order->get_services->description }}</span></p>

                            </div>

                            <div class="all_items-box-category">
                                <p style="font-size:180%;"><b>Service Provider Email: </b><a href="mailto:{{ $order->get_services->user->email  }}" style="color:cadetblue"><span>{{ $order->get_services->user->email  }}</span></a></p>
                                <p style="font-size:180%;"><b>My Email: </b><span>{{ $order->user->email }}</span></p>

                                <h1></h1>
                            </div>
                            <div class="all_items-box-text all_items-box-text-info">
                                <p style="font-size:150%;"><b>Applied On: </b><span> {{ $app['created_at']->format('d.m.Y') }}</span> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach

            @foreach($applications as $order)
            @if ($order->offer_services_id != null && ($order->offer_services->user->id == Auth::user()->id || $order->user_id == Auth::user()->id) && $order['status'] == "accepted" )
            <div class="all_items-box">
                <div class="item-box">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="all_items-box-text">
                                <p style="font-size:250%;"><b>Service Title: </b><span>{{ $order->offer_services->title }}</span> </p>
                                <span class="prize">Service wage: {{ $order->offer_services->wage  }}</span>
                            </div>
                            <div class="all_items-box-category">
                                <p style="font-size:200%;"><b>Service Description: </b><span>{{ $order->offer_services->description }}</span></p>                         
                                <h1></h1>
                            </div>

                            <div class="all_items-box-category">
                                <p style="font-size:180%;"><b>Service Provider Email: </b><a href="mailto:{{ $order->offer_services->user->email  }}" style="color:cadetblue"><span>{{ $order->offer_services->user->email  }}</span></a></p>
                                <p style="font-size:180%;"><b>My Email: </b><span>{{ $order->user->email }}</span></p>

                                <h1></h1>
                            </div>

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
                <h1>There are no orders yet.</h1>
            </div>
        </div>
        @endif
        <br>
        <br>
    </div>
    </div>

    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        window.onload = function() {
            document.getElementById('profilebtn').click();

            var scriptTag = document.createElement("script");
            scriptTag.src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js";
            document.getElementsByTagName("head")[0].appendChild(scriptTag);
        }

        $('body').on('click', '[editbtn]', function() {

            document.getElementById('editable').click();


        });

        $('body').on('click', '[data-editable1]', function() {

            var $el = $(this);

            var $input = $('<input/>').val($el.text());
            $el.replaceWith($input);

            var save = function() {
                var $p = $('<p data-editable1 />').text($input.val());
                $input.replaceWith($p);
            };

        });

        $('body').on('click', '[data-editable2]', function() {

            var $el = $(this);

            $('<input/>').val($el.text());


        });
    </script>
    <br>
</section>
@endsection