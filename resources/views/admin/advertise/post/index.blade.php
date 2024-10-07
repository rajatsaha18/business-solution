@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
         <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Advertise Post</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Advertise Post</li>
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
                            <h3 class="card-title">Advertise Post</h3>
                            
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{__('Name')}}</th>
                                        <th>{{__('Owner Name')}}</th>
                                        <th>{{__('Phone')}}</th>
                                        <th>{{__('Address')}}</th>
                                        <th width="10%">{{__('Action')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($posts as $key => $item)
                                        <tr>
                                            <td>{{ ($key+1) }}</td>
                                            <td>{{__($item->business_name)}}</td>
                                            <td>{{__($item->owner_name)}}</td>
                                            <td>{{__($item->phone)}}</td>
                                            <td>{{__($item->address)}}</td>
                                            <td>
                                                <a href="{{ route('admin.advertise-post.edit', encrypt($item->id)) }}" class="btn btn-info btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="{{route('admin.advertise-post.destroy', $item->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this ?')"><i class="fa fa-trash"></i></a>
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


