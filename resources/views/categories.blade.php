@extends('layouts.app')

@section('content')
<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
</div>
<section class="catagory">
    <div class="container">
        {{ csrf_field() }}
        <div class="catagory-heading">
            <div class="row">
                <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12">
                    <h2>Categories</h2>
                    <p>We have help from everywhere</p>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-12">
                    <a href="services" class="btn btn-primary">All Services</a>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($categories as $category)
            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                <a href="{{ url('/sub-categories') }}/{{$category->id}}">
                    <div class="catagory-box">
                        <img src="/images/Home-Improvement.png">
                        <h2>{{ $category['name'] }}</h2>
                        <p>{{ $category['description'] }}</p>
                    </div>
                </a>
            </div>

            @endforeach
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