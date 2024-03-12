<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kara Handycrafts - Admin</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/logo.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="css/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body class="sidebar-main-active right-column-fixed">
    <div class="navbar-breadcrumb">
        <h4 class="mb-0 text-dark">Dashboard</h4>
        <p class="mb-0"><span class="text-danger">Hi <?php 
                                echo $_SESSION['user']['username'];
                                ?>,</span> Great to see you again</p>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-3">
            <div class="iq-card  iq-mb-4">
                <div class="iq-card-body">
                    <h4 class="card-title">Total Kategori</h4>
                    <?php
                    echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM kategori"));
                    ?> Kategori
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="iq-card  iq-mb-4">
                <div class="iq-card-body">
                    <h4 class="card-title">Total Produk</h4>
                    <?php
                    echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM produk"));
                    ?> Produk
                </div>
            </div>
        </div>
    </div>

    <div class="iq-card">
        <div class="iq-card-body">
            <table class="table table-striped table-bordered">

                <tr>
                    <td width="150">Nama</td>
                    <td width="1">:</td>
                    <td><?php echo $_SESSION['user']['username'];?></td>
                </tr>
                <tr>
                    <td width="150">Tanggal Login </td>
                    <td width="1">:</td>
                    <td><?php echo date('d-m-Y H:i:s');?></td>
                </tr>

            </table>
        </div>
    </div>

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
    <!-- Style Customizer -->
    <script src="js/style-customizer.js"></script>
    <!-- Chart Custom JavaScript -->
    <script src="js/chart-custom.js"></script>
    <!-- Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>