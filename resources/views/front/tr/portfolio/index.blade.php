@extends("layouts.front.tr.index")
@section("content")
    @include("layouts.front.tr.partial.banner")
    <!-- START WORKING PORTFOLIO -->
    <section class="explore-work">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="explore-work-content-wp">
                        <div class="explore-work-projects container wow fadeInUp" data-wow-duration=".8s"
                             data-wow-delay=".2s">
                            <div class="row">

                                @php $portfolio=\App\Models\project::all(); @endphp


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
@endsection
