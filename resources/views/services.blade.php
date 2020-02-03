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
        @if (count($services) == 0)
        <div class="all_items-box">
            <div class="item-box" align="center">
                <h4>No services available right now. Post your own offer to get one.</h4>
            </div>
        </div>
        @else
        @foreach($services as $service)
        <div class="all_items-box">
            <div class="item-box">
                <a href="{{ url('/details') }}/{{$service->id}}">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                            <div class="all_items-box-img">
                                <img src="/images/Thank_you.png">
                            </div>
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12">
                            <div class="all_items-box-text">
                                <h2>{{ $service->title }}</h2>
                                <span class="prize">Hourly: €{{ $service->wage }}</span>
                            </div>
                            <div class="all_items-box-text">
                                <p>{{ $service->description }}</p>
                                <span class="prize">Posted on: {{ $service->created_at }}</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
        @endif

    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col xs-12">
            <div class="acknowledge-box-button">
                <a href="../o/create-offer" class="btn btn-primary"><span>Create an Offer</span><img src="/images/right-white.png"></a>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('change', '.categories_id', function() {
                var cat_id = $(this).val();
                var div = $(this).parent().parent();
                var op = " ";

                $.ajax({
                    type:'get',
                    url:'{!!URL::to('getSubCategories')!!}',
                    data:{'id':cat_id},
                    success:function(data) {
                        op += '<option value="0" selected disabled> Choose SubCategory </option>';
                        for (var i = 0; i < data.length; i++) {
                            op += '<option value = "' + data[i].id + '">' + data[i].name + '</option>';
                        }
                        div.find('.sub_categories_id').html(" ");
                        div.find('.sub_categories_id').append(op);
                    },
                    error:function() {}
                });
            });

            $(document).on('change', '.sub_categories_id', function() {
                var sub_cat_id = $(this).val();
                var a = $(this).parent().parent();
                var op = "";

                console.log("Sub");
                console.log(sub_cat_id);

                $.ajax({
                    type:'get',
                    url:'{!!URL::to('getServices')!!}',
                    servicedata:{'id':sub_cat_id},
                    success:function(data) {
                        console.log("Success");
                        console.log(data[0].id);
                        console.log(data[0].title);
                    },
                    error:function() {}
                });
            });
        });
    </script>
</section>
@endsection