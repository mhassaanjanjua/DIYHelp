@extends('layouts.app')

@section('content')
<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
</div>

<section class="site-forms blue">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="form-heading">
                    <span>Offer services</span>
                    <h2>I want to offer my services as</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-md-10 col-lg-10 col-sm-10 col-xs-12">
                <div class="form-overlay">
                    <div class="row">
                        <div class="col-md-5 col-lg-5 col-sm-5 col-xs-12">
                            <div class="form-img">
                                <img src="/images/team.png" />
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-7 col-sm-7 col-xs-12">
                            <div class="row">
                                <div class="col-md-11 col-lg-11 col-sm-11 col-xs-12">
                                    <div class="form-heading-caption">
                                        <h2>Offer Services</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="siteform">
                                <form action="/o" method="post">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                            <input name="name" type="text" class="form-control" placeholder="Full Name Here">
                                            @if ($errors->has('name'))
                                            <strong>{{ $errors->first('name') }}</strong>
                                            @endif
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                            <input name="email" type="email" class="form-control" placeholder="Email Here">
                                            @if ($errors->has('email'))
                                            <strong>{{ $errors->first('email') }}</strong>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                            <input name="telephone" type="tel" class="form-control" placeholder="Phone No">
                                            @if ($errors->has('telephone'))
                                            <strong>{{ $errors->first('telephone') }}</strong>
                                            @endif
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                            <input name="profession" type="text" class="form-control" placeholder="Profession">
                                            @if ($errors->has('profession'))
                                            <strong>{{ $errors->first('profession') }}</strong>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                            <textarea name="description" class="form-control" placeholder="Description"></textarea>
                                            @if ($errors->has('description'))
                                            <strong>{{ $errors->first('description') }}</strong>
                                            @endif
                                        </div>
                                    </div>

                            </div>

                        </div>
                        <div class="siteform">
                            <form>
                                <div class="form-row">
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                        <select id="categories_id" class="form-control" name="categories_id" required>
                                            <option name="">Select Job Category</option>
                                            @if(count($categories) > 0)
                                            @foreach($categories as $key => $category)
                                            <option value="{!!$category->id !!}">{!!$category->name !!}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                        @if ($errors->has('category'))
                                        <strong>{{ $errors->first('category') }}</strong>
                                        @endif
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                        <select id="sub_categories_id" class="form-control" name="sub_categories_id" required>
                                            <option name="">Select Job Sub Category</option>
                                            @if(count($sub_categories) > 0)
                                            @foreach($sub_categories as $key => $subCategory)
                                            <option value="{!!$subCategory->id !!}">{!!$subCategory->name !!}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                        @if ($errors->has('sub_category'))
                                        <strong>{{ $errors->first('sub_category') }}</strong>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                        <input name="availability_hours" type="text" class="form-control" placeholder="Availability Hours">
                                        @if ($errors->has('availability_hours'))
                                        <strong>{{ $errors->first('availability_hours') }}</strong>
                                        @endif
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                        <input name="availability_days" type="date" class="form-control" placeholder="Availability Days">
                                        @if ($errors->has('availability_days'))
                                        <strong>{{ $errors->first('availability_days') }}</strong>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-row">
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                    <input name="charges" type="text" class="form-control" placeholder="Charges per hour (optional)">
                                    @if ($errors->has('charges'))
                                    <strong>{{ $errors->first('charges') }}</strong>
                                    @endif
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                    <input name="total_hours" type="text" class="form-control" placeholder="Total Number of Hours">
                                    @if ($errors->has('total_hours'))
                                    <strong>{{ $errors->first('total_hours') }}</strong>
                                    @endif
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                                        <a href="../services" class="btn btn-primary"><span>Back</span><img src="/images/left-white.png"> </a>
                                    </div>
                                    <div class="col-md-offset-4 col-lg-offset-4 col-sm-offset-4 col-md-4 col-lg-4 col-sm-4 col-xs-12">
                                        <button type="submit" class="btn btn-primary"><span>Offer</span><img src="/images/right-white.png"></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<footer class="footer-global">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                <div class="copy-right">
                    <p>Copyright © 2019 DIY-Help. All Rights Reserved.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                <div class="develop">
                    <p><span>Small Masters Project.</span></p>
                </div>
            </div>
        </div>
    </div>
</footer>