<!DOCTYPE html>
<html lang="id">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Download</title>
<!-- Stylesheet -->
<link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/login.png'?>">
<link href="<?php echo base_url().'template/css/style.css'?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'template/css/ddsmoothmenu.css'?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'template/css/jquery.fancybox-1.3.4.css'?>" media="screen" />
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
</head>
<body>
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


                              <div class="navigation">
                                  <div id="smoothmenu1" class="ddsmoothmenu" align="center">
                                      <ul>
                                          <li class="first"><a class="selected" href="<?php echo base_url().''?>">Home</a></li>
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
                           <!-- navigation ends -->       		                            
             	     <div class="clear"></div>	
                 </div>    
		    </div>

        	<div id="content_section">
        		
                	
                    <div class="note" align="center">
                                  <p>
                                     <marquee direction="right"> Silahkan <strong> Unduh / Download</strong> file </marquee>
                                  </p>
                               </div> 
                             
                           
                           <div class="clear"></div>
                            
                             	<div class="listingblock">
                                	
                                    <div class="clear"></div>
                                <div class="course_listing">
                                <ul class="listheading">
                                	<li class="code colr">No</li>
                                    <li class="coursename colr">Judul</li>
                                    <li class="time colr">Tanggal</li>
                                    <li class="location colr">Oleh</li>
                                    <li class="instructor colr">Aksi</li>
                                </ul>
                                <?php
                                    $no=0;
                                    foreach ($data->result_array() as $d) :
                                        $no++;
                                        $id=$d['file_id'];
                                        $judul=$d['file_judul'];
                                        $deskripsi=$d['file_deskripsi'];
                                        $oleh=$d['file_oleh'];
                                        $tanggal=$d['tanggal'];
                                        $download=$d['file_download'];
                                        $file=$d['file_data'];
                                    ?>
                                <ul class="courselisting">
                                	<li class="code"><?php echo $no;?></li>
                                    <li class="coursename"><?php echo $judul;?></li>
                                    <li class="time"><?php echo $tanggal;?></li>
                                    <li class="location"><?php echo $oleh;?></li>
                                    <li class="instructor"><a href="<?php echo base_url().'admin/files/download/'.$id;?>">Download</a></li>
                                
                                </ul>
                              <?php endforeach;?>
                                
                             <div class="clear"></div>
                          </div>
                                </div>

            </div>	
		<div class="clear"></div>
	</div>
</div>    

</body>
</html>
















