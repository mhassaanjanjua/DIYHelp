@extends('layouts.app')

@section('content')
<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
</div>
<section class="catagory sub-catagory">
    <div class="container">
        <div class="catagory-heading">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <h2>Sub Categories</h2>
                    <h4>Here comes the Category Name!!!</h4>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($sub_categories as $sub_category)
            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                <a href="{{ url('/services') }}/{{$sub_category->id}}">
                    <div class="catagory-box">
                        <img src="/images/Door-Renovation.png">
                        <h2>{{ $sub_category['name'] }}</h2>
                        <p>{{ $sub_category['description'] }}</p>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
        <div class="row">
            <div class="col-md-offset-4 col-lg-offset-4 col-sm-offset-4 col-md-4 col-lg-4 col-sm-4 col-xs-12">
                <div class="catagory-box-button">
                    <a href="../categories" class="btn btn-primary">Back</a>
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