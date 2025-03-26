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
                    @if($routeNamePage=="aboutEN" || $routeNamePage=="aboutHtmlEN")
                        <div class="inner-banner-content wow fadeInUp" data-wow-duration=".8s">
                            <h1 class="h1-title">About</h1>
                        </div>
                        <div class="inner-banner-breadcrumb wow fadeInUp" data-wow-duration=".8s"
                             data-wow-delay=".2s">
                            <ul>
                                <li>
                                    <a href="{{ route("indexHtmlTR") }}" title="Home">Homepage</a>
                                </li>
                                <li>
                                    <span>About</span>
                                </li>
                            </ul>
                        </div>

                    @elseif($routeNamePage=="missionEN" || $routeNamePage=="missionHtmlEN")
                        <div class="inner-banner-content wow fadeInUp" data-wow-duration=".8s">
                            <h1 class="h1-title">Mission</h1>
                        </div>
                        <div class="inner-banner-breadcrumb wow fadeInUp" data-wow-duration=".8s"
                             data-wow-delay=".2s">
                            <ul>
                                <li>
                                    <a href="{{ route("indexHtmlTR") }}" title="Home">Homepage</a>
                                </li>
                                <li>
                                    <span>Mission</span>
                                </li>
                            </ul>
                        </div>

                    @elseif($routeNamePage=="visionEN" || $routeNamePage=="visionHtmlEN")
                        <div class="inner-banner-content wow fadeInUp" data-wow-duration=".8s">
                            <h1 class="h1-title">Vision</h1>
                        </div>
                        <div class="inner-banner-breadcrumb wow fadeInUp" data-wow-duration=".8s"
                             data-wow-delay=".2s">
                            <ul>
                                <li>
                                    <a href="{{ route("indexHtmlTR") }}" title="Home">Homepage</a>
                                </li>
                                <li>
                                    <span>Vision</span>
                                </li>
                            </ul>
                        </div>
                    @elseif($routeNamePage=="kvkkEN" || $routeNamePage=="kvkkHtmlEN")
                        <div class="inner-banner-content wow fadeInUp" data-wow-duration=".8s">
                            <h1 class="h1-title">KVKK</h1>
                        </div>
                        <div class="inner-banner-breadcrumb wow fadeInUp" data-wow-duration=".8s"
                             data-wow-delay=".2s">
                            <ul>
                                <li>
                                    <a href="{{ route("indexHtmlTR") }}" title="Home">Homepage</a>
                                </li>
                                <li>
                                    <span>KVKK</span>
                                </li>
                            </ul>
                        </div>
                    @elseif($routeNamePage=="referenceEN" || $routeNamePage=="referenceHtmlEN")
                        <div class="inner-banner-content wow fadeInUp" data-wow-duration=".8s">
                            <h1 class="h1-title">References</h1>
                        </div>
                        <div class="inner-banner-breadcrumb wow fadeInUp" data-wow-duration=".8s"
                             data-wow-delay=".2s">
                            <ul>
                                <li>
                                    <a href="{{ route("indexHtmlTR") }}" title="Home">Homepage</a>
                                </li>
                                <li>
                                    <span>References</span>
                                </li>
                            </ul>
                        </div>
                    @elseif($routeNamePage=="serviceEN" || $routeNamePage=="serviceHtmlEN")
                        <div class="inner-banner-content wow fadeInUp" data-wow-duration=".8s">
                            <h1 class="h1-title">Services</h1>
                        </div>
                        <div class="inner-banner-breadcrumb wow fadeInUp" data-wow-duration=".8s"
                             data-wow-delay=".2s">
                            <ul>
                                <li>
                                    <a href="{{ route("indexHtmlTR") }}" title="Home">Homepage</a>
                                </li>
                                <li>
                                    <span>Services</span>
                                </li>
                            </ul>
                        </div>
                    @elseif($routeNamePage=="serviceDetailEN" || $routeNamePage=="serviceDetailHtmlEN")
                        <div class="inner-banner-content wow fadeInUp" data-wow-duration=".8s">
                            <h1 class="h1-title">Service Detail</h1>
                        </div>
                        <div class="inner-banner-breadcrumb wow fadeInUp" data-wow-duration=".8s"
                             data-wow-delay=".2s">
                            <ul>
                                <li>
                                    <a href="{{ route("indexHtmlTR") }}" title="Home">Homepage</a>
                                </li>
                                <li>
                                    <span>Service Detail</span>
                                </li>
                            </ul>
                        </div>
                    @elseif($routeNamePage=="productEN" || $routeNamePage=="productHtmlEN")
                        <div class="inner-banner-content wow fadeInUp" data-wow-duration=".8s">
                            <h1 class="h1-title">Products</h1>
                        </div>
                        <div class="inner-banner-breadcrumb wow fadeInUp" data-wow-duration=".8s"
                             data-wow-delay=".2s">
                            <ul>
                                <li>
                                    <a href="{{ route("indexHtmlTR") }}" title="Home">Homepage</a>
                                </li>
                                <li>
                                    <span>Products</span>
                                </li>
                            </ul>
                        </div>
                    @elseif($routeNamePage=="productDetailEN" || $routeNamePage=="productDetailHtmlEN")
                        <div class="inner-banner-content wow fadeInUp" data-wow-duration=".8s">
                            <h1 class="h1-title">Product Detail</h1>
                        </div>
                        <div class="inner-banner-breadcrumb wow fadeInUp" data-wow-duration=".8s"
                             data-wow-delay=".2s">
                            <ul>
                                <li>
                                    <a href="{{ route("indexHtmlTR") }}" title="Home">Homepage</a>
                                </li>
                                <li>
                                    <span>Product Detail</span>
                                </li>
                            </ul>
                        </div>
                    @elseif($routeNamePage=="portfolioEN" || $routeNamePage=="portfolioHtmlEN")
                        <div class="inner-banner-content wow fadeInUp" data-wow-duration=".8s">
                            <h1 class="h1-title">Portfolyo</h1>
                        </div>
                        <div class="inner-banner-breadcrumb wow fadeInUp" data-wow-duration=".8s"
                             data-wow-delay=".2s">
                            <ul>
                                <li>
                                    <a href="{{ route("indexHtmlTR") }}" title="Home">Homepage</a>
                                </li>
                                <li>
                                    <span>Portfolyo</span>
                                </li>
                            </ul>
                        </div>
                    @elseif($routeNamePage=="portfolioDetailEN" || $routeNamePage=="portfolioDetailHtmlEN")
                        <div class="inner-banner-content wow fadeInUp" data-wow-duration=".8s">
                            <h1 class="h1-title">Portfolyo Detail</h1>
                        </div>
                        <div class="inner-banner-breadcrumb wow fadeInUp" data-wow-duration=".8s"
                             data-wow-delay=".2s">
                            <ul>
                                <li>
                                    <a href="{{ route("indexHtmlTR") }}" title="Home">Homepage</a>
                                </li>
                                <li>
                                    <span>Portfolyo Detail</span>
                                </li>
                            </ul>
                        </div>
                    @elseif($routeNamePage=="contactEN" || $routeNamePage=="contactHtmlEN")
                        <div class="inner-banner-content wow fadeInUp" data-wow-duration=".8s">
                            <h1 class="h1-title">Contact</h1>
                        </div>
                        <div class="inner-banner-breadcrumb wow fadeInUp" data-wow-duration=".8s"
                             data-wow-delay=".2s">
                            <ul>
                                <li>
                                    <a href="{{ route("indexHtmlTR") }}" title="Home">Homepage</a>
                                </li>
                                <li>
                                    <span>Contact</span>
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
