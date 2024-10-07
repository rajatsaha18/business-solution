@extends('bdshop.admin.layouts.app')

@section('content')

    <div class="col-lg-6 col-lg-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('Social Link')}}</h3>
            </div>

            <!--Horizontal Form-->
            <!--===================================================-->
            <form class="form-horizontal" action="{{ route('shop-save-social') }}" method="POST" enctype="multipart/form-data">
            	@csrf
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="logo">{{__('Facebook')}} </label>
                        <div class="col-sm-9">
                            <input type="text" id="logo" name="facebook" value="{{$social->facebook ?? ''}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="favicon">{{__('Youtube')}} </label>
                        <div class="col-sm-9">
                            <input type="text" id="favicon" value="{{$social->youtube ?? ''}}" name="youtube" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="favicon">{{__('Linkdin')}} </label>
                        <div class="col-sm-9">
                            <input type="text" id="favicon" value="{{$social->linkdin ?? ''}}" name="linkdin" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="favicon">{{__('Twitter')}} </label>
                        <div class="col-sm-9">
                            <input type="text" id="favicon" value="{{$social->twitter ?? ''}}" name="twitter" class="form-control">
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
