@extends("layouts.front.tr.index")
@section("content")
    @include("layouts.front.tr.partial.banner")

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
                                     alt="{{ $serviceWrite->title }}">
                            </div>
                            <div class="services-box-content">
                                <h4 class="h4-title">
                                    <a href="{{ route("serviceDetailHtmlTR",["id"=>$serviceWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($serviceWrite->title)]) }}" title="{{ $serviceWrite->title }}">{{ $serviceWrite->title }}</a>
                                </h4>
                                <a href="{{ route("serviceDetailHtmlTR",["id"=>$serviceWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($serviceWrite->title)]) }}" class="sec-btn icon-lg mb-4"
                                   title="{{ $serviceWrite->title }}">Hizmeti Gör</a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <!-- END OF SERVICES LISTING -->
@endsection
