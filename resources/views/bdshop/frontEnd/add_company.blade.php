@extends('bdshop.frontEnd.layouts2.master')
@section('content')
<style>
    .select2-container--default .select2-search--dropdown .select2-search__field {
        border: 2px solid red;
        outline: red;
    }

    .select2-container--default .select2-search--dropdown .select2-search__field::after {
        content: '.' attr(data-domain);
    }

    @media(max-width:600px) {
        .scrol {
            overflow: scroll !important;
        }

        .left_banner_image {
            display: none !important;
        }
    }
</style>
<div class="container">
    <div class="row margin-bottom-10 margin-top-10 justify-content-center">
        <h2 class="pt-2 fw-bolder fs-4 text-center " style="color:#00006b">Add Your Company <span style="font-size: 20px;">(Totally Free)</span> </h2>
        <div class="col-xl-8 col-xl-8 col-md-8 col-sm-10 mt-2 col-12 scrol my-5 px-3 shadow-lg rounded " style="border:3px #00006b solid;">

            <form class="form-horizontal mt-3" action="{{route('add-your-company.store')}}" method="post">
                @csrf
                <table class="table-responsive " style="border: none;">
                    <tbody>
                        <tr class="">
                            <td class="text-right">Business Category:<span class="sub_ttl_yellow">*</span> </td>
                            <td class="text-left">
                                <input class="form-control @error('business_category') is-invalid @enderror" type="text" name="business_category" id="trade_cata" placeholder="Enter Business Category" value="{{old('business_category')}}">
                                @error('business_category')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                                Ex: Web site design and development
                            </td>
                        </tr>
                        <tr class="">
                            <td class="text-right">Organization Name:<span class="sub_ttl_yellow">*</span>
                            </td>
                            <td class="text-left">
                                <input class="form-control  @error('business_name') is-invalid @enderror" type="text" name="business_name" id="organization" placeholder="Enter Organization name" value="{{old('business_name')}}">
                                @error('business_name')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                                Ex: MedicalStore
                            </td>
                        </tr>
                        <tr class="">
                            <td class="text-right">Address:<span class="sub_ttl_yellow">*</span> </td>
                            <td class="text-left">
                                <input class="form-control @error('address') is-invalid @enderror" type="text" name="address" id="address" placeholder="Enter address" value="{{old('address')}}">
                                @error('address')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                                Ex: Shop 38,3rd Floor, BMA Bhaban, 15/2 Topkhana Road, Dhaka-1000
                            </td>
                        </tr>
                        <tr class="">
                            <td class="text-right">Phone:<span class="sub_ttl_yellow">*</span> </td>
                            <td class="text-left">
                                <input class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" min="10" placeholder="Enter Phone Number" value="{{old('phone')}}">
                                @error('phone')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                                Ex: (+88) 01612947754, (+88) 01927614040(multiple phone allowed)
                            </td>
                        </tr>
                        <tr class="">
                            <td class="text-right"> E-mail:<span class="sub_ttl_yellow">*</span> </td>
                            <td class="text-left">
                                <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" id="email" placeholder="Enter email" value="{{old('email')}}">
                                @error('email')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                                Ex: info@medicalstorebd.com,contact@medicalstorebd(mulitple email allowed)
                            </td>
                        </tr>
                        <tr class="">
                            <td class="text-right">Contact person:<span class="sub_ttl_yellow">*</span>
                            </td>
                            <td class="text-left">
                                <input class="form-control @error('owner_name') is-invalid @enderror" type="text" name="owner_name" id="contact_person" placeholder="Enter contact person" value="{{old('owner_name')}}">
                                @error('owner_name')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                                Ex: Saleh Ahmed
                            </td>
                        </tr>
                        <tr class="">
                            <td class="text-right" data="search">Country:<span class="sub_ttl_yellow"></span> </td>

                            <td class="text-left">
                                <div class="row">
                                    <div class="col-md-5">
                                        <select name="country" id="country" class="form-control  country @error('country') is-invalid @enderror js-example-basic-single">
                                            <option value="">--Select Country--</option>
                                            @foreach ($countries as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('country')
                                        <div class="text-danger">* {{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-5">Ex: Bangladesh</div>
                                </div>
                            </td>
                        </tr>
                        <tr class="">
                            <td class="text-right">State: </td>
                            <td class="text-left">
                                <div class="row">
                                    <div class="col-md-5">
                                        <?php
                                        $id = old('state');

                                        $state = DB::table('states')->where('id', $id)->first();
                                        ?>
                                        <select name="state" id="" class="form-control  state @error('state') is-invalid @enderror js-example-basic-single">
                                            <option value="" selected>--Select State--</option>
                                            {{-- <option value="{{(!empty($id))?$id:''}}" selected>{{isset($state)?$state:''}}</option> --}}

                                            {{-- @foreach ($countries as $item)
                                                        <option value="{{$item->name}}">{{$item->name}}</option>
                                            @endforeach --}}
                                        </select>
                                        @error('state')
                                        <div class="text-danger">* {{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-5">Ex: Try Dhaka Division/Dhaka District</div>
                                </div>
                            </td>
                        </tr>
                        <tr class="">
                            <td class="text-right">City: </td>
                            <td class="text-left">
                                <div class="row">
                                    <div class="col-md-5">
                                        <select name="city" id="" class="form-control  city @error('city') is-invalid @enderror js-example-basic-single">
                                            <option value="">--Select City--</option>
                                            {{-- @foreach ($countries as $item)
                                                        <option value="{{$item->name}}">{{$item->name}}</option>
                                            @endforeach --}}
                                        </select>
                                        @error('city')
                                        <div class="text-danger">* {{ $message }}</div>
                                        @enderror
                                    </div>
                                    {{-- <div class="col-md-5">Ex: Dhaka District/Di</div> --}}
                                </div>
                            </td>
                        </tr>


                        <tr>
                            <td class="text-right">Website: </td>
                            <td class="text-left">
                                <input class="form-control" type="text" name="website" id="web_address" placeholder="Enter web (keep blank if not exist)" value="{{old('website')}}">
                                Ex: https://www.medicalstore.com.bd
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right">Facebook Page: </td>
                            <td class="text-left">
                                <input class="form-control" type="text" name="facebook" id="facebook" placeholder="Enter Facebook (keep blank if not exist)" value="{{old('facebook')}}">
                                Ex: https://www.facebook.com/medicalinfo
                            </td>
                        </tr>
                        <!-- <tr>
                            <td class="text-right">Google Location: </td>
                            <td class="text-left">
                                <input class="form-control" type="text" name="google_location" id="ggl_map" placeholder="Enter Google map location (if any)" value="{{old('google_location')}}">
                                Ex: https://g.page/medicalinfo?share
                            </td>
                        </tr> -->

                        <tr>
                            <td class="text-right">Key words: </td>
                            <td class="text-left">
                                <textarea class="form-control" name="keywords" placeholder="Enter keywords" onkeyup="textCounter(this,'counter',255);" id="keywords">{!! old('keywords') !!}</textarea>
                                <br>
                                {{-- <div class="col-md-2 col-sm-2 col-xs-5">
                                            <input disabled="" maxlength="2" size="2" value="255" id="counter"
                                                name="field">
                                        </div> --}}
                                <script>
                                    function textCounter(field, keywords, maxlimit) {
                                        var countfield = document.getElementById(keywords);
                                        if (field.value.length > maxlimit) {
                                            field.value = field.value.substring(0, maxlimit);
                                            return false;
                                        } else {
                                            countfield.value = maxlimit - field.value.length;
                                        }
                                    }
                                </script>

                                <div class="col-md-3 col-sm-3 col-xs-7">
                                    <span class="text_darkgray1">characters left </span>
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    Ex: Website, Software, Web based software, Domain, Hosting, Out
                                    Sourcing... <br>
                                    <span style="color: #00006b;">[NOT OVER 255 CHARECTERS] </span>
                                </div>
                            </td>
                        </tr>
                        <!-- <tr>
                            <td class="text-right">Security Code: </td>
                            <td class="text-left">
                                <div class="captcha">
                                    <span>{!! captcha_img('math') !!}</span>
                                    <button type="button" style="background-color: #00006b; color: white; " class="btn btn-refresh"><i class="fas fa-sync"></i></button>
                                </div>
                                <input class="form-control @error('captcha') is-invalid @enderror" type="text" placeholder="Enter Captcha Code" name="captcha" />
                                @error('captcha')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </td>
                        </tr> -->
                        <tr>
                            <td colspan="2" class="text-center">
                                <div>
                                    <input type="submit" class="btn text-light" style="background-color: #00006b;" value="SUBMIT" name="Add" id="Add">
                                    <input type="reset" class="btn btn-outline-danger " value="Reset" name="B2">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>

    </div>
    <div class="clearfix"></div>
</div>

@endsection
@section('js')

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}
<script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>

<script>
    $('.select2-search input.select2-search__field').attr('placeholder', 'Type to Search');
</script>
<script>
    $(document).on('change', '.country', function() {
        let id = $(this).val();

        $.ajax({
            method: "GET",
            url: "{{ route('find.state') }}",
            data: {
                'id': id
            },
            dataType: 'json', //return data will be json
            success: function(data) {
                //   alert(data)
                $('.state').html('<option value="" selected disabled>--select--</option>');
                for (let i = 0; i < data.length; i++) {
                    $('.state').append('<option value="' + data[i]
                        .id + '">' + (data[i].name) + '</option>');
                }
            },
            error: function() {}
        });
    });
</script>
<script>
    $(document).on('change', '.state', function() {
        let id = $(this).val();

        $.ajax({
            method: "GET",
            url: "{{ route('find.city') }}",
            data: {
                'id': id
            },
            dataType: 'json', //return data will be json
            success: function(data) {
                //   alert(data)
                $('.city').html('<option value="" selected disabled>--select--</option>');
                for (let i = 0; i < data.length; i++) {
                    $('.city').append('<option value="' + data[i]
                        .id + '">' + (data[i].name) + '</option>');
                }
            },
            error: function() {}
        });
    });
</script>
<script>
    $('.btn-refresh').click(function() {
        $.ajax({
            type: 'GET',
            url: '{{url('
            info / refresh - captcha ')}}',
            success: function(data) {
                // console.log(data);
                $('.captcha span').html(data);
            }
        });
    });
</script>
@endsection