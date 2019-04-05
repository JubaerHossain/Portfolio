
@extends('admin.master')
@section('title','Shuttle | Phone Add')
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
                        <a href="{{route('contact-number')}}">Phone Number</a>
                        <i class="fa fa-arrow-right"></i>
                    </li>
                    <li>
                        <p>New Phone Number</p>
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> Phone Number Add</h3>
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
                            <form role="form" action="{{ route('contact-number-store') }}" method="post" >
                                {{ csrf_field() }}
                                <div class="form-body">


                                    <div class="form-group {{ $errors->has('phone_num') ? ' has-error' : '' }}">
                                        <label>Phone Number</label>
                                            <small class="text-danger">{{ $errors->first('phone_num') }}</small>
                                            <input type="text" name="phone_num" value="{{old('phone_num')}}" class="form-control" required>

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
