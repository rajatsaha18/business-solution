<link rel="preload" href="{{ asset('frontend_two/js/jquery.js') }}" as="script">
<script src="{{ asset('frontend/js/jquery.js') }}" type="text/javascript"></script>


<link rel="shortcut icon" href="/favicon.ico" />

<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-206670105-1');
</script>
<!-- Google Tag Manager -->
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-TF8CJCF');
</script>
<!-- End Google Tag Manager -->
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TF8CJCF" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Facebook Pixel Code -->
<script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '183071927233088');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=183071927233088&ev=PageView&noscript=1" /></noscript>
<!-- End Facebook Pixel Code -->
<!-- Huntmobi Code -->
<script async src="{{ asset('frontend_two/js/hmt.js') }}"></script>
<!-- Huntmobi Code -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="{{ asset('frontend_two/js/js.js') }}"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-FPHW6DLVMG');
</script>

<script>
    function loadScript(a) {
        var b = document.getElementsByTagName("head")[0],
            c = document.createElement("script");
        c.type = "text/javascript", c.src = "https://tracker.metricool.com/resources/be.js", c.onreadystatechange = a, c
            .onload = a, b.appendChild(c)
    }
    loadScript(function() {
        beTracker.t({
            hash: "f2b1ffd48e5b56a7be3de1efc9d9003e"
        })
    });
</script>

<style type="text/css">
    #fastgpt-chatbot-window {
        width: 640px !important;
    }
</style>
<link rel="preload" href="{{ asset('frontend_two/css/Roboto-Bold.woff2') }}" as="font" type="font/woff2" crossorigin>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="preload" href="{{ asset('frontend_two/css/RobotoMedium.woff2') }}" as="font" type="font/woff2" crossorigin>

<link rel="preload" href="{{ asset('frontend_two/css/Roboto-Regular.woff2') }}" as="font" type="font/woff2" crossorigin>

<link rel="preload" href="{{ asset('frontend_two/css/Roboto-Light.woff2') }}" as="font" type="font/woff2" crossorigin>

<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
<link rel="preload" href="{{ asset('frontend_two/css/main.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<noscript>
    <link rel="stylesheet" href="{{ asset('frontend_two/css/main.css') }}">
</noscript>
<script>
    ! function(n) {
        "use strict";
        n.loadCSS || (n.loadCSS = function() {});
        var t, o = loadCSS.relpreload = {};
        o.support = function() {
            var e;
            try {
                e = n.document.createElement("link").relList.supports("preload")
            } catch (t) {
                e = !1
            }
            return function() {
                return e
            }
        }(), o.bindMediaToggle = function(t) {
            var e = t.media || "all";

            function a() {
                t.addEventListener ? t.removeEventListener("load", a) : t.attachEvent && t.detachEvent("onload", a),
                    t.setAttribute("onload", null), t.media = e
            }
            t.addEventListener ? t.addEventListener("load", a) : t.attachEvent && t.attachEvent("onload", a),
                setTimeout(function() {
                    t.rel = "stylesheet", t.media = "only x"
                }), setTimeout(a, 3e3)
        }, o.poly = function() {
            if (!o.support())
                for (var t = n.document.getElementsByTagName("link"), e = 0; e < t.length; e++) {
                    var a = t[e];
                    "preload" !== a.rel || "style" !== a.getAttribute("as") || a.getAttribute("data-loadcss") || (a
                        .setAttribute("data-loadcss", !0), o.bindMediaToggle(a))
                }
        }, o.support() || (o.poly(), t = n.setInterval(o.poly, 500), n.addEventListener ? n.addEventListener("load",
            function() {
                o.poly(), n.clearInterval(t)
            }) : n.attachEvent && n.attachEvent("onload", function() {
            o.poly(), n.clearInterval(t)
        })), "undefined" != typeof exports ? exports.loadCSS = loadCSS : n.loadCSS = loadCSS
    }("undefined" != typeof global ? global : this);
</script>









<script>
    var browser = navigator.appName

    var b_version = navigator.appVersion

    var version = b_version.split(";");

    var trim_Version = version[1].replace(/[ ]/g, "");

    if (browser == "Microsoft Internet Explorer" && trim_Version == "MSIE6.0") {
        alert(
            "Your browser version is too low, and some features may not be displayed! Please upgrade your browser or use another browser!");
    } else if (browser == "Microsoft Internet Explorer" && trim_Version == "MSIE7.0") {
        alert(
            "Your browser version is too low, and some features may not be displayed! Please upgrade your browser or use another browser!");
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<style>
    .daohang>li {

        margin-right: 35px;

    }
</style>
