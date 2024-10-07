


<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content" id="myModal">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color:#0490D2">{{$data->name}}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
      </div>
      <div class="modal-body text-dark" style="background-color:#DFF2FE">
        @if(($data->email) !='')
        <p>Email: {{$data->email}}</p>
        @endif
        @if(($data->mobile) !='')
        <p>Phone: {{$data->mobile}}</p>
        @endif
        @if(($data->address) !='')
        <p>Address: {{$data->address}}</p>
        @endif
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-success" id="prevBtn">Prev</button>
          <button type="button" class="btn btn-info" id="nextBtn">Next</button>
      </div>
  </div>
</div>
{{-- <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color:#0490D2">{{$data->name}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-dark" style="background-color:#DFF2FE">
        @if(($data->email) !='')
        <p>Email: {{$data->email}}</p>
        @endif
        @if(($data->mobile) !='')
        <p>Phone: {{$data->mobile}}</p>
        @endif
        @if(($data->address) !='')
        <p>Address: {{$data->address}}</p>
        @endif
      </div>
     
    </div>
</div> --}}