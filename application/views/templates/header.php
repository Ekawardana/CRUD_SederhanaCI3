<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/sb-admin-2.css'); ?>">
    <!-- Fontawesome -->
    <link href="<?= base_url('assets/'); ?>fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <title><?= $title; ?></title>
</head>

<body>
    <!-- Content Wrapper -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary topbar mb-4 static-top shadow">
        <div class=" container">
            <!-- Logo -->
            <a class="navbar-brand" href="<?= base_url('home') ?>">
                <b>MHS App</b>
            </a>
            <!-- End Logo -->

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar Topbar -->
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <!-- Menu -->
                <ul class="navbar-nav mr-auto">
                    <div class="navbar-nav">
                        <a class="nav-link" href="<?= base_url('home') ?>">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-link" href="<?= base_url('mahasiswa') ?>">Mahasiswa</a>
                        <a class="nav-link" href="<?= base_url('about') ?>">About</a>
                    </div>
                </ul>
                <!-- End Menu -->

                <!-- Profile -->
                <ul class="navbar-nav ml-auto">
                    <div class="topbar-divider d-none d-sm-block float-right"></div>
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown">
                        <a class="nav-link text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-white small">
                                <!-- Ambil nama user -->
                                <b><?= $admin['nama']; ?></b>
                            </span>
                            <!-- Ambil Gambar Dari Folder -->
                            <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/default.jpg'); ?>">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item text-gray-600" href="<?= base_url('about') ?>">
                                <i class="fa-solid fa-user fa-sm fa-fw mr-2"></i>
                                About
                            </a>
                        </div>
                    </li>
                </ul>
                <!-- End Profile -->
            </div>
            <!-- End Navbar Topbar -->
        </div>
    </nav>
    <!-- End Content Wraper -->