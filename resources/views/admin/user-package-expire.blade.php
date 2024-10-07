@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
         <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>User Package Expire Check</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">User Package Expire Check</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">User Package Expire Check</h3>
                            {{-- <a href="{{route('admin.product.create')}}" class="btn btn-primary float-right" >
                                <i class="fas fa-plus"></i> Add Product
                            </a> --}}
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sl.</th>
                                        <th>User Name</th>
                                        <th>Day Remaining</th> 
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $key => $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->user->name ?? '' }}</td>
                                            <?php 
                                             $package_day_limit=DB::table('advertise_packages')->where('id',$item->package_id)->first();
                                             $time_to=(\Carbon\Carbon::parse($item->approved_at)->addDays($package_day_limit->day_limit));
                                             $today_time=now();
                                             $date1=strtotime($time_to);
                                          
                                            $date2=strtotime($today_time);
                                           
                                            if($date2>$date1){
                                                $days=0;
                                                $hours=0;
                                                $minutes=0;
                                                $seconds=0;
                                            }else{
                                                $diff = abs($date2 - $date1);
                                            $years = floor($diff / (365*60*60*24));
                                            $months = floor(($diff - $years * 365*60*60*24)/ (30*60*60*24));
                                           $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                                           $hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24)/ (60*60));
                                           $minutes = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24- $hours*60*60)/ 60);
                                           $seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24- $hours*60*60 - $minutes*60));
                                            }
                                           
                                            ?>
                                           @if($days!=0)
                                            <td class="badge badge-success">{{$days}} Days {{$hours}} hours {{$minutes}} minutes Remaining</td>
                                           
                                           @else
                                           <td class="badge badge-danger">Expired</td>
                                           @endif
                                            <td>
                                                @if($days!=0)
                                                <button type="submit" class="btn btn-danger" disabled>Inactive</button>
                                                {{-- <a class="btn btn-danger text-light" disabled>Inactive</a> --}}
                                                @else
                                                 <form action="{{route('admin.user-product-inactive')}}" method="POST">
                                                    @csrf
                                                    <input name="id" value="{{$item->user_id}}" hidden>
                                                   <button type="submit" class="btn btn-danger">Inactive</button>
                                                 </form>
                                                @endif
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                                <tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
<script src="{{asset('massage/sweetalert/sweetalert.all.js')}}"></script>
    <script type="text/javascript">
        function deleteData(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    // event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>
@endsection