@extends("layouts.front.en.index")
@section("content")
    @include("layouts.front.en.partial.banner")
    <!-- START OF MAIN SERVICE -->
    <section class="service-main-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-lg-1 order-2">
                    <div class="service-sidebar wow fadeInLeft" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="service-list-box light-bg">
                            <h4 class="h4-title">Services</h4>
                            <div class="service-list">
                                <ul>
                                    @php $popular=\App\Models\services::inRandomOrder()->limit(5)->get(); @endphp
                                    @foreach($popular as $popularWrite)
                                        <li>
                                            <a href="{{ route("serviceDetailHtmlEN",["id"=>$popularWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($popularWrite->titleEnglish)]) }}" class="sec-btn" title="All Maintenance">{{ $popularWrite->titleEnglish }}</a>
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
                                        <span>Contact Us</span>
                                        <a href="tel:+90{{ \App\Models\setting::getSetting("phoneNumber") }}" class="h4-title"
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
                             style="background-image: url('{{ asset("imageAvif/service/")."/".$service->imagesAvif }}');"></div>
                        <div class="service-main-content">
                            <h2 class="h2-title">
                                    <span>
                                        <img src="{{ asset("asset/front/images/general-contract-icon.svg") }}"
                                             alt="General Contract Icon"
                                             width="33" height="37">
                                    </span>
                                {{ $service->titleEnglish }}
                            </h2>
                            {!! html_entity_decode($service->textEnglish) !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF MAIN SERVICE -->
@endsection
