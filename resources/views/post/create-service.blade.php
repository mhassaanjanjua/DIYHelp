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
                                        <h2>Get Service from Professionals</h2>
                                    </div>
                                </div>
                            </div>
                            <form id="postForm" action="/p" method="post">
                                @csrf
                                <div class="siteform">
                                    <div class="form-row">
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                            <input name="title" type="text" class="form-control" placeholder="Service Title">
                                            @if ($errors->has('title'))
                                            <strong>
                                                <font color="red">"{{ $errors->first('title') }}"</font>
                                            </strong>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                            <textarea name="description" class="form-control" placeholder="Detailed Service Description"></textarea>
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
                                                <option value="0" disabled="true" selected="true">-Select-</option>
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
                                                <option value="0" disabled="true" selected="true" name="">Select Sub Category</option>
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
                                            <input name="duration" type="numeric" class="form-control" placeholder="Total Working Hours">
                                            @if ($errors->has('duration'))
                                            <strong>
                                                <font color="red">"{{ $errors->first('duration') }}"</font>
                                            </strong>
                                            @endif
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                            <input name="wage" type="text" class="form-control" placeholder="Charges per hour">
                                            @if ($errors->has('wage'))
                                            <strong>
                                                <font color="red">"{{ $errors->first('wage') }}"</font>
                                            </strong>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                            <input name="date" type="date" class="form-control" placeholder="Date">
                                            @if ($errors->has('date'))
                                            <strong>
                                                <font color="red">"{{ $errors->first('date') }}"</font>
                                            </strong>
                                            @endif
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                            <input name="city" class="form-control" placeholder="City">
                                            @if ($errors->has('city'))
                                            <strong>
                                                <font color="red">"{{ $errors->first('city') }}"</font>
                                            </strong>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                            <input name="street" class="form-control" placeholder="Street">
                                            @if ($errors->has('street'))
                                            <strong>
                                                <font color="red">"{{ $errors->first('street') }}"</font>
                                            </strong>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-offset-4 col-lg-offset-4 col-sm-offset-4 col-md-4 col-lg-4 col-sm-4 col-xs-12">
                                            <a style="width:150px" type="submit" onclick="document.getElementById('postForm').submit()" class="btn btn-primary">
                                                <font color="white"><span>Publish</span></font><img src="/images/right-white.png">
                                            </a>
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                                            <form action="../offers">
                                                <a style="width:150px" type="submit" href="../offers" class="btn btn-primary ">
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
                    url: '{!!URL::to('getSubCategories')!!}',
                    data: {
                        'id': cat_id
                    },

                    success: function(data) {
                        op += '<option value="0" selected disabled> Choose SubCategory </option>';
                        for(var i = 0; i < data.length; i++){
                            op += '<option value = "' + data[i].id + '">' + data[i].name + '</option>';
                        }

                        div.find('.sub_categories_id').html(" ");
                        div.find('.sub_categories_id').append(op);
                    },
                    error: function() {}
                });
            });
        });
    </script>

</section>
@endsection