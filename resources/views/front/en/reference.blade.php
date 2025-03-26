@extends("layouts.front.en.index")
@section("content")
    @include("layouts.front.en.partial.banner")
    <div class="col-lg-12 mt-5 mb-5">
        <div class="container">
            <div class="footer-gallery">
                <ul>
                    @php $reference=\App\Models\reference::all();@endphp
                    @foreach($reference as $referenceWrite)
                        <li>
                            <a href="{{ asset("imageAvif/reference/")."/".$referenceWrite->image }}"
                               class="popup-image"
                               title="Gallery Image">
                                <div class="back-img"
                                     style="background-image: url('{{ asset("imageAvif/reference/")."/".$referenceWrite->image }}');">
                                </div>
                            </a>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>

    </div>

@endsection
