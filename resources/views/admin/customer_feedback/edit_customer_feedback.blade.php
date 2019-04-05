
@extends('admin.master')
@section('title','Shuttle | Customer Feedback Edit')
@section('content')
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN THEME PANEL -->
            <!-- END THEME PANEL -->
            <!-- BEGIN PAGE BAR -->
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="{{route('Customer-Feedback')}}">Customer Feedback View</a>
                        <i class="fa fa-arrow-right"></i>
                    </li>
                    <li>
                        <p>Update Customer Feedback</p>
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title">Customer Feedback Update</h3>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-6 ">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered">

                        @if (Session::get('success'))
                            <div class="alert alert-success"><br>
                                <ul>

                                    <li>{{ Session::get('success') }}</li>

                                </ul>

                            </div>
                        @endif

                        <div class="portlet-body form">

                            <form role="form" action="{{ route('Customer-Feedback-update') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-body">

                                    <input type="hidden" name="image_id" value="{{$data->id}}">
                                    <input type="hidden" name="imagee" value="{{$data->image}}">

                                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label>Customer Name</label>
                                        <small class="text-danger">{{ $errors->first('name') }}</small>
                                        <input type="text" name="name" value="{{$data->name}}" class="form-control" required>

                                    </div>
                                    <div class="form-group {{ $errors->has('comment') ? ' has-error' : '' }}">
                                        <label>Customer Comment</label>
                                        <small class="text-danger">{{ $errors->first('comment') }}</small>
                                        <input type="text" name="comment" value="{{$data->comment}}" class="form-control" required>
                                    </div>
                                    <div class="form-group {{ $errors->has('university') ? ' has-error' : '' }}">
                                        <label>Customer University</label>
                                        <small class="text-danger">{{ $errors->first('university') }}</small>
                                        <input type="text" name="university" value="{{$data->university}}" class="form-control" required>
                                    </div>
                                    <div class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">
                                        <label>Customer Picture</label><br>
                                        <small class="text-danger">{{ $errors->first('image') }}</small>
                                        <input id="home-img" type="file" name="image" value="{{ $data->image }}" class="form-control">
                                        <img id="home-img-tag" style="width: 78px;height: 74px; margin-left: 54px;margin-bottom: 18px;margin-top: 21px;"
                                             src="{{ asset('/uploads/customer_feedback/'. $data->image ) }}"  alt="" />

                                    </div>

                                </div>
                                <div class="form-actions">
                                    <button type="submit" value="submit" class="btn blue">Submit</button>
                                    <button type="button" class="btn default"><a href="{{route('Customer-Feedback')}}">Cancel</a></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>

            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
@endsection
@section('js')
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#home-img-tag').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#home-img").change(function(){
            readURL(this);
        });
    </script>

@endsection
