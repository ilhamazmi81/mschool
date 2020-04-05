<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ortom</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/as.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
</head>

<style type="text/css">
.btn {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}


.info {background-color: #2196F3;} /* Blue */
.info:hover {background: #0b7dda;}


.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: 50%;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: yellow;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}


  .navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #000000;
}
</style>
<body>

    <!--============================= HEADER =============================-->
    <div data-toggle="affix">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a href="<?php echo site_url('');?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="170px;" src="<?php echo base_url().'theme/images/logo.png'?>"></a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('home');?>">Home</a>
                                </li>
                                <li class="dropdown nav-item">
                                    
                                    <a href="#" class="nav-link" data-toggle="dropdown">Profile<b class="caret"></b></a>
                                      <ul class="dropdown-menu">
                                      <li><a class="nav-link" href="<?php echo site_url('about');?>">Visi dan Misi</a></li>
                                      <li><a class="nav-link" href="<?php echo site_url('struktural');?>">Struktural</a></li>
                                      <li><a class="nav-link" href="<?php echo site_url('contact');?>">Kontak</a></li>
                                      
                                  </ul>
                              </li>
                                <li class="dropdown nav-item">
                                    
                                    <a href="#" class="nav-link"data-toggle="dropdown">Informasi<b class="caret"></b></a>
                                      <ul class="dropdown-menu">
                                      <li><a class="nav-link" href="<?php echo site_url('agenda');?>">Agenda</a></li>
                                      <li><a class="nav-link" href="<?php echo site_url('blog');?>">Berita</a></li>
                                      <li><a class="nav-link" href="<?php echo site_url('pengumuman');?>">Pengumuman</a></li>
                                  </ul>
                              </li>
                               
                                <li class="dropdown nav-item">
                                    <a href="#" class="nav-link" data-toggle="dropdown">Beasiswa<b class="caret"></b></a>
                                      <ul class="dropdown-menu">
                                      <li><a class="nav-link" href="<?php echo site_url('blog/kategori/Bidikmisi')?>">Bidikmisi</a></li>
                                      <li><a class="nav-link" href="<?php echo site_url('blog/kategori/KP')?>">BPM-KP</a></li>
                                      <li><a class="nav-link" href="<?php echo site_url('blog/kategori/SSO')?>">BPM-SSO</a></li>
                                      <li><a class="nav-link" href="<?php echo site_url('blog/kategori/PPA')?>">Beasiswa BPP-PPA</a></li>
                                      <li><a class="nav-link" href="<?php echo site_url('blog/kategori/BSM')?>">Beasiswa BSM</a></li>
                                      <li><a class="nav-link" href="<?php echo site_url('blog/kategori/SEM2')?>">Beasiswa UAD Semester II</a></li>
                                      <li><a class="nav-link" href="#">Monev BPM-Bidikmisi</a></li>
                                      
                                   
                                    </ul>
                                    </li>

                                  <li class="dropdown nav-item">
                                    
                                    <a href="#" class="nav-link" data-toggle="dropdown">Kemahasiswaan<b class="caret"></b></a>
                                      <ul class="dropdown-menu">
                                      <li><a class="nav-link" href="<?php echo site_url('blog/kategori/p2k');?>">P2K</a></li>
                                      <li><a class="nav-link" href="<?php echo site_url('blog/kategori/Prestasi');?>">Prestasi</a></li>
                                      <li><a class="nav-link" href="<?php echo site_url('blog/kategori/PKM');?>">PKM</a></li>
                                      <li><a class="nav-link" href="<?php echo site_url('blog/kategori/Kompetisi');?>">Kompetisi</a></li>
                                      <li><a class="nav-link" href="<?php echo site_url('ormawa');?>">Organisasi Kemahasiswaan</a></li>
                                      <li><a class="nav-link" href="<?php echo site_url('ortom');?>">Organisasi Ortonom</a></li>
                                      <li><a class="nav-link" href="<?php echo site_url('blog/kategori/SKPI');?>">SKPI</a></li>
                                  </ul>
                              </li>
                                      
                                      
                              <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('download');?>">Unduhan</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('contact');?>">Tracer Study</a>
                                </li>
                             </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
      </div>
