<!-- START OF WE ARE GLOBAL -->
<section class="home2-faq">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 order-lg-1 order-2">
                <div class="home2-faq-content wow fadeInLeft" data-wow-duration=".8s" data-wow-delay=".2s">
                    <div class="sec-title">
                                <span class="sub-title">
                                    <img src="{{ asset("asset/front/images/setting-icon.svg") }}" width="18" height="18"
                                         alt="Setting Icon">
                                    Frequently Asked Questions
                                </span>
                        <h2 class="h2-title">Do You Have Any Questions?</h2>
                    </div>
                    <div class="faq-accordian">
                        @php $faq=\App\Models\faq::all(); $count=0; @endphp
                        @foreach($faq as $faqWrite)
                            @if($count==0)
                                @php $count++; @endphp
                                <div class="faq-accordian-box">
                                    <div class="faq-accordian-title active-faq">
                                        <h6 class="h6-title">{{ $faqWrite->nameEnglish }} ?</h6>
                                        <span class="icon"></span>
                                    </div>
                                    <div class="faq-accordian-content">
                                        <p>{!! html_entity_decode($faqWrite->textEnglish) !!}</p>
                                    </div>
                                </div>
                            @else
                                <div class="faq-accordian-box">
                                    <div class="faq-accordian-title">
                                        <h6 class="h6-title">{{ $faqWrite->nameEnglish }} ?</h6>
                                        <span class="icon"></span>
                                    </div>
                                    <div class="faq-accordian-content">
                                        <p>{!! html_entity_decode($faqWrite->textEnglish) !!}</p>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END OF WE ARE GLOBAL -->
