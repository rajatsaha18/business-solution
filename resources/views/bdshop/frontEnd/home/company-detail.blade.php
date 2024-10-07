@extends('bdshop.frontEnd.layouts2.master')

@section('content')
<div class="container">
    <div class="row margin-bottom-10 margin-top-10">
        <div class="col-md-2">
            <div class="row">
                @include('bdshop.frontEnd.home.sidebar')
                <div class="col-md-12 leftmenu-grid margin-bottom-15">
                    <div class="width-100 bg-ash2 padding-6 border-radius-top-5 text-center left-menu-heading">
                        <h4>Product Categories</h4>
                    </div>
                    <div class="width-100 leftnav border-top-dashed" id="myTopnav1">

                        <a href="javascript:void(0);" class="icon margin-top-7-minus" style="text-align: center;"
                            onclick="myFunction1()">View Yellow Pages Categories &nbsp; <h2>☰</h2></a>

                        <a class="nav4txt" style="text-align: center; background-color: #f2f2f2;" href="#">&nbsp;
                            &nbsp;View Yellow Pages Categories</a>
                        @foreach ($categories as $item)
                            <a href="{{route('info-sub-category',$item->slug)}}" class="text-center" target="_blank">{{$item->name}}</a>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-10">
            <div class="div_style3 p-3">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                <div class="mainbody-grid div_style4 pt-0">
                    <h1 style="color:#008C3F">Add/Edit Product Detail</h1>
                </div>
                <div class="main_content2">
                    </div>
                    <div class="clearfix"></div>
                    @php
                    $user=Auth::user()->id;
                    $company_id=DB::TABLE('advertise_posts')->where('user_id',$user)->first();
                    
                    @endphp
    
                    <form class="form-horizontal" action="{{route('user.company-detail-submit',$company_id->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <table class="table-responsive table-bordered">
                            <tbody>
                            <tr class="">
                                    <td class="text-right">About Company:</td>
                                    <td class="text-left">
                                        <textarea class="form-control summernote" type="text" name="about">{!!   $data->about  ??''  !!}</textarea>
                                        <span class="text-danger"></span>
                                    </td>
                            </tr>
                                <tr class="">
                                    <td class="text-right">Founded Date:
                                    </td>
                                    <td class="text-left">
                                        <input class="form-control" type="text" name="founded_date"
                                            id="organization" value="{{$data->founded_date??''}}" placeholder="1960">
                                       
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-right">Operating Status:
                                    </td>
                                    <td class="text-left">
                                        <input class="form-control" type="text" name="operating_status"
                                            id="organization" value="{{$data->operating_status??''}}"  placeholder="Active/Inactive">
                                       
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-right">Total Employee:
                                    </td>
                                    <td class="text-left">
                                        <input class="form-control" type="text" name="total_employee"
                                            id="organization" value="{{$data->total_employee??''}}" placeholder="Total Employee">
                                       
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-right">Total Funding Amount:
                                    </td>
                                    <td class="text-left">
                                        <input class="form-control" type="text" name="total_funding_amount"
                                            id="organization" value="{{$data->total_funding_amount??''}}"  placeholder="Total Funding Amount">
                                       
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-right">Investment Details:</td>
                                    <td class="text-left">
                                        <textarea class="summernote" type="text" name="investments">{!!  $data->investments??''  !!}</textarea>
                                        <span class="text-danger"></span>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-right">Funding Details:</td>
                                    <td class="text-left">
                                        <textarea class="summernote" type="text" name="funding_details">{!!  $data->funding_details??''    !!}</textarea>
                                        <span class="text-danger"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-center">
                                        <div>
                                            <input type="submit" class="btn btn-success text-light"
                                                value="SUBMIT" name="Add" id="Add">
                                            
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>

            </div>
        </div>

        

    </div>
    <div class="clearfix"></div>
</div>
@endsection
@section('js')
<!--jQuery [ REQUIRED ]-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('.summernote').summernote({
        height : 150
    });
</script>
@endsection


