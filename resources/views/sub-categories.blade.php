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
                    <h4>Home Improvement</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                <a href="services">
                    <div class="catagory-box">
                        <img src="/images/Door-Renovation.png">
                        <h2>Door Renovation</h2>
                        <p>Zwei flinke Boxer jagen die quirlige Eva und ihren Mops durch Sylt. Franz jagt im komplett verwahrlosten Taxi quer durch Bayern. Zwölf Boxkämpfer jagen</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                <a href="services">
                    <div class="catagory-box">
                        <img src="/images/Carpet-Cleaning.png">
                        <h2>Carpet Cleaning</h2>
                        <p>Zwei flinke Boxer jagen die quirlige Eva und ihren Mops durch Sylt. Franz jagt im komplett verwahrlosten Taxi quer durch Bayern. Zwölf Boxkämpfer jagen</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                <a href="services">
                    <div class="catagory-box">
                        <img src="/images/Wall-Paints.png">
                        <h2>Wall Paints</h2>
                        <p>Zwei flinke Boxer jagen die quirlige Eva und ihren Mops durch Sylt. Franz jagt im komplett verwahrlosten Taxi quer durch Bayern. Zwölf Boxkämpfer jagen</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                <a href="services">
                    <div class="catagory-box">
                        <img src="/images/Floor-Renovation.png">
                        <h2>Floor Renovation</h2>
                        <p>Zwei flinke Boxer jagen die quirlige Eva und ihren Mops durch Sylt. Franz jagt im komplett verwahrlosten Taxi quer durch Bayern. Zwölf Boxkämpfer jagen</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                <a href="services">
                    <div class="catagory-box">
                        <img src="/images/Window-Fixaation.png">
                        <h2>Window Fixaation</h2>
                        <p>Zwei flinke Boxer jagen die quirlige Eva und ihren Mops durch Sylt. Franz jagt im komplett verwahrlosten Taxi quer durch Bayern. Zwölf Boxkämpfer jagen</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                <a href="services">
                    <div class="catagory-box">
                        <img src="/images/Garden-Services1.png">
                        <h2>Garden Services</h2>
                        <p>Zwei flinke Boxer jagen die quirlige Eva und ihren Mops durch Sylt. Franz jagt im komplett verwahrlosten Taxi quer durch Bayern. Zwölf Boxkämpfer jagen</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-4 col-lg-offset-4 col-sm-offset-4 col-md-4 col-lg-4 col-sm-4 col-xs-12">
                <div class="catagory-box-button">
                    <a href="categories" class="btn btn-primary">Back</a>
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