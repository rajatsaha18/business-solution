@extends('Hospital.frontend.layouts.app')
@section('content')
 <!-- page-title -->
 <style>
    @media(max-width:600px){
        .head-cat{
        margin-top:60px!important;
    }
    }
 </style>
 <div class="ttm-page-title-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center"  style="min-height:40px!important;padding-top:30px!important">
                    <div class="page-title-heading">
                        <h1 class="title">Our Branches</h1>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span class="mr-1"><i class="ti ti-home"></i></span>
                        <a title="Homepage" href="#">Home</a>
                        <span class="ttm-bread-sep">&nbsp;/&nbsp;</span>
                        <span class="ttm-textcolor-skincolor">Branches</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3 head-cat">
        <h3 class="text-center text-light pt-2 pb-2" style="background-color:#0328AF">Our Branches</h3>
    <div>
</div><!-- page-title end-->


<!--site-main start-->
<div class="site-main">

<!--shop-views-section-->
<div class="site-main">

    <section class="sidebar ttm-sidebar-right clearfix">
       <div class="container">
       <div class="row">
         @foreach($branches as $item)
         <div class="col-md-2 col-6 mb-2">
            <a class="btn btn-outline-info" style="height:55px;width:134.656px;cursor:pointer"  id="item-{{$item->id}}"item-id="{{$item->id}}">{{$item->name}}</a>
         </div>
         @endforeach
       </div>
       </div>
    </section>


<!-- Modal -->
<div class="modal fade branch-modal" id="myModal exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  
</div>
</div>
<!--team-section end-->


</div><!--site-main end-->
@endsection
@section('script')
<script>


$(document).on("click", 'a[id^="item"]', function(event) { 
    event.preventDefault();
    let id=$(this).attr('item-id');
    var modal = document.getElementById("myModal");
    $.ajax({
        url:"{{route('hospital.find.branch')}}",
        method:"GET",
        data:{id:id},
        success:function(data){
            $('.modal').html(data);
          
           $('.branch-modal').modal('show');
        }
    })
   

    

});
</script>



@endsection