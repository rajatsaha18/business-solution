@extends('frontend.layouts.app')
@section('content')
<style>
    .m5lie{
        width:31%!important;
    }
    .daohang>li>a {


color: black !important;

}
.main5{
    margin-top: 150px!important;
}
.event{
    font-size:46px;
    font-weight:bold;
    margin-left:40px!important;
}
.button{
    background:#E51A28!important;
}

</style>

{{-- <div class="fenbanner mat1">
    <img src="{{ asset('frontend_two/fenbanner_.png') }}" title="Company Overview" alt="Company Overview">
    <p class="fenbiao">Media Center</p>

</div> --}}

<!--  main5  -->

<div class="main5">
    <h1 class="event">Events & Activites</h1>
    <div class="zong">
        <a href="#" class="m1biao"></a>
        
        <div class="m5n">

            <div class="clear"></div>

           
            <div class="m5lie ">
                <a href=""
                    class="m5tu">
                    <picture>
                        <source type="image/webp"
                            srcset="">
                        <img data-original="{{asset('/')}}uploads/media/img-1.jpg"
                            title=""
                            alt="" class="nlazy">
                    </picture>
                </a>
                <div class="m5zi">
                    <a href="" class="m5a" title="">Event one</a>
                    <p class="m5p">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    </p>
                    <hr style="margin-top:50px;">
                    <span class="m5riqi"><a class="btn btn-info button">View More</a></span>
                </div>
            </div>
            <div class="m5lie ">
                <a href=""
                    class="m5tu">
                    <picture>
                        <source type="image/webp"
                            srcset="">
                        <img data-original="{{asset('/')}}uploads/media/img-2.jpg"
                            title=""
                            alt="" class="nlazy">
                    </picture>
                </a>
                <div class="m5zi">
                    <a href="" class="m5a" title="">Event two</a>
                    <p class="m5p">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    </p>
                    <hr style="margin-top:50px;">
                    <span class="m5riqi"><a class="btn btn-success button">View More</a></span>
                </div>
            </div>
            <div class="m5lie ">
                <a href=""
                    class="m5tu">
                    <picture>
                        <source type="image/webp"
                            srcset="">
                        <img data-original="{{asset('/')}}uploads/media/img-1.jpg"
                            title=""
                            alt="" class="nlazy">
                    </picture>
                </a>
                <div class="m5zi">
                    <a href="" class="m5a" title="">Event Three</a>
                    <p class="m5p">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    </p>
                    <hr style="margin-top:50px;">
                    <span class="m5riqi"><a class="btn btn-success button">View More</a></span>
                </div>
            </div>
          
        </div>
        
        
    </div>
    
</div>






@endsection



