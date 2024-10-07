
<!-- Slider -->
<style>
    /* Slider */
.carousel-item {
  /*width:100%!important;*/
  height: 578px!important;
  background-repeat: no-repeat;
  background-position: center;
  background-size: 100%;
  margin-top:-43px!important;

}
/* #item_sec{
  margin-top:0px!important;

}
#slider_sec{
  margin:0!important;
  padding:0!important;
} */
/* .slider-section{
    margin-top:85px!important
} */
.carousel-caption {
    top: 35%;
    position: absolute;
    right: 15%;
    bottom: 0px;
    left: 15%;
    z-index: 10;
    padding-top: 20px;
    padding-bottom: 20px;
    color: #fff;
    text-align: center;
}
@media(max-width:600px){
.carousel-item {
  max-width:100%!important;
  height: 22vh!important;
  background-repeat: no-repeat;
  /*background-position: center;*/
  background-size: cover;
  margin-top:0px!important;
}
.slider-section{
    margin-top:56px!important
}
}
</style>
<section class="slider-section" id="slider_sec" style="padding:0px!important;">
	<div id="carousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		{{-- <ol class="carousel-indicators">
			<li data-target="#carousel" data-slide-to="0" class="active"></li>

		</ol> <!-- End of Indicators --> --}}

		<!-- Carousel Content -->
		<div class="carousel-inner" role="listbox">
			@foreach($sliders as $key=>$slider)
            <div id="item_sec" class="carousel-item {{ $key == 0 ? 'active' : '' }}" style="background-image: url('{{ asset($slider->image) }}')">
				<div class="carousel-caption">
					<h1 class="text-light">{{$slider->slider_text}}</h1>
					<p style="font-weight:600;font-size:16px">{{$slider->slider_p_text}}</p>
				</div>
			</div>


            @endforeach

		</div> <!-- End of Carousel Content -->

		<!-- Previous & Next -->
		<a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only"></span>
		</a>
		<a href="#carousel" class="carousel-control-next" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only"></span>
		</a>
	</div> <!-- End of Carousel -->
</section> <!-- End of Slider -->
