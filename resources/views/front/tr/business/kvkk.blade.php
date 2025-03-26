@extends("layouts.front.tr.index")
@section("content")
    @include("layouts.front.tr.partial.banner")
    <!-- START OF WHY CHOOSE US -->
    <section class="why-choose light-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="why-choose-content wow fadeInRight" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="sec-title text-center">
                                <span class="sub-title">
                                    <img src="{{ asset("asset/front/images/setting-icon.svg") }}" width="18" height="18"
                                         alt="Setting Icon">
                                    KVKK
                                </span>
                            <h2 class="h2-title">KVKK</h2>
                        </div>
                        {!! html_entity_decode( \App\Models\about::getAbout("kvkk")) !!}

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF WHY CHOOSE US -->
@endsection
