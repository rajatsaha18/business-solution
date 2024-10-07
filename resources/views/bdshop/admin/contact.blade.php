@extends('bdshop.admin.layouts.app')

@section('content')

    <div class="col-lg-6 col-lg-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('Contact Page Info')}}</h3>
            </div>

            <!--Horizontal Form-->
            <!--===================================================-->
            <form class="form-horizontal" action="{{ route('shop-save-contact') }}" method="POST" enctype="multipart/form-data">
            	@csrf
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="logo">{{__('Company Name')}} </label>
                        <div class="col-sm-9">
                            <input type="text" id="logo" name="company_name" value="{{$contact->company_name ?? ''}}" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="favicon">{{__('Address')}} </label>
                        <div class="col-sm-9">
                            <input type="text" id="favicon" value="{{$contact->address ?? ''}}" name="address" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="favicon">{{__('Phone')}} </label>
                        <div class="col-sm-9">
                            <input type="text" id="favicon" value="{{$contact->phone ?? ''}}" name="phone" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="favicon">{{__('Email')}} </label>
                        <div class="col-sm-9">
                            <input type="text" id="favicon" value="{{$contact->email ?? ''}}" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="favicon">{{__('Website')}} </label>
                        <div class="col-sm-9">
                            <input type="text" id="favicon" value="{{$contact->website ?? ''}}" name="website" class="form-control">
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
