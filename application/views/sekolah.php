<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/font-awesome-4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/index.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/font/iconmoon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/slick-theme.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/font/flaticon.css">
    <style>
        .profile-smp .banner-image {
            width: 100%;
            height: 300px;
            background: linear-gradient(to bottom,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.2)
    ),url(<?php echo $banner ?>) no-repeat center center;   
            background-size: cover;
        }
    </style>

</head>
<!--<?php print_r($data_sekolah)?>-->
<body>
  <!-- nav -->
   <?php $this->load->view('nav')?>
   <!-- end nav -->
    <div class="container-fluid">
        <div class="row row-wrap">
            <!--left-menu-->
            <div class="col-xs-2 left-menu">
                <p class="menu-item"><i class="fa fa-building-o"></i>Sekolah</p>
                <p class="menu-item"><i class="fa fa-building-o"></i>Sekolah</p>
                <p class="menu-item"><i class="fa fa-building-o"></i>Sekolah</p>
            </div>
            <!--content-->
            <div class="col-xs-10 content">
                <div class="profile-smp">
                    <div class="banner-image"></div>
                    <img src="<?php echo $logo ?>" class="profile-image">
                    <p class="nama-smp"><?php echo $nama ?></p>
                </div>
                <div class="container-fluid biodata-wrapper">
                    <div class="biodata-smp info-dasar col-xs-3">
                        <p class="biodata-heading">Alamat</p>
                        <p class="biodata-body"><i class="fa fa-map-marker"></i><?php echo $alamat?></p>
                    </div>
                    <div class="biodata-smp info-dasar col-xs-3">
                        <p class="biodata-heading">Website</p>
                        <p class="biodata-body"><i class="fa fa-globe"></i><a href="<?php echo $web ?>"><?php echo $web?></a></p>
                    </div>
                    <div class="biodata-smp info-dasar col-xs-3">
                        <p class="biodata-heading">Telephon</p>
                        <p class="biodata-body"><i class="fa fa-phone"></i><?php echo $telp ?></p>
                    </div>
                    <div class="biodata-smp info-dasar col-xs-3">
                        <p class="biodata-heading">Email</p>
                        <p class="biodata-body"><i class="fa fa-envelope"></i><?php echo $email?></p>
                    </div>
                </div>
                
                <div class="container-fluid struktur-wrapper no-padding content-margin">
                    <div class="col-xs-4 no-padding-left">
                    <div class="struktur">
                        <div class="media">
                            <div class="media-body struktur-heading">
                                <p class="media-heading">Struktur Organisasi</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="<?php echo $foto_kepala_sekolah?>" alt="...">
                            </div>
                            <div class="media-body">
                                <p class="media-heading people-job">Kepala Sekolah</p>
                                <p class="people-name"><?php echo $nama_kepala_sekolah ?></p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="<?php echo $wk1_foto_kepala_sekolah?>" alt="...">
                            </div>
                            <div class="media-body">
                                <p class="media-heading people-job">Wakil Kepala 1</p>
                                <p class="people-name"><?php echo $wk1_nama_kepala_sekolah?></p>
                            </div>
                        </div>

                        <div class="media">
                            <div class="media-left">
                                    <img class="media-object" src="<?php echo $wk2_foto_kepala_sekolah?>" alt="...">
                            </div>
                            <div class="media-body">
                                <p class="media-heading people-job">Wakil Kepala 2</p>
                                <p class="people-name"><?php echo $wk2_nama_kepala_sekolah?></p>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-xs-8 no-padding">
                       <div class="visi-misi-heading">
                            <div class="no-padding" style="width:100%;position:relative">
                                <p class="entitas-heading">Visi & Misi</p>
                            </div> 
                       </div>
                        <div class="visi-misi">
                            <div class="biodata-smp">
                                <p class="biodata-heading visi-heading">Visi</p>
                                <p class="biodata-body visi-body" style="margin-bottom:10px;"><?php echo $visi?></p>
                            </div>
                            <div class="biodata-smp">
                                <p class="biodata-heading visi-heading">Misi</p>
                                <ul class="biodata-body visi-body">
                                   <?php foreach($misi as $data){ ?>
                                    <li><?php echo $data?></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="container-fluid no-padding content-margin">
                    <div class="col-xs-5 no-padding-left">
                        <div class="entitas row" style="margin:0px;">
                            <div class="col-xs-12 no-padding">
                                <p class="entitas-heading infra-heading">Infrastruktur</p>
                            </div>                            
                            <div class="col-xs-6 grafik">
                               <p class="entitas-body">SMP 1 memiliki kualitas infrastruktur yang cukup baik</p>
                               <p class="entitas-score infra-score">18</p>
                            </div>
                            <div class="col-xs-6 grafik-detail no-padding-right">
                               <p class="grafik-detail-heading">Jenis Infrastruktur<i class="fa fa-angle-down" aria-hidden="true"></i></p>
                                <ul class="infra-ul" style="height:200px;">
                                    <li class="active"><a href="<?php echo base_url() ?>#gedung" data-toggle="tab"><span class="icon flaticon-kindergarten"></span><p class="nama-icon">Gedung</p></a></li>
                                    <li><a href="<?php echo base_url() ?>#perpus" data-toggle="tab"><span class="icon flaticon-books"></span><p class="nama-icon">Perpustakaan</p></a></li>
                                    <li><a href="<?php echo base_url() ?>#kantin" data-toggle="tab"><span class="icon flaticon-coffee-cup
                                "></span><p class="nama-icon">Kantin</p></a></li>
                                    <li><a href="<?php echo base_url() ?>#lapangan" data-toggle="tab"><span class="icon flaticon-football-field"></span><p class="nama-icon">Lapangan</p></a></li>
                                    <li><a href="<?php echo base_url() ?>#ibadah" data-toggle="tab"><span class="icon flaticon-islamic-mosque"></span><p class="nama-icon">Tempat Ibadah</p></a></li>
                                    <li><a href="<?php echo base_url() ?>#toilet" data-toggle="tab"><span class="icon flaticon-toilets-sign"></span><p class="nama-icon">Toilet</p></a></li>
                                    <li><a href="<?php echo base_url() ?>#uks" data-toggle="tab"><span class="icon flaticon-first-aid-kit"></span><p class="nama-icon">UKS</p></a></li>
                                    <li><a href="<?php echo base_url() ?>#aula" data-toggle="tab"><span class="icon flaticon-city-hall"></span><p class="nama-icon">Aula</p></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-7 no-padding">
                        <div class="entitas">
                            <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="gedung">
                            <div class="no-padding" style="width:100%;position:relative">
                                <p class="sub-entitas-heading sub-entitas-infra">Gedung</p>
                                <span class="icon-jenis-infra flaticon-kindergarten"></span>
                            </div> 
                                <div class="tab-inside row">
                                   <div class="col-xs-5">
                                    <div id="gedung-slider">
                                        <img src="<?php echo base_url() ?>assets/img/fasilitas-smp/gedung/smpn1/New-Lab-dan-Ekskul-.jpg" class="img-responsive">
                                        <img src="<?php echo base_url() ?>assets/img/fasilitas-smp/gedung/smpn1/Pintu-Gerbang-SMPN-1-Malang.jpg" class="img-responsive">
                                        <img src="<?php echo base_url() ?>assets/img/fasilitas-smp/gedung/smpn1/SMPN_1_MALANG.jpg" class="img-responsive">
                                    </div>
                                   </div>
                                   <div class="col-xs-7">
                                     <ul class="detail-param-ul">
                                         <li>
                                             <p class="detail-param-heading">Kondisi Gedung<span class="label label-success">Bagus</span></p>
                                             <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                         </li>
                                         <li>
                                             <p class="detail-param-heading">Usia Gedung<span class="label label-success">Bagus</span></p>
                                             <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                         </li>
                                         <li>
                                             <p class="detail-param-heading">Skor Gedung</p>
                                             <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                         </li>
                                         <li>
                                             <p class="detail-param-heading">Dengan skor 7/10,SMP 1 Memiliki kualitas gedung cukup baik</p>
                                             <p class="detail-param-text"></p>
                                         </li>
                                     </ul>
                                   </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="perpus">
                            <div class="no-padding" style="width:100%;position:relative">
                                <p class="sub-entitas-heading sub-entitas-infra">Perpustakaan</p>
                                <span class="icon-jenis-infra flaticon-books"></span>
                            </div> 
                                <div class="tab-inside row">
                                   <div class="col-xs-5">
                                    <div id="perpus-slider">
                                        <img src="<?php echo base_url() ?>assets/img/fasilitas-smp/perpus/smpn1/12edit.jpg" class="img-responsive">
                                        <img src="<?php echo base_url() ?>assets/img/fasilitas-smp/perpus/smpn1/Perpustakaan-SMPN-1-Malangedit.jpg" class="img-responsive">
                                    </div>
                                   </div>
                                   <div class="col-xs-7">
                                     <ul class="detail-param-ul">
                                         <li>
                                             <p class="detail-param-heading">Frekuensi Pembaruan<span class="label label-success">Bagus</span></p>
                                             <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                         </li>
                                         <li>
                                             <p class="detail-param-heading">Kelengkapan Sarana<span class="label label-success">Bagus</span></p>
                                             <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                         </li>
                                         <li>
                                             <p class="detail-param-heading">Detail Kelengkapan<span class="label label-success">Bagus</span></p>
                                             <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                         </li>
                                         <li>
                                             <p class="detail-param-heading">Skor Perpus</p>
                                             <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                         </li>
                                         <li>
                                             <p class="detail-param-heading">Dengan skor 7/10,SMP 1 Memiliki kualitas gedung cukup baik</p>
                                             <p class="detail-param-text"></p>
                                         </li>
                                     </ul>
                                   </div>
                                </div>
                                </div>
                            <div role="tabpanel" class="tab-pane fade" id="kantin">
                            <div class="no-padding" style="width:100%;position:relative">
                                <p class="sub-entitas-heading sub-entitas-infra">Kantin</p>
                                <span class="icon-jenis-infra flaticon-coffee-cup"></span>
                            </div> 
                                <div class="tab-inside row">
                                    <div class="col-xs-5">
                                        <div id="kantin-slider">
                                            <img src="<?php echo base_url() ?>assets/img/fasilitas-smp/kantin/IMG_20150526_103701edit.jpg" width="100" height="200">
                                            <img src="<?php echo base_url() ?>assets/img/fasilitas-smp/kantin/IMG_4463edit.jpg" width="100" height="200">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <ul class="detail-param-ul">
                                            <li>
                                                <p class="detail-param-heading">Jumlah Kantin<span class="label label-success">Bagus</span></p>
                                                <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                            </li>
                                            <li>
                                                <p class="detail-param-heading">Kelengkapan Kantin<span class="label label-success">Bagus</span></p>
                                                <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                            </li>
                                            <li>
                                                <p class="detail-param-heading">Detail Kelengkapan<span class="label label-success">Bagus</span></p>
                                                <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                            </li>
                                            <li>
                                                <p class="detail-param-heading">Dengan skor 7/10,SMP 1 Memiliki kualitas Kantin cukup baik</p>
                                                <p class="detail-param-text"></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="lapangan">
                            <div class="no-padding" style="width:100%;position:relative">
                                <p class="sub-entitas-heading sub-entitas-infra">Lapangan</p>
                                <span class="icon-jenis-infra flaticon-football-field"></span>
                            </div> 
                                <div class="tab-inside row">
                                    <div class="col-xs-5">
                                        <div id="lapangan-slider">
                                            <img src="<?php echo base_url() ?>assets/img/fasilitas-smp/lapangan/IMG_20140201_113823edit.jpg">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <ul class="detail-param-ul">
                                            <li>
                                                <p class="detail-param-heading">Jumlah Lapangan<span class="label label-success">Bagus</span></p>
                                                <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                            </li>
                                            <li>
                                                <p class="detail-param-heading">Kelengkapan Lapangan<span class="label label-success">Bagus</span></p>
                                                <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                            </li>
                                            <li>
                                                <p class="detail-param-heading">Detail Lapangan<span class="label label-success">Bagus</span></p>
                                                <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                            </li>
                                            <li>
                                                <p class="detail-param-heading">Dengan skor 7/10,SMP 1 Memiliki kualitas gedung cukup baik</p>
                                                <p class="detail-param-text"></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="ibadah">
                            <div class="no-padding" style="width:100%;position:relative">
                                <p class="sub-entitas-heading sub-entitas-infra gedung">Tempat Ibadah</p>
                                <span class="icon-jenis-infra flaticon-islamic-mosque"></span>
                            </div> 
                                <div class="tab-inside row">
                                    <div class="col-xs-5">
                                        <div id="ibadah-slider">
                                            <img src="<?php echo base_url() ?>assets/img/fasilitas-smp/masjid/1.-IMG_3956edit.jpg">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <ul class="detail-param-ul">
                                            <li>
                                                <p class="detail-param-heading">Jenis Tempat Ibadah<span class="label label-success">Bagus</span></p>
                                                <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                            </li>
                                            <li>
                                                <p class="detail-param-heading">Nama Tempah Ibadah<span class="label label-success">Bagus</span></p>
                                                <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                            </li>
                                            <li>
                                                <p class="detail-param-heading">Kelengkapan<span class="label label-success">Bagus</span></p>
                                                <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                            </li>
                                            <li>
                                                <p class="detail-param-heading">Deskripsi Kelengkapan</p>
                                                <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                            </li>
                                            <li>
                                                <p class="detail-param-heading">Dengan skor 7/10,SMP 1 Memiliki kualitas gedung cukup baik</p>
                                                <p class="detail-param-text"></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="toilet">
                            <div class="no-padding" style="width:100%;position:relative">
                                <p class="sub-entitas-heading sub-entitas-infra">Toilet</p>
                                <span class="icon-jenis-infra flaticon-toilets-sign"></span>
                            </div> 
                                <div class="tab-inside row">
                                    <div class="col-xs-5">
                                        <div id="toilet-slider">
                                            <img src="<?php echo base_url() ?>assets/img/fasilitas-smp/toilet/BeautyPlus_20150519103004_fastedit.jpg">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <ul class="detail-param-ul">
                                            <li>
                                                <p class="detail-param-heading">Jumlah Toilet<span class="label label-success">Bagus</span></p>
                                                <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                            </li>
                                            <li>
                                                <p class="detail-param-heading">Kondisi Toilet<span class="label label-success">Bagus</span></p>
                                                <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                            </li>
                                            <li>
                                                <p class="detail-param-heading">Dengan skor 7/10,SMP 1 Memiliki kualitas gedung cukup baik</p>
                                                <p class="detail-param-text"></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="uks">
                            <div class="no-padding" style="width:100%;position:relative">
                                <p class="sub-entitas-heading sub-entitas-infra">UKS</p>
                                <span class="icon-jenis-infra flaticon-first-aid-kit"></span>
                            </div> 
                                <div class="tab-inside row">
                                    <div class="col-xs-5">
                                        <div id="uks-slider">
                                            <img src="<?php echo base_url() ?>assets/img/fasilitas-smp/uks/gb11edit.jpg">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <ul class="detail-param-ul">
                                            <li>
                                                <p class="detail-param-heading">Jumlah UKS<span class="label label-success">Bagus</span></p>
                                                <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                            </li>
                                            <li>
                                                <p class="detail-param-heading">Kondisi UKS<span class="label label-success">Bagus</span></p>
                                                <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                            </li>
                                            <li>
                                                <p class="detail-param-heading">Dengan skor 7/10,SMP 1 Memiliki kualitas gedung cukup baik</p>
                                                <p class="detail-param-text"></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="aula">
                            <div class="no-padding" style="width:100%;position:relative">
                                <p class="sub-entitas-heading sub-entitas-infra">Aula</p>
                                <span class="icon-jenis-infra flaticon-city-hall"></span>
                            </div> 
                                <div class="tab-inside row">
                                    <div class="col-xs-5">
                                        <div id="bk-slider">
                                            <img src="<?php echo base_url() ?>assets/img/fasilitas-smp/bk/DSC_2674edit.jpg">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <ul class="detail-param-ul">
                                            <li>
                                                <p class="detail-param-heading">Jumlah Aula<span class="label label-success">Bagus</span></p>
                                                <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                            </li>
                                            <li>
                                                <p class="detail-param-heading">Kondisi Aula<span class="label label-success">Bagus</span></p>
                                                <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                            </li>
                                            <li>
                                                <p class="detail-param-heading">Dengan skor 7/10,SMP 1 Memiliki kualitas gedung cukup baik</p>
                                                <p class="detail-param-text"></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 content-separator"></div>
                    <!--guru-->
                    <div class="col-xs-5 no-padding-left">
                        <div class="entitas row" style="margin:0px;">
                            <div class="col-xs-12 no-padding">
                                <p class="entitas-heading guru-heading">Guru</p>
                            </div>                            
                            <div class="col-xs-6 grafik">
                               <p class="entitas-body">SMP 1 memiliki kualitas guru yang cukup baik</p>
                                <p class="entitas-score guru-score">55</p>
                            </div>
                            <div class="col-xs-6 grafik-detail no-padding-right">
                               <p class="grafik-detail-heading">Data Guru<i class="fa fa-angle-down" aria-hidden="true"></i></p>
                                <ul class="guru-ul" style="height:200px;">
                                    <li class="active"><a href="<?php echo base_url() ?>#jumlah-guru" data-toggle="tab"><span class="icon flaticon-command"></span><p class="nama-icon">Jumlah Guru</p></a></li>
                                    <li><a href="<?php echo base_url() ?>#pendidikan-guru" data-toggle="tab"><span class="icon flaticon-mortarboard"></span><p class="nama-icon">Pendidikan Guru</p></a></li>
                                    <li><a href="<?php echo base_url() ?>#lama-mengajar" data-toggle="tab"><span class="icon flaticon-calendar"></span><p class="nama-icon">Lama Mengajar</p></a></li>
                                    <li><a href="<?php echo base_url() ?>#usia-guru" data-toggle="tab"><span class="icon flaticon-old-man-walking"></span><p class="nama-icon">Usia Guru</p></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-7 no-padding">
                        <div class="entitas">
                            <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="jumlah-guru">
                            <div class="no-padding" style="width:100%;position:relative">
                                <p class="sub-entitas-heading sub-entitas-guru">Jumlah Guru</p>
                                <span class="icon-data-guru flaticon-command"></span>
                            </div> 
                                <div class="tab-inside row">
                                   <div class="col-xs-5">
                                    <canvas id="chart-jumlah-guru" width="400" height="400"></canvas>
                                   </div>
                                   <div class="col-xs-7">
                                     <ul class="detail-param-ul">
                                         <li>
                                             <p class="detail-param-heading">Jumlah Guru<span class="label label-success">Bagus</span></p>
                                             <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                         </li>
                                         <li>
                                             <p class="detail-param-heading">Dengan skor 7/10,SMP 1 Memiliki kualitas gedung cukup baik</p>
                                             <p class="detail-param-text"></p>
                                         </li>
                                     </ul>
                                   </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="pendidikan-guru">
                            <div class="no-padding" style="width:100%;position:relative">
                                <p class="sub-entitas-heading sub-entitas-guru">Pendidikan Guru</p>
                                <span class="icon-data-guru flaticon-mortarboard"></span>
                            </div> 
                                <div class="tab-inside row">
                                   <div class="col-xs-5">
                                    <canvas id="chart-pendidikan-guru" width="400" height="400"></canvas>
                                   </div>
                                   <div class="col-xs-7">
                                     <ul class="detail-param-ul">
                                         <li>
                                             <p class="detail-param-heading">Pendidikan Guru<span class="label label-success">Bagus</span></p>
                                             <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                         </li>
                                         <li>
                                             <p class="detail-param-heading">Dengan skor 7/10,SMP 1 Memiliki kualitas gedung cukup baik</p>
                                             <p class="detail-param-text"></p>
                                         </li>
                                     </ul>
                                   </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="lama-mengajar">
                            <div class="no-padding" style="width:100%;position:relative">
                                <p class="sub-entitas-heading sub-entitas-guru">Lama Mengajar</p>
                                <span class="icon-data-guru flaticon-calendar"></span>
                            </div> 
                                <div class="tab-inside row">
                                   <div class="col-xs-5">
                                    <canvas id="chart-lama-mengajar" width="400" height="400"></canvas>
                                   </div>
                                   <div class="col-xs-7">
                                     <ul class="detail-param-ul">
                                         <li>
                                             <p class="detail-param-heading">Lama Mengajar<span class="label label-success">Bagus</span></p>
                                             <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                         </li>
                                         <li>
                                             <p class="detail-param-heading">Dengan skor 7/10,SMP 1 Memiliki kualitas gedung cukup baik</p>
                                             <p class="detail-param-text"></p>
                                         </li>
                                     </ul>
                                   </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="usia-guru">
                            <div class="no-padding" style="width:100%;position:relative">
                                <p class="sub-entitas-heading sub-entitas-guru">Usia Guru</p>
                                <span class="icon-data-guru flaticon-old-man-walking"></span>
                            </div> 
                                <div class="tab-inside row">
                                   <div class="col-xs-5">
                                    <canvas id="chart-usia-guru" width="400" height="400"></canvas>
                                   </div>
                                   <div class="col-xs-7">
                                     <ul class="detail-param-ul">
                                         <li>
                                             <p class="detail-param-heading">Usia Guru<span class="label label-success">Bagus</span></p>
                                             <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                         </li>
                                         <li>
                                             <p class="detail-param-heading">Dengan skor 7/10,SMP 1 Memiliki kualitas gedung cukup baik</p>
                                             <p class="detail-param-text"></p>
                                         </li>
                                     </ul>
                                   </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 content-separator"></div>
                    <!--siswa-->
                    <div class="col-xs-5 no-padding-left">
                        <div class="entitas row" style="margin:0px;">
                            <div class="col-xs-12 no-padding">
                                <p class="entitas-heading siswa-heading">Siswa</p>
                            </div>                            
                            <div class="col-xs-6 grafik">
                               <p class="entitas-body">SMP 1 memiliki kualitas Siswa yang cukup baik</p>
                                <p class="entitas-score siswa-score">88</p>
                            </div>
                            <div class="col-xs-6 grafik-detail no-padding-right">
                               <p class="grafik-detail-heading">Data Siswa<i class="fa fa-angle-down" aria-hidden="true"></i></p>
                                <ul class="siswa-ul" style="height:200px;">
                                    <li class="active"><a href="<?php echo base_url() ?>#jumlah-siswa" data-toggle="tab"><span class="icon flaticon-group-of-students"></span><p class="nama-icon">Jumlah Siswa</p></a></li>
                                    <li><a href="<?php echo base_url() ?>#kelulusan-siswa" data-toggle="tab"><span class="icon flaticon-rolled-diploma"></span><p class="nama-icon">Kelulusan Siswa</p></a></li>
                                    <li><a href="<?php echo base_url() ?>#prestasi-siswa" data-toggle="tab"><span class="icon flaticon-cup"></span><p class="nama-icon">Prestasi Siswa</p></a></li>
                                    <li><a href="<?php echo base_url() ?>#kenakalan-siswa" data-toggle="tab"><span class="icon flaticon-angry"></span><p class="nama-icon">Kenakalan Siswa</p></a></li>
                                    <li><a href="<?php echo base_url() ?>#nilai-akhir-siswa" data-toggle="tab"><span class="icon flaticon-a-best-test-result"></span><p class="nama-icon">Nilai Akhir Siswa</p></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-7 no-padding">
                        <div class="entitas">
                            <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="jumlah-siswa">
                            <div class="no-padding" style="width:100%;position:relative">
                                <p class="entitas-heading sub-entitas-siswa">Jumlah Siswa</p>
                                <span class="icon-data-siswa flaticon-group-of-students"></span>
                            </div> 
                                <div class="tab-inside row">
                                   <div class="col-xs-5">
                                    <canvas id="chart-jumlah-siswa" width="400" height="400"></canvas>
                                   </div>
                                   <div class="col-xs-7">
                                     <ul class="detail-param-ul">
                                         <li>
                                             <p class="detail-param-heading">Jumlah Siswa<span class="label label-success">Bagus</span></p>
                                             <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                         </li>
                                         <li>
                                             <p class="detail-param-heading">Dengan skor 7/10,SMP 1 Memiliki kualitas gedung cukup baik</p>
                                             <p class="detail-param-text"></p>
                                         </li>
                                     </ul>
                                   </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="kelulusan-siswa">
                            <div class="no-padding" style="width:100%;position:relative">
                                <p class="entitas-heading sub-entitas-siswa">Kelulusan Siswa</p>
                                <span class="icon-data-siswa flaticon-rolled-diploma"></span>
                            </div> 
                                <div class="tab-inside row">
                                   <div class="col-xs-5">
                                    <canvas id="chart-kelulusan-siswa" width="400" height="400"></canvas>
                                   </div>
                                   <div class="col-xs-7">
                                     <ul class="detail-param-ul">
                                         <li>
                                             <p class="detail-param-heading">Kelulusan Siswa<span class="label label-success">Bagus</span></p>
                                             <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                         </li>
                                         <li>
                                             <p class="detail-param-heading">Dengan skor 7/10,SMP 1 Memiliki kualitas gedung cukup baik</p>
                                             <p class="detail-param-text"></p>
                                         </li>
                                     </ul>
                                   </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="prestasi-siswa">
                            <div class="no-padding" style="width:100%;position:relative">
                                <p class="entitas-heading sub-entitas-siswa">Prestasi Siswa</p>
                                <span class="icon-data-siswa flaticon-cup"></span>
                            </div> 
                                <div class="tab-inside row">
                                   <div class="col-xs-5">
                                    <canvas id="chart-prestasi-siswa" width="400" height="400"></canvas>
                                   </div>
                                   <div class="col-xs-7">
                                     <ul class="detail-param-ul">
                                         <li>
                                             <p class="detail-param-heading">Kelulusan Siswa<span class="label label-success">Bagus</span></p>
                                             <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                         </li>
                                         <li>
                                             <p class="detail-param-heading">Dengan skor 7/10,SMP 1 Memiliki kualitas gedung cukup baik</p>
                                             <p class="detail-param-text"></p>
                                         </li>
                                     </ul>
                                   </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="kenakalan-siswa">
                            <div class="no-padding" style="width:100%;position:relative">
                                <p class="entitas-heading sub-entitas-siswa">Kenakalan Siswa</p>
                                <span class="icon-data-siswa flaticon-angry"></span>
                            </div> 
                                <div class="tab-inside row">
                                   <div class="col-xs-5">
                                    <canvas id="chart-kenakalan-siswa" width="400" height="400"></canvas>
                                   </div>
                                   <div class="col-xs-7">
                                     <ul class="detail-param-ul">
                                         <li>
                                             <p class="detail-param-heading">Kenakalan Siswa<span class="label label-success">Bagus</span></p>
                                             <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                         </li>
                                         <li>
                                             <p class="detail-param-heading">Dengan skor 7/10,SMP 1 Memiliki kualitas gedung cukup baik</p>
                                             <p class="detail-param-text"></p>
                                         </li>
                                     </ul>
                                   </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="nilai-akhir-siswa">
                            <div class="no-padding" style="width:100%;position:relative">
                                <p class="entitas-heading sub-entitas-siswa">Nilai Akhir Siswa</p>
                                <span class="icon-data-siswa flaticon-a-best-test-result"></span>
                            </div> 
                                <div class="tab-inside row">
                                   <div class="col-xs-5">
                                    <canvas id="chart-nilai-akhir-siswa" width="400" height="400"></canvas>
                                   </div>
                                   <div class="col-xs-7">
                                     <ul class="detail-param-ul">
                                         <li>
                                             <p class="detail-param-heading">Nilai Akhir Siswa<span class="label label-success">Bagus</span></p>
                                             <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                         </li>
                                         <li>
                                             <p class="detail-param-heading">Dengan skor 7/10,SMP 1 Memiliki kualitas gedung cukup baik</p>
                                             <p class="detail-param-text"></p>
                                         </li>
                                     </ul>
                                   </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 content-separator"></div>
                    <!--ekskul-->
                    <div class="col-xs-5 no-padding-left">
                        <div class="entitas row" style="margin:0px;">
                            <div class="col-xs-12 no-padding">
                                <p class="entitas-heading ekskul-heading">Ekstrakurikuler</p>
                            </div>                            
                            <div class="col-xs-6 grafik">
                               <p class="entitas-body">SMP 1 memiliki kualitas Ekstrakurikuler yang cukup baik</p>
                                <p class="entitas-score ekskul-score">48</p>
                            </div>
                            <div class="col-xs-6 grafik-detail no-padding-right">
                               <p class="grafik-detail-heading">Jenis Ekstrakulikuler<i class="fa fa-angle-down" aria-hidden="true"></i></p>
                                <ul class="ekskul-ul" style="height:200px;">
                                    <li class="active"><a href="<?php echo base_url() ?>#bulu-tangkis" data-toggle="tab"><span class="icon flaticon-badminton-equipment"></span><p class="nama-icon">Bulu Tangkis</p></a></li>
                                    <li><a href="<?php echo base_url() ?>#karate" data-toggle="tab"><span class="icon flaticon-karate-fighter"></span><p class="nama-icon">Karate</p></a></li>
                                    <li><a href="<?php echo base_url() ?>#kti" data-toggle="tab"><span class="icon flaticon-monitor-with-stats"></span><p class="nama-icon">Karya Tulis Ilmiah</p></a></li>
                                    <li><a href="<?php echo base_url() ?>#PMR" data-toggle="tab"><span class="icon flaticon-injured-person-lying-on-a-bed-and-medical-assistants-carrying-it"></span><p class="nama-icon">PMR</p></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-7 no-padding">
                        <div class="entitas">
                            <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="bulu-tangkis">
                            <div class="no-padding" style="width:100%;position:relative">
                                <p class="entitas-heading sub-entitas-ekskul">Bulu Tangkis</p>
                                <span class="icon-data-ekskul flaticon-badminton-equipment"></span>
                            </div> 
                                <div class="tab-inside row">
                                   <div class="col-xs-5">
                                        <div class="param-slider">
                                            <img src="<?php echo base_url() ?>assets/img/140272627-grooming-needs-senior-cat-632x475.jpg" class="img-responsive">
                                            <img src="<?php echo base_url() ?>assets/img/kucing-munchkin.png" class="img-responsive">
                                        </div>
                                   </div>
                                   <div class="col-xs-7">
                                     <ul class="detail-param-ul">
                                         <li>
                                             <p class="detail-param-heading">Deskripsi</p>
                                             <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                         </li>
                                         <li>
                                             <p class="detail-param-heading">Jumlah Anggota<span class="label label-success">Bagus</span></p>
                                             <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                         </li>
                                         <li>
                                             <p class="detail-param-heading">Prestasi<span class="label label-success">Bagus</span></p>
                                             <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                         </li>
                                         <li>
                                             <p class="detail-param-heading">Dengan skor 7/10,SMP 1 Memiliki kualitas gedung cukup baik</p>
                                             <p class="detail-param-text"></p>
                                         </li>
                                     </ul>
                                   </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="karate">
                            <div class="no-padding" style="width:100%;position:relative">
                                <p class="entitas-heading sub-entitas-ekskul">Karate</p>
                                <span class="icon-data-ekskul flaticon-karate-fighter"></span>
                            </div> 
                                <div class="tab-inside row">
                                   <div class="col-xs-5">
                                        <div class="param-slider">
                                            <img src="<?php echo base_url() ?>assets/img/140272627-grooming-needs-senior-cat-632x475.jpg" class="img-responsive">
                                            <img src="<?php echo base_url() ?>assets/img/kucing-munchkin.png" class="img-responsive">
                                        </div>
                                   </div>
                                   <div class="col-xs-7">
                                     <ul class="detail-param-ul">
                                         <li>
                                             <p class="detail-param-heading">Deskripsi</p>
                                             <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                         </li>
                                         <li>
                                             <p class="detail-param-heading">Jumlah Anggota<span class="label label-success">Bagus</span></p>
                                             <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                         </li>
                                         <li>
                                             <p class="detail-param-heading">Prestasi<span class="label label-success">Bagus</span></p>
                                             <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                         </li>
                                         <li>
                                             <p class="detail-param-heading">Dengan skor 7/10,SMP 1 Memiliki kualitas gedung cukup baik</p>
                                             <p class="detail-param-text"></p>
                                         </li>
                                     </ul>
                                   </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="kti">
                            <div class="no-padding" style="width:100%;position:relative">
                                <p class="entitas-heading sub-entitas-ekskul">Karya Tulis Ilmiah</p>
                                <span class="icon-data-ekskul flaticon-monitor-with-stats"></span>
                            </div> 
                                <div class="tab-inside row">
                                   <div class="col-xs-5">
                                        <div class="param-slider">
                                            <img src="<?php echo base_url() ?>assets/img/140272627-grooming-needs-senior-cat-632x475.jpg" class="img-responsive">
                                            <img src="<?php echo base_url() ?>assets/img/kucing-munchkin.png" class="img-responsive">
                                        </div>
                                   </div>
                                   <div class="col-xs-7">
                                     <ul class="detail-param-ul">
                                         <li>
                                             <p class="detail-param-heading">Deskripsi</p>
                                             <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                         </li>
                                         <li>
                                             <p class="detail-param-heading">Jumlah Anggota<span class="label label-success">Bagus</span></p>
                                             <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                         </li>
                                         <li>
                                             <p class="detail-param-heading">Prestasi<span class="label label-success">Bagus</span></p>
                                             <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                         </li>
                                         <li>
                                             <p class="detail-param-heading">Dengan skor 7/10,SMP 1 Memiliki kualitas gedung cukup baik</p>
                                             <p class="detail-param-text"></p>
                                         </li>
                                     </ul>
                                   </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="PMR">
                            <div class="no-padding" style="width:100%;position:relative">
                                <p class="entitas-heading sub-entitas-ekskul">PMR</p>
                                <span class="icon-data-ekskul flaticon-injured-person-lying-on-a-bed-and-medical-assistants-carrying-it"></span>
                            </div> 
                                <div class="tab-inside row">
                                   <div class="col-xs-5">
                                        <div class="param-slider">
                                            <img src="<?php echo base_url() ?>assets/img/140272627-grooming-needs-senior-cat-632x475.jpg" class="img-responsive">
                                            <img src="<?php echo base_url() ?>assets/img/kucing-munchkin.png" class="img-responsive">
                                        </div>
                                   </div>
                                   <div class="col-xs-7">
                                     <ul class="detail-param-ul">
                                         <li>
                                             <p class="detail-param-heading">Deskripsi</p>
                                             <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                         </li>
                                         <li>
                                             <p class="detail-param-heading">Jumlah Anggota<span class="label label-success">Bagus</span></p>
                                             <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                         </li>
                                         <li>
                                             <p class="detail-param-heading">Prestasi<span class="label label-success">Bagus</span></p>
                                             <p class="detail-param-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est,</p>
                                         </li>
                                         <li>
                                             <p class="detail-param-heading">Dengan skor 7/10,SMP 1 Memiliki kualitas gedung cukup baik</p>
                                             <p class="detail-param-text"></p>
                                         </li>
                                     </ul>
                                   </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    <div class="col-xs-12 content-separator"></div>
                    <!--skor akhir-->                    
                    <button id="btn-show-solusi" class="btn btn-primary center-block" data-toggle="collapse" data-target="#nilai-akhir">Lihat Hasil Perhitungan<i class="fa fa-chevron-down"></i></button> 
                   <div class="clearfix"></div>
                   <div class="col-xs-1"></div>
                   <div class="col-xs-10 collapse" id="nilai-akhir">
                    <div class="col-xs-6 no-padding-left">
                        <div class="entitas row" style="margin:0px;">
                            <div class="col-xs-12 no-padding">
                                <p class="entitas-heading infra-heading">Nilai Akhir</p>
                            </div>                            
                            <div class="col-xs-6 grafik">
                               <p class="entitas-body">SMP 1 memiliki kualitas infrastruktur yang cukup baik</p>
                               <p class="entitas-score final-score">88</p>
                            </div>
                            <div class="col-xs-6 grafik-detail no-padding-right">
                               <p class="grafik-detail-heading">Nilai Parameter<i class="fa fa-angle-down" aria-hidden="true"></i></p>
                                <ul class="infra-ul" style="overflow-y:auto">
                                    <li><span class="icon-final fa fa-square" style="color:#ff6c60"></span><p class="nama-icon-final">Fasilitas</p></li>
                                    <li><span class="icon-final fa fa-square" style="color:#36bc9b"></span><p class="nama-icon-final">Guru</p></li>
                                    <li><span class="icon-final fa fa-square" style="color:#967adc"></span><p class="nama-icon-final">Siswa</p></li>
                                    <li><span class="icon-final fa fa-square" style="color:#d870ad"></span><p class="nama-icon-final">Ekstrakulikuler</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
<div id="accordion-no" class="col-xs-6">
    <div class="panel last-panel entitas">
        <a class="col-xs-12 no-padding" data-toggle="collapse" data-target="#list-solusi">
            <p class="entitas-heading infra-heading">Saran Solusi</p>
        </a>
        <div class="col-xs-12 grafik collapse in" id="list-solusi">
            <form action="">
                <ul style="list-style:none;padding:0px;" class="list-solusi">
                    <li>
                        <input type="checkbox">Bangun Lebih Banyak Gedung Sekolah</li>
                    <li>
                        <input type="checkbox">Bangun Lebih Banyak Gedung Sekolah</li>
                    <li>
                        <input type="checkbox">Bangun Lebih Banyak Gedung Sekolah</li>
                </ul>
                <button id="singlebutton" name="singlebutton" class="btn btn-primary center-block">Submit</button>
            </form>
        </div>
    </div>
    <div class="panel last-panel entitas">
        <a class="col-xs-12 no-padding" data-toggle="collapse" data-target="#list-solusi-diterapkan">
            <p class="entitas-heading infra-heading" style="margin-top:10px;">Solusi yang diambil</p>
        </a>
        <div class="col-xs-12 grafik collapse in" id="list-solusi-diterapkan">
            <form action="">
                <ul style="list-style:none;padding:0px;" class="list-solusi">
                    <li>
                        <input type="checkbox">Bangun Lebih Banyak Gedung Sekolah</li>
                    <li>
                        <input type="checkbox">Bangun Lebih Banyak Gedung Sekolah</li>
                    <li>
                        <input type="checkbox">Bangun Lebih Banyak Gedung Sekolah</li>
                </ul>
                <button id="singlebutton" name="singlebutton" class="btn btn-primary center-block">Submit</button>
            </form>
        </div>
    </div>
</div>
                   </div>
                   <div class="col-xs-1"></div>
                   <div class="col-xs-12 content-separator"></div>
                </div>
            </div> 
            <div class="col-xs-12 footer">
                <div class="footer-inner">
                   <span>2016&copy;SIPUT by</span>
                   <a href="<?php echo base_url() ?>">TechnoCode</a>
                    <img src="<?php echo base_url() ?>assets/img/logo50.png" height="30" width="30">
                </div>
            </div>
        </div>
    </div>
<!--    </div>-->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/holder.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.classyloader.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/slick.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/Chart.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/siput.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.waypoints.min.js"></script>
    <script type="text/javascript"src="<?php echo base_url() ?>assets/js/jquery.counterup.min.js"></script>
    <script>
        $('.loader').ClassyLoader({
            diameter: 60
            , height:150
            , width:150
            , speed: 7
            , percentage: 20
            , fontFamily: 'roboto'
            , fontColor: 'rgba(0,0,0,0.4)'
            , lineColor: 'rgba(255,0,0,0.4)'
            , lineWidth: 4
            , remainingLineColor: 'rgba(0,0,0,0.1)'
            , fontSize : '30px'
        });
    </script>
    <script>
        $(document).ready(function(){
//            $('.left-menu').css('height',$('.content').height());
//            console.log($('.content').height());
            var infra_score = parseInt($('.infra-score').text());
            if(infra_score < 100){
                console.log('kurang 100');
            }
            console.log(infra_score);
            $('.infra-score').counterUp({
            delay: 10,
            time: 1000
            });
            $('.guru-score').counterUp({
            delay: 10,
            time: 1000
            });
            $('.siswa-score').counterUp({
            delay: 10,
            time: 1000
            });
            $('.ekskul-score').counterUp({
            delay: 10,
            time: 1000
            });
            $('.final-score').counterUp({
            delay: 10,
            time: 1000
            });
        })
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
$('#gedung-slider,#perpus-slider,#kantin-slider,#lapangan-slider,#ibadah-slider,#toilet-slider,#uks-slider,#jalur-slider,#bk-slider,#bulu-tangkis-slider,#karate-slider,.param-slider').slick({
        dots: true,
        infinite: true,
        speed: 500,
        autoplay: true,
});
})
    </script>
    <script>
        $(document).ready(function(){
            $('#nilai-akhir').on('show.bs.collapse', function () {
//                $('#btn-show-solusi').text('');
//                $('#btn-show-solusi').append('Tutup Hasil Perhitungan<i class="fa fa-chevron-up"></i>');
                $('html, body').animate({
                scrollTop: $(window).scrollTop() + 500
                });
        })
            $('#nilai-akhir').on('hide.bs.collapse', function () {
//                $('#btn-show-solusi').text('');
//                $('#btn-show-solusi').append('Lihat Hasil Perhitungan<i class="fa fa-chevron-down"></i>');
        })
            })
    </script>
    <script>
            $('#toggle-nav').click(function(e){
            e.preventDefault();
            if($('#toggle-nav').hasClass('toggle-nav-aktif')){
                $('.left-nav-wrap').animate({width:'10%'});
                $('.left-menu').animate({width:'10%'});
                $('.content').animate({width:'90%'});
                $('#toggle-nav').removeClass('toggle-nav-aktif');
            }
            else{
                $('.left-nav-wrap').animate({width:'16.66666667%'});
                $('.left-menu').animate({width:'16.66666667%'});
                $('.content').animate({width:'83.33333333%'});
                $('#toggle-nav').addClass('toggle-nav-aktif');   
            }
});
    </script>
</body>

</html>