<?php

session_start();
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit;
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- My Style -->
     <link rel="stylesheet" href="../css/style.css">

    <!-- Responsive Style -->
     <link rel="stylesheet" href="../css/responsive.css">

    <!--Logo Tittle Bar-->
    <link rel="icon" href="../assets/img/Logo Small Ramah Impian.png" type="image/x-icon">

    <title>Rumah Impian</title>
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="../assets/img/Logo Small Ramah Impian.png" alt="" width="30" class="d-inline-block align-text-top me-2">
            Rumah Impian</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item mx-2">
                <a class="nav-link active" aria-current="page" href="#">BERANDA</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#layanan">LAYANAN</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#fitur">FITUR</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#contact">KONTAK</a>
              </li>
            </ul>
            <div>
                <button class="button-primary">Admin : <span class="info"><?= $_SESSION['name']; ?></span></button>
                <button class="button-secondary" onclick="window.location.href='logout.php'">Keluar</button>
            </div>
          </div>
        </div>
      </nav>

      <!-- Hero Section -->
       <section id="hero">
            <div class="container h-100">
                <div class="roow h-100 d-flex align-items-center">
                    <div class="col-md-6 hero-tagline my-auto">
                        <h1>Membantu Temukan 
                            Rumah Impian.</h1>
                        <p><span class="fw-bold">Rumah Impian</span> hadir untuk temukan rumah terbaik
                            untukmu, untuk di jual ataupun di sewa dengan sumber 
                            terpercaya.</p>

                        <button class="button-lg-primary" >Temukan Rumah</button>
                        <a href="#rekomendasi">
                            <img src="../assets/img/Button Arrow.png" alt="">
                        </a>
                    </div>
                </div>

                <img src="../assets/img/Hero Banner.png" alt="" class="position-absolute end-0 bottom-0 img-hero">
                <img src="../assets/img/Accent.png" alt="" class=" accent-img h-100 position-absolute top-0 start-0">
            </div> 
       </section>

       <!-- Layanan Section -->
       <section id="layanan">
           <div class="container">
              <div class="row">
                 <div class="col-12 text-center">
                      <h2>Layanan Kami</h2>
                      <span class="sub-tittle">Rumah impian hadir menjadi solusi bagi kamu</span>
                 </div>
              </div>

              <div class="row mt-5">
                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                      <div class="circle-icon position-relative mx-auto">
                           <img src="../assets/img/Property baru-icon.png" alt="" class="position-absolute top-50 start-50 translate-middle">
                      </div>
                      <h3 class="mt-4">Property Baru</h3>
                      <p class="mt-3">Rumah impian kini jadi kenyataan, Beli 
                        rumah bary dengan fasilitas terbaik
                        dengan lingkungan yang nyaman.</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                  <div class="card-layanan">
                    <div class="circle-icon position-relative mx-auto">
                         <img src="../assets/img/sewarumah-icon.png" alt="" class="position-absolute top-50 start-50 translate-middle">
                    </div>
                    <h3 class="mt-4">Sewa Rumah</h3>
                    <p class="mt-3">Sewa rumah yang indah untuk keluarga 
                      anda, pilihan terbaik untuk tempat 
                      tinggal keluarga mu.</p>
                  </div>
              </div>

              <div class="col-md-4 text-center">
                <div class="card-layanan">
                  <div class="circle-icon position-relative mx-auto">
                       <img src="../assets/img/Belirumah-icon.png" alt="" class="position-absolute top-50 start-50 translate-middle">
                  </div>
                  <h3 class="mt-4">Beli Rumah</h3>
                  <p class="mt-3">Beli Rumah sempurna dengan harga 
                    terbaik kualitas terjamin dari sumber yang sangat
                    terpercaya.</p>
                </div>
            </div>
              </div>
           </div>
       </section>

       <!-- Search Section -->
       
       <section id="search" class="d-flex align-items-center">
          <div class="container">
            <div class="row">
              <div class="col-12 text-center">
                <h2>
                  Temukan Rumah Impian
                </h2>

                <p>sekarang Anda dapat menghemat semua hal stres, waktu, dan biaya tersembunyi, dengan ratusan rumah untuk anda</p>
              </div>

              <div class="col-10 mx-auto mt-5">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#jual" type="button" role="tab" aria-controls="home" aria-selected="true">Jual</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#sewa" type="button" role="tab" aria-controls="profile" aria-selected="false">Sewa</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#propertybaru" type="button" role="tab" aria-controls="contact" aria-selected="false">Property Baru</button>
                  </li>
                </ul>
    
                
                
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="jual" role="tabpanel" aria-labelledby="home-tab">
    
                    <!-- Dropdown Tipe Rumah -->
                    <div class="input-group input-cari mb-3">
                      <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../assets/img/home icon.png" class="d-block d-inline-block mx-auto" alt="">
                        Tipe Rumah</button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
    
                    <!-- Dropdown Range Harga -->
                      <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../assets/img/range icon.png" class="d-block d-inline-block mx-auto" alt="">
                        Range Harga</button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
                      <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="cari berdasarkam lokasi, ID, Property">
    
                      <button class="button-primary" type="button" id="button-addon2">Cari</button>
                    </div>
    
                  </div>
                  <div class="tab-pane fade" id="sewa" role="tabpanel" aria-labelledby="profile-tab">

                     <!-- Dropdown Tipe Rumah -->
                     <div class="input-group input-cari mb-3">
                      <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../assets/img/home icon.png" class="d-block d-inline-block mx-auto" alt="">
                        Tipe Rumah</button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
    
                    <!-- Dropdown Range Harga -->
                      <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../assets/img/range icon.png" class="d-block d-inline-block mx-auto" alt="">
                        Range Harga</button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
                      <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="cari berdasarkam lokasi, ID, Property">
    
                      <button class="button-primary" type="button" id="button-addon2">Cari</button>
                    </div>

                  </div>
                  <div class="tab-pane fade" id="propertybaru" role="tabpanel" aria-labelledby="contact-tab">

                       <!-- Dropdown Tipe Rumah -->
                    <div class="input-group input-cari mb-3" id="temukanrumah">
                      <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../assets/img/home icon.png" class="d-block d-inline-block mx-auto" alt="">
                        Tipe Rumah</button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
    
                    <!-- Dropdown Range Harga -->
                      <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../assets/img/range icon.png" class="d-block d-inline-block mx-auto" alt="">
                        Range Harga</button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
                      <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="cari berdasarkam lokasi, ID, Property">
    
                      <button class="button-primary" type="button" id="button-addon2">Cari</button>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>

       </section>

       <!-- Recomendation Section -->

       <section id="rekomendasi">
         <div class="container">
            <div class="row mb-5">
               <div class="col-12 text-center">
                 <h2 class="mt-5">Rekomendasi Rumah Untuk Mu</h2>
               </div>
            </div>

            <div class="row">
              <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
                 <div class="card p-2" style="width: 22rem;">
                   <img src="../assets/img/Home Image 2.png" alt="">
                   <div class="card-body">
                      <h4>IDR.200.000.000</h4>
                      <p class="mb-4 lh-sm">Jl. Soekarno Hatta No.1 <br> <span class="text-danger">Sewa</span></p>
                   </div>

                   <!-- POPUP KHUSUS CARD INI -->
                  <div class="popup-info">
                    <h5>Jl. Soekarno Hatta No.1</h5>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.510029170123!2d107.61869007475734!3d-6.949003493051208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e97d25ef030f%3A0xf85f6458c019ee17!2sJln.%20soekarno%20hatta!5e0!3m2!1sid!2sid!4v1753012420558!5m2!1sid!2sid"
                      width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                    <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-success w-100 mt-2">Contact via WA</a>
                  </div>

                   <div class="card-fasilitas d-flex justify-content-between px-4">
                       <span>
                        <img src="../assets/img/Bed Icon.png" alt=""> 3
                        <p>Kamar Tidur</p>
                       </span>

                       <span>
                        <img src="../assets/img/Bath Icon.png" alt=""> 4
                        <p>Kamar Mandi</p>
                       </span>

                       <span>
                        <img src="../assets/img/Luas Rumah Icon.png" alt=""> 360m
                        <p>Luas Rumah</p>
                       </span>
                   </div>
                 </div>
              </div>

              <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
                <div class="card p-2" style="width: 22rem;">
                  <img src="../assets/img/Home Image 1.png" alt="">
                  <div class="card-body">
                     <h4>IDR.250.000.000</h4>
                     <p class="mb-4 lh-sm">Jl. Ahmad Yani No.4 <br> <span class="text-danger">Sewa</span></p>
                  </div>

                  <!-- POPUP KHUSUS CARD INI -->
                  <div class="popup-info">
                    <h5>Jl. Ahmad Yani No.4</h5>
                    <iframe src="https://maps.google.com/maps?q=Jl.%20Ahmad%20Yani%20No.4&t=&z=15&ie=UTF8&iwloc=&output=embed"
                      width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                    <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-success w-100 mt-2">Contact via WA</a>
                  </div>

                  <div class="card-fasilitas d-flex justify-content-between px-4">
                      <span>
                       <img src="../assets/img/Bed Icon.png" alt=""> 4
                       <p>Kamar Tidur</p>
                      </span>

                      <span>
                       <img src="../assets/img/Bath Icon.png" alt=""> 3
                       <p>Kamar Mandi</p>
                      </span>

                      <span>
                       <img src="../assets/img/Luas Rumah Icon.png" alt=""> 390m
                       <p>Luas Rumah</p>
                      </span>
                  </div>
                </div>
             </div>

             <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
              <div class="card p-2" style="width: 22rem;">
                <img src="../assets/img/Home Image 3.png" alt="">
                <div class="card-body">
                   <h4>IDR.225.000.000</h4>
                   <p class="mb-4 lh-sm">Jl. GG. Sawah Besar 2<br> <span class="text-danger">Sewa</span></p>
                </div>

                <!-- POPUP KHUSUS CARD INI -->
                  <div class="popup-info">
                    <h5>Jl. GG. Sawah Besar 2</h5>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.8849238039993!2d110.77449127476379!3d-7.587502792427068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a15bc31924e1d%3A0x9a65a97276e761ca!2sGg.%20Sawah%2C%20Siwal%2C%20Kec.%20Baki%2C%20Kabupaten%20Sukoharjo%2C%20Jawa%20Tengah%2057556!5e0!3m2!1sid!2sid!4v1753012990109!5m2!1sid!2sid" 
                      width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                    <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-success w-100 mt-2">Contact via WA</a>
                  </div>

                <div class="card-fasilitas d-flex justify-content-between px-4">
                    <span>
                     <img src="../ssets/img/Bed Icon.png" alt=""> 3
                     <p>Kamar Tidur</p>
                    </span>

                    <span>
                     <img src="../assets/img/Bath Icon.png" alt=""> 2
                     <p>Kamar Mandi</p>
                    </span>

                    <span>
                     <img src="../assets/img/Luas Rumah Icon.png" alt=""> 350m
                     <p>Luas Rumah</p>
                    </span>
                </div>
              </div>
           </div>

           <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
            <div class="card p-2" style="width: 22rem;">
              <img src="../assets/img/Home Image 4.png" alt="">
              <div class="card-body">
                 <h4>IDR.150.000.000</h4>
                 <p class="mb-4 lh-sm">Jl. Pier Tendean No.15 <br> <span class="text-danger">Sewa</span></p>
              </div>

              <!-- POPUP KHUSUS CARD INI -->
                  <div class="popup-info">
                    <h5>Jl. Pier Tendean No.15</h5>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.3559518207157!2d109.23580157740172!3d-7.42580277346516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655e88ba2a6d1f%3A0xf0168d1091a2b2ac!2sJl.%20Pierre%20Tendean%2C%20Kec.%20Purwokerto%20Tim.%2C%20Kabupaten%20Banyumas%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1753013367025!5m2!1sid!2sid" 
                      width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                    <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-success w-100 mt-2">Contact via WA</a>
                  </div>

              <div class="card-fasilitas d-flex justify-content-between px-4">
                  <span>
                   <img src="../assets/img/Bed Icon.png" alt=""> 2
                   <p>Kamar Tidur</p>
                  </span>

                  <span>
                   <img src="../assets/img/Bath Icon.png" alt=""> 1
                   <p>Kamar Mandi</p>
                  </span>

                  <span>
                   <img src="../assets/img/Luas Rumah Icon.png" alt=""> 200m
                   <p>Luas Rumah</p>
                  </span>
              </div>
            </div>
         </div>

         <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
          <div class="card p-2" style="width: 22rem;">
            <img src="../assets/img/Home Image 5.png" alt="">
            <div class="card-body">
               <h4>IDR.350.000.000</h4>
               <p class="mb-4 lh-sm">Jl. Lumba-Lumba No.3 <br> <span class="text-danger">Sewa</span></p>
            </div>

            <!-- POPUP KHUSUS CARD INI -->
                  <div class="popup-info">
                    <h5>Jl. Lumba-Lumba No.3</h5>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.8103956336777!2d106.04335107474881!3d-6.020747993964638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418e6c0e4639eb%3A0x953e1fc7c87a38f8!2sJl.%20Lumba-Lumba%2C%20Kota%20Cilegon%2C%20Banten!5e0!3m2!1sid!2sid!4v1753014293184!5m2!1sid!2sid" 
                      width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                    <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-success w-100 mt-2">Contact via WA</a>
                  </div>

            <div class="card-fasilitas d-flex justify-content-between px-4">
                <span>
                 <img src="../assets/img/Bed Icon.png" alt=""> 5
                 <p>Kamar Tidur</p>
                </span>

                <span>
                 <img src="../assets/img/Bath Icon.png" alt=""> 3
                 <p>Kamar Mandi</p>
                </span>

                <span>
                 <img src="../assets/img/Luas Rumah Icon.png" alt=""> 450m
                 <p>Luas Rumah</p>
                </span>
            </div>
          </div>
       </div>

       <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
        <div class="card p-2" style="width: 22rem;">
          <img src="../assets/img/Home Image 6.png" alt="">
          <div class="card-body">
             <h4>IDR.225.000.000</h4>
             <p class="mb-4 lh-sm">Jl. Soekarno Hatta No.2 <br> <span class="text-danger">Sewa</span></p>
          </div>

          <!-- POPUP KHUSUS CARD INI -->
              <div class="popup-info">
                  <h5>Jl. Soekarno Hatta No.2 </h5>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.633570266028!2d106.05536717474902!3d-6.044909193940765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418e8362d9fecf%3A0xe9e8f96d5ce031b9!2sJl.%20Soekarno-Hatta%2C%20Kalitimbang%2C%20Kec.%20Cibeber%2C%20Kota%20Cilegon%2C%20Banten%2042426!5e0!3m2!1sid!2sid!4v1753014624057!5m2!1sid!2sid" 
                        width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                    <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-success w-100 mt-2">Contact via WA</a>
              </div>

          <div class="card-fasilitas d-flex justify-content-between px-4">
              <span>
               <img src="../assets/img/Bed Icon.png" alt=""> 3
               <p>Kamar Tidur</p>
              </span>

              <span>
               <img src="../assets/img/Bath Icon.png" alt=""> 2
               <p>Kamar Mandi</p>
              </span>

              <span>
               <img src="../assets/img/Luas Rumah Icon.png" alt=""> 350m
               <p>Luas Rumah</p>
              </span>
          </div>
        </div>
     </div>

            </div>
         </div>
       </section>

     <!-- Fitur Section -->

    <section id="fitur" class="mt-5 overflow-hidden">
      <div class="container">
        <div class="row mb-4">
          <div class="col-lg-9 col-md-12 text-center text-lg-start">
            <h2>
            Fitur Rumah 
            </h2>
          </div>
          <div class="col-lg-3 col-md-12">
            <button class="button-fitur">Lihat Semua..
              <img src="../assets/img/Arrow tombol fitur.png" alt="" class="ms-3">
            </button>
          </div>
        </div>

        <div class="container position-relative mt-5">
          <div class="row">
            <div class="carousel-wrapper col-12 d-flex overflow-hidden position-relative">
              <div class="card-fitur me-4 position-relative">
                <img src="../assets/img/Rumah Fitur 1.png" alt="">

                <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                  <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                    <h5>
                      Ruang Tv
                    </h5>
                    <span>Rumah minimalist Type-A2</span>
                    <h6>IDR.200jt</h6>
                    <button>Lihat Rumah</button>
                  </div>
                </div>
              </div>

              <div class="card-fitur me-4 position-relative">
                <img src="../assets/img/Rumah Fitur 2.png" alt="">

                <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                  <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                    <h5>
                      Kamar Tidur
                    </h5>
                    <span>Rumah minimalist Type-A2</span>
                    <h6>IDR.200jt</h6>
                    <button>Lihat Rumah</button>
                  </div>
                </div>
              </div>

              <div class="card-fitur me-4 position-relative">
                <img src="../assets/img/Rumah Fitur 3.png" alt="">

                <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                  <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                    <h5>
                      Dapur Masak
                    </h5>
                    <span>Rumah minimalist Type-A2</span>
                    <h6>IDR.200jt</h6>
                    <button>Lihat Rumah</button>
                  </div>
                </div>
              </div>

              <div class="card-fitur me-4 position-relative">
                <img src="../assets/img/Rumah Fitur 4.png" alt="">

                <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                  <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                    <h5>
                      Ruang Tamu
                    </h5>
                    <span>Rumah minimalist Type-A2</span>
                    <h6>IDR.200jt</h6>
                    <button>Lihat Rumah</button>
                  </div>
                </div>
              </div>

              <div class="card-fitur me-4 position-relative">
                <img src="../assets/img/Rumah Fitur 5.jpg" alt="">

               <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                  <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                    <h5>
                      Garasi Mobil
                    </h5>
                    <span>Rumah minimalist Type-A2</span>
                    <h6>IDR.200jt</h6>
                    <button>Lihat Rumah</button>
                  </div>
                </div>
              </div>

             <div class="card-fitur me-4 position-relative">
                <img src="../assets/img/Rumah Fitur 6.jpeg" alt="">

               <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                  <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                    <h5>
                      Taman Luar
                    </h5>
                    <span>Rumah minimalist Type-A2</span>
                    <h6>IDR.200jt</h6>
                    <button>Lihat Rumah</button>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <button class="button-arrow-left position-absolute start-0 top-50 translate-middle-y">
            <img src="../assets/img/Arrow s icon.png" alt="">
          </button>
  
          <button class="button-arrow-right position-absolute end-0 top-50 translate-middle-y">
            <img src="../assets/img/Arrow e icon.png" alt="">
          </button>
        </div>
      </div>
    </section>

    <!-- Kontak Section -->

    <section id="contact">
        <div class="container-fluid overlay h-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Butuh Konsultasi..? 
                            Silahkan kontak kami
                            Kami Siap Membantu</h3>
                            <div class="kontak">
                                <h6>Kontak</h6>
                                <div class="mb-3 d-flex align-items-center">
                                  <div>
                                  <img src="../assets/img/Icon Alamat.png" alt="">
                                  </div>
                                  <a href="#">Jl. Pelajar Pejuang 123 Majalaya Bandung 
                                      Indonesia</a>
                                </div>

                                <div class="mb-3">
                                  <img src="../assets/img/Icon Telfon.png" alt="">
                                  <a href="#">022-6545-2041</a>
                                </div>

                                <div class="mb-3">
                                  <img src="../assets/img/Icon Email.png" alt="">
                                  <a href="#">rumahimpian@gmail.com</a>
                                </div>

                            </div>

                               <h6>Social Media</h6>
                                <a href="#" class="me-lg-3 me-1"><img src="../assets/img/facebook icon.png" alt=""></a>
                                <a href="https://x.com/araaraaaa26?t=azSl9P5r-SG-2KXWOK8Uow&s=09" class="me-lg-3 me-1"><img src="../assets/img/twitter icon.png" alt=""></a>
                                <a href="https://www.instagram.com/armtdrmt?igsh=MXJyNzB6MXp6YjJqaw==" class="me-lg-3 me-1"><img src="../assets/img/instagram icon.png" alt=""></a>
                                <a href="#" class="linkrumahimpian">Rumah Impian</a>
                    </div>

                    <div class="col-md-6">
                         <div class="card-contact w-100">
                             <form >
                                 <h2>Ada Pertanyaan...?</h2>
                                 <div class="form-floating mb-3">
                                     <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                     <label for="floatingInput" class="d-flex align-items-center">Masukan email anda disini...</label>
                                 </div>
                                 <div class="form-floating mb-3">
                                     <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                     <label for="floatingInput" class="d-flex align-items-center">Pertanyaan Anda...</label>
                                 </div>

                                 <button type="submit" class="button-kontak">Kirim</button>
                             </form>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->

    <footer class="d-flex align-items-center position-relative">
      <div class="container-fluid">
         <div class="container">
           <div class="row">
              <div class="col-md-7 d-flex align-items-center justify-content-lg-start justify-content-center">
                 <img src="../assets/img/Logo Small Ramah Impian.png" alt="">
                 <a href="#" class="ms-3">Rumah Impian</a>
              </div>
              <div class="col-md-5 d-flex justify-content-evenly justify-content-center">
                <a href="#hero">Beranda</a>
                <a href="#layanan">Layanan</a>
                <a href="#fitur">Fitur</a>
                <a href="#contact">Kontak</a>
              </div>
           </div>
           <div class="row position-absolute copyright start-50 translate-middle">
              <div class="col-12">
                 <p class="text-center">Copyright by Lumino All Right Reserved.</p>
              </div>
           </div>
         </div>
      </div>
    </footer>

    <script src="../backend/"></script>
    <script src="../js/script.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>