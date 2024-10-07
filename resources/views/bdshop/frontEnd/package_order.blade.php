@extends('bdshop.frontEnd.layouts2.master')

@section('content')
<!--top address bar-->

<div class="container my-5">
    <div class="row margin-bottom-20 margin-top-10">
        <div class="col-md-2">
            <div class="row">
                <div class="clearfix"></div>
                <!--left category menu-->
                <div class="col-md-12 leftmenu-grid">
                    <div style="background-color: #F0F0FF;" class="width-100 padding-6 border-radius-top-5 margin-top-10 text-center left-menu-heading">
                        <h4 style="color: #00006b;">Categories</h4>
                    </div>
                    <div class="width-100 leftnav border-top-dashed" id="myTopnav1">
                        @foreach ($categories as $item)
                        <a style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 16px;" href="{{route('info-sub-category',$item->slug)}}" target="_blank">{{$item->name}}</a>
                        @endforeach



                    </div>
                    <script>
                        function myFunction1() {
                            var x = document.getElementById("myTopnav1");
                            if (x.className === "leftnav") {
                                x.className += " responsive";
                            } else {
                                x.className = "leftnav";
                            }
                        }
                    </script>
                </div>

            </div>
        </div>

        <div class="col-md-8">
            <div class="div_style2">
                <style>
                    .package-card h2 {
                        color: #f90;
                    }

                    .package-card p {
                        font-size: 15px;
                    }
                </style>
                <div class="skiptarget"><a id="maincontent">-</a></div>
                <div class="row">

                    <div class="col-md-12 col-xs-12 mb-4 mt-4">
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                        @endif
                        <form class="form-horizontal" action="{{route('package.order.submit')}}" method="post">
                            @csrf
                            <table class="table-responsive table-bordered">
                                <tbody>

                                    <tr class="">
                                        <td class="text-right">Package Name:
                                        </td>
                                        <td class="text-left">
                                            <input name="package_id" value="{{$package->id}}" hidden>
                                            <input class="form-control" type="text" name="name" id="organization" placeholder="Enter the Package name" value="{{$package->name}}" required="">

                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="text-right">Number Of Advertise:
                                        </td>
                                        <td class="text-left">
                                            <input class="form-control" type="text" name="number_of_advertise" id="organization" placeholder="Enter the Advertise name" value="{{$package->number_of_advertise}}" required="">

                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="text-right">Amount:
                                        </td>
                                        <td class="text-left">
                                            <input class="form-control" type="text" name="amount" id="organization" placeholder="Enter the Amount" value="{{$package->amount}}" required="">

                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="text-right">Day Limit:
                                        </td>
                                        <td class="text-left">
                                            <input class="form-control" type="text" name="day_limit" id="organization" placeholder="Enter the Limit" value="{{$package->day_limit}}" required="">

                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="text-right">Payment Method: <span class="text-danger">*</span>
                                        </td>
                                        <td class="text-left">
                                            <select name="payment_method_id" id="payment_method_id" class="form-control payment_method_id" required="">
                                                <option value="" selected disabled>--Select--</option>
                                                @foreach ($payment_methods as $pm)
                                                <option value="{{$pm->id}}">{{$pm->name}}</option>
                                                @endforeach
                                            </select>

                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="text-right">Payment Number:
                                        </td>
                                        <td class="text-left">
                                            <input type="text" id="number" class="form-control mb-2" readonly></input>
                                            <h6 style="color: red; " class="fs-6">Important Note: Send Money to this following number!</h6>
                                        </td>

                                    </tr>
                                    <tr class="">
                                        <td class="text-right">Transaction ID: <span class="text-danger">*</span>
                                        </td>
                                        <td class="text-left">
                                            <input class="form-control" type="text" name="transaction_id" id="organization" placeholder="Transaction Id" required="">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">
                                            <div>
                                                <input style="background-color: #00006b; " type="submit" class="btn text-light" value="SUBMIT" name="Add" id="Add">
                                                {{-- <input type="reset" class="btn btn-warning text-light" value="Reset" name="B2"> --}}
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>

                    </div>


                </div>
                <!--ad bottom-->
                <div class="col-md-8 col-md-offset-2 col-xs-12 col-xs-offset-0 text-center margin-top-10">
                </div>
            </div>
        </div>


    </div>
    <div class="clearfix"></div>
</div>

<div class="total-ads main-grid-border">
    <div class="container">
    </div>
</div>
@endsection
@yield('js')
<script src="{{asset('shopfront/js/')}}/jquery-3.6.1.min.js"></script>

<script>
    //divison change
    $(document).on('change', '.payment_method_id', function() {
        let id = $(this).val();
        // alert(id);
        $.ajax({
            method: "GET",
            url: "{{ route('payment.method') }}",
            data: {
                'id': id
            },
            dataType: 'json', //return data will be json
            success: function(data) {
                $('#number').val(data['number']);
                // alert(data['number']);
                //   //   alert(data)
                //     $('.district').html('<option value="" selected disabled>--select--</option>');
                //     for (let i = 0; i <script data.length; i++) {
                //         $('.district').append('<option value="' + data[i]
                //             .id + '">' + (data[i].name) + '</option>');
                //     }
            },
            error: function() {}
        });
    });
</script>