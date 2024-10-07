@extends('Hospital.frontend.layouts.app')
@section('content')
<!-- page-title -->
<style>
    @media(max-width:600px) {
        .head-cat {
            margin-top: 60px !important;
        }
    }

    .imageSize {
        aspect-ratio: 1/1;
    }
</style>

<div class="ttm-page-title-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center" style="min-height:40px!important;padding-top:30px!important">
                    <div class="page-title-heading">
                        <h1 class="title">Management & Team</h1>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span class="mr-1"><i class="ti ti-home"></i></span>
                        <a title="Homepage" href="#">Home</a>
                        <span class="ttm-bread-sep">&nbsp;/&nbsp;</span>
                        <span class="ttm-textcolor-skincolor">Management</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3 head-cat">
        <h3 class="text-center pt-2 pb-2 text-light" style="background-color:#0328AF;color:whtie">Management</h3>
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
                                    @foreach($management as $item)

                                    <div class="col-md-4 col-sm-6 cat-cards text-center mb-3">

                                        <div class="card shadow">
                                            <div style="text-align:center;display:block;margin:0 auto">
                                                <img class="card-img-top imageSize" src="{{asset($item->image)}}" alt="Card image cap" id="item-{{$item->id}}" item-id="{{$item->id}}">
                                            </div>

                                            <div class="card-body prod-name" style="padding-top:20px">

                                                <a href="#" class=" cat-a" style="font-size:16px;font-weight:600; color: #00006b;" id="item-{{$item->id}}" item-id="{{$item->id}}">{{$item->name}}</a>
                                                <h5>{{$item->designation}}</h5>
                                            </div>
                                        </div>

                                    </div>

                                    @endforeach


                                </div>


                            </div>

                        </div><!-- row end -->


                        <h4 class="text-center my-5">---Team---</h4>
                        <div class="row">
                            <div class="col-lg-12 content-area">

                                <div class="row" style="padding-top:20px!important">
                                    @foreach($member as $item)

                                    <div class="col-md-4 col-sm-6 cat-cards text-center mb-3">

                                        <div class="card shadow">
                                            <div style="text-align:center;display:block;margin:0 auto">
                                                <img class="card-img-top imageSize" src="{{asset($item->image)}}" alt="Card image cap">
                                            </div>

                                            <div class="card-body prod-name" style="padding-top:20px">

                                                <a href="#" class="cat-a" style="font-size:16px;font-weight:600; color: #00006b;" id="item-{{$item->id}}" item-id="{{$item->id}}">{{$item->name}}</a>
                                                <h5>{{$item->designation}}</h5>
                                            </div>

                                        </div>


                                    </div>

                                    @endforeach


                                </div>


                            </div>

                        </div><!-- row end -->
                    </div>
                </section>

                <div class="modal fade" id="teamImage" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    @include('frontend.pages.home.team-modal')
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
                    url: "{{ route('find.team') }}",
                    method: "GET",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        $('#modalImage').attr('src', data.image); // Display the clicked image in the modal
                        $('#teamImage').modal('show'); // Show the modal
                        let currentId = id;

                        // Next button functionality
                        $('#nextBtn').on('click', function() {

                            $.get(`images/next/team/${currentId}`, function(nextData) {

                                $('#modalImage').attr('src', nextData.image); // Display the next image
                                currentId = nextData.id; // Update the current image ID
                            });
                        });

                        // Previous button functionality
                        $('#prevBtn').on('click', function() {
                            $.get(`images/previous/team/${currentId}`, function(previousData) {
                                $('#modalImage').attr('src', previousData.image); // Display the previous image
                                currentId = previousData.id; // Update the current image ID
                            });
                        });
                    }
                });
            });
        </script>
        @endsection