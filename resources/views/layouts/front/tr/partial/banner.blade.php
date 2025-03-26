<!-- START OF BANNER -->
<section class="inner-banner back-img" style="background-image: url('{{ asset("imageAvif/setting/")."/".\App\Models\about::getAbout("bannerImageAvif") }}'); background-size: cover; background-position: center center;">
    <div class="banner-stripes">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="banner-shape-wp wow fadeInRight for-des" data-wow-duration=".8s">
        <div class="banner-shape">
            <span class="stripe"></span>
            <span class="stripe stripe-secondary"></span>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-banner-content-wp white-text text-center">


                    @php
                        $routeNamePage=request()->route()->getName();
                    @endphp
                    @if($routeNamePage=="aboutTR" || $routeNamePage=="aboutHtmlTR")
                        <div class="inner-banner-content wow fadeInUp" data-wow-duration=".8s">
                            <h1 class="h1-title">Hakkımda</h1>
                        </div>
                        <div class="inner-banner-breadcrumb wow fadeInUp" data-wow-duration=".8s"
                             data-wow-delay=".2s">
                            <ul>
                                <li>
                                    <a href="{{ route("indexHtmlTR") }}" title="Home">Anasayfa</a>
                                </li>
                                <li>
                                    <span>Hakkımda</span>
                                </li>
                            </ul>
                        </div>

                    @elseif($routeNamePage=="missionTR" || $routeNamePage=="missionHtmlTR")
                        <div class="inner-banner-content wow fadeInUp" data-wow-duration=".8s">
                            <h1 class="h1-title">Misyon</h1>
                        </div>
                        <div class="inner-banner-breadcrumb wow fadeInUp" data-wow-duration=".8s"
                             data-wow-delay=".2s">
                            <ul>
                                <li>
                                    <a href="{{ route("indexHtmlTR") }}" title="Home">Anasayfa</a>
                                </li>
                                <li>
                                    <span>Misyon</span>
                                </li>
                            </ul>
                        </div>

                    @elseif($routeNamePage=="visionTR" || $routeNamePage=="visionHtmlTR")
                        <div class="inner-banner-content wow fadeInUp" data-wow-duration=".8s">
                            <h1 class="h1-title">Vizyon</h1>
                        </div>
                        <div class="inner-banner-breadcrumb wow fadeInUp" data-wow-duration=".8s"
                             data-wow-delay=".2s">
                            <ul>
                                <li>
                                    <a href="{{ route("indexHtmlTR") }}" title="Home">Anasayfa</a>
                                </li>
                                <li>
                                    <span>Vizyon</span>
                                </li>
                            </ul>
                        </div>
                    @elseif($routeNamePage=="kvkkTR" || $routeNamePage=="kvkkHtmlTR")
                        <div class="inner-banner-content wow fadeInUp" data-wow-duration=".8s">
                            <h1 class="h1-title">KVKK</h1>
                        </div>
                        <div class="inner-banner-breadcrumb wow fadeInUp" data-wow-duration=".8s"
                             data-wow-delay=".2s">
                            <ul>
                                <li>
                                    <a href="{{ route("indexHtmlTR") }}" title="Home">Anasayfa</a>
                                </li>
                                <li>
                                    <span>KVKK</span>
                                </li>
                            </ul>
                        </div>
                    @elseif($routeNamePage=="referenceTR" || $routeNamePage=="referenceHtmlTR")
                        <div class="inner-banner-content wow fadeInUp" data-wow-duration=".8s">
                            <h1 class="h1-title">Referanslar</h1>
                        </div>
                        <div class="inner-banner-breadcrumb wow fadeInUp" data-wow-duration=".8s"
                             data-wow-delay=".2s">
                            <ul>
                                <li>
                                    <a href="{{ route("indexHtmlTR") }}" title="Home">Anasayfa</a>
                                </li>
                                <li>
                                    <span>Referanslar</span>
                                </li>
                            </ul>
                        </div>
                    @elseif($routeNamePage=="serviceTR" || $routeNamePage=="serviceHtmlTR")
                        <div class="inner-banner-content wow fadeInUp" data-wow-duration=".8s">
                            <h1 class="h1-title">Hizmetler</h1>
                        </div>
                        <div class="inner-banner-breadcrumb wow fadeInUp" data-wow-duration=".8s"
                             data-wow-delay=".2s">
                            <ul>
                                <li>
                                    <a href="{{ route("indexHtmlTR") }}" title="Home">Anasayfa</a>
                                </li>
                                <li>
                                    <span>Hizmetler</span>
                                </li>
                            </ul>
                        </div>
                    @elseif($routeNamePage=="serviceDetailTR" || $routeNamePage=="serviceDetailHtmlTR")
                        <div class="inner-banner-content wow fadeInUp" data-wow-duration=".8s">
                            <h1 class="h1-title">Hizmet Detay</h1>
                        </div>
                        <div class="inner-banner-breadcrumb wow fadeInUp" data-wow-duration=".8s"
                             data-wow-delay=".2s">
                            <ul>
                                <li>
                                    <a href="{{ route("indexHtmlTR") }}" title="Home">Anasayfa</a>
                                </li>
                                <li>
                                    <span>Hizmet Detay</span>
                                </li>
                            </ul>
                        </div>
                    @elseif($routeNamePage=="productTR" || $routeNamePage=="productHtmlTR")
                        <div class="inner-banner-content wow fadeInUp" data-wow-duration=".8s">
                            <h1 class="h1-title">Ürünler</h1>
                        </div>
                        <div class="inner-banner-breadcrumb wow fadeInUp" data-wow-duration=".8s"
                             data-wow-delay=".2s">
                            <ul>
                                <li>
                                    <a href="{{ route("indexHtmlTR") }}" title="Home">Anasayfa</a>
                                </li>
                                <li>
                                    <span>Ürünler</span>
                                </li>
                            </ul>
                        </div>
                    @elseif($routeNamePage=="productDetailTR" || $routeNamePage=="productDetailHtmlTR")
                        <div class="inner-banner-content wow fadeInUp" data-wow-duration=".8s">
                            <h1 class="h1-title">Ürün Detay</h1>
                        </div>
                        <div class="inner-banner-breadcrumb wow fadeInUp" data-wow-duration=".8s"
                             data-wow-delay=".2s">
                            <ul>
                                <li>
                                    <a href="{{ route("indexHtmlTR") }}" title="Home">Anasayfa</a>
                                </li>
                                <li>
                                    <span>Ürün Detay</span>
                                </li>
                            </ul>
                        </div>
                    @elseif($routeNamePage=="portfolioTR" || $routeNamePage=="portfolioHtmlTR")
                        <div class="inner-banner-content wow fadeInUp" data-wow-duration=".8s">
                            <h1 class="h1-title">Portfolyo</h1>
                        </div>
                        <div class="inner-banner-breadcrumb wow fadeInUp" data-wow-duration=".8s"
                             data-wow-delay=".2s">
                            <ul>
                                <li>
                                    <a href="{{ route("indexHtmlTR") }}" title="Home">Anasayfa</a>
                                </li>
                                <li>
                                    <span>Portfolyo</span>
                                </li>
                            </ul>
                        </div>
                    @elseif($routeNamePage=="portfolioDetailTR" || $routeNamePage=="portfolioDetailHtmlTR")
                        <div class="inner-banner-content wow fadeInUp" data-wow-duration=".8s">
                            <h1 class="h1-title">Portfolyo Detay</h1>
                        </div>
                        <div class="inner-banner-breadcrumb wow fadeInUp" data-wow-duration=".8s"
                             data-wow-delay=".2s">
                            <ul>
                                <li>
                                    <a href="{{ route("indexHtmlTR") }}" title="Home">Anasayfa</a>
                                </li>
                                <li>
                                    <span>Portfolyo Detay</span>
                                </li>
                            </ul>
                        </div>
                    @elseif($routeNamePage=="contactTR" || $routeNamePage=="contactHtmlTR")
                        <div class="inner-banner-content wow fadeInUp" data-wow-duration=".8s">
                            <h1 class="h1-title">İletişim</h1>
                        </div>
                        <div class="inner-banner-breadcrumb wow fadeInUp" data-wow-duration=".8s"
                             data-wow-delay=".2s">
                            <ul>
                                <li>
                                    <a href="{{ route("indexHtmlTR") }}" title="Home">Anasayfa</a>
                                </li>
                                <li>
                                    <span>İletişim</span>
                                </li>
                            </ul>
                        </div>



                    @endif


                </div>
            </div>
        </div>
    </div>
</section>
<!-- END OF BANNER -->
