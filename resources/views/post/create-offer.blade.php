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
                                        <h2>Offer Services</h2>
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
                                            <strong><font color="red">"{{ $errors->first('profession') }}"</font></strong>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                            <textarea name="description" class="form-control" placeholder="Description"></textarea>
                                            @if ($errors->has('description'))
                                            <strong><font color="red">"{{ $errors->first('description') }}"</font></strong>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="siteform">
                                    <div class="form-row">
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                            <select class="form-control" type="numeric" name="categories_id" required>
                                                <option name="">Select Job Category</option>
                                                @if(count($categories) > 0)
                                                @foreach($categories as $key => $category)
                                                <option value="{!!$category->id !!}">{!!$category->name !!}</option>
                                                @endforeach
                                                @endif
                                            </select>
                                            @if ($errors->has('categories_id'))
                                            <strong><font color="red">"{{ $errors->first('categories_id') }}"</font></strong>
                                            @endif
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                            <select class="form-control" type="numeric" name="sub_categories_id" required>
                                                <option name="">Select Job Sub Category</option>
                                                @if(count($sub_categories) > 0)
                                                @foreach($sub_categories as $key => $subCategory)
                                                <option value="{!!$subCategory->id !!}">{!!$subCategory->name !!}</option>
                                                @endforeach
                                                @endif
                                            </select>
                                            @if ($errors->has('sub_categories_id'))
                                            <strong><font color="red">"{{ $errors->first('sub_categories_id') }}"</font></strong>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                            <input name="availability_hours" type="numeric" class="form-control" placeholder="Total Working Hours">
                                            @if ($errors->has('availability_hours'))
                                            <strong><font color="red">"{{ $errors->first('availability_hours') }}"</font></strong>
                                            @endif
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                            <input name="total_hours" type="numeric" class="form-control" placeholder="Total Working Hours per Week">
                                            @if ($errors->has('total_hours'))
                                            <strong><font color="red">"{{ $errors->first('total_hours') }}"</font></strong>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                            <input name="charges" type="numeric" class="form-control" placeholder="Charges per hour">
                                            @if ($errors->has('charges'))
                                            <strong><font color="red">"{{ $errors->first('charges') }}"</font></strong>
                                            @endif
                                        </div>
                                    </div>

                                    <input type="hidden" name="availability_days" class="form-control" value="2020/01/01">
                                    @if ($errors->has('availability_days'))
                                    <strong><font color="red">"{{ $errors->first('availability_days') }}"</font></strong>
                                    @endif

                                    <div class="form-row">
                                        <div class="col-md-offset-4 col-lg-offset-4 col-sm-offset-4 col-md-4 col-lg-4 col-sm-4 col-xs-12">
                                            <a style="width:150px" type="submit" onclick="document.getElementById('postForm').submit()" class="btn btn-primary">
                                                <font color="white"><span>Post</span></font><img src="/images/right-white.png">
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
</section>
@endsection