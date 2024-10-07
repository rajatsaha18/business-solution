@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
         <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>User Ad Payment List</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">User Ad Payment List</li>
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
                            <h3 class="card-title">User Ad Payment List</h3>
                            
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sl.</th>
                                        <th>User Name</th>
                                        <th>Ad Title</th>
                                        <th>Ad Show Type</th>
                                        <th>Payment Method</th>
                                        <th>Transaction Id</th>
                                        <th>Payment Status</th>
                                       
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($ad_payments as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->user->name }}</td>
                                            <td>{{ $item->ad->title ?? '' }}</td>
                                            <td>{{ $item->adShowType->name }}</td>
                                            <td>{{$item->payment_method->name}}</td>
                                            <td>{{$item->user_transaction_id}}</td>
                                            <td>
                                                @if($item->payment_status == 'correct')
                                                <span class="badge bg-success">Correct</span>
                                              @elseif($item->payment_status=='pending')
                                                <span class="badge bg-warning">Pending</span>
                                                @elseif($item->payment_status=='incorrect')
                                                 <span class="badge bg-danger">Incorrect</span>
                                                 @elseif($item->payment_status=='inactive')
                                                 <span class="badge bg-danger">Inactive</span>
                                            @endif
                                            </td>
                                            
                                            <td>
                                                <a href="{{ route('admin.admin-handle-buy-sell-ad-payment.edit', encrypt($item->id)) }}" class="btn btn-info">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <button class="btn btn-danger" type="button" onclick="deleteData({{ $item->id }})">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <form id="delete-form-{{ $item->id }}" action="{{ route('admin.admin-handle-buy-sell-ad-payment.destroy', $item->id) }}" method="POST" style="display: none;">
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