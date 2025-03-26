@extends("layouts.front.tr.index")
@section("content")
    @include("layouts.front.tr.partial.banner")
    <section class="contact-main">
        <div class="contact-offices">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact-office wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                            <div class="row justify-content-center">

                                <div class="col-lg-4">
                                    <a href="tel:+90{{ \App\Models\setting::getSetting("phoneNumber") }}"
                                       style="font-size: 20pt"
                                       title="Call on +90{{ \App\Models\setting::getSetting("phoneNumber") }}">
                                        <img src="{{ asset("asset/front/images/phone-icon.svg") }}" width="24"
                                             height="24"
                                             alt="Phone Icon">
                                        <span>+90{{ \App\Models\setting::getSetting("phoneNumber") }}</span>
                                    </a>
                                </div>
                                <div class="col-lg-4">
                                    <a href="mailto:{{ \App\Models\setting::getSetting("email") }}"
                                       style="font-size: 20pt"
                                       title="Mail on {{ \App\Models\setting::getSetting("email") }}">
                                        <img src="{{ asset("asset/front/images/mail-icon.svg") }}" width="24"
                                             height="18"
                                             alt="Mail Icon">
                                        <span>{{ \App\Models\setting::getSetting("email") }}</span>
                                    </a>
                                </div>
                                <div class="col-lg-4">
                                    <img src="{{ asset("asset/front/images/map-pin-transparent.svg") }}" width="20"
                                         height="24"
                                         alt="Map Icon">
                                    <span>{{ \App\Models\setting::getSetting("address") }}</span>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 order-lg-2 order-1">
                        <div class="main-contact-form wow fadeInRight" data-wow-duration=".8s" data-wow-delay=".2s">
                            <div class="sec-title">
                                <span class="sub-title"> <img src="{{ asset("asset/front/images/setting-icon.svg") }}"
                                                              width="18" height="18"
                                                              alt="Setting Icon"> Bize Yazın </span>
                                <h2 class="h2-title">Sorularınızı İletin Lütfen!</h2>
                                @if(session("status"))
                                    <div class="alert alert-info"> {{ session("status") }}</div>
                                @endif
                                @if($errors->any())
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li class="text-danger font-weight-bold">*{{ $error }}</li>
                                        @endforeach
                                    </ul>

                                @endif
                            </div>
                            <form action="{{ route("contactPostTR") }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-field">
                                            <input type="text" id="name" name="name" class="input-field"
                                                   placeholder="Adınızı ve Soyadınızı Girin!" required>


                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-field">
                                            <input type="email" id="email" name="email" class="input-field"
                                                   placeholder="E-Posta Adresinizi Girin!" required>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-field">
                                            <input type="text" id="subject" name="subject" class="input-field"
                                                   placeholder="Konuyu Belirtin!" required>

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-field">
                                            <textarea class="input-field" id="message" name="message"
                                                      placeholder="Mesajınızı Belirtin!" required></textarea>

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-field form-submit-btn">
                                            <button type="submit" class="sec-btn">Gönder</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
