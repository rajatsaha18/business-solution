<style>
  .modal-header {
   
    border-bottom: 1px solid white!important;
   
  }
  .modal{
    background: #ffffff52!important;
  }
</style>

<div class="modal-dialog modal-dialog-centered  modal-lg">
    <div class="modal-content">
      <div class="modal-header">
       
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <div class="row">
          <div class="col-md-5 col-sm-12">
          <img src="{{asset($data->image)}}" style="width:100%"  alt="">
          </div>
          <div class="col-md-7 col-sm-12">
          
        
          <h5 class="mt-3 fw-bolder">{{$data->name}}</h5>
          <p class="text-secondary fw-bolder">{{$data->designation}}</p>
          <p style="text-align:justify;font-weight:400">{{$data->description}}</p>

         
          </div>
         </div>
      </div>
      
    </div>
  </div>