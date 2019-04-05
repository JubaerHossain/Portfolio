
@extends('admin.master')
@section('title','Shuttle | Service Edit')
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
                        <a href="{{route('Home-description')}}">Home Description View</a>
                        <i class="fa fa-arrow-right"></i>
                    </li>
                    <li>
                        <p>New Home Description</p>
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title">Home Description Add</h3>
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

                            <form role="form" action="{{ route('Home-description-update') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-body">

                                    <input type="hidden" name="image_id" value="{{$data->id}}">
                                    <input type="hidden" name="imagee" value="{{$data->image}}">


                                    <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                        <label>Title</label>
                                        <small class="text-danger">{{ $errors->first('title') }}</small>
                                        <input type="text" name="title" value="{{$data->title}}" class="form-control" required>

                                    </div>
                                    <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                                        <label>Description</label>
                                        <small class="text-danger">{{ $errors->first('description') }}</small>
                                        <textarea style="margin:0px;height: 178px;width: 479px;" type="text" name="description" value="{{$data->description}}" class="form-control" required>{{$data->description}}</textarea>

                                    </div>
                                    <div class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">
                                        <label>Image</label><br>
                                        <small class="text-danger">{{ $errors->first('image') }}</small>
                                        <input id="home-img" type="file" name="image" value="{{ $data->image }}" class="form-control">
                                        <img id="home-img-tag" style="width: 78px;height: 74px; margin-left: 54px;margin-bottom: 18px;margin-top: 21px;"
                                             src="{{ asset('/uploads/home_description/'. $data->image ) }}"  alt="" />

                                    </div>

                                </div>
                                <div class="form-actions">
                                    <button type="submit" value="submit" class="btn blue">Submit</button>
                                    <button type="button" class="btn default"><a href="{{route('Home-description')}}">Cancel</a></button>
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
