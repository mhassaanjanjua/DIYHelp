@extends('theme.default')

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
                                        <h2>Offer your Services</h2>
                                    </div>
                                </div>
                            </div>
                            <form id="postForm" action="/o" method="post">
                                @csrf
                                <div class="siteform">
                                    <div class="form-row">
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                            <input name="profession" type="text" class="form-control" placeholder="Profession">
                                            @if ($errors->has('profession'))
                                            <strong>
                                                <font color="red">"{{ $errors->first('profession') }}"</font>
                                            </strong>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                            <textarea name="description" class="form-control" placeholder="Description"></textarea>
                                            @if ($errors->has('description'))
                                            <strong>
                                                <font color="red">"{{ $errors->first('description') }}"</font>
                                            </strong>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="siteform">
                                    <div class="form-row">
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                            <select id="categories_id" type="numeric" class="categories_id" categories_id name="categories_id" required>
                                                <option value="0" disabled="true" selected="true">-Select Job Category-</option>
                                                @if(count($categories) > 0)
                                                @foreach($categories as $cat)
                                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                @endforeach
                                                @endif
                                            </select>
                                            @if ($errors->has('categories_id'))
                                            <strong>
                                                <font color="red">"{{ $errors->first('categories_id') }}"</font>
                                            </strong>
                                            @endif
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12" class="sub_categories_id">
                                            <select id="sub_categories_id" type="numeric" sub_categories_id class="sub_categories_id" name="sub_categories_id" required>
                                                <option value="0" disabled="true" selected="true" name="">Select Job Sub Category</option>
                                            </select>
                                            @if ($errors->has('sub_categories_id'))
                                            <strong>
                                                <font color="red">"{{ $errors->first('sub_categories_id') }}"</font>
                                            </strong>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                            <input name="availability_hours" type="numeric" class="form-control" placeholder="Total Working Hours">
                                            @if ($errors->has('availability_hours'))
                                            <strong>
                                                <font color="red">"{{ $errors->first('availability_hours') }}"</font>
                                            </strong>
                                            @endif
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                            <input name="total_hours" type="numeric" class="form-control" placeholder="Total Working Hours per Day">
                                            @if ($errors->has('total_hours'))
                                            <strong>
                                                <font color="red">"{{ $errors->first('total_hours') }}"</font>
                                            </strong>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                            <input name="charges" type="numeric" class="form-control" placeholder="Charges per hour">
                                            @if ($errors->has('charges'))
                                            <strong>
                                                <font color="red">"{{ $errors->first('charges') }}"</font>
                                            </strong>
                                            @endif
                                        </div>
                                    </div>

                                    <input type="hidden" name="availability_days" class="form-control" value="2020/01/01">
                                    @if ($errors->has('availability_days'))
                                    <strong>
                                        <font color="red">"{{ $errors->first('availability_days') }}"</font>
                                    </strong>
                                    @endif

                                    <div class="form-row">
                                        <div class="col-md-offset-4 col-lg-offset-4 col-sm-offset-4 col-md-4 col-lg-4 col-sm-4 col-xs-12">
                                            <a style="width:150px" type="submit" onclick="document.getElementById('postForm').submit()" class="btn btn-primary">
                                                <font color="white"><span>Publish</span></font><img src="/images/right-white.png">
                                            </a>
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                                            <form action="../services">
                                                <a style="width:150px" type="submit" href="../services" class="btn btn-primary ">
                                                    <font color="white"><span>Cancel</span></font>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
                    type: 'get',
                    url: '{!!URL::to('get_SubCategories')!!}',
                    data: {
                        'id': cat_id
                    },

                    success:function(data) {
                        op += '<option value="0" selected disabled> Choose SubCategory </option>';
                        for(var i = 0; i < data.length; i++){
                            op += '<option value = "' + data[i].id + '">' + data[i].name + '</option>';
                        }
                        
                        div.find('.sub_categories_id').html(" ");
                        div.find('.sub_categories_id').append(op);
                    },
                    error: function() {
                    }
                });
            });
        });
    </script>

</section>
@endsection