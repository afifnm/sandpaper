<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $judul_halaman; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="asset/drivin-1.0.0/img/spp.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= site_url('asset/drivin-1.0.0') ?>/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= site_url('asset/drivin-1.0.0') ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= site_url('asset/drivin-1.0.0') ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= site_url('asset/drivin-1.0.0') ?>/css/style.css" rel="stylesheet">
</head>

<body>


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small><?= $konfig->alamat; ?></small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small><?= $konfig->hari_buka; ?> : <?= $konfig->waktu_buka; ?></small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+62 <?= $konfig->no_wa; ?></small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="<?= $konfig->facebook; ?>"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="<?= $konfig->youtube; ?>"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="<?= $konfig->tiktok; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 26 26" style="fill: #F3BD00;">
                            <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"></path>
                        </svg>
                    </a>
                    <a class="btn btn-square btn-link rounded-0" href="<?= $konfig->instagram; ?>"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="<?= site_url() ?>" class="navbar-brand d-flex align-items-center">
            <?php foreach ($fotologo as $aa) { ?>
                <div class="col-lg-6">
                    <img class="m-0" src="<?= base_url('asset/upload/logo/'.$aa['foto_logo']) ?>" alt="" width="300" height="80">
                </div>
            <?php } ?>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?= site_url('home') ?>" class="nav-item nav-link">Beranda</a>
                <a href="<?= site_url('about') ?>" class="nav-item nav-link">Tentang</a>
                <a href="<?= site_url('armada') ?>" class="nav-item nav-link">Armada</a>
                <a href="<?= site_url('jadwal') ?>" class="nav-item nav-link active" >Jadwal</a>
                <a href="<?= site_url('contact') ?>" class="nav-item nav-link">Kontak</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Courses Start -->
    <div class="container-xxl py-4">
    <div class="container">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase mb-2">JADWAL</h6>
            <h3 class="mb-4">Jadwal Perjalanan</h3>
        </div>

        <div class="bg-light text-center wow fadeInUp"  data-wow-delay="0.2s">
                <div class="">
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr class="text-nowrap">
                                    <th>No</th>
                                    <th>Armada</th>
                                    <th>Tgl Mulai</th>
                                    <th>Tgl Berakhir</th>
                                    <th>Kerengan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($booking as $aa) { ?>
                                    <tr>
                                        <th scope="row">
                                            <?= $no; ?>
                                        </th>
                                        <td>
                                            <?= $aa['judul'] ?>
                                        </td>
                                        <td>
                                            <?= date('d M Y ', strtotime($aa['tgl_mulai']))  ?>
                                        </td>
                                        <td>
                                            <?= date('d M Y ', strtotime($aa['tgl_berakhir']))  ?>
                                        </td>
                                        <td>
                                            <?= $aa['keterangan_booking'] ?>
                                        </td>
                                    </tr>
                                    <?php $no++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
</div>
    <!-- Courses End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Kantor</h4>
                    <h5 class="text-primary mb-4"><i class="fa fa-bus text-white me-2"></i><?= $konfig->judul_website; ?></h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?= $konfig->alamat; ?></p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 <?= $konfig->no_wa; ?></p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i><?= $konfig->email; ?></p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Links</h4>
                    <a class="btn btn-link" href="<?= site_url('home') ?>">Beranda</a>
                    <a class="btn btn-link" href="<?= site_url('about') ?>">Tentang</a>
                    <a class="btn btn-link" href="<?= site_url('armada') ?>">Armada</a>
                    <a class="btn btn-link" href="<?= site_url('jadwal') ?>">Jadwal</a>
                    <a class="btn btn-link" href="<?= site_url('contact') ?>">Kontak</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Sosial Media</h4>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light me-1" href="<?= $konfig->instagram; ?>"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href="<?= $konfig->facebook; ?>"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href="<?= $konfig->youtube; ?>"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light me-0" href="<?= $konfig->tiktok; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 26 26" style="fill: white;">
                            <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"></path>
                        </svg>
                        </a>
                    </div>
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Booking</h4>
                        <div>
                            <a href="https://wa.me/62<?= $konfig->no_wa; ?>" target="_blank" class="btn btn-primary px-4">Whatsapp<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    <h4 class="text-white mt-4 mb-3">Buka :</h4>
                    <?= $konfig->hari_buka; ?> <?= $konfig->waktu_buka; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

            <!-- Copyright Start -->
            <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <script>
                                document.write(new Date().getFullYear());
                            </script> 
                            Sandpaper Holiday Trans.
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= site_url('asset/drivin-1.0.0') ?>/lib/wow/wow.min.js"></script>
    <script src="<?= site_url('asset/drivin-1.0.0') ?>/lib/easing/easing.min.js"></script>
    <script src="<?= site_url('asset/drivin-1.0.0') ?>/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= site_url('asset/drivin-1.0.0') ?>/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= site_url('asset/drivin-1.0.0') ?>/js/main.js"></script>
</body>

</html>