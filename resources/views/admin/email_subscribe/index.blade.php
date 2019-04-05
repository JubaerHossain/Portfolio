@extends('admin.master')
@section('title','Shuttle | Subscribe Email View')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">

           <h3 class="page-title"> Customer Subscribe Email
            </h3>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                @if (Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ Session::get('success') }}</p>
                    </div>
                @endif
            <div class="row" style="margin-top: 80px">



                <div class="col-md-12">
                    <div class="portlet light bordered">
                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                            <thead>
                            <tr>
                                <th> Sl No </th>
                                <th> Email </th>
                                <th> Action </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($Subscribe_email as  $Subscribe_emails)
                                <tr class="odd gradeX">
                                    <td>{{$loop->index+1}}</td>
                                    <td id="nameVal"> {{$Subscribe_emails->email}} </td>

                                    <td>
                                        <a href="#" class="submitButton" data-id="{{$Subscribe_emails->id}}">
                                            <i class="fas fa-pen-square"></i> </a>

                                            <a onclick="return confirm('Are you Want to delete ?')" href="{{ URL::to('Subscribe-Email-delete/' . $Subscribe_emails->id) }}">
                                                <i class="fas fa-trash-alt"></i>  </a>


                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Email Subscribe Update</h4>
                </div>
                <div class="modal-body">
                    <div class="portlet-body form">
                        <form role="form" action="{{ route('Subscribe-Email-update') }}" method="post" >
                            {{ csrf_field() }}
                            <div class="form-body">



                                <div class="form-group">
                                    <label>Name</label>
                                        <input type="text" name="email" class="form-control"  id="location_name" value="">
                                        <input type="hidden" name="email_id" class="form-control"  id="location_id" value="">

                                </div>



                            </div>
                            <div class="form-actions">
                                <button type="submit" value="submit" class="btn blue">Submit</button>
                                <a href="{{route('Subscribe-Email')}}"><button type="button" class="btn default">Cancel</button></a>
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
   

    <script>
        $(document).ready(function(){
            $(".submitButton").click(function(){
                var name = $(this).parents('.gradeX').find('#nameVal').html();
                var id = $(this).attr('data-id');
                $('#location_name').val(name);
                $('#location_id').val(id);
                $("#myModal").modal();
            });
        });
    </script>
@endsection
