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
                    <span>Get services</span>
                    <h2>Get Easy and Affordable help</h2>
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
                                        <h2>Get Services</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="siteform">
                                <!-- /////////////////////////////////////////////////////////////////////////// -->
                                <form action="/p" method="post">
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
                                            <input name="title" type="text" class="form-control" placeholder="Title">
                                            @if ($errors->has('title'))
                                            <strong>{{ $errors->first('title') }}</strong>
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
                            <div class="siteform">

                                <div class="form-row">
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                        <input name="category" type="text" class="form-control" placeholder="Select Job Category">
                                        @if ($errors->has('category'))
                                        <strong>{{ $errors->first('category') }}</strong>
                                        @endif
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                        <input name="sub_category" type="text" class="form-control" placeholder="Select Job Sub Category">
                                        @if ($errors->has('sub_category'))
                                        <strong>{{ $errors->first('sub_category') }}</strong>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                        <input name="duration" type="text" class="form-control" placeholder="Duration">
                                        @if ($errors->has('duration'))
                                        <strong>{{ $errors->first('duration') }}</strong>
                                        @endif
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                        <input name="date" type="text" class="form-control" placeholder="Date">
                                        @if ($errors->has('date'))
                                        <strong>{{ $errors->first('date') }}</strong>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                        <input name="street" class="form-control" placeholder="Street">
                                        @if ($errors->has('street'))
                                        <strong>{{ $errors->first('street') }}</strong>
                                        @endif
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                        <input name="city" class="form-control" placeholder="City">
                                        @if ($errors->has('city'))
                                        <strong>{{ $errors->first('city') }}</strong>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                    <input name="wage" type="text" class="form-control" placeholder="Charges per hour (optional)">
                                    @if ($errors->has('wage'))
                                    <strong>{{ $errors->first('wage') }}</strong>
                                    @endif
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                    <input name="hours" type="text" class="form-control" placeholder="Total Number of Hours">
                                    @if ($errors->has('hours'))
                                    <strong>{{ $errors->first('hours') }}</strong>
                                    @endif
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                                        <button type="submit" class="btn btn-primary">Cancel</button>
                                    </div>
                                    <div class="col-md-offset-4 col-lg-offset-4 col-sm-offset-4 col-md-4 col-lg-4 col-sm-4 col-xs-12">
                                        <button type="submit" class="btn btn-primary"><span>Post</span><img src="/images/right-white.png"></button>
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