@extends('admin.master')
@section('title','Shuttle Subscribe  View')
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
            <h3 class="page-title"> Subscribe Email Table
            </h3>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet light bordered">

                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                <thead>
                                <tr>
                                    <th> Sl No </th>
                                    <th> Title </th>
                                    <th> Image </th>
                                    <th> Action </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($different_service_detail as  $different_service_details)
                                    <tr class="odd gradeX">
                                        <td>{{$loop->index+1}}</td>
                                        <td> {{$different_service_details->title}} </td>
                                        <td><img style="width: 50px;height: 40px" src="{{ asset('/uploads/services/'. $different_service_details->image ) }}"  alt="" /></td>

                                        <td>
                                            <a href="{{ URL::to('Service-edit/' . $different_service_details->id) }}" >
                                                <i class="fas fa-pen-square"></i>
                                            </a>
                                            <a onclick="return confirm('Are you sure to Delete this Service?')" href="{{ URL::to('Service-delete/' . $different_service_details->id) }}">

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
