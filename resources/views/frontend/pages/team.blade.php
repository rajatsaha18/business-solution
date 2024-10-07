@extends('frontend.layouts.app')
@section('content')
    <style>
        .daohang>li>a {


            color: black !important;

        }

        .fas.fa-search {
            color: black !important
        }
    </style>





    <body>




        <!--  banner  -->

        <div class="fenbanner mat1">
            <img src="{{ asset('frontend_two/fenbanner_.png') }}" title="Company Overview" alt="Company Overview">
            <p class="fenbiao">Our Team</p>

        </div>
        <!--  mianbao  -->
        <div class="mianbao mianbao2   zong">
            <a href="{{ route('home.index') }}" title="Home">Home</a>
            &gt;
            <a href="#">Team</a>
        </div>




        @if ($management)
            <div class="prmain zong">


                <h1 style="text-align: center;font-weight:700">Our Managment</h1>

                <script type="text/javascript">
                    var READ_MORE1 = "Read More";
                    var READ_LESS1 = "Read Less";
                    var HEIGHT_DES1 = 56;

                    $(".pro1-desc").each(function() {
                        if ($(this).height() > HEIGHT_DES1) {

                            $(this).height(HEIGHT_DES1);
                            $(this).next().show();
                            $(this).next().children().text(READ_MORE1);
                        }
                    })
                    $(".pro1-txt .more_span1").click(function() {
                        var more_span1 = $(this);
                        var desb1 = more_span1.parent().prev();

                        if (more_span1.text() == READ_MORE1) {
                            desb1.height("auto");
                            more_span1.text(READ_LESS1);
                        } else {

                            desb1.height(HEIGHT_DES1);

                            more_span1.text(READ_MORE1);
                        }
                    })
                </script>

                <div class="prn">


                    @foreach ($management as $item)
                        <div class="prlie">




                            <picture>

                                <source type="image/webp" srcset="{{ asset($item->image) }}">

                                <img data-original="{{ asset($item->image) }}" class="nlazy"
                                    style="width:100%;height:210px;object-fit:cover">

                            </picture>
                            <a class="prmor">{{ $item->name }}</a>
                            <a class="prmor">{{ $item->designation }}</a>

                        </div>
                    @endforeach


                </div>


                <div>

                </div>







            </div>
        @endif
    @endsection
