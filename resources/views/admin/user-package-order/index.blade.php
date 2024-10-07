@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
         <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>User Prackage Order List</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">User Prackage Order List</li>
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
                            <h3 class="card-title">User Prackage Order List</h3>
                            
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sl.</th>
                                        <th>User Name</th>
                                        <th>Package Name</th>
                                        <th>Payment Method</th>
                                        <th>Transaction Id</th>
                                        <th>Payment Status</th>
                                        <th>Order Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->user->name ??''}}</td>
                                            <td>{{ $item->package->name ??'' }}</td>
                                            <td class="badge bg-success">{{$item->payment_method->name ??''}}</td>
                                            <td>{{$item->transaction_id}}</td>
                                            <td>
                                                @if($item->payment_status == 1)
                                                <span class="badge bg-success">Correct</span>
                                              @elseif($item->payment_status==0)
                                                <span class="badge bg-warning">Pending</span>
                                                @elseif($item->payment_status==2)
                                                 <span class="badge bg-danger">Incorrect</span>
                                                @else
                                                <span class="badge bg-secondary">Inactive</span>
                                            @endif
                                            </td>
                                            <td>
                                                @if($item->order_status == 1)
                                                <span class="badge bg-success">Approved</span>
                                            @elseif($item->order_status ==0)
                                                <span class="badge bg-warning">Pending</span>
                                            @elseif($item->order_status ==2)
                                               <span class="badge bg-danger">Cancelled</span>
                                            @else
                                            <span class="badge bg-secondary">Inactive</span>
                                            @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.userpackage-order.edit', encrypt($item->id)) }}" class="btn btn-info">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <button class="btn btn-danger" type="button" onclick="deleteData({{ $item->id }})">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <form id="delete-form-{{ $item->id }}" action="{{ route('admin.userpackage-order.destroy', $item->id) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
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