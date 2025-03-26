@extends("layouts.front.en.index")
@section("content")
    @include("layouts.front.en.partial.banner")

    <!-- START OF SERVICES LISTING -->
    <section class="main-services-grid mb-4">
        <div class="container">
            <div class="row">
                @php $product=\App\Models\product::all(); @endphp
                @foreach($product as $productWrite)
                    <div class="col-lg-4 col-xxl-3 col-sm-6">
                        <div class="services-box wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                            <div class="services-image">
                                <div class="back-img"
                                     style="background-image: url('{{ asset("imageAvif/product/")."/".$productWrite->imagesAvif }}');"></div>
                            </div>

                            <div class="services-box-content">
                                <h4 class="h4-title">
                                    <a href="{{ route("productDetailHtmlEN",["id"=>$productWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($productWrite->titleEnglish)]) }}" title="{{ $productWrite->titleEnglish }}">{{ $productWrite->titleEnglish }}</a>
                                </h4>
                                <a href="{{ route("productDetailHtmlEN",["id"=>$productWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($productWrite->titleEnglish)]) }}" class="sec-btn icon-lg mb-4"
                                   title="{{ $productWrite->titleEnglish }}">Go To Product</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- END OF SERVICES LISTING -->
@endsection
