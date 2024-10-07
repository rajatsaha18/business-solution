@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
         <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Advertise Banner</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Advertise Banner</li>
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
                            <h3 class="card-title">Advertise Banner</h3>
                            <a href="{{route('admin.advertise-banner.create')}}" class="btn btn-primary float-right" >
                                <i class="fas fa-plus"></i> Add Advertise Banner
                            </a>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{('Title')}}</th>
                                        <th>{{('Advertise Category')}}</th>
                                        <th>{{('Advertise Placement')}}</th>
                                        <th>{{('Banner')}}</th>
                                        <th width="10%">{{__('Options')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($advertise_banner as $key => $item)
                                        <tr>
                                            <td>{{ ($key+1) }}</td>
                                            <td>{{($item->title)}}</td>
                                            <td>{{($item->advertise_category->title ?? '')}}</td>
                                            <td>{{($item->advertise_placement->page_title ?? '')}}</td>
                                            <td><img src="{{asset($item->image)}}" alt="" height="50px" width="80px"></td>
                                            <td>
                                                <a href="{{ route('admin.advertise-banner.edit', encrypt($item->id)) }}" class="btn btn-info">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <button class="btn btn-danger" type="button" onclick="deleteData({{ $item->id }})">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <form id="delete-form-{{ $item->id }}" action="{{ route('admin.advertise-banner.destroy', $item->id) }}" method="POST" style="display: none;">
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
