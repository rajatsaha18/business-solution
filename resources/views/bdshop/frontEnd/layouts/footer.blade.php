<style>
    .footer_bg_color
    {
        background-color: #070175!important;
    }
    .footer {
       
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        /* background-color: #333; */
        color: #fff;
        text-align: center;
        padding: 0px 0px;
}
</style>
<footer class="footer">
    {{-- <div class="footer-bottom footer_bg_color">

    </div> --}}
    <!-- Messenger Chat Plugin Code -->


    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "101540249407042");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v15.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div style="float:left!important">
        <a href="https://wa.link/e2dy59" target="_blank">
            <svg viewBox="0 0 32 32" class="whatsapp-ico">
                <path d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z" fill-rule="evenodd">
                </path>
            </svg>
        </a>
    </div>
    <div class="footer-end pt-3 pb-3  text-light" style="background-color:#070175">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-sm-12 text-center">
                    {{-- <a href="#" class="text-light">© 2021-<script>
                            document.write(new Date().getFullYear())
                        </script></a><br> --}}
                    <a href="{{route('home')}}" class="fw-bolder fs-6" style="color:white">Business Solution</a>
                    <small class="text-lighter">All Rights Reserved</small>
                </div>
                {{-- <div class="col-md-6 col-sm-12 text-center">
                    <div>
                        <span id="head" class="text-light "></span><a href="" id="changetext" target="__blank"><span id="site" class="fs-6 fw-bolder" style="color:white"> </span></a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</footer>
