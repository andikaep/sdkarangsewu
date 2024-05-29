<!DOCTYPE html>
<html lang="id">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home</title>
<!-- Stylesheet -->
<link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/login.png'?>">
<link href="<?php echo base_url().'template/css/style.css'?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'template/css/ddsmoothmenu.css'?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'template/css/jquery.fancybox-1.3.4.css'?>" media="screen" />
<!-- Animate.css -->
  <link rel="stylesheet" href="<?php echo base_url().'them/css/animate.css'?>">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="<?php echo base_url().'them/css/bootstrap.css'?>">
  <!-- Flexslider  -->
  <link rel="stylesheet" href="<?php echo base_url().'them/css/flexslider.css'?>">

  <!-- Modernizr JS -->
  <script src="<?php echo base_url().'them/js/modernizr-2.6.2.min.js'?>"></script>
<!-- Javascript -->
<script src="<?php echo base_url().'template/js/jquery.min.js'?>" type="text/javascript"></script>
<script src="<?php echo base_url().'template/js/ddsmoothmenu.js'?>" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url().'template/js/jcarousellite_1.0.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'template/js/jquery.easing.1.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'template/js/cufon-yui.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'template/js/DIN_500.font.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'template/js/menu.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'template/js/tabs.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'template/js/jquery.mousewheel-3.0.4.pack.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'template/js/jquery.fancybox-1.3.4.pack.js'?>"></script>

<?php 
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }
                
    ?>
</head>
<body class="hold-transition login-page" li style="background-image: url(<?php echo base_url().'template/images/wad.jpg'?>);">
<div id="bg">
<!-- Wapper Sec -->
  <div id="wrapper_sec">
     <!-- masterhead -->
      <div id="masterhead">
                  <div class="logo"><a href="<?php echo base_url().''?>"><img src="<?php echo base_url().'assets/images/log.png'?>" alt="" /></a></div>
                
                      <div class="topright_sec">
                        <marquee class="hakko" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();" style="font-family: Verdana; font-size:16px; color:#07471d;" > Selamat datang di SD Negeri Karangsewu</marquee>
                           <div class="top_search">
                                      <div class="advance_search"><a href="#"></a></div>
                                     
                                        
                                    </div>
                          <div class="clear"> </div> 
                                      <div class="advance_search"><a href="#"></a></div>                
                                          
                      </div>
                    <div class="clear"></div>
                    
                    <div class="navigation">
                                  <div id="smoothmenu1" class="ddsmoothmenu" align="center">
                                      <ul>
                                          <li><a class="selected" href="<?php echo base_url().''?>">Home</a></li>
                                          <li><a href="#">Profil</a> 
                                              <!-- Sub Menu level 1 -->    
                                                  <ul align="left">
                                                      <li><a href="<?php echo base_url().'profil_s'?>">Profil Sekolah</a></li>
                                                      <li><a href="<?php echo base_url().'visi_misi'?>">Visi Misi</a></li>
                                                      
                                                  </ul>     
                                          </li>
                                          <li><a href="<?php echo base_url().'agenda'?>">Agenda</a></li>
                                          <script> $("li").css("width",100/$("li").width()*100); </script>
                                          <li><a href="<?php echo base_url().'galeri'?>">Galeri Sekolah</a> </li>
                                          <li><a href="<?php echo base_url().'pengumuman'?>">Pengumuman</a></li>
                                          <li><a href="<?php echo base_url().'download'?>">Download</a> </li>
                                          <li><a href="<?php echo base_url().'kontak'?>">Hubungi Kami</a></li>
                                          
                                      </ul>       
                                  </div>                                     
                   <div class="clear"></div>  
                 </div>    
        </div>
          <div id="content_section">
              
                                 <aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
      <ul class="slides">
        <li style="background-image: url(<?php echo base_url().'them/images/sd/slid.jpg'?>);">
          <div class="overlay-gradient"></div>
          <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
            </div>
          </div>
        </li>
        <li style="background-image: url(<?php echo base_url().'them/images/sd/s.jpg'?>);">
          <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
            </div>
          </div>
        </li>
        <li style="background-image: url(<?php echo base_url().'them/images/sd/slid1.jpg'?>);">
          <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
            </div>
          </div>
        </li>
        <li style="background-image: url(<?php echo base_url().'them/images/sd/slid4.jpg'?>);">
          <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
            </div>
          </div>
        </li>
          <li style="background-image: url(<?php echo base_url().'them/images/sd/slid5.jpg'?>);">
          <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
            </div>
          </div>
        </li>
        <li style="background-image: url(<?php echo base_url().'them/images/sd/slid3.jpg'?>);">
          <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
              <div class="slider-text-inner">
              </div>
            </div>
          </div>
        </li>
        </ul>
      </div>
  </aside>
</div>
                                  
                          <div class="content_heading">
                              <div class="heading"><h2>SD Negeri Karangsewu</h2> </div>
                          
                            </div>
                             <p class="text">
                                 SD Negeri Karangsewu adalah Sekolah Dasar yang berlokasi di kabupaten Kulon Progo tepatnya di kecamatan Galur....  <!-- <a href="<?php echo base_url().'profil_s'?>">Selengkapnya</a> </p>
                                
                              
               
                  
                
            </div>  
    
  </div>
</div>    
  <!-- jQuery -->

 <script src="<?php echo base_url().'them/js/jquery.min.js'?>"></script>
 
  <!-- Flexslider -->
  <script src="<?php echo base_url().'them/js/jquery.flexslider-min.js'?>"></script>

  <!-- MAIN JS -->
  <script src="<?php echo base_url().'them/js/main.js'?>"></script>
  
  
</body>
</html>