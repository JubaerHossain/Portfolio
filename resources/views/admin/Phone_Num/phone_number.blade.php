@extends('admin.master')
@section('title','Phone Number View')
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
            <h3 class="page-title"> Phone Table
            </h3>

            <a href="{{route('contact-number-add')}}" style="margin-left: 24px;text-decoration: none"><button id="sample_editable_1_new" class="btn sbold green">
                    Add New
                </button></a><br>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet light bordered">
                            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                <thead>
                                <tr>
                                    <th> Sl No </th>
                                    <th> phone </th>
                                    <th> Action </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($phone_detail as  $phone_details)
                                    <tr class="odd gradeX">
                                        <td>{{$loop->index+1}}</td>
                                        <td id="phone_num"> {{$phone_details->phone_num}} </td>

                                        <td>
                                            <a href="#" class="submitButton" data-id="{{$phone_details->id}}">
                                                <i class="fas fa-pen-square"></i> </a>
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
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <div class="portlet-body form">
                        <form role="form" action="{{ route('contact-number-edit') }}" method="post" >
                            {{ csrf_field() }}
                            <div class="form-body">



                                <div class="form-group">
                                    <label>Phone Number</label>
                                        <input type="text" name="phone_num" class="form-control" id="phone_numb" value="">
                                        <input type="hidden" name="phone_id" class="form-control" id="phone_id" value="">
                                </div>



                            </div>
                            <div class="form-actions">
                                <button type="submit" value="submit" class="btn blue">Submit</button>
                                <button type="button" class="btn default">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('js')
    <!-- BEGIN PAGE LEVEL PLUGINS -->


    <script>
        $(document).ready(function(){
            $(".submitButton").click(function(){
                var name = $(this).parents('.gradeX').find('#phone_num').html();
                var id = $(this).attr('data-id');
                $('#phone_numb').val(name);
                $('#phone_id').val(id);
                $("#myModal").modal();
            });
        });
    </script>
@endsection
