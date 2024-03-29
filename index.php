<?php
include "koneksi.php";
$queryProduk = mysqli_query($koneksi, "SELECT id_produk, nama_produk, harga, detail FROM produk LIMIT 4");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Kara Handycrafts - Jawelry</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/vendor.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600&family=Nunito:wght@700;800;900;1000&display=swap"
        rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/logo-7040.png" />
    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true"
    tabindex="0">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol xmlns="http://www.w3.org/2000/svg" id="navbar-icon" viewBox="0 0 16 16">
            <path
                d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="chevron-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="whatsapp" height="14" width="12.25" viewBox="0 0 448 512">
            <path fill="#a8a8a8"
                d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/symbol" id="cart" viewBox="0 0 21 21">
            <g fill="none" fill-rule="evenodd">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    d="M5 6.5h12.5l-1.586 5.55a2 2 0 0 1-1.923 1.45h-6.7a2 2 0 0 1-1.989-1.78L4.5 4.5h-2" />
                <g fill="currentColor" transform="translate(2 4)">
                    <circle cx="5" cy="12" r="1" />
                    <circle cx="13" cy="12" r="1" />
                </g>
            </g>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="quote" viewBox="0 0 167 130" fill="none">
            <g clip-path="url(#clip0_95_7)">
                <path
                    d="M27 7.79997C31 2.59996 35 -0.200036 39 -0.60003C43.4 -1.40002 47 -0.600019 49.8 1.79997C53 3.79997 54.8 6.99997 55.2 11.4C55.6 15.8 53.8 20.6 49.8 25.8C43.4 34.2 38.8 42.8 36 51.6C33.6 60 32.4 67.8 32.4 75L30.6 63C41 63 49.4 66 55.8 72C62.2 77.6 65.4 85.4 65.4 95.4C65.4 105 62.4 113 56.4 119.4C50.4 125.4 42.6 128.4 33 128.4C22.6 128.4 14.4 125 8.4 118.2C2.8 111 0 100.8 0 87.6C0 79.2 0.6 70.6 1.8 61.8C3.4 52.6 6.2 43.4 10.2 34.2C14.6 25 20.2 16.2 27 7.79997ZM126.6 7.79997C130.6 2.59996 134.6 -0.200036 138.6 -0.60003C143 -1.40002 146.6 -0.600019 149.4 1.79997C152.6 3.79997 154.4 6.99997 154.8 11.4C155.2 15.8 153.4 20.6 149.4 25.8C143 34.2 138.4 42.8 135.6 51.6C133.2 60 132 67.8 132 75L130.2 63C140.6 63 149 66 155.4 72C161.8 77.6 165 85.4 165 95.4C165 105 162 113 156 119.4C150 125.4 142.2 128.4 132.6 128.4C122.2 128.4 114 125 108 118.2C102.4 111 99.6 100.8 99.6 87.6C99.6 79.2 100.2 70.6 101.4 61.8C103 52.6 105.8 43.4 109.8 34.2C114.2 25 119.8 16.2 126.6 7.79997Z"
                    fill="#F7E4E4" />
            </g>
            <defs>
                <clipPath id="clip0_95_7">
                    <rect width="167" height="130" fill="white" />
                </clipPath>
            </defs>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="user" viewBox="0 0 24 24">
            <g fill="none" stroke="currentColor" stroke-width="1.5">
                <circle cx="12" cy="6" r="4" />
                <path d="M20 17.5c0 2.485 0 4.5-8 4.5s-8-2.015-8-4.5S7.582 13 12 13s8 2.015 8 4.5Z" />
            </g>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="wishlist" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="m8.962 18.91l.464-.588l-.464.589ZM12 5.5l-.54.52a.75.75 0 0 0 1.08 0L12 5.5Zm3.038 13.41l.465.59l-.465-.59Zm-5.612-.588C7.91 17.127 6.253 15.96 4.938 14.48C3.65 13.028 2.75 11.334 2.75 9.137h-1.5c0 2.666 1.11 4.7 2.567 6.339c1.43 1.61 3.254 2.9 4.68 4.024l.93-1.178ZM2.75 9.137c0-2.15 1.215-3.954 2.874-4.713c1.612-.737 3.778-.541 5.836 1.597l1.08-1.04C10.1 2.444 7.264 2.025 5 3.06C2.786 4.073 1.25 6.425 1.25 9.137h1.5ZM8.497 19.5c.513.404 1.063.834 1.62 1.16c.557.325 1.193.59 1.883.59v-1.5c-.31 0-.674-.12-1.126-.385c-.453-.264-.922-.628-1.448-1.043L8.497 19.5Zm7.006 0c1.426-1.125 3.25-2.413 4.68-4.024c1.457-1.64 2.567-3.673 2.567-6.339h-1.5c0 2.197-.9 3.891-2.188 5.343c-1.315 1.48-2.972 2.647-4.488 3.842l.929 1.178ZM22.75 9.137c0-2.712-1.535-5.064-3.75-6.077c-2.264-1.035-5.098-.616-7.54 1.92l1.08 1.04c2.058-2.137 4.224-2.333 5.836-1.596c1.659.759 2.874 2.562 2.874 4.713h1.5Zm-8.176 9.185c-.526.415-.995.779-1.448 1.043c-.452.264-.816.385-1.126.385v1.5c.69 0 1.326-.265 1.883-.59c.558-.326 1.107-.756 1.62-1.16l-.929-1.178Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="search" viewBox="0 0 24 24">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m21 21l-4.343-4.343m0 0A8 8 0 1 0 5.343 5.343a8 8 0 0 0 11.314 11.314Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="teddybear" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M15.75 19.13c-.83 0-1.5-.84-1.5-1.88c0-1.03.67-1.87 1.5-1.87s1.5.84 1.5 1.87c0 1.04-.67 1.88-1.5 1.88M12 11.25c-1.24 0-2.25-.84-2.25-1.87c0-1.04 1.01-1.88 2.25-1.88s2.25.84 2.25 1.88c0 1.03-1.01 1.87-2.25 1.87m-3.75 7.88c-.83 0-1.5-.84-1.5-1.88c0-1.03.67-1.87 1.5-1.87s1.5.84 1.5 1.87c0 1.04-.67 1.88-1.5 1.88M12 8.25c.41 0 .75.34.75.75s-.34.75-.75.75s-.75-.34-.75-.75s.34-.75.75-.75M18.75 12c-.32 0-.63.07-.91.2c-.48-.61-1.13-1.13-1.91-1.53c.57-.8.91-1.77.91-2.82v-.06c1.09-.23 1.91-1.2 1.91-2.37c0-1.33-1.09-2.42-2.42-2.42c-.69 0-1.33.29-1.75.75a4.813 4.813 0 0 0-5.16 0C9 3.29 8.36 3 7.67 3C6.34 3 5.25 4.09 5.25 5.42c0 1.16.82 2.13 1.9 2.37v.06c0 1.05.35 2.03.91 2.82c-.77.4-1.42.92-1.9 1.53A2.24 2.24 0 0 0 3 14.25c0 1.25 1 2.25 2.25 2.25h.06c-.04.24-.06.5-.06.75c0 2.07 1.34 3.75 3 3.75c1.01 0 1.9-.63 2.45-1.59c.42.06.85.09 1.3.09c.45 0 .88-.03 1.3-.09c.55.96 1.44 1.59 2.45 1.59c1.66 0 3-1.68 3-3.75c0-.25-.02-.51-.06-.75h.06c1.25 0 2.25-1 2.25-2.25S20 12 18.75 12" />
        </symbol>
    </svg>

    <header id="header" class="site-header bg-light py-3">
        <nav class="navbar navbar-expand-lg" aria-label="Offcanvas navbar large">
            <div class="container-lg">
                <a class="navbar-brand me-5" href="#">
                    <img src="images/logo-13175-h.png" alt="brand">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
                    <svg class="navbar-icon" width="35" height="35">
                        <use xlink:href="#navbar-icon"></use>
                    </svg>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2"
                    aria-labelledby="offcanvasNavbar2Label">
                    <div class="offcanvas-header justify-content-center">
                        <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body align-items-center">
                        <ul class="navbar-nav ms-5 flex-grow-1 pe-3">
                            <li class="nav-item ms-3">
                                <a class="nav-link text-dark active" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item ms-3 ">
                                <a class="nav-link text-dark" href="produk.php" role="button"
                                    aria-expanded="false">Shop</a>
                            </li>
                            <li class="nav-item ms-3 ">
                                <a class="nav-link text-dark" href="galerry.php" role="button"
                                    aria-expanded="false">Gallery</a>
                            </li>
                            <li class="nav-item ms-3 ">
                                <a class="nav-link text-dark" href="contact.php" role="button"
                                    aria-expanded="false">Contact
                                    Us</a>
                            </li>
                        </ul>
                        <div class="navbar-users">
                            <form method="get" action="produk.php">
                                <ul class="user-items list-unstyled d-none d-lg-flex justify-content-end align-items-center
                                order-3 flex-grow-1 gap-4 m-0">
                                    <li>
                                        <input type="text" placeholder="Search Here..."
                                            class="outline-none border-0 rounded-5 bg-transparent fst-italic"
                                            name="keyword">
                                        <button type="submit" class="btn btn-outline-gray rounded-5">Search</button>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- BANNER -->
    <section id="intro" class="bg-linear">
        <div class="container-lg">
            <div class="swiper main-swiper pt-2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="banner-item d-flex text-center align-items-center">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="image-holder mb-lg-0 mb-md-2">
                                        <img src="images/pages/banner-1.jpg" alt="product"
                                            class="img-fluid rounded-4 banner-image">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-11 col-sm-10 mx-auto">
                                    <div
                                        class="banner-content w-100 h-100 position-relative bg-light border rounded-4 mx-auto d-flex align-items-center">
                                        <div class="col-lg-9 col-md-6 col-sm-8 text-center mx-auto py-lg-6">
                                            <h1 class="display-2">Aksesoris <span
                                                    class="display-4 text-secondary d-block">Lorem ipsum dolor sit
                                                    amet.</span>
                                            </h1>
                                            <div class="btn-center mt-4">
                                                <a href="shop-with-sidebar.html"
                                                    class="btn btn-primary btn-md text-uppercase rounded-0">Order
                                                    Now</a>
                                            </div>
                                        </div>
                                        <div class="bg-pattern-overlay position-absolute">
                                            <img src="images/pattern-overlay1.png" alt="pattern"
                                                class="img-fluid pattern-overlay">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner-item d-flex text-center align-items-center">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="image-holder mb-lg-0 mb-md-2">
                                        <img src="images/pages/banner-2.jpg" alt="product" class="img-fluid rounded-4">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-11 col-sm-10 mx-auto">
                                    <div
                                        class="banner-content w-100 h-100 position-relative bg-light border rounded-4 mx-auto d-flex align-items-center">
                                        <div class="col-lg-9 col-md-6 col-sm-8 text-center mx-auto py-lg-6">
                                            <h1 class="display-2">Dolls <span
                                                    class="display-4 text-secondary d-block">Online Store</span>
                                            </h1>
                                            <div class="btn-center mt-4">
                                                <a href="shop-with-sidebar.html"
                                                    class="btn btn-primary btn-md text-uppercase rounded-0">Order
                                                    Now</a>
                                            </div>
                                        </div>
                                        <div class="bg-pattern-overlay position-absolute">
                                            <img src="images/pattern-overlay1.png" alt="pattern" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner-item d-flex text-center align-items-center">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="image-holder mb-lg-0 mb-md-2">
                                        <img src="images/pages/banner-3.jpg" alt="product" class="img-fluid rounded-4">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-11 col-sm-10 mx-auto">
                                    <div
                                        class="banner-content w-100 h-100 position-relative bg-light border rounded-4 mx-auto d-flex align-items-center">
                                        <div class="col-lg-9 col-md-6 col-sm-8 text-center mx-auto py-lg-6">
                                            <h1 class="display-2">Cute <span
                                                    class="display-4 text-secondary d-block">Soft Toys</span>
                                            </h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, sed,
                                                quidem explicabo ea velit repellat saepe obcaecati quo magni rerum.</p>
                                            <div class="btn-center mt-4">
                                                <a href="shop-with-sidebar.html"
                                                    class="btn btn-primary btn-md text-uppercase rounded-0">Shop Now</a>
                                            </div>
                                        </div>
                                        <div class="bg-pattern-overlay position-absolute">
                                            <img src="images/pattern-overlay1.png" alt="pattern" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-arrow-wrap position-absolute d-flex align-items-center">
                    <div class="swiper-arrow swiper-arrow-prev position-absolute bg-gray-1 p-3">
                        <svg class="chevron-left" width="25" height="25">
                            <use xlink:href="#chevron-left" />
                        </svg>
                    </div>
                    <div class="swiper-arrow swiper-arrow-next position-absolute bg-gray-1 p-3">
                        <svg class="chevron-right" width="25" height="25">
                            <use xlink:href="#chevron-right" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- KATEGORI -->
    <section id="category" class="my-lg-12 py-lg-7 mb-lg-0 position-relative bg-light">
        <div class="cloud-overlay position-absolute overflow-x-hidden w-100">
            <img src="images/cloud-pattern-overlay.png" alt="icon overlay">
        </div>
        <div class="container-lg">
            <div class="row justify-content-center">
                <div class="display-header text-center position-relative">
                    <h2 class="display-2">Category</h2>
                    <div class="icon-overlay position-absolute">
                        <img src="images/star-icon-overlay.png" alt="icon overlay">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="image-holder position-relative">
                        <img src="images/pages/kate-1.jpg" alt="dress" class="img-fluid rounded-4">
                        <div class="btn-wrap position-absolute d-flex align-items-center justify-content-center">
                            <a href="produk.php?kategori=Gelang"
                                class="btn btn-md btn-primary text-uppercase rounded-0">
                                Gelang
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="image-holder position-relative">
                        <img src="images/pages/kate-2.jpg" alt="hats" class="img-fluid rounded-4">
                        <div class="btn-wrap position-absolute d-flex align-items-center justify-content-center">
                            <a href="produk.php?kategori=Kalung"
                                class="btn btn-md btn-primary  text-uppercase rounded-0">Kalung</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="image-holder position-relative">
                        <img src="images/pages/kate-3.jpg" alt="toys" class="img-fluid rounded-4">
                        <div class="btn-wrap position-absolute d-flex align-items-center justify-content-center">
                            <a href="produk.php?kategori=Strap"
                                class="btn btn-md btn-primary  text-uppercase rounded-0">Strap</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="image-holder position-relative">
                        <img src="images/pages/kate-4.jpg" alt="toys" class="img-fluid rounded-4">
                        <div class="btn-wrap position-absolute d-flex align-items-center justify-content-center">
                            <a href="produk.php?kategori=Cin-cin"
                                class="btn btn-md btn-primary  text-uppercase rounded-0">Cin-cin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="scroll-top-btn" class="bg-light rounded-pill text-primary position-fixed">
        <svg class="teddybear" width="50" height="50">
            <use xlink:href="#teddybear"></use>
        </svg>
    </div>

    <!-- PRODUCT-->
    <section id="best-produk" class="py-lg-6 bg-light position-relative">
        <div class="container-fluid py-5">
            <div class="display-header text-center position-relative">
                <div class="icon-overlay">
                    <img src="images/star-icon-overlay.png" alt="icon overlay">
                </div>
                <h2 class="display-2 mt-0">Best Products</h2>
            </div>
            <div class="row mt-5">
                <?php while($data = mysqli_fetch_array($queryProduk)){?>
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="product-item">
                        <div class="image-holder text-center p-3 mb-4 border rounded-4">
                            <img src="images/<?php echo $data['img'];?>">
                        </div>
                        <div class="product-info ps-2">
                            <h3 class="m-0">
                                <a href="single-product.html" class="text-secondary">Woollen Pattern</a>
                            </h3>
                            <div class="product-price text-primary">Rp15.000</div>
                            <a href="" class="btn btn-outline-gray text-capitalize rounded-pill mt-4 btn-sm"
                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasChart"
                                aria-controls="offcanvasChart">Order Now
                                <svg class="chart" width="18" height="18">
                                    <use xlink:href="#whatsapp"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
    </section>


    <!-- ABOUT US -->
    <section id=" about" class="py-lg-7 bg-light">
        <div class="container">
            <div class="row">
                <div class="display-header text-center position-relative">
                    <h2 class="display-2">About Us</h2>
                    <div class="icon-overlay position-absolute">
                        <img src="images/star-icon-overlay.png" alt="icon overlay">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="quotation-mark">
                        <svg class="quote text-primary" width="167">
                            <use xlink:href="#quote" />
                        </svg>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 position-relative">
                    <div class="review-item col-md-12">
                        <blockquote class="fs-4">Lorem ipsum dolor, sit amet consectetur adipisicing
                            elit. Error cum
                            hic
                            eius ullam voluptatem quod magni veritatis dolorum nobis optio
                            laudantium quia unde sed
                            adipisci accusamus, dignissimos debitis autem quaerat magnam, atque
                            omnis repellat. Non
                            praesentium distinctio soluta cumque autem at ullam omnis odio,
                            sapiente, voluptates eum,
                            voluptate magnam natus.</blockquote>
                    </div>
                </div>
                <div class="swiper-pagination position-absolute text-start"></div>
            </div>
        </div>
        </div>
    </section>

    <!-- GALLERY -->
    <section id="gallery" class="py-lg-7 bg-light">
        <div class="container-lg">
            <div class="row justify-content-center">
                <div class="display-header text-center position-relative">
                    <h2 class="display-2 text-center">Our Gallery</h2>
                    <div class="icon-overlay position-absolute">
                        <img src="images/star-icon-overlay.png" alt="icon overlay">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <figure class="gallery-item text-center">
                        <a href="images/gallery/gelang-14.jpg" title="doll" class="image-link">
                            <img src="images/gallery/gelang-14.jpg" alt="gallery" class="img-fluid rounded-4">
                        </a>
                    </figure>
                </div>
                <div class="col-lg-3 col-md-6">
                    <figure class="gallery-item text-center">
                        <a href="images/gallery/gelang-22.jpg" title="doll" class="image-link">
                            <img src="images/gallery/gelang-22.jpg" alt="gallery" class="img-fluid rounded-4">
                        </a>
                    </figure>
                </div>
                <div class="col-lg-3 col-md-6">
                    <figure class="gallery-item text-center">
                        <a href="images/gallery/gelang-18.jpg" title="doll" class="image-link">
                            <img src="images/gallery/gelang-18.jpg" alt="gallery" class="img-fluid rounded-4">
                        </a>
                    </figure>
                </div>
                <div class="col-lg-3 col-md-6">
                    <figure class="gallery-item text-center">
                        <a href="images/gallery/gelang-21.jpg" title="doll" class="image-link">
                            <img src="images/gallery/gelang-21.jpg" alt="gallery" class="img-fluid rounded-4">
                        </a>
                    </figure>
                </div>
                <div class="col-lg-3 col-md-6">
                    <figure class="gallery-item text-center">
                        <a href="images/gallery/kalung-5.jpg" title="doll" class="image-link">
                            <img src="images/gallery/kalung-5.jpg" alt="gallery" class="img-fluid rounded-4">
                        </a>
                    </figure>
                </div>
                <div class="col-lg-3 col-md-6">
                    <figure class="gallery-item text-center">
                        <a href="images/gallery/kalung-.9jpg" data-lightbox-gallery="gallery1" title="doll"
                            class="image-link">
                            <img src="images/gallery/kalung-9.jpg" alt="gallery" class="img-fluid rounded-4">
                        </a>
                    </figure>
                </div>
                <div class="col-lg-3 col-md-6">
                    <figure class="gallery-item text-center">
                        <a href="images/gallery/strap-3.jpg" data-lightbox-gallery="gallery1" title="doll"
                            class="image-link">
                            <img src="images/gallery/strap-3.jpg" alt="gallery" class="img-fluid rounded-4">
                        </a>
                    </figure>
                </div>
                <div class="col-lg-3 col-md-6">
                    <figure class="gallery-item text-center">
                        <a href="images/gallery/strap-5.jpg" data-lightbox-gallery="gallery1" title="doll"
                            class="image-link">
                            <img src="images/gallery/strap-5.jpg" alt="gallery" class="img-fluid rounded-4">
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </section>


    <footer id="footer" class="position-relative bg-light py-lg-7 my-lg-7 mb-lg-0">
        <div class="cloud-overlay position-absolute overflow-x-hidden w-100">
            <img src="images/cloud-pattern-overlay.png" alt="icon overlay">
        </div>
        <div class="container">
            <div class="row d-flex flex-wrap justify-content-between">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-menu">
                        <h5 class="widget-title text-secondary">Quick Links</h5>
                        <ul class="menu-list list-unstyled">
                            <li class="menu-item pb-2">
                                <a href="index.html" class="item-anchor">Home</a>
                            </li>
                            <li class="menu-item pb-2">
                                <a href="shop-with-sidebar.html" class="item-anchor">Shop</a>
                            </li>
                            <li class="menu-item pb-2">
                                <a href="contact.html" class="item-anchor">Contact</a>
                            </li>
                            <li class="menu-item pb-2">
                                <a href="contact.html" class="item-anchor">Gallery</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-menu">
                        <h5 class="widget-title text-secondary">Social Media</h5>
                        <div class="social-links">
                            <ul class="list-unstyled">
                                <li class="fw-medium pb-2">
                                    <a href="facebook.com">Whatsapp </a>
                                </li>
                                <li class="fw-medium pb-2">
                                    <a href="instagram.com">Instagram </a>
                                </li>
                                <li class="fw-medium pb-2">
                                    <a href="twitter.com">Shopee </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-menu">
                        <h5 class="widget-title text-secondary">Contact</h5>
                        <div class="social-links">
                            <ul class="list-unstyled">
                                <li class="fw-medium pb-2"> 000 111 222 333 444 </li>
                                <li class="fw-medium pb-2">
                                    <a href="mailto:yourinfo@gmail.com">Yourinfo@gmail.com</a>
                                </li>
                                <li class="fw-medium pb-2">Sonoma, Monterey, San Luis
                                    Opispo, Santa Barbara
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="footer-bottom py-3 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6 mb-3">
                    <div class="d-flex flex-wrap align-items-center">
                        <img src="images/logo-13175-h.png" alt="brand name" class="pe-5">
                        <p class="m-0">©2024 - Kara Handycrafts</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>