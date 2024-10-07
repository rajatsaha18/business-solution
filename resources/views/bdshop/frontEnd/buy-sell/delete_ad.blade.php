@extends('bdshop.frontEnd.buy-sell.layouts.app')
@section('content')
<style>
    @media(max-width:600px){
        .delete_ad{
            width:100%!important;
        }
    }
</style>
<div class="delete_ad mt-5" style="width:35%;display:block;margin:0 auto">
        <div class="container">
            <div class="card shadow p-3">
                <h5>Delete Ad</h5>
                <p>Are you sure you want to delete the ad <strong>{{$data->title}}</strong>
                    ?</p>
                 <select name="" id=""class="form-select" aria-label="Default select example">
                    <option value="">Select a reason</option>
                    <option value="">Sold via site</option>
                    <option value="">sold elsewhere</option>
                    <option value="">Changed my mind</option>
                    <option value="">Sold via Doorstep Delivery</option>
                    <option value="">Reposted the same ad</option>
                    <option value="">out of stock/low inventory</option>
                    <option value="">low response</option>
                    <option value="">vacancy filled on site</option>
                    <option value="">vacancy filled elsewhere</option>
                 </select>
                <div class="d-flex justify-content-end mt-3">
                    <a href="{{route('buyselluser.user.ad.delete',$data->slug)}}" class="btn btn-danger">Yes delete this ad</a>
                </div>
            </div>
        </div>

     </div>
    
@endsection