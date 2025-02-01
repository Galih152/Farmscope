<?php
// ... (previous code)

include("servernya/tes_koneksi.php"); // Menghubungkan ke database
session_start();
// Ensure that the user is logged in
if (isset($_SESSION['id_user'])) {
    $id_user = $_SESSION['id_user'];
    echo $id_user;
    // Query untuk mengambil data dari tabel katalog_produk dan users menggunakan INNER JOIN
    $sql = "SELECT *
            FROM katalog_produk as k
            WHERE k.jenis = 'sapi' AND k.id_user = '$id_user'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
            <!-- Pemisah per produk -->
            <div class="col-sm-12 col-lg-3 mb-3">
                <a a href="servernya/hapus_produk-sapi.php?id=<?php echo $row['id_produk']; ?>">
                <div class="bg-danger text-white btn btn-outline-danger">
                    Hapus
                </div>
                </a>
                <a a href="detail_produk-sapi.php?id=<?php echo $row['id_produk']; ?>" class="hvnb">
                    <div class="list-group shadow-sm">
                        <img src="img/upload/<?php echo $row["foto"]; ?>" class="card-img-top rounded-top" alt="<?php echo $row["nama_produk"]; ?>" height="190" >                               
                        <div class="list-group-item">
                            <div class="mb-2">
                                <span class="active text-success"><b><?php echo "Rp" . number_format($row["harga"], 0, ",", "."); ?></b></span>
                                
                            </div>
                            <p class="card-text text-dark"><?php echo $row["nama_produk"]; ?></p>
                            
                        </div>
                        <div class="list-group-item btn-outline-success pl-3">
                            Detail
                        </div>
                    </div>
                </a>
            </div>
            <?php
        }
    } else {
        echo "Tidak ada data sapi yang tersedia.";
    }
} else {
    echo "User not logged in.";
}

// Tutup koneksi database
$conn->close();
?>




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
                <a href="../index_peternak.php" class="nav-item nav-link">Beranda</a>
                <a href="tentangkami.html" class="nav-item nav-link">Tentang Kami</a>
                <a href="tips&trik.php" class="nav-item nav-link">Tips & Trik</a>
                <a href="../galeri-2.php" class="nav-item nav-link">Galeri</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Katalog</a>
                    <div class="dropdown-menu m-0">
                        <a href="sapi.php" class="dropdown-item">Sapi</a>
                        <a href="kambing.php" class="dropdown-item">Kambing</a>
                    </div>
                </div>
                <a href="../profile.php" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5">Profile       <i class="bi bi-person-circle"></i></a></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Produk</h6>
                <h1 class="display-6 text-uppercase mb-0">List Produk - Sapi</h1>
            </div>
            <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-1">
                <a href="tambah_produk-sapi.php" class="btn btn-outline-dark border-2 py-md-3 px-md-5 me-5">Tambah Produk</a>
            </div>
            <br><br>
            <div class="row">
            <?php
            // ... (previous code)

            include("servernya/tes_koneksi.php"); // Menghubungkan ke database
            session_start();
            // Ensure that the user is logged in
            if (isset($_SESSION['id_user'])) {
                $id_user = $_SESSION['id_user'];
                echo $id_user;
                // Query untuk mengambil data dari tabel katalog_produk dan users menggunakan INNER JOIN
                $sql = "SELECT *
                        FROM katalog_produk as k
                        WHERE k.jenis = 'sapi' AND k.id_user = '$id_user'";
                
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <!-- Pemisah per produk -->
                        <div class="col-sm-12 col-lg-3 mb-3">
                            <a a href="servernya/hapus_produk-sapi.php?id=<?php echo $row['id_produk']; ?>">
                            <div class="bg-danger text-white btn btn-outline-danger">
                                Hapus
                            </div>
                            </a>
                            <a a href="detail_produk-sapi.php?id=<?php echo $row['id_produk']; ?>" class="hvnb">
                                <div class="list-group shadow-sm">
                                    <img src="img/upload/<?php echo $row["foto"]; ?>" class="card-img-top rounded-top" alt="<?php echo $row["nama_produk"]; ?>" height="190" >                               
                                    <div class="list-group-item">
                                        <div class="mb-2">
                                            <span class="active text-success"><b><?php echo "Rp" . number_format($row["harga"], 0, ",", "."); ?></b></span>
                                            
                                        </div>
                                        <p class="card-text text-dark"><?php echo $row["nama_produk"]; ?></p>
                                        
                                    </div>
                                    <div class="list-group-item btn-outline-success pl-3">
                                        Detail
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                } else {
                    echo "Tidak ada data sapi yang tersedia.";
                }
            } else {
                echo "User not logged in.";
            }

            // Tutup koneksi database
            $conn->close();
            ?>
            </div>
            <br>
                <div>
                    <p><H2 center>Lokasi Peternak</H2></p>
                </div>
                <div>
                    <iframe class="position-relative w-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        frameborder="0" style="height: 205px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
        </div>
    </div>
    <!-- Products End -->

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