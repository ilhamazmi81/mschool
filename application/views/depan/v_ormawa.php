<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ormawa</title>
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

 html {
  scroll-behavior: smooth;
}

.button {
  padding: 8px 16px;
  font-size: 14px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #f4511e;
  border: none;
  border-radius: 15px;
  box-shadow: 0 5px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

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

html

#gotoTop {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: blue;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#gotoTop:hover {
  background-color: #555;
}

</style>
<body>
  <script src="<?php echo base_url().'theme/js/scroll.js'?>"></script>
  <button onclick="topFunction()" id="gotoTop" title="Go to top">Top</button>
    <!--============================= HEADER =============================-->
    <div data-toggle="affix" id="affix" class="affix">
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
                                    
                                    <a href="#" class="nav-link" data-toggle="dropdown">Informasi<b class="caret"></b></a>
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
<section class="welcome_about">
    <div class="container">
    <center><p><a href="#ukm"><button class="button">UKM</button></a> 
       <a href="#komunitas"><button class="button">KOMUNITAS</button></a></p></center>
      
              <h2> <center>ORGANISASI KEMAHASISWAAN UAD</center></h2>
              <p>Organisasi Kemahasiswaan di lingkungan UAD terhimpun dalam Keluarga Besar Mahasiswa (KBM) UAD yang keberadaannya didasarkan pada Keputusan Rektor UAD.
              Organisasi kemahasiswaan  terdiri atas:</p>

       <button class="accordion">UNIVERSITAS</button>
          <div class="panel">
              <p><button class="btn info">DPM UAD</button>
                 <button class="btn info">BEM UAD</button>
                </p>
          </div>
             
       <button class="accordion">FAKULTAS AGAMA ISLAM</button>
          <div class="panel">
              <p><button class="btn info">DPM FAI</button>
                 <button class="btn info">BEM FAI</button>
                 <button class="btn info">HM Bahasa Sastra Arab</button>
                 <button class="btn info">HM Ilmu Hadis</button>
                 <button class="btn info">HM Pendidikan Agama Islam</button><br><br>
                 <button class="btn info">HM Perbankan Syariah</button>
                 </p>
          </div>

      <button class="accordion">FAKULTAS KEDOKTERAN</button>
          <div class="panel">
             <p><button class="btn info">BEM KEDOKTERAN</button></p>
          </div>

      <button class="accordion">FAKULTAS FARMASI</button>
          <div class="panel">
              <p><button class="btn info">DPM FARMASI</button>
                 <button class="btn info">BEM FARMASI</button></p>
          </div>
      <button class="accordion">FAKULTAS TEKNOLOGI INDUSTRI</button>
          <div class="panel">
             <p><button class="btn info">DPM FTI</button>
                 <button class="btn info">BEM FTI</button>
                 <button class="btn info">HM Teknik Informatika</button>
                 <button class="btn info">HM Teknik Industri</button>
                 <button class="btn info">HM Teknik Kimia</button><br><br>
                 <button class="btn info">HM Teknik Elektro</button>
                 </p>
          </div>
      <button class="accordion">FAKULTAS EKONOMI DAN BISNIS</button>
          <div class="panel">
             <p><button class="btn info">DPM FEB</button>
                 <button class="btn info">BEM FEB</button>
                 <button class="btn info">HM Ekonomi Pembangunan</button>
                 <button class="btn info">HM Akutansi</button>
                 <button class="btn info">HM Bisnis Jasa Makanan</button><br><br>
                 <button class="btn info">HM Manajemen</button>
                 </p>
          </div>
      <button class="accordion">FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN</button>
          <div class="panel">
             <p><button class="btn info">DPM FKIP</button>
                 <button class="btn info">BEM FKIP</button>
                 <button class="btn info">HM Pendidikan PBSI</button>
                 <button class="btn info">HM Pendidikan Guru Sekolah Dasar</button><br><br>
                 <button class="btn info">HM Pendidikan PAUD</button>
                 <button class="btn info">HM Bimbingan dan Konseling</button>
                 <button class="btn info">HM Pendidikan PPKN</button>
                 <button class="btn info">HM Pendidikan Fisika</button><br><br>
                 <button class="btn info">HM Pendidikan Bhs.Inggris </button>
                 <button class="btn info">HM Pendidikan Matematika</button>
                 <button class="btn info">HM Pendidikan Biologi</button><br><br>
                 
                 </p>
          </div>
     <button class="accordion">FAKULTAS SASTRA, BUDAYA DAN KOMUNIKASI</button>
          <div class="panel">
             <p><button class="btn info">DPM FSBK</button>
                 <button class="btn info">BEM FSBK</button>
                 <button class="btn info">HM Ilmu Komunikasi</button>
                 <button class="btn info">HM Sastra Inggris</button>
                 <button class="btn info">HM Sastra Indonesia</button>
                 
                 </p>
          </div>
    
      <button class="accordion">FAKULTAS HUKUM</button>
          <div class="panel">
             <p><button class="btn info">DPM HUKUM</button>
                 <button class="btn info">BEM Hukum</button>
                 <button class="btn info">HM Ilmu Hukum</button></p>
          </div>
      <button class="accordion">FAKULTAS PSIKOLOGI</button>
          <div class="panel">
             <p><button class="btn info">DPM PSIKOLOGI</button>
                 <button class="btn info">BEM Psikologi</button>
                 <button class="btn info">HM Psikologi</button></p>
          </div>
      <button class="accordion">FAKULTAS SAINS DAN TEKNOLOGI TERAPAN</button>
          <div class="panel">
             <p> <button class="btn info">DPM FAST</button>
                 <button class="btn info">BEM FAST</button>
                 <button class="btn info">HM Sistem Informasi</button>
                 <button class="btn info">HM Matematika</button>
                 <button class="btn info">HM Biologi</button><br><br>
                 <button class="btn info">HM Fisika</button>
                 
                 </p>
          </div>
      <button class="accordion">FAKULTAS KESEHATAN MASYARAKAT</button>
          <div class="panel">
              <p><button class="btn info" href="#home">DPM KESEHATAN MASYARAKAT</button>
                 <button class="btn info">BEM KESEHATAN MASYARAKAT</button>
                 <button class="btn info">HM Ilmu Kesehatan Masyarakat</button></p>
          </div>
      <button class="accordion">PROGRAM PASCASARJANA</button>
          <div class="panel">
             <p><button class="btn info" href="#home">HM Magister Farmasi</button>
                 <button class="btn info">HM Magister Sains Psikologi</button>
                 <button class="btn info">HM Magister Teknik Informatika</button><br><br>
                 <button class="btn info">HM Magister Pendidikan Fisika</button>
                 <button class="btn info">HM Magister Pendidikan Bhs.Inggris</button>
                 <button class="btn info">HM Magister Pendidikan Vokasi</button><br><br>
                 <button class="btn info">HM Magister Pendidikan Agama Islam</button>
                 <button class="btn info">HM Magister Manajemen</button>
                 <button class="btn info">HM Magister Psikologi Profesi</button><br><br>
                 <button class="btn info">HM Magister Manajemen Pendidikan</button>
              </p>
            </div>
            <br>
            <br>
            <br>
            <br>
            <h4> Tugas dan Tanggung Jawab Organisasi KemahasiswaanUAD</h4><br>
            <button class="accordion">Tingkat Universitas</button>
          <div class="panel">
            <p><strong>a. Tugas DPM UAD</strong><br>
                   1) Mengawasi BEM UAD.<br>
                   2) Menyerap dan merumuskan aspirasi anggota KBM-UAD dan menyalurkannya kepada BEMU<br>
                   3) Mengeluarkan memorandum satu dan dua apabila BEMU tidak melak sanakan tugasnya atau menyimpang dari kebijakan  KBM-UAD.<br>
                   4) Menjalin koordinasi dengan lembaga legislatif di tingkat fakultas.<br>
                   5)  Menyelenggarakan Kongres KBM-UAD.<br></p>

              <p><strong>b. Tugas BEM UAD</strong><br>
                   1) Melaksanakan segala ketentuan hasil Kongres KBM-UAD.<br>
                   2) Mewakili mahasiswa UAD baik ke dalam maupun ke luar UAD.<br>
                   3) Menjunjung tinggi AD dan  ART yang telah ditetapkan oleh Kongres KBM-UAD.<br>
                   </p>
                  </div>
            

      <button class="accordion">Tingkat Fakultas</button>
          <div class="panel">
            <p><strong>a. Tugas DPM Fakultas</strong><br>
                   1) Mengawasi BEM Fakultas..<br>
                   2) Menyerap dan merumuskan aspirasi Mahasiswa Fakultas dan menyalurkannya kepada BEMF.<br>
                   3) Menjalin koordinasi dengan lembaga legislatif ditingkat Universitas.<br>
                   4) Menyelenggarakan Majelis Per-musyawaratan Mahasiswa Fakultas.<br>
                  </p>

              <p><strong>b. Tugas BEM Fakultas</strong><br>
                   1) Membuat perencanaan kegiatan yang  terkait dengan fakultasnya.<br>
                   2) Melaksanakan semua ketentuan hasil Musyawarah Kerja KBM yang terkait dengan program kerjanya.<br>
                   3) Mewakili Mahasiswa  Fakultas di berbagai forum tingkat Universitas.<br>
                   4)) Melaksanakan rapat kerja bersama HMPS.<br>
                   </p>

              <p><strong>c. Tugas dan Fungsi HMJ dan/atau HMPS</strong><br>
                   Merencanakan dan melaksanakan kegiatan yang berkaitan dengan jurusan, dan/atau program studi di bawah koordinasi BEMF,  berdasarkan  program kerja yang telah disusun.<br>
                   </p>
                </div>
        </div>
    </section>
    <!--//END WELCOME TITLE -->

    
 <!--============================= END SECTION UKM=============================-->
      <section id="ukm" class="testimonial">
    <div class="container">
     
            
              <h2> <center>UNIT KEGIATAN MAHASISWA UAD</center></h2>
              <p>Unit Kegiatan Mahasiswa (UKM) merupakan wadah aktivitas Mahasiswa yang bertujuan untuk mengembangkan potensi Mahasiswa dan berlatar belakang pada kegiatan yang tidak diperoleh dari perkuliahan. Organisasi ini berada dibawah binaan oleh pembina yang ditunjuk oleh Rektor.</p>
              <p><button class="btn info" href="#home">UKM Badminton</button>
                <button class="btn info">UKM Musik</button>
                <button class="btn info">UKM Karate</button>
                <button class="btn info">UKM KSR-PMI</button>
                <button class="btn info">UKM Futsal</button><br><br>
                
                <button class="btn info">UKM Bola Basket</button>
                <button class="btn info">UKM Seni Tari</button>
                <button class="btn info">UKM Pramuka</button>
                <button class="btn info">UKM Lensa UAD</button>
                <button class="btn info">UKM Bola Voly</button><br><br>
                <button class="btn info">UKM Koperasi Mahasiswa</button>
                <button class="btn info">UKM Taekwondo</button>
                <button class="btn info">UKM Resismen Mahasiswa</button>
                <button class="btn info">UKM Pers Mahasiswa</button><br><br>
                <button class="btn info">UKM Mahasiswa Ahmad Dahlan Pencinta Alam</button>
                 <button class="btn info">UKM Paduan Suara Mahasiswa</button>
                 <button class="btn info">UKM Sepakbola</button>
                 </p>
                      
          </div>
        </div>
      </section>
 <!--============================= END SECTION UKM=============================-->
      <section id="komunitas" class="welcome_about">
    <div class="container">
     
            
              <h2> <center>KOMUNITAS UAD</center></h2>
              <p>UAD memiliki berbagai komunitas yang dibentuk oleh mahasiswa untuk mengasah bakat dan minat.  Komunitas itu ada yang terbentuk oleh latar belakang keilmuan masing-masing mahasiswa mau pun yang terbentuk karena kegemaran akan minat tertentu oleh setiap mahasiswa tanpa melihat latar belakang keilmuan. Adapun komunitas mahasiswa yang terbentuk berdasarkan latar belakang keilmuan adalah sebagai berikut :</p>
              <p><button class="btn info" href="#home">Gendhing Bahana</button>
                <button class="btn info">Kelompok Teater PeBei</button>
                <button class="btn info">Kelompok Teater 42</button>
                <button class="btn info">Kelompok Teater 28 </button><br><br>
                <button class="btn info">Kelompok Teater JAB</button>
                <button class="btn info">Robotic Development Center</button>
                <button class="btn info">ACTION</button></p>

               <p>Adapun komunitas mahasiswa yang terbentuk atas dasar kegemaran tanpa melihat latar belakang keilmuan tertentu adalah sebagai berikut:</p> 
              <P>
                <button class="btn info">Debating Community</button>
                <button class="btn info">Pusat Infomrasi dan Konseling Mahasiswa PELITA</button>
                <button class="btn info">UAD Informatic Database Club</button><br><br>
                <button class="btn info">Kelompok Studi Linux (KSL)</button>
                <button class="btn info">Pusat Infomrasi dan Konseling Mahasiswa SAHABAT MENTARI</button><br><br>
                <button class="btn info">Radio Mahasiswa Universitas Ahmad Dahlan (RAMADA)</button>
                <button class="btn info">Televisi Universitas Ahmad Dahlan</button><br><br>
                <button class="btn info">Community of Information System MIPA</button><br><br>
                
                 </p>
                  <p>Setiap komunitas mahasiswa tersebut mendapat dukungan secara penuh dari UAD baik dalam bentuk pendampingan hingga dalam bentuk dukungan finansial untuk melaksanakan setiap kegiatan.</p> 
                      
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
                <script>
 $("#nav ul li a[href^='#']").on('click', function(e) {

   // prevent default anchor click behavior
   e.preventDefault();

   // store hash
   var hash = this.hash;
   console.log(hash)

   // animate
   $('html, body').animate({
       scrollTop: $(hash).offset().top
     }, 1000, function(){
       window.location.hash = hash;
     });

});

         </script>
            </body>

            </html>
