<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BIMAWA UAD - Selamat Datang di BIMAWA UAD</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/as.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
    <?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>
<style type="text/css">
    html {
  scroll-behavior: smooth;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #000000;
}

body, html {
  height: 100%;

}

.parallax {
  /* The image used */
  background-image: url('theme/images/faa.jpg');

  /* Full height */
  height: 100%; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
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
</head>

<body>

<!--===========SCROLL GO TO TOP=====================-->
<script src="<?php echo base_url().'theme/js/scroll.js'?>"></script>
<button onclick="topFunction()" id="gotoTop" title="Go to top">Top</button>
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
                                    
                                    <a href="#" class="nav-link" data-toggle="dropdown">Informasi<b class="caret"></b></a>
                                      <ul class="dropdown-menu">
                                      <li><a class="nav-link" href="#pengumuman">Agenda</a></li>
                                      <li><a class="nav-link" href="#berita">Berita</a></li>
                                      <li><a class="nav-link" href="#pengumuman"> Pengumuman</a>
                                       </li>
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
    <div class="slider_img layout_two">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block" src="<?php echo base_url().'theme/images/s2.jpg'?>" alt="First slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <br><br><br>
                            <br><br><br>
                            <br><br><br>
                            <h1>Kerjasama Tim Yang Baik</h1>
                           
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url().'theme/images/s1.jpg'?>" alt="Second slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <br><br><br>
                            <br><br><br>
                            <br><br><br>
                            <h1>Rektor Bersama Organisasi Kemahasiswaan Terbaik</h1>
                           </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url().'theme/images/da.jpg'?>" alt="Third slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <br><br><br>
                            <br><br><br>
                            <br><br><br>
                            <h1>Proses Belajar Interatif</h1>
                            
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <i class="icon-arrow-left fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <i class="icon-arrow-right fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<!--//END HEADER -->


<!--============================= ABOUT =============================-->
<section class="clearfix about about-style2">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
               <h2>Dr. Dedi Pramono, M.Hum</h2>
               <h3>Kepala Bimawa UAD</h3>

               <p>Kami juga terus aktif menjalin berbagai program kolaborasi di bidang pendidikan dan pengajaran, penelitian, pengabdian kepada masyarakat, dan dakwah islamiyah. Jejaring kemitraan global UAD telah membuka ruang kesempatan yang luas untuk mewujudkan berbagai gagasan, aksi, dan kontribusi yang bermanfaat bagi lingkungan dan masyarakat luas </p>

            </div>
            <div class="col-md-4">
                <img src="<?php echo base_url().'theme/images/aa.jpg'?>" class="img-fluid about-img" alt="#">
            </div>
        </div>
    </div>
</section>
<!--//END ABOUT -->
<!--============================= OUR COURSES =============================-->
  <section id="berita" class="our_courses">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Berita Terbaru</h2>
            </div>
        </div>
        <div class="row">
          <?php foreach ($berita->result() as $row) :?>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="courses_box mb-4">
                    <div class="course-img-wrap">
                        <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" class="img-fluid" alt="courses-img">
                    </div>
                    <!-- // end .course-img-wrap -->
                    <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>" class="course-box-content">
                        <h3 style="text-align:center;"><?php echo $row->tulisan_judul;?></h3>
                    </a>
                </div>
            </div>
          <?php endforeach;?>
        </div> <br>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="<?php echo site_url('artikel');?>" class="btn btn-default btn-courses">Lihat Berita Lain</a>
            </div>
        </div>
    </div>
 
</section>
<!--//END OUR COURSES -->

<!--============================= EVENTS =============================-->
 <div class="parallax"></div>
 
<section id="pengumuman" class="event">

    <div class="container">
     <center><h2>PENGUMUMAN & AGENDA</h2></center> 
     
        <div class="row">
            <div class="col-lg-6">
                <div class="event-img2">
                <?php foreach ($pengumuman->result() as $row) :?>
                <div class="row">
                    <div class="col-sm-3"> <img src="<?php echo base_url().'theme/images/announcement-icon.png'?>" class="img-fluid" alt="event-img"></div><!-- // end .col-sm-3 -->
                    <div class="col-sm-9"> <h3><a href="<?php echo site_url('pengumuman');?>"><?php echo $row->pengumuman_judul;?></a></h3>
                      <span><?php echo $row->tanggal;?></span>
                      <p><?php echo limit_words($row->pengumuman_deskripsi,20).'...';?></p><br><br> 

                    </div><!-- // end .col-sm-7 -->
                </div><!-- // end .row -->
                <?php endforeach;?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-12">
                      <?php foreach ($agenda->result() as $row):?>
                        <div class="event_date">
                            <div class="event-date-wrap">
                                <p><?php echo date("d", strtotime($row->agenda_tanggal));?></p>
                                <span><?php echo date("M. y", strtotime($row->agenda_tanggal));?></span>
                            </div>
                        </div>
                        <div class="date-description">
                            <h3><a href="<?php echo site_url('agenda');?>"><?php echo $row->agenda_nama;?></a></h3>
                            <p><?php echo limit_words($row->agenda_deskripsi,10).'...';?></p>
                            <hr class="event_line">
                        </div>
                        <?php endforeach;?>

                    </div>
                </div>

            </div>
        </div>
    </div>
    
<div class="parallax"></div>
</section>




<!--//END EVENTS -->
<!--============================= DETAILED CHART =============================-->
<!--============================= TESTIMONIAL =============================-->
 <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Testimonial</h2>
                </div>
                <div class="col-md-12">
                    <div class="single-item">
                        <div class="quote">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <p class="quote_text">Bimawa adalah Biro yang menampung banyak aspirasi mahasiswa dan telah memabntu banyak mahasiswa untuk lebih berprestasi sehingga saya bisa menjadi mahasiswa terbaik tahun 2018.</p>
                            <div class="testi-img_block">
                                <img src="<?php echo base_url().'theme/images/student-1.png'?>" class="img-fluid" alt="#">
                                <p><span>Hernandez Alvaro</span>Mahasiswa Terbaik 2018</p>
                            </div>
                        </div>
                        <div class="quote">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <p class="quote_text">Melalui Bimawa para mahasiswa dapat mengajukan permohonan dana bagi para mahasiswa yang berjuang di kejuaraan lomba </p>
                            <div class="testi-img_block">
                                <img src="<?php echo base_url().'theme/images/student-2.png'?>" class="img-fluid" alt="#">
                                <p><span>Ningsih</span>Mahasiswa Terbaik 2017</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



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
        <script src="<?php echo base_url().'theme/js/fadeinup.js'?>"></script>
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
         <script src="<?php echo base_url().'theme/js/coming.js'?>"></script>


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
