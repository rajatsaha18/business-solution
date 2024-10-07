 <!--  foot  -->
 <style>
 @media screen and (min-width: 1366px) {
    .fo1 {
        margin-right: 50px; /* Adjust the value based on your preference */
    }

    .fo2 {
        margin-left: 50px; /* Adjust the value based on your preference */
    }
}
    
 </style>
 <div class="foot">
    <div class="zong">
        <div class="fo1">
            <span class="fobiao">Navigation</span>
            <div class="ful">
                <a href="{{ route('home.index') }}" title="Home">Home</a>
                <a href="{{ route('shop.index') }}" title="Products">Products</a><a
                    href="{{ url('/page-details/about-us') }}" title="About Us">About Us</a>
                    <a
                    href="{{ route('contact.index') }}" title="Contact Us">Contact Us</a>
            </div>
        </div>
        <div class="fo2">
            <a href="{{ route('contact.index') }}" class="" style="font-size:25px; color:white;">Empex</a>
            <ul class="ful">
                <li>{{ $sitesetting->phone ??'' }}</li>

                <li>E-mail: <a href="mailto:{{ $sitesetting->email ??'' }}" style="word-break:break-all"
                        rel="nofollow">{{ $sitesetting->email ??'' }}</a></li>
                <li>Address: {{ $sitesetting->address ??'' }}</li>
            </ul>
        </div>
        <div class="clear2">
        </div>

        <div class="fo4">
            <p class="fo4_text">Contact Us</p>
            <div class="fo4_form">
                <form class="coxin" method='post' action="{{ route('contact.store') }}"
                    enctype='multipart/form-data'>
                    @csrf
                    <div class="int1 xing">
                        <i class="iconfont icon-contact1"></i>
                        <input type="text" placeholder="Name" name="name" id="full_namef">
                    </div>

                    <div class="int1 xing">
                        <i class="iconfont icon-email1"></i>
                        <input type="text" placeholder="E-mail" name="email" id="emailf">
                    </div>
                    <div class="int1">
                        <i class="iconfont icon-tel1"></i>
                        <input type="text" placeholder="phone" name="phone">
                    </div>
                    <div class="int1">
                        <i class="iconfont icon-edit"></i>
                        <textarea placeholder="Your Message" name="message"></textarea>
                    </div>


                    <input type="submit" value="SUBMIT" class="int3">

                </form>
            </div>
        </div>
        <div class="fo3">
            <a href="/" class="fologo" title=""><img
                    src="{{ asset($sitesetting->logo) }}"
                    title="Pulse Technologies"
                    alt="Pulse Technologies" /></a>
            <div class="shejiao2">
                <a href="{{ isset($sitesetting->facebook) ? $sitesetting->facebook : '' }}" target="_blank" rel="nofollow"
                    class="iconfont icon-facebook"></a>
                <a href="{{ isset($sitesetting->twitter) ? $sitesetting->twitter : '' }}" target="_blank" rel="nofollow"
                    class="iconfont icon-twitter"></a>
                <a href="{{ isset($sitesetting->google) ? $sitesetting->google : '' }}" target="_blank" rel="nofollow"
                    class="iconfont icon-email"></a>

                <a href="{{ isset($sitesetting->linkedin) ? $sitesetting->linkedin : '' }}" target="_blank" rel="nofollow"
                    class="iconfont icon-linkedin"></a>
            </div>

        </div>
        <div class="clear">
        </div>


    </div>
</div>



<!--cookie-->


<!--  top  -->
<div class="top iconfont icon-up7"></div>
<!--  tankuang1  -->
<div class="tan1 tan1h">
    <div class="tan1n">
        <p class="guanbi"><img src="/themes/simplebootx/style/images/guanbi.png" title="close" alt="close">
        </p>
        <p class="tanbiao">We appreciate your feedback</p>
        <p class="tanp">We sincerely invite you to participate in our survey for helping us to improve our
            digital
            market.</p>

        <div class="tanxin">
            <p class="tanp1"><i>*</i>1.How fast does the website load?</p>
            <div class="tanx">
                <label><input type="radio" name="first_q" value="Fast">Fast</label>
                <label><input type="radio" name="first_q" value="Average">Average</label>
                <label><input type="radio" name="first_q" value="Slow">Slow</label>
            </div>
            <p class="tanp1"><i>*</i>2.Does the products displayed on the website interest you?</p>
            <div class="tanx">
                <label><input type="radio" name="second_q" value="Very interested">Very interested</label>
                <label><input type="radio" name="second_q" value="Yes, I want to know more.">Yes, I want to
                    know
                    more.</label>
                <label><input type="radio" name="second_q" value="No, not at all.">No, not at all.</label>
            </div>
            <p class="tanp1"><i>*</i>3.How easy is it for you to find the information you need?</p>
            <div class="tanx">
                <label><input type="radio" name="third_q" value="Very easy.">Very easy.</label>
                <label><input type="radio" name="third_q" value="Still need time to search.">Still need time to
                    search.</label>
                <label><input type="radio" name="third_q" value="No, I can't find what I need.">No, I can't
                    find
                    what I need.</label>
            </div>
            <p class="tanp1">4.What information or service do you suggest we can offer?</p>
            <div class="tanx">
                <textarea placeholder="Message..." name="msg" id="msgt"></textarea>
            </div>
            <div class="yzmtt mtop">
                <div class="int1 xing">

                    <input type="text" placeholder="CAPTCHA" name="verify" id="captcht">
                </div>
                <img class="verify_img"
                    src="/index.php?g=api&m=checkcode&a=index&length=4&font_size=18&width=172&height=36&use_noise=0&use_curve=0&id=20"
                    onclick="this.src='/index.php?g=api&m=checkcode&a=index&length=4&font_size=18&width=172&height=36&use_noise=0&use_curve=0&id=20&time='+Math.random();"
                    class="coyanzheng" />
                <div class="clear"></div>
            </div>
            <input type="hidden" id="type1" name="type" value="4">
            <input name="verifyid" value="20" type="hidden" id="verifyid">
            <input type="submit" value="SUBMIT" class="int2" onclick="submitMsgt()" id="hidee">
        </div>
    </div>
</div>



<!--  tankuang2  -->
<div class="tan2" id="tan2">
    <div class="tan2n">
        <p class="duigou"><img src="/themes/simplebootx/style/images/duigou.jpg" title="duigou" alt="duigou">
        </p>
        <p class="tan2biao">THANKS</p>
        <p class="tan2p">Thank you for sharing your thoughts with us. We’re highly appreciated your every
            feedback.
        </p>
    </div>
</div>
<div class="tan2" id="tan3">
    <div class="tan2n">
        <p class="duigou"><img src="/themes/simplebootx/style/images/duigou.jpg" title="duigou" alt="duigou">
        </p>
        <p class="tan2biao">Sorry!</p>
    </div>
</div>
<div class="tan2" id="tan4">
    <div class="tan2n">
        <p class="duigou"><img src="/themes/simplebootx/style/images/duigou.jpg" title="duigou" alt="duigou">
        </p>
        <p class="tan2biao">THANKS</p>
        <p class="tan2p">Thank you for sharing your thoughts with us. We’re highly appreciated your every
            feedback.
        </p>
    </div>
</div>
