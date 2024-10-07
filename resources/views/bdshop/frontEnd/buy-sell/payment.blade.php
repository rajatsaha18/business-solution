@extends('bdshop.frontEnd.buy-sell.layouts.app')
@section('content')
<style>
        @media(max-width:600px){
            .payment{
                width:100%!important;
            }
        }
    </style>
     <section class="payment mt-5 mb-5" style="width:40%;display: block;margin:0 auto">
        <div class="container">
            <div class="card shadow">
                <div class="text-center p-3">
                    <i class="fa fa-check-circle fs-3 text-success mt-3 mb-4" aria-hidden="true"></i>
                    <h6>Payment summary</h6>
                    <p>Your ad has been submitted for review and requires a payment before it can be published.</p>
                    <p>Ads will be shown for <span class="badge bg-success">7</span> days</p>

                </div>
                <div class="m-3 border border-dark p-3">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                             <img src="{{asset($ad->thumbnail_img)}}" style="width:89px;height:67px" alt="">
                        </div>
                        <div class="col-md-9 col-sm-9">
                          <h6>{{$ad->title}}</h6>
                          <p>{{$ad->address}}, {{$ad->subcategory->title}}</p>
                          <h5 class="text-success">Tk {{$ad->rent}} {{$ad_details->price_unit}}</h5>
                        </div>
                    </div>
                </div>
                <div class="p-3">
                    <form action="{{route('buyselluser.ad.payment.submit')}}" method="post">
                        @csrf
                        <div class="p-3"style="background-color: #F3F6F5!important;">
                            <div class="form-group">
                                <input type="text" name="buysell_product_id" value="{{$ad->id}}" hidden>
                                <label for=""><strong>Make your ad stand out!</strong></label>
                                <select class="form-control mt-2 ad_show_pay" name="ad_show_type_id" required>
                                  <option value="">Choose...</option>
                                   @foreach($payments as $payment)

                                   <option value="{{$payment->id}}">{{$payment->name}}</option>
                                 

                                   @endforeach
                                </select>
                                
                            </div>
                            <div class="form-group mt-3">
                                <label for=""><strong>Amount</strong></label>
                                <input type="text" id="amount" class="form-control" name="amount" placeholder="amount" readonly>
                                
                                
                            </div>
                            <div class="form-group mt-3">
                                <label for=""><strong>Payment type</strong></label>
                                <select class="form-control mt-2 payment_method_id" name="payment_method_id" required>
                                  <option value="">Choose...</option>
                                   @foreach($payment_methods as $item)

                                   <option value="{{$item->id}}">{{$item->name}}</option>
                                 
                                   @endforeach
                                </select>
                                
                            </div>
                            <div class="form-group mt-3">
                                <label for=""><strong>Payment Number</strong></label>
                                <input type="text" id="number" class="form-control" name="number" placeholder="Payment Number" readonly>
                                
                                
                            </div>
                            <div class="form-group mt-3">
                                <label for=""><strong>Your Transaction id</strong></label>
                                <input type="text" class="form-control" name="user_transaction_id" placeholder="Transaction id" required>
                                
                                
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <button class="btn text-white" style="background-color: #118871;">Submit</button>
                        </div>
                    </form>

                </div>

            </div>

        </div>
     </section>
    
@endsection
@section('js')
<script>
      //ad show type change
    $(document).on('change', '.ad_show_pay', function() {
        let id = $(this).val();
        // alert(id);
        $.ajax({
            method: "GET",
            url:"{{ route('buyselluser.ad.show.type') }}",
            data:{'id':id},
            dataType: 'json', //return data will be json
            success: function(data) {
                $('#amount').val(data['price']);
             
            },
            error: function() {
            }
        });
    });
    //payment method change
    $(document).on('change', '.payment_method_id', function() {
        let id = $(this).val();
        // alert(id);
        $.ajax({
            method: "GET",
            url:"{{ route('payment.method') }}",
            data:{'id':id},
            dataType: 'json', //return data will be json
            success: function(data) {
                $('#number').val(data['number']);
             
            },
            error: function() {
            }
        });
    });
</script>



@endsection