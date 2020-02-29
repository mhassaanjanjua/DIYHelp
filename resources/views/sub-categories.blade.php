@extends('theme.default')

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
                    @foreach($sub_categories as $sub_category)
                    <h2>{{ $sub_category->categories->name }}</h2>
                    <h4>Sub Categories:</h4>
                    @break
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($sub_categories as $sub_category)
            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                <a href="{{ url('/services') }}/{{$sub_category->id}}">
                    <div class="catagory-box">
                        @if($sub_category->categories_id == 1)
                        <img src="/images/home-improvement1.png">
                        
                        @elseif($sub_category->categories_id == 2)
                        <img src="/images/garden.jpeg">

                        @elseif($sub_category->categories_id == 3)
                        <img src="/images/pool.png">

                        @elseif($sub_category->categories_id == 4)
                        <img src="/images/electric.png">

                        @elseif($sub_category->categories_id == 5)
                        <img src="/images/water.png">

                        @elseif($sub_category->categories_id == 6)
                        <img src="/images/family and child support.png">
                        @endif
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
@endsection