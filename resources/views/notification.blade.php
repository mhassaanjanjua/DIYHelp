@extends('layouts.app')

@section('content')
<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
</div>

<section class="Offer_Posted_after_verification_msg">
    <div class="container">
        <div class="Offer_Posted_after_verification-box">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                    <div class="Offer_Posted_after_verification-box-img">
                        <img src="img/Thank_you.png">
                    </div>
                </div>
                <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12">
                    <div class="Offer_Posted_after_verification-box-text">
                        <h1>Thank you!<br>Your request has been sent.<br>We will let you know when the offer will be accepted . </h1>
                    </div>
                    <div class="Offer_Posted_after_verification-box-button">
                        <a class="btn btn-primary"><span>HomePage</span><img src="img/right-white.png"></a>
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