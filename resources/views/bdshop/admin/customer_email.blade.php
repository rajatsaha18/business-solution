@extends('bdshop.admin.layouts.app')

@section('content')

{{-- <div class="row">
    <div class="col-sm-12">
        <a href="{{ route('advertise-rate.create')}}" class="btn btn-rounded btn-info pull-right">{{__('Add Advertise Rate')}}</a>
    </div>
</div> --}}

<br>

<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading bord-btm clearfix pad-all h-100">
        <h3 class="panel-title pull-left pad-no">{{__('Advertise Rate')}}</h3>
        <div class="pull-right clearfix">
            <form class="" id="sort_categories" action="" method="GET">
                <div class="box-inline pad-rgt pull-left">
                    <div class="" style="min-width: 200px;">
                        <input type="text" class="form-control" id="search" name="search"@isset($sort_search) value="{{ $sort_search }}" @endisset placeholder=" Type name & Enter">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-striped res-table mar-no" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{__('Business Category')}}</th>
                    <th>{{__('Customer Name')}}</th>
                    <th>{{__('Email')}}</th>
                    <th>{{__('Subject')}}</th>
                    <th>{{__('Message')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customer_email as $key => $item)
                    <tr>
                        <td>{{ ($key+1) }}</td>
                        <td>{{__($item->advertise->business_name)}}</td>
                        <td>{{__($item->name)}}</td>
                        <td>{{__($item->email)}}</td>
                        <td>{{__($item->subject)}}</td>
                        <td>{{__($item->details_message)}}</td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="clearfix">
            <div class="pull-right">
            </div>
        </div>
    </div>
</div>

@endsection
