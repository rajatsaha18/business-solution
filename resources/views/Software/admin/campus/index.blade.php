@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
         <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Campus Info</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Campus Info</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Campus Info</h3>

                        </div>
<div class="card-body">
    <table id="example3" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sl.</th>
                                        <th>email</th>
                                        <th>Name</th>
                                        <th>mobile</th>
                                        <th>university_name</th>
                                        <th>department</th>
                                        <th>enrolled_year</th>
                                        <th>activity</th>
                                        <th>message</th>
                                         <th>Created AT</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($campus as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->mobile }}</td>
                                            <td>{{ $item->university_name }}</td>
                                            <td>{{ $item->department }}</td>
                                            <td>{{ $item->enrolled_year }}</td>
                                            <td>{{ $item->activity }}</td>
                                            <td>{!! $item->message !!}</td>
                                            <td>{{$item->created_at}}</td>


                                            <td>
                                                <a href="{{ route('admin.campus.delete',['id' =>$item->id]) }}" class="btn btn-danger" onclick="return confirm('Are you sure delete this ?')"><i class="fa fa-trash"></i></a>

                                            </td>
                                        </tr>
                                    @endforeach
                                <tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
<script src="{{asset('massage/sweetalert/sweetalert.all.js')}}"></script>
<script>
    $(document).ready( function () {
        $('#example3').DataTable({
            "scrollX": true, // Enable horizontal scrolling
        });
    });
</script>

    <script type="text/javascript">
        function deleteData(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    // event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>
@endsection
