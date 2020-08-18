<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact</title>
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
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
</head>
<style>
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #4169E1;
}

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
                                    
                                    <a href="#" style = "color:black" class="dropdown-toggle" data-toggle="dropdown">Profile<b class="caret"></b></a>
                                      <ul class="dropdown-menu">
                                      <li><a class="nav-link" href="<?php echo site_url('about');?>">Visi dan Misi</a></li>
                                      <li><a class="nav-link" href="<?php echo site_url('struktural');?>">Struktural</a></li>
                                      <li><a class="nav-link" href="<?php echo site_url('contact');?>">Kontak</a></li>
                                  </ul>
                              </li>
                                 <li class="dropdown nav-item">
                                    
                                    <a href="#" style = "color:black" class="dropdown-toggle" data-toggle="dropdown">Informasi<b class="caret"></b></a>
                                      <ul class="dropdown-menu">
                                      <li><a class="nav-link" href="<?php echo site_url('agenda');?>">Agenda</a></li>
                                      <li><a class="nav-link" href="<?php echo site_url('blog');?>">Berita</a></li>
                                      <li><a class="nav-link" href="<?php echo site_url('pengumuman');?>"> Pengumuman</a>
                                       </li>
                                  </ul>
                              </li>
                               
                                <li class="dropdown nav-item">
                                    <a href="#" style = "color:black" class="dropdown-toggle" data-toggle="dropdown">Beasiswa<b class="caret"></b></a>
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
                                    
                                    <a href="#" style = "color:black" class="dropdown-toggle" data-toggle="dropdown">Kemahasiswaan<b class="caret"></b></a>
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
                                  <a class="nav-link" href="<?php echo site_url('');?>">Tracer Study</a>
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
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-title">
                    <h2>Hubungi Kami</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="contact-form">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 contact-option">
                            <div class="contact-option_rsp">
                                <h3>Tinggalkan Pesan</h3>
                                <form action="<?php echo site_url('contact/kirim_pesan');?>" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" name="xnama" required>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="xemail" required>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone" name="xphone" required>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <textarea placeholder="Message" class="form-control" name="xmessage" required rows="5"></textarea>
                                    </div>
                                    <!-- // end .form-group -->
                                    <button type="submit" class="btn btn-default btn-submit">SUBMIT</button>
                                    <div><?php echo $this->session->flashdata('msg');?></div>
                                    <!-- // end #js-contact-result -->
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="contact-address">
                                <h3>Lokasi</h3>
                                <div class="contact-details">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <h6>Alamat</h6>
                                    <p> Kampus 1 UAD
                                        <br> Jl. Kapas 9, Semaki, 
                                        <br> Umbulharjo, Yogyakarta 55166</p>
                                    </div>
                                    <br>
                                    <div class="contact-details">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        <h6>Email</h6>
                                        <p>bimawa@uad.ac.id
                                            
                                        </p>
                                    </div>
                                    <br>
                                    <div class="contact-details">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <h6>Phone</h6>
                                        <p>Telepon :    (0274) 563515 <br>
                                        Ext Ruang Ka. Bimawa   :    1191<br>
                                        Ext Ruang Ka.Bid.Mawa  :    1192<br>
                                        Ext Ruang Staff Bimawa :    1193<br>
                                        Hotline Layanan Mahasiswa Baru   :    085640898782</p>                                                           

                                 </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="contact-center">OR</p>
                </div>
            </div>
        </div>
    </section>
    <!--//END  ABOUT IMAGE -->
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
            <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
            <!-- Subscribe / Contact-->
            <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/contact.js'?>"></script>
            <!-- Script JS -->
            <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
        </body>

        </html>
