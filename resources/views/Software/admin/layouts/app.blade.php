<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name', 'Sarasoftware') }} | Dashboard </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('backend/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('backend/plugins/daterangepicker/daterangepicker.css')}}">
  
  <!-- summernote -->
   <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <!--<link rel="stylesheet" href="{{asset('backend/plugins/summernote/summernote-bs4.css')}}">-->
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
  <link rel="stylesheet" href="{{asset('backend/plugins/')}}/datatables-bs4/css/dataTables.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
   <style>
    .tox-notification{
        display:none!important;
    }
   </style>
  @include('admin.layouts.header')
  @yield('content')
  @include('admin.layouts.footer')
</div>


<!-- jQuery -->
<script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('backend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('backend/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('backend/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('backend/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('backend/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('backend/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('backend/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('backend/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<!--<script src="{{asset('backend/plugins/summernote/summernote-bs4.min.js')}}"></script>-->
<!-- overlayScrollbars -->
<script src="{{asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('backend/dist/js/pages/dashboard.js')}}"></script>
<!-- CKEditor -->
{{-- <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script> --}}

<!-- CKEditor -->
<!--<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>-->
<!-- AdminLTE for demo purposes -->
<script src="{{asset('backend/dist/js/demo.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{{-- datatables --}}
<script src="{{asset('backend/plugins/')}}/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('backend/plugins/')}}/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('backend/plugins/')}}/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('backend/plugins/')}}/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('backend/plugins/')}}/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('backend/plugins/')}}/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
 <script src="https://cdn.tiny.cloud/1/8hdhp6gigpemu9tfx7q11tovqkrwlqaflfw6qn71c1zctb0l/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

@yield('script')


{!! Toastr::message() !!}

<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
  <script>
    $('#summernote').summernote({
      placeholder: 'Hello stand alone ui',
      tabsize: 2,
      height: 120,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
    });
  </script>
<script>

  $( document ).ready(function() {
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
  });


  @if (Session::has('message'))
  var type = "{{ Session::get('alert-type', 'info') }}"
  switch(type){
      case 'info':

          toastr.options.timeOut = 10000;
          toastr.info("{{Session::get('message')}}");
          var audio = new Audio('audio.mp3');
          audio.play();
          break;
      case 'success':

          toastr.options.timeOut = 10000;
          toastr.success("{{Session::get('message')}}");
          var audio = new Audio('audio.mp3');
          audio.play();

          break;
      case 'warning':

          toastr.options.timeOut = 10000;
          toastr.warning("{{Session::get('message')}}");
          var audio = new Audio('audio.mp3');
          audio.play();

          break;
      case 'error':

          toastr.options.timeOut = 10000;
          toastr.error("{{Session::get('message')}}");
          var audio = new Audio('audio.mp3');
          audio.play();

          break;
  }

  @endif


    //divison
    $(document).ready(function(){
       $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
       });
       token = $( "input[value='_token']" ).val();


       $('.edit-division').on('click',function(){
           var id = $(this).attr("data-id");
           data = {
               "_token": token,
               "id":id
           };
           $.ajax({
               url: "division/"+id+'/edit',
               type: "get",
               data:data,
               success: function (response) {
                   // console.log(response);
                   $('.division-form').html(response);
               },
               error: function(jqXHR, textStatus, errorThrown) {
                   console.log(textStatus, errorThrown);
               }
           });
       });
   });

    //district
    $(document).ready(function(){
       $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
       });
       token = $( "input[value='_token']" ).val();


       $('.edit-district').on('click',function(){
           var id = $(this).attr("data-id");
           data = {
               "_token": token,
               "id":id
           };
           $.ajax({
               url: "district/"+id+'/edit',
               type: "get",
               data:data,
               success: function (response) {
                   // console.log(response);
                   $('.district-form').html(response);
               },
               error: function(jqXHR, textStatus, errorThrown) {
                   console.log(textStatus, errorThrown);
               }
           });
       });
   });

    //thana
    $(document).ready(function(){
       $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
       });
       token = $( "input[value='_token']" ).val();


       $('.edit-thana').on('click',function(){
           var id = $(this).attr("data-id");
           data = {
               "_token": token,
               "id":id
           };
           $.ajax({
               url: "thana/"+id+'/edit',
               type: "get",
               data:data,
               success: function (response) {
                   // console.log(response);
                   $('.thana-form').html(response);
               },
               error: function(jqXHR, textStatus, errorThrown) {
                   console.log(textStatus, errorThrown);
               }
           });
       });
   });

    //union
    $(document).ready(function(){
       $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
       });
       token = $( "input[value='_token']" ).val();


       $('.edit-union').on('click',function(){
           var id = $(this).attr("data-id");
           data = {
               "_token": token,
               "id":id
           };
           $.ajax({
               url: "union/"+id+'/edit',
               type: "get",
               data:data,
               success: function (response) {
                   // console.log(response);
                   $('.union-form').html(response);
               },
               error: function(jqXHR, textStatus, errorThrown) {
                   console.log(textStatus, errorThrown);
               }
           });
       });
   });

  //GetDistrict
  var token =  $("input[name=_token]").val();
  function GetDistrict(val){
    var datastr = "division_id=" + val  + "&token="+token;
    $.ajax({
      type: "post",
      url: "{{URL::to('admin/get-district')}}",
      data:datastr,
      cache:false,
      beforeSend: function() {
          // setting a timeout
      },
      success:function (data) {
        $('#district_id').html(data);

      },
      error: function (jqXHR, status, err) {
        alert(status);
        console.log(err);
      },
      complete: function () {
        // alert("Complete");
      }
    });
  }

  //GetUpazila
  var token =  $("input[name=_token]").val();
  function GetUpazila(val){
    var datastr = "district_id=" + val  + "&token="+token;
    $.ajax({
      type: "post",
      url: "{{URL::to('admin/get-upazila')}}",
      data:datastr,
      cache:false,
      beforeSend: function() {
          // setting a timeout
      },
      success:function (data) {
        $('#upazila_id').html(data);

      },
      error: function (jqXHR, status, err) {
        alert(status);
        console.log(err);
      },
      complete: function () {
        // alert("Complete");
      }
    });
  }
//   $('#summernote').summernote();
//   $('.summernote').summernote();

</script>
<script>
    tinymce.init({
      selector: '.summernote',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
    });
  </script>
  <script>
    tinymce.init({
      selector: '#summernote',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
    });
  </script>


</body>
</html>