<section>
<!--//END HEADER -->
<!--//END ABOUT IMAGE -->
<!--============================= WELCOME TITLE =============================-->

            
    
 <!--============================= END SECTION UKM=============================-->
     
 <!--============================= END SECTION UKM=============================-->
      <section  class="welcome_about">
    <div class="container">
     
            
              <h2> <center>ORGANISASI ORTONOM UAD</center></h2>
              <p>1. Tapak Suci UAD. Sejak Kongres Mahasiswa UAD tahun 1999 UKM Tapak Suci Putra Muhammadiyah UAD mengkristalkan diri menjadi Organisasi Otonom (ORTOM) Muhammadiyah sebagaimana Ikatan Mahasiswa Muhammadiyah (IMM). Korkom UAD yang pembinaannya menjadi tanggung jawab Rektor/Pimpinan UAD.<br><br>
              2. IMM (lkatan Mahasiswa Muhammadiyah) Korkom UAD memiliki hubungan yang bersifat fungsional aspiratif non-struktural dengan pimpinan UAD. Berikut daftar Ortom IMM :</p>
              <p><button class="btn info" href="#home">Gendhing Bahana</button>
                <button class="btn info">IMM Universitas Ahmad Dahlan</button>
                <button class="btn info">IMM Fakultas Psikologi</button>
                <button class="btn info">IMM Fakultas Agama Islam</button><br><br>
                <button class="btn info">IMM Fakultas Ekonomi dan Bisnis</button>               
                <button class="btn info">IMM Fakultas Farmasi</button>
                <button class="btn info">IMM Fakultas Keguruan dan Ilmu Pendidikan</button><br><br>
                <button class="btn info">IMM Fakultas Ilmu Pendidikan</button>
                <button class="btn info">IMM Fakultas Hukum</button>
                <button class="btn info">IMM Fakultas MIPA</button>
                <button class="btn info">IMM Fakultas Teknologi Industri</button><br><br>
                <button class="btn info">IMM Fakultas Sastra</button>
                <button class="btn info">IMM Fakultas Kedokteran</button>
                <button class="btn info">IMM Fakultas Kesehatan Masyarakat</button></p>

               <p>3. Hizbul Wathan (HW) Qobilah Universitas Ahmad Dahlan (UAD) Yogyakarta berdiri sejak tahun 2014, tepatnya pada tanggal 15 Juli.</p> 
               <p><button class="btn info" href="#home">Hizbul Wathan</button>
              
                      
          </div>
        </div>
      </section>
    <!--============================= END SECTION KOMUNITAS =============================-->
    
     
    <!--//END TESTIMONIAL -->
    <!--============================= DETAILED CHART =============================-->
    
    <!--//END DETAILED CHART -->

        <!--============================= FOOTER =============================-->
        <footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="foot-logo">
                    <a href="<?php echo site_url();?>">
                        <img class="img img-responsive" width="195px;" src="<?php echo base_url().'theme/images/logo putih.png'?>"></a>
                    </a>
                    <p><?php echo date('Y');?> © copyright by <a href="" target="_blank">Bimawa</a>. <br>All rights reserved.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap">
                        <h3>Fakultas</h3>
                        <ul>
                            <li><a href="<?php echo site_url();?>">Agama Islam</a></li>
                            <li><a href="<?php echo site_url('');?>">Kedokteran</a></li>
                            <li><a href="<?php echo site_url('');?>">Ekonomi & Bisnis</a></li>
                            <li><a href="<?php echo site_url('');?>">Teknologi Industri</a></li>
                            <li><a href="<?php echo site_url('');?>">Psikologi</a></li>
                            <li><a href="<?php echo site_url('');?>">Farmasi</a></li>
                            <li><a href="<?php echo site_url('');?>">Hukum</a></li>
                            <li><a href="<?php echo site_url('');?>">Kesehatan Masyarakat</a></li>
                            <li><a href="<?php echo site_url('');?>">Keguruan & Ilmu Pendidikan</a></li>
                            <li><a href="<?php echo site_url('');?>">Sains & Teknologi Terapan</a></li>
                            <li><a href="<?php echo site_url('');?>">Sastra Budaya & Komunikasi</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                  <div class="sitemap">
                      <h3>Biro/Lembaga</h3>
                      <ul>
                          <li><a href="<?php echo site_url('');?>">BAA UAD</a></li>
                          <li><a href="<?php echo site_url('');?>">BISKOM </a></li>
                          <li><a href="<?php echo site_url('');?>">BPM UAD</a></li>
                          <li><a href="<?php echo site_url('');?>">CDC UAD</a></li>
                          <li><a href="<?php echo site_url('');?>">LPSI</a></li>
                      </ul>
                  </div>
                </div>
                <div class="col-md-3">
                    <div class="address">
                        <h3>Hubungi Kami</h3>
                        <p><span>Alamat: </span> Jl. Kapas 9, Semaki, Umbulharjo, Yogyakarta 55166</p>
                        <p><span>Email : </span>bimawa@uad.ac.id
                            <br> <span>Telp. : </span>(0274) 563515, 511830, 379418, 371120</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </footer>
                <!--//END FOOTER -->
                <!-- jQuery, Bootstrap JS. -->
                <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
                <!-- Plugins -->
                <script src="<?php echo base_url().'theme/js/slick.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/waypoints.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/counterup.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
                <!-- Subscribe -->
                <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
                <!-- Script JS -->
                <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
            </body>

            </html>
