<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $judul_halaman; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= site_url('asset/drivin') ?>/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= site_url('asset/drivin') ?>/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= site_url('asset/drivin') ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= site_url('asset/drivin') ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= site_url('asset/drivin') ?>/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


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
        <a href="<?= site_url() ?>" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0"><i class="fa fa-bus text-primary me-2"></i><?= $konfig->judul_website; ?></h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?= site_url('home') ?>" class="nav-item nav-link">Home</a>
                <a href="<?= site_url('about') ?>" class="nav-item nav-link">About</a>
                <a href="<?= site_url('armada') ?>" class="nav-item nav-link">Armada</a>
                <a href="<?= site_url('jadwal') ?>" class="nav-item nav-link">Jadwal</a>
                <a href="<?= site_url('contact') ?>" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Features Start -->
    <div class="container-xxl py-4">
        <div class="container">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="display-5 mb-4">Detail Armada</h1>
            <h6 class="text-primary text-uppercase mb-2"><?php echo $konten->judul ?></h6>
        </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-primary text-uppercase mb-2">Tentang</h6>
                    <h1 class="display-6 mb-4">Armada <?php echo $konten->judul ?></h1>
                    <p class="mb-5"><?php echo $konten->keterangan ?></p>
                    <div class="row gy-5 gx-4">


                        <div class="row pt-4" data-wow-delay="0.1s">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-square bg-primary me-3">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                        <h5 class="ms-3">
                                        <?php echo $kntn->nama_kategori ?>
                                        </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-4" data-wow-delay="0.1s">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-square bg-primary me-3">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                        <h5 class="ms-3">
                                        <?php echo $kntn->kursi ?> Kursi
                                        </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-4" data-wow-delay="0.1s">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-square bg-primary me-3">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                        <h5 class="ms-3">
                                        <?php echo $kntn->merk ?>
                                        </h5>
                                </div>
                            </div>
                        </div>



                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary me-3">
                                    <a href="https://wa.me/<?= $konfig->no_wa; ?>">
                                        <i class="fa fa-phone-alt text-white"></i>
                                    </a>
                                </div>
                                <div class="ms-3">
                                        <p class="mb-2">Whatsapp</p>
                                        <h5 class="mb-0">
                                            <a href="https://wa.me/<?= $konfig->no_wa; ?>">
                                            +62 <?= $konfig->no_wa; ?>
                                            </a>
                                        </h5>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary me-3">
                                    <i class="fa fa-envelope-open text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-2">Email</p>
                                    <h5 class="mb-0">
                                        <?= $konfig->email; ?>
                                    </h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                    <?php foreach ($caraousel as $aa) { ?>
                        <img class="position-absolute w-100 h-100" src="<?= base_url('asset/upload/konten/' . $aa['foto']) ?>" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3" src="<?= base_url('asset/upload/konten/' . $aa['foto']) ?>" alt="" style="width: 200px; height: 200px">
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-2">
        <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Foto</h6>
                <h1 class="display-6 mb-4">Fasilitas Armada</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="owl-carousel testimonial-carousel">

                        <?php foreach ($caraousel as $dt) {
                        // Memeriksa apakah judul saat ini sesuai dengan yang Anda inginkan
                            if ($dt['judul'] === $konten->judul) { ?>
                            <div class="testimonial-item text-center">
                                <div class="position-relative mb-5">
                                    <img class="img-fluid mx-auto"  style="width: 600px; height: auto;"
                                        src="<?= base_url('asset/upload/detail/' . $dt['foto_detail']) ?>" alt="">
                                </div>
                                <hr class="w-25 mx-auto">
                                <h5><?= $dt['judul_detail'] ?></h5>
                            </div>
                        <?php } } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


<div class="container-xxl py-4">
    <div class="container">
            <?php if($booking==null) { echo 
                '<div class="bg-light text-center h-100 p-5 mt-4">
                    <h5>Belum ada tanggal yang Booking untuk Armada ini</h5>
                    <div class="card mt-5">
                        <div class="table-responsive text-nowrap">
                        <table class="table">
                                <thead>
                                    <tr class="text-nowrap">
                                        <th>No</th>
                                        <th>Armada</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Berakhir</th>
                                        <th>Kerengan</th>
                                    </tr>
                                </thead>
                                </table>
                        </div>
                    </div>
                </div>'; 
            }else{ ?>

            <div class="bg-light text-center h-100 p-5 mt-4">
                <h5>Tanggal yang sudah di Booking </h5>
                <div class="card mt-5">
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr class="text-nowrap">
                                    <th>No</th>
                                    <th>Armada</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Berakhir</th>
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
        <?php } ?>
    </div>
</div>


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Info Kantor</h4>
                    <h2 class="text-primary mb-4"><i class="fa fa-bus text-white me-2"></i><?= $konfig->judul_website; ?></h2>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?= $konfig->alamat; ?></p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 <?= $konfig->no_wa; ?></p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i><?= $konfig->email; ?></p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="<?= site_url('home') ?>">Home</a>
                    <a class="btn btn-link" href="<?= site_url('about') ?>">About</a>
                    <a class="btn btn-link" href="<?= site_url('armada') ?>">Armada</a>
                    <a class="btn btn-link" href="<?= site_url('jadwal') ?>">Jadwal</a>
                    <a class="btn btn-link" href="<?= site_url('contact') ?>">Contact</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Follow Us</h4>
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
                        <div class="mb-3 mt-4">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3954.72963160533!2d110.9189313!3d-7.6043735!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a195e3efb8603%3A0xcf16012038c85e4e!2sGarasi%20SANDPAPER%20TRANS!5e0!3m2!1sid!2sid!4v1699599134359!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Booking yuk</h4>
                        <div>
                            <a href="https://wa.me/62<?= $konfig->no_wa; ?>" target="_blank" class="btn btn-primary px-4">Whatsapp<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    <h6 class="text-white mt-4 mb-3">Buka :</h6>
                    <?= $konfig->hari_buka; ?> <?= $konfig->waktu_buka; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= site_url('asset/drivin') ?>/lib/wow/wow.min.js"></script>
    <script src="<?= site_url('asset/drivin') ?>/lib/easing/easing.min.js"></script>
    <script src="<?= site_url('asset/drivin') ?>/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= site_url('asset/drivin') ?>/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= site_url('asset/drivin') ?>/js/main.js"></script>
</body>

</html>