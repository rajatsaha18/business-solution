@extends('bdshop.frontEnd.layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 mx-auto mt-5">
            <h4 class="text-center text-success">{{Session::get('message')}}</h4>
            <div class="card mb-5">
                <div class="card-header text-center text-light bg-success"><h4 class="text-bold">Client</h4></div>
                <div class="card-body">
                    <form action="{{route('send.sms')}}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                           <input type="mobile" class="form-control" name="number" style="padding:5px" placeholder="Number" required>
                        </div>
                        <div class="form-group">
                           <textarea name="message" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="d-block mx-auto text-center mt-3">
                            <button type="submit" class="btn btn-success fw-bolder mt-2 mb-2">Subscribe</button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>

</div>
@endsection
