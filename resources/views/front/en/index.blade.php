@extends("layouts.front.en.index")
@section("content")
    <!-- START OF HERO SECTION -->
    <section class="main-banner-2 back-img"
             style="background-image: url('{{ asset("imageAvif/setting/")."/".\App\Models\about::getAbout("bannerImageAvif") }}'); background-size: cover; background-position: center center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content-2-wp ">
                        <div class="banner-content-2-wp white-text">
                            <h1 class="h1-title wow fadeInUp text-center" data-wow-duration=".8s">We are the Industry Solution for Growth</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF HERO SECTION -->

    @include("layouts.front.en.partial.about")

    <!-- START OF NEW INNOVATIONS -->
    <div class="marquee-text-wp text-center">
        <div class="sec-title wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
            <span class="sub-title">
                <img src="{{ asset("asset/front/images/setting-icon.svg") }}" width="18" height="18" alt="Setting Icon">References
            </span>
            <h2 class="h2-title m-0">Our References</h2>
        </div>
        @php $reference=\App\Models\reference::all(); $text="";@endphp
        <div class="marquee-text wow fadeInUp" data-wow-duration=".2s" data-wow-delay=".2s">
            @foreach($reference as $referenceWrite)
                @php $text.=$referenceWrite->name." / "; @endphp
            @endforeach

            <span class="h1-title">{{$text}}</span>
            <span class="h1-title">{{$text}}</span>
        </div>
        <div class="marquee-text wow fadeInUp" data-wow-duration=".2s" data-wow-delay=".2s">
            <span class="h1-title">{{$text}}</span>
            <span class="h1-title">{{$text}}</span>
        </div>
    </div>
    <div class="more-work wow fadeInUp mt-2 text-center" data-wow-duration=".8s" data-wow-delay=".2s">
        <a href="{{ route("referenceHtmlEN") }}" class="sec-btn wow fadeInUp">All References</a>
    </div>
    <!-- START OF NEW INNOVATIONS -->

    @php $service=\App\Models\services::inRandomOrder()->limit(4)->get(); @endphp
    @if(isset($service[0]["id"]))

        <!-- START WORKING PORTFOLIO -->
        <section class="explore-work">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="explore-work-content-wp">
                            <div class="sec-title wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                                <span class="sub-title">
                                    <img src="{{ asset("asset/front/images/setting-icon.svg") }}" width="18" height="18"
                                         alt="Setting Icon">
                                    Services
                                </span>
                                <h2 class="h2-title m-0">Our Services</h2>
                            </div>
                            <div class="more-work wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                                <a href="{{ route("serviceHtmlEN") }}" class="sec-btn wow fadeInUp">All Services</a>
                            </div>
                            <div class="explore-work-projects container wow fadeInUp" data-wow-duration=".8s"
                                 data-wow-delay=".2s">
                                <div class="row">
                                    @foreach($service as $serviceWrite)
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="explore-work-box our-work-box image-sm">
                                                <div class="back-img"
                                                     style="background-image: url('{{ asset("imageAvif/service/")."/".$serviceWrite->imagesAvif }}');">
                                                </div>
                                                <div class="explore-work-content our-work-content">
                                                    <div class="explore-work-name our-work-name">
                                                        <h4 class="h4-title">
                                                            <a href="{{ route("serviceDetailHtmlEN",["id"=>$serviceWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($serviceWrite->titleEnglish)]) }}"
                                                               title="{{ $serviceWrite->titleEnglish }}">{{ $serviceWrite->titleEnglish }}</a>
                                                        </h4>
                                                    </div>
                                                    <a href="{{ route("serviceDetailHtmlEN",["id"=>$serviceWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($serviceWrite->titleEnglish)]) }}"
                                                       class="read-more-services sec-btn icon-lg"
                                                       title="{{ $serviceWrite->titleEnglish }}"></a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END WORKING PORTFOLIO -->
    @endif

    @php $product=\App\Models\product::inRandomOrder()->limit(4)->get(); @endphp
    @if(isset($product[0]["id"]))
        <!-- START WORKING PORTFOLIO -->
        <section class="explore-work">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="explore-work-content-wp">
                            <div class="sec-title wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                                <span class="sub-title">
                                    <img src="{{ asset("asset/front/images/setting-icon.svg") }}" width="18" height="18"
                                         alt="Setting Icon">
                                    Products
                                </span>
                                <h2 class="h2-title m-0">Our Products</h2>
                            </div>
                            <div class="more-work wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                                <a href="{{ route("productHtmlEN") }}" class="sec-btn wow fadeInUp">All Products</a>
                            </div>
                            <div class="explore-work-projects container wow fadeInUp" data-wow-duration=".8s"
                                 data-wow-delay=".2s">
                                <div class="row">
                                    @foreach($product as $productWrite)

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="explore-work-box our-work-box image-sm">
                                                <div class="back-img"
                                                     style="background-image: url('{{ asset("imageAvif/product/")."/".$productWrite->imagesAvif }}');">
                                                </div>
                                                <div class="explore-work-content our-work-content">
                                                    <div class="explore-work-name our-work-name">
                                                        <h4 class="h4-title">
                                                            <a href="{{ route("productDetailHtmlEN",["id"=>$productWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($productWrite->titleEnglish)]) }}"
                                                               title="{{ $productWrite->titleEnglish }}">{{ $productWrite->titleEnglish }}</a>
                                                        </h4>
                                                    </div>
                                                    <a href="{{ route("productDetailHtmlEN",["id"=>$productWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($productWrite->titleEnglish)]) }}"
                                                       class="read-more-services sec-btn icon-lg"
                                                       title="{{ $productWrite->titleEnglish }}"></a>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END WORKING PORTFOLIO -->
    @endif

    @php $portfolio=\App\Models\project::inRandomOrder()->limit(4)->get(); @endphp
    @if(isset($portfolio[0]["id"]))
        <!-- START WORKING PORTFOLIO -->
    <section class="explore-work">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="explore-work-content-wp">
                        <div class="sec-title wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                                <span class="sub-title">
                                    <img src="{{ asset("asset/front/images/setting-icon.svg") }}" width="18" height="18"
                                         alt="Setting Icon">
                                    Portfolyo
                                </span>
                            <h2 class="h2-title m-0">Our Portfolyo</h2>
                        </div>
                        <div class="more-work wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                            <a href="{{ route("portfolioHtmlEN") }}" class="sec-btn wow fadeInUp">All Portfolyo</a>
                        </div>
                        <div class="explore-work-projects container wow fadeInUp" data-wow-duration=".8s"
                             data-wow-delay=".2s">
                            <div class="row">

                                @foreach($portfolio as $portfolioWrite)
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="explore-work-box our-work-box image-sm">
                                            <div class="back-img"
                                                 style="background-image: url('{{ asset("imageAvif/project/")."/".$portfolioWrite->imagesAvif }}');">
                                            </div>
                                            <div class="explore-work-content our-work-content">
                                                <div class="explore-work-name our-work-name">
                                                    <h4 class="h4-title">
                                                        <a href="{{ route("portfolioDetailHtmlEN",["id"=>$portfolioWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($portfolioWrite->titleEnglish)]) }}"
                                                           title="{{ $portfolioWrite->titleEnglish }}">{{ $portfolioWrite->titleEnglish }}</a>
                                                    </h4>
                                                </div>
                                                <a href="{{ route("portfolioDetailHtmlEN",["id"=>$portfolioWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($portfolioWrite->titleEnglish)]) }}"
                                                   class="read-more-services sec-btn icon-lg"
                                                   title="{{ $portfolioWrite->titleEnglish }}"></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END WORKING PORTFOLIO -->
    @endif

    @include("layouts.front.en.partial.faq")

@endsection
