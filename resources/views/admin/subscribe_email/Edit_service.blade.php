
@extends('admin.master');
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
                        <a href="{{route('different-service')}}">Service View</a>
                        <i class="fa fa-arrow-right"></i>
                    </li>
                    <li>
                        <p>New Service Number</p>
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> Service Number Add</h3>
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

                            <form role="form" action="{{ route('different-service-update') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-body">

                                    <input type="hidden" name="image_id" value="{{$data->id}}">


                                    <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                        <label>Title</label>
                                        <small class="text-danger">{{ $errors->first('title') }}</small>
                                        <input type="text" name="title" value="{{$data->title}}" class="form-control" required>

                                    </div>
                                    <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                        <label>Image</label><br>
                                        <small class="text-danger">{{ $errors->first('image') }}</small>
                                        <img style="width: 78px;height: 74px; margin-left: 54px;margin-bottom: 18px;margin-top: 21px;"
                                             src="{{ asset('/uploads/services/'. $data->image ) }}"  alt="" />
                                        <input type="file" name="image" value="{{ $data->image }}" class="form-control">

                                    </div>

                                </div>
                                <div class="form-actions">
                                    <button type="submit" value="submit" class="btn blue">Submit</button>
                                    <button type="button" class="btn default">Cancel</button>
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
