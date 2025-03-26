@extends("layouts.front.en.index")
@section("content")
    @include("layouts.front.en.partial.banner")

    <!-- START OF SERVICES LISTING -->
    <section class="main-services-grid mb-4">
        <div class="container">
            <div class="row">
                @php $service=\App\Models\services::all(); @endphp
                @foreach($service as $serviceWrite)
                    <div class="col-lg-4 col-xxl-3 col-sm-6">
                        <div class="services-box wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                            <div class="services-image">
                                <div class="back-img"
                                     style="background-image: url('{{ asset("imageAvif/service/")."/".$serviceWrite->imagesAvif }}');"></div>
                            </div>
                            <div class="services-box-icon">
                                <img src="{{ asset("asset/front/images/all-maintenance-icon.svg") }}" width="38"
                                     height="38"
                                     alt="{{ $serviceWrite->titleEnglish }}">
                            </div>
                            <div class="services-box-content">
                                <h4 class="h4-title">
                                    <a href="{{ route("serviceDetailHtmlEN",["id"=>$serviceWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($serviceWrite->titleEnglish)]) }}" title="{{ $serviceWrite->titleEnglish }}">{{ $serviceWrite->titleEnglish }}</a>
                                </h4>
                                <a href="{{ route("serviceDetailHtmlEN",["id"=>$serviceWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($serviceWrite->titleEnglish)]) }}" class="sec-btn icon-lg mb-4"
                                   title="{{ $serviceWrite->titleEnglish }}">Go To Service</a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <!-- END OF SERVICES LISTING -->
@endsection
