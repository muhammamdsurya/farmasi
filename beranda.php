<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500&family=Roboto:wght@100;400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <title>Pesanan Apotek</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-color shadow">
        <div class="container">
            <a class="navbar-brand text-heading fs-2" href="#">HealthHive.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav first-text fs-5 ms-auto mb-2 mb-lg-0">
                    <form class="d-flex me-3 border border-5 border-primary rounded-4" role="search">
                        <input class="form-control search" type="search" placeholder="Search" aria-label="Search">
                    </form>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="beranda.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="apotekPesan.php">Pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ">Racikan obat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ">Laporan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Main -->
    <div class="container-fluid ms-1">
        <div class="top my-5">
            <img src="assets/img/diskon.png" alt="">
        </div>
        <div class="bottom">
            <div class="center-beranda">
                <div class="d-flex login ps-4">
                    <div class="main">
                        <h3 class="text-heading pt-4">Belum Punya Resep ?</h3>
                        <p class="text-heading ">Tanyakan ke apoteker yukkkkk</p>
                        <div class="mt-5">
                            <a href="" class="btn btn-light p-3 px-5">Tanya Apoteker</a>
                        </div>
                    </div>
                    <div class="image ms-auto">
                        <img src="assets/img/2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>