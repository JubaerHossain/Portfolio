@extends('admin.master')
@section('title','Shuttle | Slider  View')
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
                        <a href="">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> Slider Table
            </h3>
            <a href="{{route('Slider-add')}}" style="margin-left: 24px;text-decoration: none"><button id="sample_editable_1_new" class="btn sbold green">
                Add New
            </button></a><br>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet light bordered" style=" border: 1px solid #fff!important; ">

                        <div class="portlet-body" style="border-left: 2px solid #ffffff!important;">
                            <div class="table-toolbar">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="btn-group">
                                            @if (Session::get('success'))
                                                <div class="alert alert-success"><br>
                                                    <ul>

                                                        <li>{{ Session::get('success') }}</li>

                                                    </ul>

                                                </div>
                                            @endif

                                        </div>
                                    </div>
                                </div>


                            </div>
                            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                <thead>
                                <tr>
                                    <th> Sl No </th>
                                    <th> Title </th>
                                    <th> Slider Image </th>
                                    <th> Action </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($slider as  $sliders)
                                    <tr class="odd gradeX">
                                        <td>{{$loop->index+1}}</td>
                                        <td> {{$sliders->title}} </td>
                                        <td><img style="width: 50px;height: 40px" src="{{ asset('/uploads/services/'. $sliders->image ) }}"  alt="" /></td>

                                        <td>
                                            <a href="{{ URL::to('Slider-edit/' . $sliders->id) }}" >
                                                <i class="fas fa-pen-square"></i>
                                            </a>
                                            <a onclick="return confirm('Are you sure to Delete this Service?')" href="{{ URL::to('Slider-Delete/' . $sliders->id) }}">

                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
@endsection
@section('js')
   

@endsection
