@extends('bdshop.frontEnd.halal-investment.layouts.app')

@section('content')
<style>
    .investmentseeker-navbar a{
        text-decoration: none;
        color:green;
        font-weight:600;
        font-size:20px;
    }

</style>
<section class="container mt-3 investmentseeker-navbar">
  <div class="row">
    <div class="col-md-5 col-sm-12">
        <div class="d-flex justify-content-between">
            <a href="{{route('investmentseeker.dashboard')}}">Dashboard</a>
            <a href="{{route('investmentseeker.investment.seeker.profile')}}">Profile</a>
            <a href="{{route('investmentseeker.investment.seeker.account.detail')}}">Account Details</a>

        </div>
    </div>
  </div>
  <hr>
</section>
<section class="container mt-5">

    <h3 class="fw-bolder text-center">Requirements for Businesses seeking investment</h3>

    <div class="p-5 mt-5 mb-5" style="background-color:#F1FAF6;border-radius:10px">
    <form action="{{route('investmentseeker.investment.seeker.business-profile.store')}}" method="POST"  enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-5 col-sm-12">
                <div class="mb-3">
                    <label for="" class="fw-bolder mb-2">Name of Business (ব্যবসার নাম)*</label>
                    <input type="text" class="form-control @error('business_name') is-invalid @enderror" name="business_name" value="{{ old('business_name')}}">
                    @error('business_name')
                     <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="fw-bolder mb-2">Email (ইমেইল)*</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email')}}">
                    @error('email')
                     <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="fw-bolder mb-2">Phone (ফোন নম্বর)*</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone')}}">
                    @error('phone')
                     <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="fw-bolder mb-2">Address  (ঠিকানা)*</label>
                    <textarea name="address" class="form-control @error('address') is-invalid @enderror">{{ old('address') }}</textarea>
                    @error('address')
                     <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="fw-bolder mb-2">Nature of Business (ব্যবসার ধরন)*</label>
                    <input type="text" class="form-control @error('nature_of_business') is-invalid @enderror" name="nature_of_business" value="{{ old('nature_of_business')}}">
                    @error('nature_of_business')
                     <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="fw-bolder mb-2">Size of Business in BDT (ব্যবসার আকার) | (capital / assets)*</label>
                    <input type="text" class="form-control @error('size_of_business_in_bdt') is-invalid @enderror" name="size_of_business_in_bdt" value="{{ old('size_of_business_in_bdt')}}">
                    @error('size_of_business_in_bdt')
                     <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="fw-bolder mb-2">Revenue Generated per month in BDT (প্রতি মাসে কত বিক্রয় করা হয়)*</label>
                    <input type="text" class="form-control @error('revenue_generated_per_month_in_bdt') is-invalid @enderror" name="revenue_generated_per_month_in_bdt" value="{{ old('revenue_generated_per_month_in_bdt')}}">
                    @error('revenue_generated_per_month_in_bdt')
                     <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="fw-bolder mb-2">Required funding amount through our platform (আমাদের প্ল্যাটফর্মের মাধ্যমে প্রয়োজনীয় টাকার পরিমাণ)*</label>
                    <input type="text" class="form-control @error('required_funding_amount_through_our_paltform') is-invalid @enderror" name="required_funding_amount_through_our_paltform" value="{{ old('required_funding_amount_through_our_paltform')}}">
                    @error('required_funding_amount_through_our_paltform')
                     <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="fw-bolder mb-2">Trade License Pdf/ Image(ট্রেড লাইসেন্স পিডিএফ/ছবি)*</label>
                    <input type="file" class="form-control @error('trade_license') is-invalid @enderror" name="trade_license" value="{{ old('trade_license')}}">
                    @error('trade_license')
                     <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="fw-bolder mb-2">TIN Certification Pdf/Image(টিআইএন সার্টিফিকেশন পিডিএফ/ ছবি)*</label>
                    <input type="file" class="form-control @error('tin') is-invalid @enderror" name="tin">
                    @error('tin')
                     <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="fw-bolder mb-2">Bill Pdf/Image(বিল পিডিএফ/ ছবি)</label>
                    <input type="file" class="form-control @error('bill') is-invalid @enderror" name="bill">
                    @error('bill')
                     <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-1 col-sm-12">

            </div>
            <div class="col-md-6 col-sm-12">

                <div class="mb-3">
                    <label for="" class="fw-bolder mb-2">How will funding help the business? Share financial numbers / impact if possible. (নতুন বিনিয়োগ আপনাকে কীভাবে সাহায্য করবে? যদি সম্ভব হয় আর্থিক সংখ্যা / প্রভাব শেয়ার করুন)*</label>
                    <textarea type="text" class="form-control @error('how_will_funding_help_business') is-invalid @enderror" name="how_will_funding_help_business">{{ old('how_will_funding_help_business') }}</textarea>
                    @error('how_will_funding_help_business')
                     <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="fw-bolder mb-2">Which of the following can you provide as security / collateral? (Mark all that apply) | (নিচের কোনটি আপনি নিরাপত্তা / জামানত হিসাবে প্রদান করতে পারেন? (প্রযোজ্য সমস্ত চিহ্নিত করুন))</label>
                    <input type="checkbox" id="vehicle1" class="@error('provide_as_security') is-invalid @enderror" name="provide_as_security[]" value="Bank Guarantee">
                    <label for="vehicle1" class="fw-bolder"> Bank Guarantee</label><br>
                    <input type="checkbox" id="vehicle2" class=" @error('provide_as_security') is-invalid @enderror" name="provide_as_security[]" value="Property">
                    <label for="vehicle2" class="fw-bolder"> Property</label><br>
                    <input type="checkbox" id="vehicle3" class="@error('provide_as_security') is-invalid @enderror" name="provide_as_security[]" value="Cheque">
                    <label for="vehicle3" class="fw-bolder"> Cheque</label><br>
                    <input type="checkbox" id="vehicle4" class="@error('provide_as_security') is-invalid @enderror" name="provide_as_security[]" value="Guarantor">
                    <label for="vehicle4" class="fw-bolder"> Guarantor</label><br>
                    @error('provide_as_security')
                     <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="fw-bolder mb-2">How do you maintain the financials of your business? (আপনি আপনার ব্যবসার আর্থিক হিসাব কিভাবে রাখেন)*</label>
                        <input type="radio" id="html" class="@error('how_do_you_maintain_the_financials_of_your_business') is-invalid @enderror"  name="how_do_you_maintain_the_financials_of_your_business" value="Manually on paper">
                        <label for="html" class="fw-bolder">Manually on paper (কাগজে হাতে লেখা)</label><br>
                        <input type="radio" id="css" name="how_do_you_maintain_the_financials_of_your_business" class="@error('how_do_you_maintain_the_financials_of_your_business') is-invalid @enderror"  value="Manually Excel spreadsheet">
                        <label for="css" class="fw-bolder">Manually Excel spreadsheet (ম্যানুয়ালি এক্সেল স্প্রেডশীট)</label><br>
                        <input type="radio" id="javascript" name="how_do_you_maintain_the_financials_of_your_business"class="@error('how_do_you_maintain_the_financials_of_your_business') is-invalid @enderror" value="Software / ERP">
                        <label for="javascript" class="fw-bolder">Software / ERP (সফটওয়্যার/ইআরপি)</label>
                        @error('how_do_you_maintain_the_financials_of_your_business')
                     <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="fw-bolder mb-2">How did you know about us? (আপনি আমাদের সম্পর্কে কিভাবে জানেন)</label>
                    <textarea type="text" class="form-control" name="how_did_you_know_about_us">{{ old('how_did_you_know_about_us') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="" class="fw-bolder mb-2">Any additional comments about the business or queries to us? (ব্যবসা সম্পর্কে কোন অতিরিক্ত মন্তব্য বা আমাদের কাছে প্রশ্ন)</label>
                    <textarea type="text" class="form-control" name="add_additional_comment">{{ old('add_additional_comment') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="" class="fw-bolder mb-2">National Identity Card Pdf/Image(জাতীয় পরিচয়পত্র পিডিএফ/ছবি)*</label>
                    <input type="file" class="form-control @error('nid') is-invalid @enderror" name="nid">
                    @error('nid')
                     <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="fw-bolder mb-2">Owner Photo(স্বত্বাধিকারী ছবি)*</label>
                    <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo">
                    @error('photo')
                     <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="fw-bolder mb-2">Business Images (Mulitple) (ব্যবসার ছবি (একাধিক))*</label>
                    <input type="file" class="form-control @error('business_images') is-invalid @enderror" name="business_images[]" multiple>
                    @error('business_images')
                     <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-success btn-md">Submit</button>
        </div>
    </form>
    </div>
</section>

@endsection
