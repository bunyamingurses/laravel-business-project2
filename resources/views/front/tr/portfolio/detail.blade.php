@extends("layouts.front.tr.index")
@section("content")
    @include("layouts.front.tr.partial.banner")

    <section class="portfolio-content-wp wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-content">


                        <div class="portfolio-feature-image back-img"
                             style="background-image: url('{{ asset("imageAvif/project/")."/".$portfolio->imagesAvif }}');">
                        </div>
                        <div class="portfolio-head">
                            <h1 class="h2-title m-0">{{ $portfolio->title }}</h1>
                        </div>
                        {!! html_entity_decode($portfolio->text) !!}
                        <div class="col-lg-12">
                            <h3 class="h3-title">Gallery</h3>
                            <div class="footer-gallery">
                                <ul>
                                    @foreach($gallery as $galleryWrite)
                                        <li>
                                            <a href="{{ asset("imageAvif/project/gallery/")."/".$galleryWrite->imageAvif }}"
                                               class="popup-image"
                                               title="Gallery Image">
                                                <div class="back-img"
                                                     style="background-image: url('{{ asset("imageAvif/project/gallery/")."/".$galleryWrite->imageAvif }}');">
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
    </section>

@endsection
