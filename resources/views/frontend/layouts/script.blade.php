<script type="text/javascript" src="{{ asset('frontend_two/js/lunboba.js') }}"></script>
<script src="{{ asset('frontend_two/js/shuzi.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend_two/js/qiehuan2.js') }}"></script>
<script>
    $(".m3lie").hover(function(e) {
        e.preventDefault();
        $(this).addClass("m3lieh").siblings(".m3lie").removeClass("m3lieh")
    })
</script>
<script type="application/javascript">
    var btn2 = document.getElementById("jiqir");
    btn2.onclick = function (event) {
        if (box.style.display == "none") {
            box.style.display = "block";
        } else {
            box.style.display = "block";
        }
    };
</script>
<script type="application/javascript">
    $(".close-message").click(function () {
        $('#box').css("display", "none");
    });
</script>

<script>
    /*  cookie  */
    $(function() {
        if (localStorage.getItem("oktime2")) {
            var oktimeN = new Date().getTime(),
                oktimeO = localStorage.getItem("oktime2");

            if (oktimeN - oktimeO >= 30 * 24 * 60 * 60 * 1000) {
                $(".cookcon").addClass("cooflex");
            }
        } else {
            $(".cookcon").addClass("cooflex");
        }

        $(".receive").click(function() {
            localStorage.setItem("oktime2", new Date().getTime());
            $(".cookcon").hide();

        });
        $(".guanbicoo").click(function() {
            $(".cookcon").hide();
        });
    })
</script>


</script>
<script>
    if (localStorage.getItem("oktime")) {
        var oktimeN = new Date().getTime(),
            oktimeO = localStorage.getItem("oktime");


    } else {
        $(".tan1h").show();
        // $(".infu").removeClass("infuh")
    }

    $(".guanbi").click(function() {
        localStorage.setItem("oktime", new Date().getTime());
        $(".tan1").addClass("tan1h");
        $(".tan1h").delay(800).hide(8);
        $(".infu").addClass("infuh");
    });
    $(".infu").click(function() {
        $(".tan1").removeClass("tan1h");
        $(".tan1").delay(8).show(800);
        $(".infu").removeClass("infuh");
    });
</script>

<script type="text/javascript" src="{{ asset('frontend_two/js/bottom.js') }}"></script>

<script>
    var dxurl = window.location.href;
    var title = "";
    if (!title) title = 'Other';
    $.get("/index.php?g=Demo&m=Index&a=views&zxurl=" + dxurl + "&title=" + title);

    var proarttitle = '';
</script>
<script src="{{ asset('frontend_two/js/form1.js') }}"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
@yield('script')
