@extends('bdshop.frontEnd.layouts.master')

@section('content')
    <!--top address bar-->
    <div class="container">
        <style>
            .country a:hover {
                color: rgb(220, 168, 78) !important;
            }
        </style>
        <div class="mt-3 mb-2">

            <input type="text" id="search-country" class="p-2" placeholder="Search Country" onkeyup="searchFun()"></input>
        </div>
        <div class="card mb-5">

            <div class="row p-3" id="countries">
               
                @foreach ($all_countries as $country)
                    <div class="col-md-2 p-2 country">
                        <a class="county"href="{{ route('get.country.product', $country->name) }}">{{ $country->name }}</a>
                    </div>
                @endforeach
                


            </div>

        </div>
    </div>
    <script>
        const searchFun = () => {
            let filter = document.getElementById('search-country').value.toUpperCase();
            // console.log(filter);
            filter=filter.toLowerCase();
            let x = document.getElementsByClassName('county');
            console.log(x);
            for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(filter)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="";                 
        }
      }
    }
    </script>
@endsection
