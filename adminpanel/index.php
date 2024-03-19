<?php
include "../koneksi.php";
if(!isset($_SESSION['user'])) {
    header('location:login.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Karaa Handycrafts - Admin </title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="css/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Sidebar  -->
        <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
                <a href="index.html" class="header-logo">
                    <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
                    <div class="logo-title">
                        <span class="text-danger text-uppercase">Halaman<span
                                class="text-primary ml-1">Admin</span></span>
                    </div>
                </a>
                <div class="iq-menu-bt-sidebar">
                    <div class="iq-menu-bt align-self-center">
                        <div class="wrapper-menu">
                            <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                            <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sidebar-scrollbar">
                <nav class="iq-sidebar-menu">
                    <ul id="iq-sidebar-toggle" class="iq-menu">
                        <li class="active active-menu">
                            <a href="index.html">
                                <i class="las la-house-damage"></i>
                                <span>Home</span>
                            </a>

                        </li>
                        <li>
                            <a href="calendar.html" class="iq-waves-effect">
                                <i class="las la-calendar iq-arrow-left"></i>
                                <span>Kategori</span>
                            </a>
                        </li>
                        <li>
                            <a href="calendar.html" class="iq-waves-effect">
                                <i class="las la-calendar iq-arrow-left"></i>
                                <span>Produk</span>
                            </a>
                        </li>
                        <li>
                            <a href="logout.php">
                                <i class="las la-power-off"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </nav>
        </div>
        <!-- TOP Nav Bar -->
        <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <div class="iq-menu-bt d-flex align-items-center">
                        <div class="wrapper-menu">
                            <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                            <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                        </div>
                        <div class="iq-navbar-logo d-flex justify-content-between">
                            <a href="index.html" class="header-logo">
                                <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
                                <div class="pt-2 pl-2 logo-title">
                                    <span class="text-danger text-uppercase">Server<span
                                            class="text-primary ml-1">360</span></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="navbar-breadcrumb">
                        <h4 class="mb-0 text-dark">Dashboard</h4>
                        <p class="mb-0"><span class="text-danger">Hi there,</span> Great to see you again</p>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-label="Toggle navigation">
                        <i class="ri-menu-3-line"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-list">
                            <li class="nav-item nav-icon">
                                <div class="iq-search-bar">
                                    <form action="#" class="searchbox">
                                        <input type="text" class="text search-input"
                                            placeholder="Type here to search...">
                                        <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                                    </form>
                                </div>
                            </li>   
                        </ul>
                    </div>
                    <ul class="navbar-list">
                        <li class="line-height">
                            <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                                <img src="images/user/user.png" class="img-fluid rounded-circle" alt="user">
                            </a>
                            <div class="iq-sub-dropdown iq-user-dropdown">
                                <div class="iq-card shadow-none m-0">
                                    <div class="iq-card-body p-0 ">
                                        <div class="bg-primary p-3">
                                            <h5 class="mb-0 text-white line-height">Hello Barry Tech</h5>
                                            <span class="text-white font-size-12">Available</span>
                                        </div>
                                        <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                                            <div class="media align-items-center">
                                                <div class="rounded iq-card-icon iq-bg-primary">
                                                    <i class="ri-file-user-line"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">My Profile</h6>
                                                    <p class="mb-0 font-size-12">View personal profile details.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="profile-edit.html" class="iq-sub-card iq-bg-primary-hover">
                                            <div class="media align-items-center">
                                                <div class="rounded iq-card-icon iq-bg-primary">
                                                    <i class="ri-profile-line"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Edit Profile</h6>
                                                    <p class="mb-0 font-size-12">Modify your personal details.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="account-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                            <div class="media align-items-center">
                                                <div class="rounded iq-card-icon iq-bg-primary">
                                                    <i class="ri-account-box-line"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Account settings</h6>
                                                    <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                            <div class="media align-items-center">
                                                <div class="rounded iq-card-icon iq-bg-primary">
                                                    <i class="ri-lock-line"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Privacy Settings</h6>
                                                    <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="d-inline-block w-100 text-center p-3">
                                            <a class="bg-primary iq-sign-btn" href="sign-in.html" role="button">Sign
                                                out<i class="ri-login-box-line ml-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
            <div class="container mt-5">
                    <h2>Halo <?php echo $_SESSION['username']; ?></h2>
            </div>
        <!-- TOP Nav Bar END -->
        <!-- Page Content  -->
        <!-- <div id="content-page" class="content-page">
            <div class="container-fluid">
                <div class="row content-body">
                    <div class="col-lg-8">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height iq-bg-danger">
                            <div class="iq-card-body box iq-box-relative">
                                <div class="box-image float-right">
                                    <img class="rounded img-fluid" src="images/page-img/37.png" alt="profile">
                                </div>
                                <h4 class="d-block mb-3 text-black">Welcome back John</h4>
                                <p class="d-inline-block welcome-text text-black">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Donec vulputate facilisis velit, vitae fermentum nulla
                                    ultrices et.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div class="iq-card-body">
                                <ul class="suggestions-lists m-0 p-0">
                                    <li class="d-flex mb-4 align-items-center justify-content-between">
                                        <div class="col-sm-9 p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-55 text-center rounded iq-bg-danger">
                                                    <span>B5</span>
                                                </div>
                                                <div class="media-support-info ml-3">
                                                    <h5>Loads</h5>
                                                    <p class="mb-0">Online Participant</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 p-0">
                                            <div class="iq-progress-bar-linear d-inline-block mt-1 w-100">
                                                <div class="iq-progress-bar">
                                                    <span class="bg-danger" data-percent="50"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between">
                                        <div class="col-sm-9 p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-55 text-center rounded iq-bg-primary">
                                                    <span>G2</span>
                                                </div>
                                                <div class="media-support-info ml-3">
                                                    <h5>Requests</h5>
                                                    <p class="mb-0">Offline Participant</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 p-0">
                                            <div class="iq-progress-bar-linear d-inline-block mt-1 w-100">
                                                <div class="iq-progress-bar">
                                                    <span class="bg-primary" data-percent="80"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 row m-0 p-0">
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                <div class="iq-card-body">
                                    <div class="icon iq-icon-box iq-bg-primary rounded" data-wow-delay="0.2s">
                                        <i class="ri-cpu-line"></i>
                                    </div>
                                    <div class="mt-4">
                                        <h5 class="text-black text-uppercase">CPU</h5>
                                        <h3 class="d-flex text-primary"> 4.8%<i class="ri-arrow-up-line"></i></h3>
                                    </div>
                                    <p class="mb-0 mt-1">Avg +65%</p>
                                    <div class="mt-3">
                                        <div class="iq-progress-bar-linear d-inline-block mt-1 w-100">
                                            <div class="iq-progress-bar">
                                                <span class="bg-primary" data-percent="65"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                <div class="iq-card-body">
                                    <div class="icon iq-icon-box iq-bg-danger rounded" data-wow-delay="0.2s">
                                        <i class="ri-window-line"></i>
                                    </div>
                                    <div class="mt-4">
                                        <h5 class="text-black text-uppercase">RAM</h5>
                                        <h3 class="d-flex text-danger"> 4.2%<i class="ri-arrow-down-line"></i></h3>
                                    </div>
                                    <p class="mb-0 mt-1">Avg +85%</p>
                                    <div class="mt-3">
                                        <div class="iq-progress-bar-linear d-inline-block mt-1 w-100">
                                            <div class="iq-progress-bar">
                                                <span class="bg-danger" data-percent="85"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                <div class="iq-card-body">
                                    <div class="icon iq-icon-box iq-bg-primary rounded" data-wow-delay="0.2s">
                                        <i class="ri-u-disk-line"></i>
                                    </div>
                                    <div class="mt-4">
                                        <h5 class="text-black text-uppercase">DISK</h5>
                                        <h3 class="d-flex text-primary"> 5.8GB<i class="ri-arrow-up-line"></i></h3>
                                    </div>
                                    <p class="mb-0 mt-1">Avg +36%</p>
                                    <div class="mt-3">
                                        <div class="iq-progress-bar-linear d-inline-block mt-1 w-100">
                                            <div class="iq-progress-bar">
                                                <span class="bg-primary" data-percent="36"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                <div class="iq-card-body">
                                    <div class="icon iq-icon-box iq-bg-danger rounded" data-wow-delay="0.2s">
                                        <i class="ri-global-line"></i>
                                    </div>
                                    <div class="mt-4">
                                        <h5 class="text-black text-uppercase">SERVICES</h5>
                                        <h3 class="d-flex text-danger"> 3.5KB<i class="ri-arrow-down-line"></i></h3>
                                    </div>
                                    <p class="mb-0 mt-1">Avg +48%</p>
                                    <div class="mt-3">
                                        <div class="iq-progress-bar-linear d-inline-block mt-1 w-100">
                                            <div class="iq-progress-bar">
                                                <span class="bg-danger" data-percent="48"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="iq-card bg-danger iq-card-block iq-card-stretch iq-card-height-half">
                            <div class="iq-card-body box iq-box-relative">
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="col-7 p-0">
                                        <div class="float-left progress-round income-progress mr-3" data-value="80">
                                            <span class="progress-left">
                                                <span class="progress-bar border-white"
                                                    style="transform: rotate(108deg);"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar border-white"
                                                    style="transform: rotate(180deg);"></span>
                                            </span>
                                            <div
                                                class="progress-value w-100 h-100 rounded d-flex align-items-center justify-content-center text-center">
                                                <div class="h4 mb-0">75</div>
                                            </div>
                                        </div>
                                        <h5 class="d-block mt-2 text-white font-weight-500">Storage<br> Usage</h5>
                                    </div>
                                    <div class="col-5 pr-0 right-border-block position-relative">
                                        <div class="avatar-30 text-center rounded-circle iq-bg-danger" data-wow-delay="0.2s">
                                    <span class="font-size-14 align-item-center"><i class="ri-account-box-line"></i></span>
                                 </div> 
                                        <h5 class="text-white mt-2">594875625</h5>
                                        <span class="text-white">Online Users</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height-half iq-background-image">
                            <div class="iq-card-body box iq-box-relative rounded">
                                <div class="d-flex justify-content-between align-items-left">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="float-left progress-round income-progress" data-value="80">
                                            <span class="progress-left">
                                                <span class="progress-bar border-primary"
                                                    style="transform: rotate(108deg);"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar border-success"
                                                    style="transform: rotate(180deg);"></span>
                                            </span>
                                        </div>
                                        <div class="pl-3">
                                            <ul class="float-right d-inline-block p-0 m-0 list-inline">
                                                <li class="line-height-3">
                                                    <span class="text-danger total-progress position-relative pl-2">
                                                        <span class="bg-danger rounded"></span>Total Processes: 61<i
                                                            class="ri-arrow-up-line"></i>
                                                    </span>
                                                </li>
                                                <li class="line-height-3">
                                                    <span class="text-primary total-progress position-relative pl-2">
                                                        <span class="bg-primary rounded"></span>Total Threands: 993<i
                                                            class="ri-arrow-down-line"></i>
                                                    </span>
                                                </li>
                                                <li class="line-height-3">
                                                    <span class="text-success total-progress position-relative pl-2">
                                                        <span class="bg-success rounded"></span>Total Handles: 26957<i
                                                            class="ri-arrow-up-line"></i>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Server Traffic Source</h4>
                                </div>
                                <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle dropdown-bg iq-bg-danger" id="dropdownMenuButton1"
                                            data-toggle="dropdown">
                                            This Year<i class="ri-arrow-down-s-line ml-1 text-danger"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right shadow-none"
                                            aria-labelledby="dropdownMenuButton1">
                                            <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="ri-pencil-fill mr-2"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="ri-printer-fill mr-2"></i>Print</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="ri-file-download-fill mr-2"></i>Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <div id="report-chart-02" style="min-height: 150px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div
                            class="iq-card iq-card-block iq-card-stretch iq-card-height bg-primary rounded background-image-overlap">
                            <div class="iq-card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div><img class="rounded" src="images/page-img/38.png" alt=""></div>
                                    <h5 class="pl-3 text-white">Unauthorized Threats has been Terminated</h5>
                                </div>
                                <p class="mb-2"><span class="text-white">5</span> Unnecessary Data</p>
                                <p class="mb-2"><span class="text-white">12</span> Undentified Source Data</p>
                                <p class="mb-3"><span class="text-white">8</span> Unused Images</p>
                                <button type="submit" class="btn w-100 btn-white mt-4 text-primary viwe-more">View
                                    More</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Bandwidth Public</h4>
                                </div>
                                <div class="mt-1">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void();" class="d-flex align-items-center mr-4">
                                            <span class="bg-danger p-1 rounded mr-2"></span>
                                            <p class="text-danger mb-0">Lowest Speed </p>
                                        </a>
                                        <a href="javascript:void();" class="d-flex align-items-center">
                                            <span class="bg-primary p-1 rounded mr-2"></span>
                                            <p class="text-primary mb-0">Highest Speed</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <div id="iq-income-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="iq-card">
                            <div class="iq-card-body box iq-box-relative rounded">
                                <div class="d-flex align-items-center">
                                    <div class="float-left progress-round income-progress disk-usage" data-value="80">
                                        <span class="progress-left">
                                            <span class="progress-bar border-success"
                                                style="transform: rotate(108deg);"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar border-primary"
                                                style="transform: rotate(180deg);"></span>
                                        </span>
                                    </div>
                                    <div class="pl-3">
                                        <h5 class="d-block mt-0 mb-1 text-black">Disk Usage</h5>
                                        <ul class="float-right d-inline-block p-0 m-0 list-inline">
                                            <li class="line-height-3">
                                                <span
                                                    class="text-danger total-progress position-relative pl-2 font-size-12 font-weight-500">
                                                    <span class="bg-danger rounded"></span>Max Usage</span>
                                            </li>
                                            <li class="line-height-3">
                                                <span
                                                    class="text-primary total-progress position-relative pl-2 font-size-12 font-weight-500">
                                                    <span class="bg-primary rounded"></span>Average Usage</span>
                                            </li>
                                            <li class="line-height-3">
                                                <span
                                                    class="text-success total-progress position-relative pl-2 font-size-12 font-weight-500">
                                                    <span class="bg-success rounded"></span>Minimum Usage</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Load Average</h4>
                                </div>
                            </div>
                            <div class="iq-card-body p-0">
                                <div id="chart-9"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 row m-0 p-0">
                        <div class="col-sm-6">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">CPU Daily Usage</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body pt-0">
                                    <div id="home-chart-11"></div>
                                    <div class="text-center">
                                        <h4>50.03%</h4>
                                        <p class="mb-0">CPU usage is<span class="text-primary pl-2">good</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="iq-card bg-danger">
                                <div class="iq-card-body box iq-box-relative">
                                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                                        <div class="col-4 p-0">
                                            <div class="float-left progress-round income-progress mr-2" data-value="80">
                                                <span class="progress-left">
                                                    <span class="progress-bar border-white"
                                                        style="transform: rotate(108deg);"></span>
                                                </span>
                                                <span class="progress-right">
                                                    <span class="progress-bar border-white"
                                                        style="transform: rotate(180deg);"></span>
                                                </span>
                                                <div
                                                    class="progress-value w-100 h-100 rounded d-flex align-items-center justify-content-center text-center">
                                                    <div class="h4 mb-0">12</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-8 pr-0">
                                            <h5 class="d-block mt-2 mb-3 text-white">Most Recent Alarams</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-body box iq-box-relative rounded">
                                    <div class="d-flex align-items-center">
                                        <div class="float-left progress-round heatmap-progress" data-value="80">
                                            <span class="progress-left">
                                                <span class="progress-bar border-primary"
                                                    style="transform: rotate(108deg);"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar border-success"
                                                    style="transform: rotate(180deg);"></span>
                                            </span>
                                        </div>
                                        <div class="pl-3">
                                            <h5 class="d-block mt-0 mb-1 text-black">Heat Map</h5>
                                            <ul class="d-inline-block p-0 m-0 list-inline">
                                                <li class="line-height-3">
                                                    <span
                                                        class="text-danger total-progress position-relative pl-2 font-size-12 font-weight-500">
                                                        <span class="bg-danger rounded"></span>Clear</span>
                                                </li>
                                                <li class="line-height-3">
                                                    <span
                                                        class="text-primary total-progress position-relative pl-2 font-size-12 font-weight-500">
                                                        <span class="bg-primary rounded"></span>Critical</span>
                                                </li>
                                                <li class="line-height-3">
                                                    <span
                                                        class="text-success total-progress position-relative pl-2 font-size-12 font-weight-500">
                                                        <span class="bg-success rounded"></span>Trouble</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Ram Usage</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <div id="report-chart-04"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Active Instances</h4>
                                </div>
                                <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle text-primary" id="dropdownMenuButton2"
                                            data-toggle="dropdown">
                                            <i class="ri-more-2-fill"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuButton2">
                                            <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="ri-pencil-fill mr-2"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="ri-printer-fill mr-2"></i>Print</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="ri-file-download-fill mr-2"></i>Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-borderless tbl-server-info">
                                        <thead>
                                            <tr>
                                                <th scope="col">Servers</th>
                                                <th scope="col"></th>
                                                <th scope="col">IP Address</th>
                                                <th scope="col">Created</th>
                                                <th scope="col">Tag</th>
                                                <th scope="col">Provider</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="avatar-40 text-center rounded-circle iq-bg-danger position-relative">
                                                        <span class="font-size-20 align-item-center"><i
                                                                class="fa fa-user" aria-hidden="true"></i><span
                                                                class="bg-success dots"></span></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6>Noveruche Admin</h6>
                                                    <span class="text-body font-weight-400">8GB/80GB/SF02-Ubuntu Iconic-
                                                        jfkakf-daksl...</span>
                                                </td>
                                                <td>192.168.130.26</td>
                                                <td>2 Months ago</td>
                                                <td>
                                                    <div class="text-danger">Web Server</div>
                                                </td>
                                                <td>Indioserver</td>
                                                <td>
                                                    <span class="text-black font-size-24" id="dropdownMenuButton3">
                                                        <i class="ri-more-fill"></i>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="avatar-40 text-center rounded-circle iq-bg-danger position-relative">
                                                        <span class="font-size-20 align-item-center"><i
                                                                class="fa fa-user" aria-hidden="true"></i><span
                                                                class="bg-success dots"></span></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6>Developing Hier</h6>
                                                    <span class="text-body font-weight-400">8GB/80GB/SF02-Ubuntu Iconic-
                                                        jfkakf-daksl...</span>
                                                </td>
                                                <td>192.168.130.26</td>
                                                <td>4 Months ago</td>
                                                <td>
                                                    <div class="text-primary">Desky</div>
                                                </td>
                                                <td>Jeniorde</td>
                                                <td>
                                                    <span class="text-black font-size-24" id="dropdownMenuButton4">
                                                        <i class="ri-more-fill"></i>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="avatar-40 text-center rounded-circle iq-bg-danger position-relative">
                                                        <span class="font-size-20 align-item-center"><i
                                                                class="fa fa-user" aria-hidden="true"></i><span
                                                                class="bg-success dots"></span></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6>Nalurel Dilam</h6>
                                                    <span class="text-body font-weight-400">8GB/80GB/SF02-Ubuntu Iconic-
                                                        jfkakf-daksl...</span>
                                                </td>
                                                <td>192.168.130.26</td>
                                                <td>5 Months ago</td>
                                                <td>
                                                    <div class="text-success">Software</div>
                                                </td>
                                                <td>Walikarsi</td>
                                                <td>
                                                    <span class="text-black font-size-24" id="dropdownMenuButton5">
                                                        <i class="ri-more-fill"></i>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="avatar-40 text-center rounded-circle iq-bg-danger position-relative">
                                                        <span class="font-size-20 align-item-center"><i
                                                                class="fa fa-user" aria-hidden="true"></i><span
                                                                class="bg-success dots"></span></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6>Nariokali Borji</h6>
                                                    <span class="text-body font-weight-400">8GB/80GB/SF02-Ubuntu Iconic-
                                                        jfkakf-daksl...</span>
                                                </td>
                                                <td>192.168.130.26</td>
                                                <td>6 Months ago</td>
                                                <td>
                                                    <div class="text-primary">Innohouse</div>
                                                </td>
                                                <td>Leoharshan</td>
                                                <td>
                                                    <span class="text-black font-size-24" id="dropdownMenuButton6">
                                                        <i class="ri-more-fill"></i>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="avatar-40 text-center rounded-circle iq-bg-danger position-relative">
                                                        <span class="font-size-20 align-item-center"><i
                                                                class="fa fa-user" aria-hidden="true"></i><span
                                                                class="bg-success dots"></span></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6>Bulesta Karolin</h6>
                                                    <span class="text-body font-weight-400">8GB/80GB/SF02-Ubuntu Iconic-
                                                        jfkakf-daksl...</span>
                                                </td>
                                                <td>192.168.130.26</td>
                                                <td>6 Months ago</td>
                                                <td>
                                                    <div class="text-danger">Rodrigez</div>
                                                </td>
                                                <td>Karilorni</td>
                                                <td>
                                                    <span class="text-black font-size-24" id="dropdownMenuButton7">
                                                        <i class="ri-more-fill"></i>
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <!-- Wrapper END -->
    <!-- Footer -->
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    Copyright 2020 <a href="#">Server360</a> All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Appear JavaScript -->
    <script src="js/jquery.appear.js"></script>
    <!-- Countdown JavaScript -->
    <script src="js/countdown.min.js"></script>
    <!-- Counterup JavaScript -->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Wow JavaScript -->
    <script src="js/wow.min.js"></script>
    <!-- Apexcharts JavaScript -->
    <script src="js/apexcharts.js"></script>
    <!-- Slick JavaScript -->
    <script src="js/slick.min.js"></script>
    <!-- Select2 JavaScript -->
    <script src="js/select2.min.js"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="js/smooth-scrollbar.js"></script>
    <!-- lottie JavaScript -->
    <script src="js/lottie.js"></script>
    <!-- am core JavaScript -->
    <script src="js/core.js"></script>
    <!-- am charts JavaScript -->
    <script src="js/charts.js"></script>
    <!-- am animated JavaScript -->
    <script src="js/animated.js"></script>
    <!-- am kelly JavaScript -->
    <script src="js/kelly.js"></script>
    <!-- am maps JavaScript -->
    <script src="js/maps.js"></script>
    <!-- am worldLow JavaScript -->
    <script src="js/worldLow.js"></script>
    <!-- Raphael-min JavaScript -->
    <script src="js/raphael-min.js"></script>
    <!-- Morris JavaScript -->
    <script src="js/morris.js"></script>
    <!-- Morris min JavaScript -->
    <script src="js/morris.min.js"></script>
    <!-- Flatpicker Js -->
    <script src="js/flatpickr.js"></script>
    <!-- Style Customizer -->
    <script src="js/style-customizer.js"></script>
    <!-- Chart Custom JavaScript -->
    <script src="js/chart-custom.js"></script>
    <!-- Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>