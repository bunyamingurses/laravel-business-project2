</main>
<!-- END OF MAIN -->
<!-- START OF FOOTER -->
<footer class="site-footer white-text">
    <div class="top-footer">
        <div class="banner-shape">
            <span class="stripe"></span>
            <span class="stripe stripe-secondary"></span>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="footer-left">
                        <div class="footer-branding">
                            <a href="index.html" title="Induris">
                                <img
                                    src="{{ asset("imageAvif/setting/")."/".\App\Models\setting::getSetting("logoFooterAvif") }}"
                                    style="max-height: 100px;"
                                    alt="Induris Logo">
                            </a>
                            {!! html_entity_decode(\App\Models\about::getAbout("aboutEnglish")) !!}
                        </div>

                        <div class="footer-socials">
                            <ul>
                                <li>
                                    <a href="{{ \App\Models\setting::getSetting("facebook") }}"
                                       title="Follow on Facebook" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ \App\Models\setting::getSetting("instagram") }}"
                                       title="Follow on Instagram"
                                       target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ \App\Models\setting::getSetting("twitter") }}" title="Follow on Twitter"
                                       target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ \App\Models\setting::getSetting("linkedin") }}"
                                       title="Follow on Linkedin" target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-links">
                        <h4 class="h4-title">Links</h4>
                        <ul>
                            <li>
                                <a href="{{ route("indexHtmlEN") }}" title="Anasayfa">Homepage</a>
                            </li>


                            <li>
                                <a href="{{ route("aboutHtmlEN") }}" title="Hakkımda">About</a>
                            </li>
                            <li>
                                <a href="{{ route("kvkkHtmlEN") }}" title="KVKK">KVKK</a>
                            </li>
                            <li>
                                <a href="{{ route("referenceHtmlEN") }}" title="Referanslar">References</a>
                            </li>
                            <li>
                                <a href="{{ route("contactHtmlEN") }}" title="İletişim">Contact</a>
                            </li>
                            <li>
                                <a href="{{ route("indexHtmlTR") }}" title="Turkish"><img src="{{ asset("asset/turkey.svg") }}" width="30" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-contact">
                        <h4 class="h4-title">Contact</h4>
                        <ul>
                            <li>
                                <div class="contact-item">
                                        <span class="contact-icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </span>
                                    <div class="contact-link">
                                        <a href="https://maps.app.goo.gl/bKFBvkc3NiFcgmpb9"
                                           title="{{ \App\Models\setting::getSetting("address") }}"
                                           target="_blank">{{ \App\Models\setting::getSetting("address") }}</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-item">
                                        <span class="contact-icon">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                    <div class="contact-link">
                                        <a href="mailto:{{ \App\Models\setting::getSetting("email") }}"
                                           title="Mail to {{ \App\Models\setting::getSetting("email") }}">{{ \App\Models\setting::getSetting("email") }}</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-item">
                                        <span class="contact-icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </span>
                                    <div class="contact-link">
                                        <a href="tel:+919879874569" title="Call to +90 {{ \App\Models\setting::getSetting("phoneNumber") }}">+90 {{ \App\Models\setting::getSetting("phoneNumber") }}</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="bottom-footer-content">
                <p class="bottom-footer-text m-0">
                    Copyright © <span id="copy-right-year">2025</span>
                    <a href="https://themeforest.net/user/geekcodelab" title="Geekcodelab"
                       target="_blank">Geekcodelab.</a>
                    All rights reserved.
                </p>
                <ul>
                    <li>
                        <a href="javascript:void(0)" title="Privacy Policy">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" title="Terms Of Service">Terms Of Service</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- END OF FOOTER -->
<!-- SEARCH MODAL START -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-search-wp">
                    <div class="modal-search-content">
                        <h2 class="modal-title h3-title" id="searchModalLabel">Search</h2>
                        <form>
                            <div class="modal-search-bar">
                                <input type="text" placeholder="Type a keyword" required>
                                <button type="submit">
                                    <img src="{{ asset("asset/front/images/search-icon.svg") }}" width="20" height="20"
                                         alt="Search Icon">
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="banner-shape">
                    <span class="stripe"></span>
                    <span class="stripe stripe-secondary"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SEARCH MODAL END -->
<!-- SCROLL TO TOP Start -->
<a href="javascript:void(0);" id="scroll-to-top" class="scroll-to-top" title="Scroll to Top">
    <i class="fas fa-arrow-up"></i>
</a>
<!-- SCROLL TO TOP End -->
<!-- Jquery JS Link -->
<script src="{{ asset("asset/front/js/jquery.min.js") }}"></script>
<!-- Bootstrap and Popper JS Link -->
<script src="{{ asset("asset/front/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("asset/front/js/popper.min.js") }}"></script>
<!-- Simplebar JS Link -->
<script src="{{ asset("asset/front/js/simplebar.js") }}"></script>
<!-- Font Awesome JS Link -->
<script src="{{ asset("asset/front/js/font-awesome.min.js") }}"></script>
<!-- Swiper Slider JS Link -->
<script src="{{ asset("asset/front/js/swiper-bundle.min.js") }}"></script>
<!-- Magnific Popup JS Link -->
<script src="{{ asset("asset/front/js/jquery.magnific-popup.min.js") }}"></script>
<!-- Wow Animation JS Link -->
<script src="{{ asset("asset/front/js/wow.min.js") }}"></script>
<!-- Counter JS Link -->
<script src="{{ asset("asset/front/js/counter.js") }}"></script>
<!-- Custom JS Link -->
<script src="{{ asset("asset/front/js/custom.js") }}"></script>
</body>


</html>
