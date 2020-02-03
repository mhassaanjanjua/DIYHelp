@extends('theme.default')
@section('content')

<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
</div>

<section class="get_help">
    <div class="category">
        <div class="container">
            <div class="get_help-heading">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <h4>Get Help from video tutorials.</h4>
                    </div>
                </div>
            </div>
            <div class="item-box">


                <iframe width="500" height="300" src="https://www.youtube.com/embed/Vzo4aJuahJ4?controls=0&amp;start=9" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <iframe width="500" height="300" align="right" src="https://www.youtube.com/embed/FxhsJyNy_Ho?controls=0&amp;start=12" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            </div>


            <div class="item-box">

                <iframe width="500" height="300" src="https://www.youtube.com/embed/CDfnui1M4OE?controls=0&amp;start=64" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <iframe width="500" height="300" align="right" src="https://www.youtube.com/embed/uxFKP0OH4Co?controls=0&amp;start=7" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="item-box">

                <iframe width="500" height="300" src="https://www.youtube.com/embed/JjpetmltQGU?controls=0&amp;start=22" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <iframe width="500" height="300" align='right' src="https://www.youtube.com/embed/Hj9VqSnT-bs?controls=0&amp;start=3" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            </div>
        </div>
    </div>
</section>
@endsection