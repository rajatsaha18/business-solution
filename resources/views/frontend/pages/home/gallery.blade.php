@extends('frontend.layouts.app')
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
                        <h1 class="title">Gallery</h1>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span class="mr-1"><i class="ti ti-home"></i></span>
                        <a title="Homepage" href="#">Home</a>
                        <span class="ttm-bread-sep">&nbsp;/&nbsp;</span>
                        <span class="ttm-textcolor-skincolor">Gallery</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3 head-cat">
        <h3 class="text-center pt-2 pb-2 text-light" style="background-color:#0984E3;color:whtie">Gallery</h3>
    <div>
</div><!-- page-title end-->


<!--site-main start-->
<div class="site-main">

<!--shop-views-section-->
<div class="site-main">

    <section class="sidebar ttm-sidebar-right clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12 content-area">

                  <div class="row" style="padding-top:20px!important">
                    @foreach($galleries as $item)

                    <div class="col-md-4 col-sm-6 cat-cards text-center mb-3">

                        <div class="card pt-1 shadow">
                            <div style="text-align:center;display:block;margin:0 auto">
                                <img class="card-img-top" src="{{asset($item->image)}}" style="width:343px;height:206px;text-align:center;object-fit:cover"alt="Card image cap" id="item-{{$item->id}}" item-id="{{$item->id}}">
                            </div>

                            <div class="card-body prod-name" style="padding-top:20px">

                              <a href="#" class="text-success cat-a" style="font-size:16px;font-weight:600;" id="item-{{$item->id}}" item-id="{{$item->id}}">{{$item->image_name}}</a>
                            </div>
                          </div>

                    </div>

                    @endforeach


                  </div>


                </div>

            </div><!-- row end -->


            <h4 class="text-center mt-5 mb-5">---Recognitions---</h4>
            <div class="row">
                <div class="col-lg-12 content-area">

                  <div class="row" style="padding-top:20px!important">
                    @foreach($recogs as $item)

                    <div class="col-md-4 col-sm-6 cat-cards text-center mb-3">

                        <div class="card pt-1 shadow">
                            <div style="text-align:center;display:block;margin:0 auto">
                                <img class="card-img-top" src="{{asset($item->image)}}" style="width:343px;height:400px;text-align:center;object-fit:cover" alt="Card image cap" >
                            </div>

                            <div class="card-body prod-name" style="padding-top:20px">

                                <a href="#" class="text-success cat-a" style="font-size:16px;font-weight:600;" id="item-{{$item->id}}" item-id="{{$item->id}}">{{$item->image_name}}</a>
                              </div>
                          </div>

                    </div>

                    @endforeach


                  </div>


                </div>

            </div><!-- row end -->
        </div>
    </section>

    <div class="modal fade" id="galleryImage" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        @include('frontend.pages.home.gallery-modal')
    </div>




</div>
<!--team-section end-->


</div><!--site-main end-->
@endsection
@section('script')
<script>
    $(document).on("click", 'a[id^="item"]', function(event) { 
        event.preventDefault();
        let id = $(this).attr('item-id');
        
        $.ajax({
            url: "{{ route('find.gallery') }}",
            method: "GET",
            data: {id: id},
            success: function(data) {
                $('#modalImage').attr('src', data.image); // Display the clicked image in the modal
                $('#galleryImage').modal('show'); // Show the modal
                let currentId = id;

                // Next button functionality
                $('#nextBtn').on('click', function() {
                
                    $.get(`images/next/${currentId}`, function(nextData) {
                       
                        $('#modalImage').attr('src', nextData.image); // Display the next image
                        currentId = nextData.id; // Update the current image ID
                    });
                });

                // Previous button functionality
                $('#prevBtn').on('click', function() {
                    $.get(`images/previous/${currentId}`, function(previousData) {
                        $('#modalImage').attr('src', previousData.image); // Display the previous image
                        currentId = previousData.id; // Update the current image ID
                    });
                });
            }
        });
    });
</script>
@endsection

