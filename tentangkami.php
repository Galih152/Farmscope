
<?php session_start?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FarmScope</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
   

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="index.html" class="navbar-brand ms-lg-5">
            <h1 class="m-0 text-uppercase text-dark"><img src="img/Logo farm.png" alt="Ikon Sapi" width="80" height="80" class="me-3"></i>FarmScope</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.html" class="nav-item nav-link">Beranda</a>
                <a href="tentangkami.html" class="nav-item nav-link active">Tentang Kami</a>
                <a href="tips&trik.php" class="nav-item nav-link">Tips & Trik</a>
                <a href="galeri.php" class="nav-item nav-link">Galeri</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Katalog</a>
                    <div class="dropdown-menu m-0">
                        <a href="sapi.php" class="dropdown-item">Sapi</a>
                        <a href="kambing.php" class="dropdown-item">Kambing</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5">Login <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="img/sapi about.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="border-start border-5 border-primary ps-5 mb-5">
                        <h6 class="text-primary text-uppercase">Tentang Kami</h6>
                        <h1 class="display-5 text-uppercase mb-0">Sumber Terpercaya untuk Ternak Berkualitas dan Daging yang Lezat!</h1>
                    </div>
                    <h5 class="text-body mb-4">Kami adalah pilihan utama bagi Anda yang mencari solusi lengkap dalam penjualan hewan ternak berkualitas serta produk daging yang siap santap. Dengan dedikasi kami terhadap kualitas, kesejahteraan hewan, dan pelayanan yang luar biasa, kami berkomitmen untuk memberikan pengalaman berbelanja yang memuaskan kepada Anda.</h4>
                    <div class="bg-light p-4">
                        <ul class="nav nav-pills justify-content-between mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100 active" id="pills-1-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1"
                                    aria-selected="true">Misi Kami</button>
                            </li>
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100" id="pills-2-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2"
                                    aria-selected="false">Visi Kami</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                                <p class="mb-0">Misi kami adalah menyediakan produk ternak dan daging berkualitas tertinggi sambil memberikan pelayanan pelanggan yang luar biasa. Kami berkomitmen pada kesejahteraan hewan dan praktik berkelanjutan..</p>
                            </div>
                            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                                <p class="mb-0">Menjadi penyedia utama ternak berkualitas dan produk daging yang dikenal secara nasional dan internasional, dengan komitmen tinggi pada kualitas, keberlanjutan, dan pelayanan pelanggan yang luar biasa.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
            <div class="row g-5">
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <img src="img/layanan 247.png" alt="Ikon Sapi" width="80" height="80" class="me-3"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">Dukungan Pelanggan 24/7</h5>
                            <p>Tim layanan pelanggan kami siap membantu Anda sepanjang waktu. Jika Anda memiliki pertanyaan, permintaan khusus, atau butuh bantuan, kami siap memberikan pelayanan yang memuaskan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <img src="img/akses.png" alt="Ikon Sapi" width="80" height="80" class="me-3"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">Akses Ternak Terbaik</h5>
                            <p>Kami bekerja sama dengan peternak terpercaya untuk menyediakan akses ke ternak terbaik. Anda dapat memilih dari berbagai jenis sapi, domba, kambing, dan ayam yang sehat dan berkualitas tinggi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <img src="img/Pemesanan.png" alt="Ikon Sapi" width="80" height="80" class="me-3"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">Kemudahan Pemesanan</h5>
                            <p>Memberikan kemudahan dalam proses pemesanan. Anda dapat memilih ternak yang diinginkan, menentukan ukuran, dan melakukan pembayaran dengan cepat dan aman melalui platform kami</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <img src="img/potongan.png" alt="Ikon Sapi" width="80" height="80" class="me-3"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">Pemotongan Sesuai Kebutuhan</h5>
                            <p>Kami menawarkan layanan pemotongan daging sesuai dengan kebutuhan Anda. Daging dapat dipotong dan disiapkan sesuai dengan preferensi Anda sebelum pengiriman.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <img src="img/peternak terbaik.png" alt="Ikon Sapi" width="80" height="80" class="me-3"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">Pilihan Ternak Berkualitas</h5>
                            <p>Kami menawarkan berbagai jenis ternak, termasuk sapi, domba, kambing, dan ayam, yang semuanya berasal dari peternak terpercaya. Anda dapat memilih ternak dengan kualitas terbaik sesuai dengan preferensi Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <img src="img/kualitas.png" alt="Ikon Sapi" width="80" height="80" class="me-3"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">Kualitas Terjamin</h5>
                            <p>Kami sangat memperhatikan kualitas daging yang kami jual. Ternak kami diberikan pakan berkualitas tinggi dan perawatan yang baik untuk memastikan daging yang Anda terima adalah yang terbaik.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-light mt-5 py-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Hubungi Kami</h5>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Babakan, Bogor, Indonesia</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>farmscope@gmail.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+62 87654321</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Tautan Langsung</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-body mb-2" href="index.html"><i class="bi bi-arrow-right text-primary me-2"></i>Beranda</a>
                        <a class="text-body mb-2" href="tentangkami.html"><i class="bi bi-arrow-right text-primary me-2"></i>Tentang Kami</a>
                        <a class="text-body mb-2" href="tips&trik.php"><i class="bi bi-arrow-right text-primary me-2"></i>Tips & Trick</a>
                        <a class="text-body mb-2" href="galeri.php"><i class="bi bi-arrow-right text-primary me-2"></i>Galeri</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Newsletter</h5>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-3" placeholder="Your Email">
                            <button class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                    <h6 class="text-uppercase mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex">
                        <a class="btn btn-outline-primary btn-square me-2" href="#"><i class="bi bi-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square me-2" href="#"><i class="bi bi-facebook"></i></a>
                        <a class="btn btn-outline-primary btn-square me-2" href="#"><i class="bi bi-linkedin"></i></a>
                        <a class="btn btn-outline-primary btn-square" href="#"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
                <div class="col-12 text-center text-body">
                    <a class="text-body" href="">Terms & Conditions</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">Privacy Policy</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">Customer Support</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">Payments</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">Help</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">FAQs</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white-50 py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white" href="index.html">FarmScope</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-white" href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>