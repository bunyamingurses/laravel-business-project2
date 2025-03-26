@extends("layouts.front.tr.index")
@section("content")
    @include("layouts.front.tr.partial.banner")
    <!-- START OF WHY CHOOSE US -->
    <section class="why-choose light-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="why-choose-content wow fadeInRight" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="sec-title">
                                <span class="sub-title">
                                    <img src="{{ asset("asset/front/images/setting-icon.svg") }}" width="18" height="18"
                                         alt="Setting Icon">
                                    Vizyon
                                </span>
                            <h2 class="h2-title">Vizyon</h2>
                        </div>
                        {!! html_entity_decode( \App\Models\about::getAbout("vision")) !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF WHY CHOOSE US -->
    @include("layouts.front.tr.partial.faq")
@endsection
