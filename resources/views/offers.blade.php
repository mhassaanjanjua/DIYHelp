@extends('layouts.app')

@section('content')
<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
</div>
<section class="all_items">
    <div class="container">
        <div class="sitefilterform">
            <form>
                <div class="row">
                </div>
                <div class="row">
                    <div class="col-md-offset-9 col-lg-offset-9 col-sm-offset-9 col-md-3 col-lg-3 col-sm-3 col-xs-12">
                        <select class="form-control">
                            <option>Sort By</option>
                            <option>Sort By 1</option>
                            <option>Sort By 2</option>
                            <option>Sort By 3</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
        @foreach($offers as $offer)
        <div class="all_items-box">
            <div class="item-box">
                <a href="{{ url('/offerdetails') }}/{{$offer->id}}">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                            <div class="all_items-box-img">
                                <img src="/images/Thank_you.png">
                            </div>
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12">
                            <div class="all_items-box-text">
                                <h2>{{ $offer['profession'] }}</h2>
                                <span class="prize">Euro {{ $offer['total_hours'] }}</span>
                            </div>
                            <div class="all_items-box-text">
                                <p>{{ $offer['description'] }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col xs-12">
                <div class="or">
                    <h3>OR</h3>
                </div>
                <div class="acknowledge-box-button">
                    <a href="../p/create-service" class="btn btn-primary"><span>Post an Ad</span><img src="/images/right-white.png"></a>
                </div>
            </div>
        </div>
        <div class="pagination">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <ul class="page_navi">
                        <li>
                            <a href="javascript:;">Pages</a>
                        </li>
                        <li class="current">
                            <a href="javascript:;">1</a>
                        </li>
                        <li>
                            <a href="javascript:;">2</a>
                        </li>
                        <li>
                            <a href="javascript:;">3</a>
                        </li>
                        <li>
                            <a href="javascript:;">4</a>
                        </li>
                        <li>
                            <a href="javascript:;">5</a>
                        </li>
                    </ul>
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