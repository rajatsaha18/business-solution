@extends('bdshop.frontEnd.buy-sell.layouts.app')
@section('content')

<section class="hero_buy_sell mt-4 ">
    <style>
        @media(max-width:600px){
            .offset-md-4{
                width:100%!important;
            }
        }
    </style>
        <div class="container">
            <div class="card shadow p-3 mb-5" style="padding-bottom:50px!important">
                  <div class="text-center">
                    <h4>Welcome <strong>{{$user->name}}!</strong> Let's post an ad.</h4>
                    <p>By Click</p>

                  </div>
                  <div class="row">
                    <div class="col-md-6 offset-md-4 col-sm-12 card shadow p-3" style="width:30%">
                        <div class="d-flex" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable">
                            <h6>Sell an Item,Property Or Service</h6>
                            <h6  style="font-size:18px;font-weight:600"class="ps-5">></h6>



                        </div>
                    </div>
                    
                   
                  </div>
            </div>
        </div>
     </section>
    <!-- Button trigger modal -->

  
  <!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <style>
        .modal-header {
    
    border-bottom: 1px solid #ffffff!important;
    
}
.itemss{
    cursor: pointer;

}
.itemss p:hover{
    color:#FFCA2C!important;
}
    </style>
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h6>Select a category</h6>
                    <hr>
                    @foreach($categories as $item)
                    <div class="d-flex itemss">
                      
                    
                       <p style="color:#5274C9" id="item-{{$item->id}}"  data="{{$item->id}}"><img src="{{asset($item->icon)}}" class="me-3" style="width:17px;height:17px;object-fit:cover" alt="">{{$item->title}}</p>
                       
                        <p class="ms-4 fs-6 fw-bolder">></p>

                     
                    </div>
                    @endforeach
                </div>
                <div class="col-md-6 col-sm-6 buysellsubcategory">
                   
                </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>



@endsection
@section('js')
<script>
    $( document ).ready(function() {
     $('p[id^="item"]').on('click', function() {  
            let id=$(this).attr('data');
            $.ajax({
                method: "GET",
                url:"{{ route('find.buysell.category') }}",
                data:{'id':id},
                dataType: 'json', //return data will be json
                success: function(data) {
                    //   alert(data)
                    $('.buysellsubcategory').html(' <h6>Select a subcategory</h6>');
                    $('.buysellsubcategory').append('<hr>');
                    for (let i = 0; i < data.length; i++) {
                        $('.buysellsubcategory').append(`
                        
                        <div class="d-flex itemss" id="itemsub">
                            <p style="color:#5274C9" id="subitem-${data[i].id}"  subcat="${data[i].id}">${data[i].title}</p>
                            <p class="ms-4 fs-6 fw-bolder">></p>
                        </div>
                        
                        `);
                    }
                },
                error: function() {
                }
            });
    });
   

});




$(document).on("click", 'p[id^="subitem"]', function(event) { 
    let id=$(this).attr('subcat');
	var url = "{{ route('buyselluser.item', ':id') }}";
	url = url.replace(':id', id);
	location.href = url;

});
</script>




@endsection