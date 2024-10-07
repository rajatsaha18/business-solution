@extends('bdshop.admin.layouts.app')

@section('content')

<div class="col-lg-6 col-lg-offset-3">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('User Information')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('shop-user.update',$data->id) }}" method="POST" enctype="multipart/form-data">
        	@csrf
            @method('patch')
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Name')}}</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('Name')}}" id="name" value="{{$data->name}}" name="name" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">{{__('Email')}}</label>
                    <div class="col-sm-10">
                        <input name="email" type="email" value="{{$data->email}}" class="form-control" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">{{__('Password')}}</label>
                    <div class="col-sm-10">
                        <input name="password" type="password" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">{{__('Confirm Password')}}</label>
                    <div class="col-sm-10">
                        <input name="password_confirmation" type="password" class="form-control"/>
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
