<!DOCTYPE html>
<html lang="tr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ALBOGAZ | Admin Paneli</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset("asset/admin/vendor/fontawesome-free/css/all.min.css") }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset("asset/admin/css/sb-admin-2.min.css") }}" rel="stylesheet">
    @yield("style")

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route("admin.index") }}">
            <div class="sidebar-brand-icon">
                <i class="fas fa-burn"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Albogaz</div>
        </a>

        <!-- Heading -->
        <div class="sidebar-heading">
            Web Sitesi Yönetimi
        </div>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <li class="nav-item">
            <a class="nav-link" href="{{ route("admin.index") }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route("admin.setting.index") }}">
                <i class="fas fa-fw fa-user"></i>
                <span>Site Bilgileri</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route("admin.setting.about") }}">
                <i class="fas fa-fw fa-user"></i>
                <span>Hakkımda</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route("admin.setting.missionvision") }}">
                <i class="fas fa-fw fa-users"></i>
                <span>Misyon - Vizyon</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route("admin.setting.kvkk") }}">
                <i class="fas fa-fw fa-user-shield"></i>
                <span>KVKK</span></a>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#sss"
               aria-expanded="true" aria-controls="sss">
                <i class="fas fa-fw fa-question-circle"></i>
                <span>SSS</span>
            </a>
            <div id="sss" class="collapse" aria-labelledby="sss" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Site Hizmetler:</h6>
                    <a class="collapse-item" href="{{ route("admin.faq.index") }}">Tüm Sorular</a>
                    <a class="collapse-item" href="{{ route("admin.faq.create") }}">Soru Ekle</a>
                </div>
            </div>
        </li>



        <li class="nav-item">
            <a class="nav-link" href="{{ route("admin.setting.reference") }}">
                <i class="fas fa-fw fa-business-time"></i>
                <span>İş Ortakları</span></a>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#service"
               aria-expanded="true" aria-controls="service">
                <i class="fas fa-fw fa-database"></i>
                <span>Hizmetler</span>
            </a>
            <div id="service" class="collapse" aria-labelledby="service" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Site Hizmetler:</h6>
                    <a class="collapse-item" href="{{ route("admin.service.index") }}">Tüm Hizmetler</a>
                    <a class="collapse-item" href="{{ route("admin.service.create") }}">Hizmet Ekle</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#product"
               aria-expanded="true" aria-controls="product">
                <i class="fas fa-fw fa-database"></i>
                <span>Ürünler</span>
            </a>
            <div id="product" class="collapse" aria-labelledby="product" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Site Ürünler:</h6>
                    <a class="collapse-item" href="{{ route("admin.product.index") }}">Tüm Ürünler</a>
                    <a class="collapse-item" href="{{ route("admin.product.create") }}">Ürünler Ekle</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#project"
               aria-expanded="true" aria-controls="project">
                <i class="fas fa-fw fa-database"></i>
                <span>Projeler</span>
            </a>
            <div id="project" class="collapse" aria-labelledby="project" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Site Ürünler:</h6>
                    <a class="collapse-item" href="{{ route("admin.project.index") }}">Tüm Projeler</a>
                    <a class="collapse-item" href="{{ route("admin.project.create") }}">Proje Ekle</a>
                </div>
            </div>
        </li>



        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">

                    </li>


                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                            <span class="fa fa-user-circle text-dark"></span>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{ route("admin.profile.index") }}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="{{ route("admin.setting.index") }}">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Site Bilgileri
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Çıkış Yap
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
