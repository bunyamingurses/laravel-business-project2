@extends("layouts.front.tr.index")
@section("content")
    @include("layouts.front.tr.partial.banner")
    <!-- START OF MAIN SERVICE -->
    <section class="service-main-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-lg-1 order-2">
                    <div class="service-sidebar wow fadeInLeft" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="service-list-box light-bg">
                            <h4 class="h4-title">Ürünler</h4>
                            <div class="service-list">
                                <ul>
                                    @php $popular=\App\Models\product::inRandomOrder()->limit(5)->get(); @endphp
                                    @foreach($popular as $popularWrite)
                                        <li>
                                            <a href="{{ route("productDetailHtmlTR",["id"=>$popularWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($popularWrite->title)]) }}"
                                               class="sec-btn" title="All Maintenance">{{ $popularWrite->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="service-sidebar-image">
                            <div class="back-img"
                                 style="background-image: url('{{ asset("asset/front/images/get-in-touch-image.jpg") }}');"></div>
                            <div class="service-sidebar-contact-wp">
                                <div class="service-sidebar-contact">
                                    <div class="white-text">
                                        <span>İletişime Geçin</span>
                                        <a href="tel:+90{{ \App\Models\setting::getSetting("phoneNumber") }}"
                                           class="h4-title"
                                           title="Call to +90{{ \App\Models\setting::getSetting("phoneNumber") }}">+90{{ \App\Models\setting::getSetting("phoneNumber") }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-lg-2 order-1">
                    <div class="service-main-box wow fadeInRight" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="service-feature-image back-img"
                             style="background-image: url('{{ asset("imageAvif/product/")."/".$product->imagesAvif }}');"></div>
                        <div class="service-main-content">
                            <h2 class="h2-title">
                                    <span>
                                        <img src="{{ asset("asset/front/images/general-contract-icon.svg") }}"
                                             alt="General Contract Icon"
                                             width="33" height="37">
                                    </span>
                                {{ $product->title }}
                            </h2>
                            {!! html_entity_decode($product->text) !!}

                            <div class="col-lg-12">
                                <h3 class="h3-title">Ürünler</h3>
                                <div class="footer-gallery">
                                    <ul>

                                        @foreach($gallery as $galleryWrite)
                                            <li>
                                                <a href="{{ asset("imageAvif/product/gallery/")."/".$galleryWrite->imageAvif }} "
                                                   class="popup-image"
                                                   title="Gallery Image">
                                                    <div class="back-img"
                                                         style="background-image: url('{{ asset("imageAvif/product/gallery/")."/".$galleryWrite->imageAvif }}'); opacity: 0.8;">
                                                        <h4 class="text-center text-light" style="padding-top:45%;">{{ $galleryWrite->name }}</h4>
                                                    </div>
                                                </a>
                                            </li>
                                        @endforeach


                                    </ul>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF MAIN SERVICE -->
@endsection
