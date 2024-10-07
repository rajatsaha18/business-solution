@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Advertise Modal Image</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Advertise Modal Image</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="col-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Advertise Modal Image</h3>
                   
                </div>

                <!--Horizontal Form-->
                <!--===================================================-->
                <form class="form-horizontal" action="{{ route('admin.advertise-modal.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="col-md-12 mt-2">
                            <label class="control-label w-100">Old Advertise Modal Image<span style="color: red">*</span></label><br>
                            @if(isset($modal->image))
                           <img src="{{asset($modal->image)}}" style="width:500px; height:400px;object-fit:contain"></img>
                           @endif
                            
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="control-label w-100">New Advertise Modal Image<span style="color: red">*</span></label>
                            <input class="form-control" name="image" type="file"></input>
                            
                        </div>
   
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <button class="btn btn-success" type="submit">Save</button>
                            </div>
                        </div>
                    </div>

                </form>
                <!--===================================================-->
                <!--End Horizontal Form-->

            </div>
        </div>
    </section>
</div>



@endsection

