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
                                    WHAT WE PROVIDE
                                </span>
                        <h2 class="h2-title">WE OFFER THE BEST QUALITY</h2>
                    </div>
                    <p>{!! html_entity_decode(\App\Models\about::getAbout("aboutEnglish")) !!}</p>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- END OF WHY CHOOSE US -->
