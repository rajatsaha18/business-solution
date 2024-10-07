@extends('bdshop.admin.layouts.app')

@section('content')

<div class="col-lg-8 col-lg-offset-2">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('User Information')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('shop-user.store') }}" method="POST" enctype="multipart/form-data">
        	@csrf
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Owner Name')}}<span style="color: red">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('Owner Name')}}" id="name" name="name" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">{{__('Business Name')}}<span style="color: red">*</span></label>
                    <div class="col-sm-10">
                        <input name="business_name" type="text" class="form-control" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">{{__('Email')}}<span style="color: red">*</span></label>
                    <div class="col-sm-10">
                        <input name="email" type="email" class="form-control" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">{{__('Address')}}<span style="color: red">*</span></label>
                    <div class="col-sm-10">
                        <input name="address" type="text" class="form-control" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">{{__('Phone')}}<span style="color: red">*</span></label>
                    <div class="col-sm-10">
                        <input name="phone" type="tel" class="form-control" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">{{__('Password')}}<span style="color: red">*</span></label>
                    <div class="col-sm-10">
                        <input name="password" type="password" class="form-control" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">{{__('Confirm Password')}}<span style="color: red">*</span></label>
                    <div class="col-sm-10">
                        <input name="password_confirmation" type="password" class="form-control" required/>
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
