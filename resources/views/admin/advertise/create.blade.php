@extends('bdshop.admin.layouts.app')

@section('content')

<div class="col-lg-8 col-lg-offset-2">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('Advertise Information')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('shop-advertise.store') }}" method="POST" enctype="multipart/form-data">
        	@csrf
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Title')}}<span style="color: red">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('Title')}}" name="title" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Banner Size')}}<span style="color: red">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('Banner Size')}}" name="banner_size" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">{{__('Status')}}</label>
                    <div class="col-sm-10">
                        <select name="status" id="" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="panel-footer text-right">
                <button class="btn btn-purple" type="submit">{{__('Save')}}</button>
            </div>
        </form>
        <!--===================================================-->
        <!--End Horizontal Form-->

    </div>
</div>

@endsection
