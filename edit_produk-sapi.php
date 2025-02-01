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
                <a href="tentangkami.html" class="nav-item nav-link">Tentang Kami</a>
                <a href="tips&trik.php" class="nav-item nav-link">Tips & Trik</a>
                <a href="galeri.php" class="nav-item nav-link">Galeri</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Katalog</a>
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

    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Form Edit</h6>
                <h4 class="display-5 text-uppercase mb-0">Edit Produk</h4>                
            </div>
            <div class="formbold-main-wrapper">
                  <?php
                  include "servernya/tes_koneksi.php";
                  if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM katalog_produk WHERE id_produk = $id";
                    $result = $conn->query($sql);
    
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                  ?>
                  <form action="servernya/update_produk-sapi.php?id=<?php echo $row['id_produk']; ?>" method="POST" enctype="multipart/form-data">
                    <div class="formbold-input-wrapp formbold-mb-3">
                      <!-- Nama Produk -->
                      <label for="nama_produk" class="formbold-form-label"> Nama Produk </label>
                      <input type="text" name="nama_produk" id="nama_produk" class="formbold-form-input" 
                       value="<?php echo $row["nama_produk"]; ?>" /> 
                    </div>

                    <!-- Desc Produk -->
                    <div class="formbold-mb-3">
                      <label for="umur" class="formbold-form-label"> Deskripsi </label>
                      <textarea type="text" name="deskripsi" id="deskripsi" class="formbold-form-input">
                      <?php echo $row["deskripsi"]; ?>
                      </textarea>
                    </div>
              
                    <!-- Umur -->
                    <div class="formbold-mb-3">
                        <label for="umur" class="formbold-form-label"> Umur (bulan)</label>
                        <input type="text" name="umur" id="umur" class="formbold-form-input" 
                        value="<?php echo $row["umur"]; ?>" />
                    </div>

                    <!-- Berat -->
                    <div class="formbold-mb-3">
                        <label for="berat" class="formbold-form-label"> Berat (kg)</label>
                        <input type="text" name="berat" id="berat" class="formbold-form-input"
                        value="<?php echo $row["berat"]; ?>" />
                    </div>

                    <!-- Stok -->
                    <div class="formbold-mb-3">
                      <label for="stok" class="formbold-form-label"> Stok </label>
                      <input type="text" name="stok" id="stok" class="formbold-form-input" 
                      value="<?php echo $row["stok"]; ?>" />
                    </div>

                    <!-- Harga -->
                    <div class="formbold-mb-3">
                        <label for="harga" class="formbold-form-label"> Harga </label>
                        <input type="text" name="harga" id="harga" class="formbold-form-input" placeholder="Rp"
                        value="<?php echo $row["harga"]; ?>" />
                      </div>
              
                    <!-- Upload -->
                    <div class="formbold-mb-3">
                      <label for="foto" class="formbold-form-label">
                        Upload Foto
                      </label>
                      <input
                        type="file"
                        name="foto"
                        id="foto"
                        class="formbold-form-input formbold-form-file"
                      value="<?php echo $row["foto"]; ?>" /> 
                    </div>
              
                    <div class="formbold-checkbox-wrapper">
                      <label for="supportCheckbox" class="formbold-checkbox-label">
                        <div class="formbold-relative">
                          <input
                            type="checkbox"
                            id="supportCheckbox"
                            class="formbold-input-checkbox"
                          />
                          <div class="formbold-checkbox-inner">
                            <span class="formbold-opacity-0">
                              <svg
                                width="11"
                                height="8"
                                viewBox="0 0 11 8"
                                class="formbold-stroke-current"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M8.81868 0.688604L4.16688 5.4878L2.05598 3.29507C1.70417 2.92271 1.1569 2.96409 0.805082 3.29507C0.453266 3.66742 0.492357 4.24663 0.805082 4.61898L3.30689 7.18407C3.54143 7.43231 3.85416 7.55642 4.16688 7.55642C4.47961 7.55642 4.79233 7.43231 5.02688 7.18407L10.0696 2.05389C10.4214 1.68154 10.4214 1.10233 10.0696 0.729976C9.71776 0.357624 9.17049 0.357625 8.81868 0.688604Z"
                                  fill="white"
                                />
                              </svg>
                            </span>
                          </div>
                        </div>
                        I agree to the defined
                        <a href="#"> terms, conditions, and policies</a>
                      </label>
                    </div>
                    <input class="formbold-btn" type="submit" name="Upload" value="Upload"></button>
                  </form>
                  <?php
                    } else {
                        echo "Produk tidak ditemukan.";
                    }
                } else {
                    echo "Parameter ID tidak valid.";
                }

                  // Tutup koneksi database
                  $conn->close();
                  ?>
                </div>
              </div>
              <style>
              </style>
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