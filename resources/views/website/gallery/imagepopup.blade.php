<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Modal Popup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">

    <style>
        @media (max-width: 576px) {
            .smAlignment {
                display: flex;
                justify-content: center;
            }
        }
    </style>
</head>

<body>
    @php
    $galleries = App\Models\NewGallery::all();
    @endphp

    <!-- <h2>Image Modal Popup Example</h2> -->
    <section class="py-5" style="margin-bottom: 100px">
        <div class="container">
            <div class="row">
                @foreach ($galleries as $gallery)
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12 smAlignment">
                    <a data-fancybox="gallery" href="{{asset($gallery->image)}}" data-caption=""><img class="m-2" src="{{asset($gallery->image)}}" alt="Thumbnail Image" style="width:100%; max-width:300px"></a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- <a data-fancybox="gallery" href="image2.jpg" data-caption="Another Caption"><img src="thumb2.jpg" alt="Thumbnail Image" style="width:100%;max-width:300px"></a> -->

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script>
        Fancybox.bind('[data-fancybox="gallery"]', {
            infinite: true,
            Toolbar: {
                display: [{
                        id: "counter",
                        position: "center"
                    },
                    "close",
                ],
            },
        });
    </script>
</body>

</html>