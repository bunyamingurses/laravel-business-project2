@extends("layouts.front.en.index")
@section("content")
    @include("layouts.front.en.partial.banner")
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
                                    Mission
                                </span>
                            <h2 class="h2-title">Mission</h2>
                        </div>
                        {!! html_entity_decode( \App\Models\about::getAbout("missionEnglish")) !!}

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF WHY CHOOSE US -->
    @include("layouts.front.en.partial.faq")
@endsection
