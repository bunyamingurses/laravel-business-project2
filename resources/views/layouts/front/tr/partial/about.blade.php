<!-- START OF WHY CHOOSE US -->
<section class="why-choose light-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="why-choose-image-wp wow fadeInLeft" data-wow-duration=".8s" data-wow-delay=".2s">
                    <div class="row">
                        <div class="col-12">
                            <div class="why-choose-image why-choose-1 back-img"
                                 style="background-image: url('{{ asset("asset/front/images/choose-us-1.jpg") }}');"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 align-self-lg-center">
                <div class="why-choose-content wow fadeInRight" data-wow-duration=".8s" data-wow-delay=".2s">
                    <div class="sec-title">
                                <span class="sub-title">
                                    <img src="{{ asset("asset/front/images/setting-icon.svg") }}" width="18" height="18"
                                         alt="Setting Icon">
                                    NE SAĞLIYORUZ
                                </span>
                        <h2 class="h2-title">EN İYİ KALİTEYİ SUNUYORUZ</h2>
                    </div>
                    <p>{!! html_entity_decode(\App\Models\about::getAbout("about")) !!}</p>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- END OF WHY CHOOSE US -->



{{--<!-- START OF WHY CHOOSE US -->--}}
{{--<section class="why-choose light-bg">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-6">--}}
{{--                <div class="why-choose-image-wp wow fadeInLeft" data-wow-duration=".8s" data-wow-delay=".2s">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-12">--}}
{{--                            <div class="why-choose-image why-choose-1 back-img"--}}
{{--                                 style="background-image: url('{{ asset("asset/front/images/choose-us-1.jpg") }}');"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-6 align-self-lg-center">--}}
{{--                <div class="why-choose-content wow fadeInRight" data-wow-duration=".8s" data-wow-delay=".2s">--}}
{{--                    <div class="sec-title">--}}
{{--                                <span class="sub-title">--}}
{{--                                    <img src="{{ asset("asset/front/images/setting-icon.svg") }}" width="18" height="18"--}}
{{--                                         alt="Setting Icon">--}}
{{--                                    WHAT WE PROVIDE--}}
{{--                                </span>--}}
{{--                        <h2 class="h2-title">We Provide Best Quality</h2>--}}
{{--                    </div>--}}
{{--                    <p>Praesent sed tincidunt turpis. Integer eget sem gravida, tempus quam nec, scelerisque--}}
{{--                        lorem. Praesent eleifend pretium dignissim. Class aptent taciti sociosqu ad litora--}}
{{--                        torquent per conubia nostra, per inceptos himenaeos.</p>--}}
{{--                    <ul>--}}
{{--                        <li>--}}
{{--                            <span>Curabitur eu arcu sit amet orci malesuada posuere at non leo.</span>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <span>Quisque semper lorem nisl, quis interdum quam suscipit at.</span>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <span>Maecenas aliquet nunc ut dui euismod condimentum.</span>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!-- END OF WHY CHOOSE US -->--}}
