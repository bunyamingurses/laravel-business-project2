<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{ asset("image/setting/")."/".\App\Models\setting::getSetting("icon") }}" rel="icon">
    <title>{{ \App\Models\setting::getSetting("title") }}</title>
    <meta name="format-detection" content="telephone={{ \App\Models\setting::getSetting("phoneNumber") }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ \App\Models\setting::getSetting("description") }}"/>
    <meta http-equiv="cache-control" content="public"/>
    <meta name="copyright" content="{{ \App\Models\setting::getSetting("siteUrl") }}"/>
    <meta name="author" content="{{ \App\Models\setting::getSetting("author") }}"/>
    <meta name="distribution" content="Global"/>
    <meta name="robots" content="INDEX,FOLLOW"/>


    <meta property="og:type" content="website"/>
    <meta property="og:url"
          content="{{ \App\Models\setting::getSetting("siteUrl") }}"/>
    <meta property="og:image" content="{{ asset("image/setting/")."/".\App\Models\setting::getSetting("logoHeader") }}"/>
    <meta property="og:site_name" content="{{ \App\Models\setting::getSetting("title") }}"/>
    <meta property="og:description" content="{{ \App\Models\setting::getSetting("description") }}"/>
    <meta property="og:locale" content="tr_TR"/>
    <meta property="og:title" content="{{ \App\Models\setting::getSetting("title") }}"/>

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ \App\Models\setting::getSetting("siteUrl") }}">
    <meta property="twitter:title" content="{{ \App\Models\setting::getSetting("title") }}">
    <meta property="twitter:description" content="{{ \App\Models\setting::getSetting("description") }}">
    <meta property="twitter:image" content="{{ asset("image/setting/")."/".\App\Models\setting::getSetting("logoHeader") }}">


    <!-- FavIcon Link -->
    <link rel="icon" href="{{ asset("asset/front/images/favicon.png") }}" sizes="32x32" type="image/png">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Roboto:wght@400;500;700&amp;display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS Link -->
    <link rel="stylesheet" href="{{ asset("asset/front/css/bootstrap.min.css") }}">
    <!-- Swiper Slider CSS Link -->
    <link rel="stylesheet" href="{{ asset("asset/front/css/swiper-bundle.min.css") }}">
    <!-- Magnific Popup CSS Link -->
    <link rel="stylesheet" href="{{ asset("asset/front/css/magnific-popup.min.css") }}">
    <!-- Animate CSS Link -->
    <link rel="stylesheet" href="{{ asset("asset/front/css/animate.min.css") }}">
    <!-- Main Style CSS Link -->
    <link rel="stylesheet" href="{{ asset("asset/front/css/style.css") }}">
</head>

<body class="fixed index-2_page">
<!-- START OF LOADER -->
<div class="loader-box">
    <div class="loader">
        <img src="{{ asset("imageAvif/setting/")."/".\App\Models\setting::getSetting("logoHeaderAvif") }}" width="165" height="134" alt="Loader Main">
    </div>
</div>
<!-- END OF LOADER -->
<!-- START OF HEADER -->
<header id="site_header" class="site-header">
    <div class="header-top">
        <div class="container">
            <div class="top-hader-main-box white-text">
                <p class="m-0">Welcome ALBOGAZ</p>
                <ul class="header-social">
                    <li>
                        <a href="https://html.geekcodelab.com/cdn-cgi/l/email-protection#345d5a525b745d5a5041465d471a575b59"
                           title="Mail on info@induris.com">
                            <img src="{{ asset("asset/front/images/mail-icon.svg") }}" width="18" height="13"
                                 alt="Mail Icon">
                            <span>{{ \App\Models\setting::getSetting("email") }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="tel:+90{{ \App\Models\setting::getSetting("phoneNumber") }}" title="Call on +90 {{ \App\Models\setting::getSetting("phoneNumber") }}">
                            <img src="{{ asset("asset/front/images/phone-icon.svg") }}" width="18" height="18"
                                 alt="Phone Icon">
                            <span>+90 {{ \App\Models\setting::getSetting("phoneNumber") }}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="heder-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="site-branding">
                        <a href="{{ route("indexHtmlEN") }}" title="Induris" class="text-white">
                            <img src="{{ asset("imageAvif/setting/")."/".\App\Models\setting::getSetting("logoHeaderAvif") }}" style="max-height: 50px; width: auto;"
                                 alt="Induris Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header-menu">
                        <nav class="main-navigation">
                            <button class="menu-toggle for-mob-flex">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <div class="header-mobile-menu">
                                <ul class="main-menu">
                                    <li>
                                        <a href="{{ route("indexHtmlEN") }}" title="Anasayfa">Homepage</a>
                                    </li>


                                    <li class="menu-parent">
                                        <a href="javascript:void(0)" title="Home">Business</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="{{ route("aboutHtmlEN") }}" title="Hakkımda">About</a>
                                            </li>
                                            <li>
                                                <a href="{{ route("missionHtmlEN") }}" title="Misyonumuz">Mission</a>
                                            </li>
                                            <li>
                                                <a href="{{ route("visionHtmlEN") }}" title="Vizyoumuz">Vision</a>
                                            </li>
                                            <li>
                                                <a href="{{ route("kvkkHtmlEN") }}" title="KVKK">KVKK</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="{{ route("serviceHtmlEN") }}" title="Hizmetler">Services</a>
                                    </li>
                                    <li>
                                        <a href="{{ route("productHtmlEN") }}" title="Ürünler">Products</a>
                                    </li>
                                    <li>
                                        <a href="{{ route("portfolioHtmlEN") }}" title="Portfolyo">Portfolyo</a>
                                    </li>
                                    <li>
                                        <a href="{{ route("referenceHtmlEN") }}" title="Referanslar">References</a>
                                    </li>
                                    <li>
                                        <a href="{{ route("indexHtmlTR") }}" title="İngilizce"><img src="{{ asset("asset/turkey.svg") }}" width="30" alt=""></a>
                                    </li>


                                </ul>
                                <div class="header-cta">
                                    <a href="{{ route("contactHtmlEN") }}" class="sec-btn" title="Get a Quote">Contact</a>
                                </div>
                            </div>
                        </nav>
                        <div class="black-shadow"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- END OF HEADER -->
<!-- START OF MAIN -->
<main class="site-main">
