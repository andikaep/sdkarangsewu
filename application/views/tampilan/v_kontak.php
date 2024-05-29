<!DOCTYPE html>
<html lang="id">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hubungi Kami</title>
<!-- Stylesheet -->
<link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/login.png'?>">
<link href="<?php echo base_url().'template/css/style.css'?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'template/css/ddsmoothmenu.css'?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'template/css/jquery.fancybox-1.3.4.css'?>" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'?>"/>
<!-- Javascript -->
<script src="<?php echo base_url().'template/js/jquery.min.js'?>" type="text/javascript"></script>
<script src="<?php echo base_url().'template/js/ddsmoothmenu.js'?>" type="text/javascript"></script>
<script src="<?php echo base_url().'template/js/contentslider.js'?>" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url().'template/js/jcarousellite_1.0.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'template/js/jquery.easing.1.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'template/js/cufon-yui.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'template/js/DIN_500.font.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'template/js/menu.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'template/js/tabs.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'template/js/jquery.mousewheel-3.0.4.pack.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'template/js/jquery.fancybox-1.3.4.pack.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.js'?>"></script>
<?php echo $map['js'];?>
  <!-- Animate.css -->
  <link rel="stylesheet" href="<?php echo base_url().'them/css/animate.css'?>">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="<?php echo base_url().'them/css/icomoon.css'?>">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="<?php echo base_url().'them/css/bootstrap.css'?>">
  <!-- Flexslider  -->
  <link rel="stylesheet" href="<?php echo base_url().'them/css/flexslider.css'?>">
  <!-- Theme style  -->
  <link rel="stylesheet" href="<?php echo base_url().'them/css/style.css'?>">
  


  <!-- font fantastis :D -->

  <link rel="stylesheet" href="<?php echo base_url().'asset/bootstrap/css/bootstrap.min.css'?>">
 
</head>
<body class="hold-transition login-page" li style="background-image: url(<?php echo base_url().'template/images/wad.jpg'?>);">

<div id="bg">
<!-- Wapper Sec -->
	<div id="wrapper_sec">
		 <!-- masterhead -->
			<div id="masterhead">
				<!-- Logo -->
                	<div class="logo"><a href="<?php echo base_url().''?>"><img src="<?php echo base_url().'assets/images/log.png'?>" alt="" /></a></div>
                  

                     <div class="topright_sec">
                        <marquee class="hakko" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();" style="font-family: Verdana; font-size:16px; color:#07471d;"> Selamat datang di SD Negeri Karangsewu Kulon Progo</marquee>
                           <div class="top_search">
                                      <div class="advance_search"><a href="#"></a></div>
                                     
                                        
                                    </div>
                          <div class="clear"> </div> 
                                      <div class="advance_search"><a href="#"></a></div>                
                                          
                      </div>
                    <div class="clear"></div>




                    	  <!-- Navigation -->
                              <div class="navigation">
                                  <div id="smoothmenu1" class="ddsmoothmenu" align="center">
                                      <ul>
                                          <li class="first"><a class="selected" href="<?php echo base_url().''?>">Home</a></li>
                                          <li><a href="#">Profil</a>   
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
             	     <div class="clear"></div>	
                 </div>    
		    </div>
            <div class="fh5co-contact animate-box">
              <?php echo $map['html'];?>
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h3>Informasi</h3 align="center">
					<ul class="contact-info">
						<li><i class="icon-map"></i>Kempleng Ped14 Karangsewu Galur Kulon Progo</li>
						<li><i class="icon-whatsapp"></i>(+62) 818382665</li>
						<li><i class="icon-globe"></i><a href="<?php echo base_url().'home'?>">SD Negeri Karangsewu</a></li>
					</ul>
				</div>

				<div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<?php echo $this->session->flashdata('msg');?>
					<div class="row">
					<form method="post" action="<?php echo base_url().'kontak/kirim_pesan'?>">
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" name="nama" placeholder="Nama" type="text" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" name="email" placeholder="Email" type="email" required>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="pesan" class="form-control" id="" cols="30" rows="7" placeholder="Pesan" required></textarea>
							</div>
						</div>
						<div class="row">
						<div style="margin: 0 auto; width: 656px;text-align:center;">
							<div class="col-sm-6 col-xs-6">
								 <button type="submit" class="btn btn-primary col-xs-12"><i class="fa fa-send-o mg-r-sm"></i>KIRIM PESAN</button>
							</div>
							
							<div class="col-sm-6 col-xs-6">
								 <button type="reset" class="btn btn-primary col-xs-12"><i class="fa fa-refresh mg-r-sm"></i>RESET</button>
							</div>
						</div>
						</div>

					</form>
				</div>
      </div>
    </div>
			</div>
	</div>	
                    
               <!-- Col2 -->                    
                                
                    		<div class="clear"></div>	
 						<!--col2 ends -->			
              		</div>
                <div class="clear"></div>
		
            </div>	
		<div class="clear"></div>
	</div>
</div>    
<!-- Footer Section -->
<script type="text/javascript" src="<?php echo base_url().'them/js/jquery.js'?>"></script> 
<script type="text/javascript" src="<?php echo base_url().'them/js/jquery.validate.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'them/js/jquery.form.min.js'?>"></script>


  <!-- jQuery -->
  <script src="<?php echo base_url().'them/js/jquery.min.js'?>"></script>
  <!-- jQuery Easing -->
  <script src="<?php echo base_url().'them/js/jquery.easing.1.3.js'?>"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url().'them/js/bootstrap.min.js'?>"></script>
  <!-- Waypoints -->
  <script src="<?php echo base_url().'them/js/jquery.waypoints.min.js'?>"></script>
  <!-- Flexslider -->
  <script src="<?php echo base_url().'them/js/jquery.flexslider-min.js'?>"></script>

  <!-- MAIN JS -->
  <script src="<?php echo base_url().'theme/js/main.js'?>"></script>
</body>
</html>
















