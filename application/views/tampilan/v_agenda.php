<!DOCTYPE html>
<html lang="id">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agenda Kegiatan</title>
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
<?php 
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }
                
    ?>
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
                 </div>    
        </div>
        	<div id="content_section">
			
                
                    	
                         	<div id="content2">	
                                <h2 class="pad8">Agenda Kegiatan</h2>
                                <!-- Blog Listing -->
                                <ul class="listing">
                                <?php
                                  $no=0;
                                  foreach ($data->result_array() as $i) :
                                     $no++;
                                     $agenda_id=$i['agenda_id'];
                                     $agenda_nama=$i['agenda_nama'];
                                     $agenda_deskripsi=$i['agenda_deskripsi'];
                                     $agenda_mulai=$i['agenda_mulai'];
                                     $agenda_selesai=$i['agenda_selesai'];
                                     $agenda_tempat=$i['agenda_tempat'];
                                     $agenda_waktu=$i['agenda_waktu'];
                                     $agenda_keterangan=$i['agenda_keterangan'];
                                     $agenda_author=$i['agenda_author'];
                                     $tanggal=$i['tanggal'];
                                     
                                  ?>
                                	<li>
                                		<div class="thumb"><a href=""><img width="126" height="106" src="<?php echo base_url().'template/images/agenda1.jpg'?>"  alt="" /></a></div>
                                        <div class="description">
                                        	<h6><a href="" class="colr"><?php echo $agenda_nama;?></a></h6>
                                            <?php echo $agenda_deskripsi;?>
                                            <div class="clear"></div>
                                            <div class="info">
                                            	<span class="postedby">Di Post Oleh: <?php echo $agenda_author;?></span>
                                                <span class="lastupdte">Tanggal: <i><?php echo $tanggal;?></i></span> 
                
                                            </div>
                                         </div>
                                         <div class="clear"></div>
                                	</li>
                                <?php endforeach;?>
                                   
                                </ul>
                                
              
			</div>	
		<div class="clear"></div>
	</div>
</div>   

</body>
</html>
















