@extends('frontend.layouts.app')
@section('content')
    <style>
        .daohang>li>a {


            color: black !important;

        }

        .fas.fa-search {
            color: black !important
        }

        @media(max-width:600px) {
            .prlie img {
                width: 100% !important;
            }
        }
        @media screen and (max-width:767px) {
            .prlie{
                width:23%!important;
            }
        }

    </style>


    <div class="fenbanner mat1">
        <img src="{{ asset('frontend_two/fenbanner_.png') }}" title="Company Overview" alt="Company Overview">
        <p class="fenbiao">{{ $category->name }}</p>

    </div>







    <!--  main  -->

    <div class="prmain zong">




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


            @foreach ($products as $product)
                <div class="prlie">

                    <a href="{{ route('home.single.product.show', $product->slug) }}" class="pra">{{ $product->title }}</a>

                    <p class="prp">

                        <a
                            href="{{ route('home.single.product.show', $product->slug) }}">{{ $product->short_description }}</a>

                    </p>

                    <a href="{{ route('home.single.product.show', $product->slug) }}" class="prmor">View More &gt;</a>

                    <a href="{{ route('home.single.product.show', $product->slug) }}" class="prtu">


                        <picture>

                            <source type="image/webp" srcset="{{ asset($product->frontend_image) }}">

                            <img data-original="{{ asset($product->frontend_image) }}" title="{{ $product->title }}"
                                alt="{{ $product->title }}" class="nlazy" style="width:210px;height:210px">

                        </picture>

                    </a>

                </div>
            @endforeach


        </div>


        <div>

        </div>







    </div>
@endsection
