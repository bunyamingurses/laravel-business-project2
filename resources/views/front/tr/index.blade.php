@extends("layouts.front.tr.index")
@section("content")
    <!-- START OF HERO SECTION -->
    <section class="main-banner-2 back-img"
             style="background-image: url('{{ asset("imageAvif/setting/")."/".\App\Models\about::getAbout("bannerImageAvif") }}'); background-size: cover; background-position: center center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content-2-wp ">
                        <div class="banner-content-2-wp white-text">
                            <h1 class="h1-title wow fadeInUp text-center" data-wow-duration=".8s">Büyümeye Yönelik
                                Sektör
                                Çözümüyüz</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF HERO SECTION -->

    @include("layouts.front.tr.partial.about")

    <!-- START OF NEW INNOVATIONS -->
    <div class="marquee-text-wp text-center">
        <div class="sec-title wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
            <span class="sub-title">
                <img src="{{ asset("asset/front/images/setting-icon.svg") }}" width="18" height="18" alt="Setting Icon">Referanslar
            </span>
            <h2 class="h2-title m-0">Referanslarımız</h2>
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
        <a href="{{ route("referenceHtmlTR") }}" class="sec-btn wow fadeInUp">Tüm Referanslarımız</a>
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
                                    Hizmetler
                                </span>
                                <h2 class="h2-title m-0">Hizmetlerimiz</h2>
                            </div>
                            <div class="more-work wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                                <a href="{{ route("serviceHtmlTR") }}" class="sec-btn wow fadeInUp">Tüm Hizmetler</a>
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
                                                            <a href="{{ route("serviceDetailHtmlTR",["id"=>$serviceWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($serviceWrite->title)]) }}"
                                                               title="{{ $serviceWrite->title }}">{{ $serviceWrite->title }}</a>
                                                        </h4>
                                                    </div>
                                                    <a href="{{ route("serviceDetailHtmlTR",["id"=>$serviceWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($serviceWrite->title)]) }}"
                                                       class="read-more-services sec-btn icon-lg"
                                                       title="{{ $serviceWrite->title }}"></a>
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
                                    Ürünler
                                </span>
                                <h2 class="h2-title m-0">Ürünlerimiz</h2>
                            </div>
                            <div class="more-work wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                                <a href="{{ route("productHtmlTR") }}" class="sec-btn wow fadeInUp">Tüm Ürünler</a>
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
                                                            <a href="{{ route("productDetailHtmlTR",["id"=>$productWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($productWrite->title)]) }}"
                                                               title="{{ $productWrite->title }}">{{ $productWrite->title }}</a>
                                                        </h4>
                                                    </div>
                                                    <a href="{{ route("productDetailHtmlTR",["id"=>$productWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($productWrite->title)]) }}"
                                                       class="read-more-services sec-btn icon-lg"
                                                       title="{{ $productWrite->title }}"></a>
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
                            <h2 class="h2-title m-0">Portfolyo</h2>
                        </div>
                        <div class="more-work wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                            <a href="portfolio-2.html" class="sec-btn wow fadeInUp">Tüm Portfolyo</a>
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
                                                        <a href="{{ route("portfolioDetailHtmlTR",["id"=>$portfolioWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($portfolioWrite->title)]) }}"
                                                           title="{{ $portfolioWrite->title }}">{{ $portfolioWrite->title }}</a>
                                                    </h4>
                                                </div>
                                                <a href="{{ route("portfolioDetailHtmlTR",["id"=>$portfolioWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($portfolioWrite->title)]) }}"
                                                   class="read-more-services sec-btn icon-lg"
                                                   title="{{ $portfolioWrite->title }}"></a>
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

    @include("layouts.front.tr.partial.faq")

@endsection
