@extends('admin.layouts.app')
@section('title')
    <title>{{ config('app.name', 'Laravel') }} | Newsletter</title>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>Newsletter</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                           <li class="breadcrumb-item active">Newsletter</li>
                       </ol>
                   </div>
               </div>
           </div>
       </section>
       <section class="content">
           <div class="row">
               <div class="col-10 offset-md-1">
                   <div class="card">
                       <div class="card-header">
                           <h3 class="card-title">Newsletter</h3>

                       </div>
                       <div class="card-body">
                           <form action="{{route('admin.newsletter.store')}}" method="POST">
                               @csrf
                               <div class="row">
                                <div class="col-md-12 mt-2">
                                    <label>Emails</label>
                                    <select name="email[]" class="form-control email" multiple required>
                                        <option value="">--Select Emails--</option>
                                        @foreach ($emails as $email)
                                         <option value="{{ $email->email }}">{{ $email->email }}</option>

                                        @endforeach
                                    </select>
                                </div>
                                   <div class="col-md-12 mt-2">
                                       <label>Newsletter subject <span style="color: red">*</span> </label>
                                       <input type="text" class="form-control" name="subject" placeholder="subject" required>
                                   </div>

                                <div class="col-md-12 mt-2">
                                    <label>Newsletter content</label>
                                    <textarea type="text"class="form-control" id="summernote" name="content" placeholder="content"></textarea>
                                </div>


                               </div>
                               <div class="row mt-2">
                                   <div class="col-md-12">
                                       <button class="btn btn-success" type="submit">Send</button>
                                   </div>
                               </div>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </section>
   </div>
  <!-- /.content-wrapper -->
@endsection
@section('script')
<script>
    // In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('.email').select2({
          multiple: true, // Enable multiple selections
            closeOnSelect: false, // Keep the dropdown open after each selection

    });
});
</script>


@endsection
