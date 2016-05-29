<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/font-awesome-4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/font/flaticon.css">
</head>
<body>
    <nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-2 no-padding left-nav-wrap">
                    <div class="left-nav">
                        <p>SIPUT
                        <a href="javascript:" id="afif" class="afif-aktif"><i class="fa fa-bars"></i></a>
                        </p>
                    </div>
                </div>
                <div class="col-xs-8 no-padding">
                    <div class="center-nav">
                        <div class="search-nav">
                            <input type="text" placeholder="search">
                        </div>
                    </div>
                </div>
                <div class="col-xs-2 no-padding">
                    <div class="right-nav">
                        <ul>
                            <li class="user-name">
                                Afif Nandya</li>
                            <li class="user-photo">
                                <img src="holder.js/50x50">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
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
                <div class="col-xs-12 filter-bar">
                   <span>Filter : </span>
                   <button class="filter" data-filter="all">All</button>
                   <button class="filter" data-filter=".negeri">SMP Negeri</button>
                   <button class="filter" data-filter=".swasta">SMP Swasta</button>
                   <span>Sort : </span>
                   <button class="filter" data-filter=".negeri">Nama</button>
                   <button class="filter" data-filter=".swasta">Kualitas</button>      
                </div>
                <div id="mix-container">
                    <div class="col-xs-4 no-padding-left mix swasta">
                        <div class="entitas-filter row">
                            <div class="col-xs-12 no-padding">
                                <p class="entitas-heading filter-heading">SMPN 1 Malang</p>
                            </div>                            
                            <div class="col-xs-5 entitas-filter-left">
                               <img src="assets/img/logo-smp/SMPN_1_MALANG_2.png" width="90" height="90">
                               <p>Skor Kualitas : <span>88</span></p>
                            </div>
                            <div class="col-xs-7 grafik-detail no-padding-right">
                               <p class="grafik-detail-heading filter-detail-heading">Nilai Parameter<i class="fa fa-angle-down" aria-hidden="true"></i></p>
                                <ul class="filter-ul">
                                    <li><span class="icon-final fa fa-square" style="color:#ff6c60"></span><p class="nama-icon-final">Fasilitas<span class="label label-success">Bagus</span></p></li>
                                    <li><span class="icon-final fa fa-square" style="color:#36bc9b"></span><p class="nama-icon-final">Guru<span class="label label-success">Bagus</span></p></li>
                                    <li><span class="icon-final fa fa-square" style="color:#967adc"></span><p class="nama-icon-final">Siswa<span class="label label-success">Bagus</span></p></li>
                                    <li><span class="icon-final fa fa-square" style="color:#d870ad"></span><p class="nama-icon-final">Ekstrakulikuler<span class="label label-success">Bagus</span></p></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 filter-btn-wrap">
                                <button name="singlebutton" class="btn btn-primary filter-detail-button center-block">Detail<i class="fa fa-angle-right" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 no-padding-left mix swasta">
                        <div class="entitas-filter row">
                            <div class="col-xs-12 no-padding">
                                <p class="entitas-heading filter-heading">SMPN 1 Malang</p>
                            </div>                            
                            <div class="col-xs-5 entitas-filter-left">
                               <img src="assets/img/logo-smp/SMPN_1_MALANG_2.png" width="90" height="90">
                               <p>Skor Kualitas : <span>88</span></p>
                            </div>
                            <div class="col-xs-7 grafik-detail no-padding-right">
                               <p class="grafik-detail-heading filter-detail-heading">Nilai Parameter<i class="fa fa-angle-down" aria-hidden="true"></i></p>
                                <ul class="filter-ul">
                                    <li><span class="icon-final fa fa-square" style="color:#ff6c60"></span><p class="nama-icon-final">Fasilitas<span class="label label-success">Bagus</span></p></li>
                                    <li><span class="icon-final fa fa-square" style="color:#36bc9b"></span><p class="nama-icon-final">Guru<span class="label label-success">Bagus</span></p></li>
                                    <li><span class="icon-final fa fa-square" style="color:#967adc"></span><p class="nama-icon-final">Siswa<span class="label label-success">Bagus</span></p></li>
                                    <li><span class="icon-final fa fa-square" style="color:#d870ad"></span><p class="nama-icon-final">Ekstrakulikuler<span class="label label-success">Bagus</span></p></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 filter-btn-wrap">
                                <button name="singlebutton" class="btn btn-primary filter-detail-button center-block">Detail<i class="fa fa-angle-right" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 no-padding-left mix negeri">
                        <div class="entitas-filter row">
                            <div class="col-xs-12 no-padding">
                                <p class="entitas-heading filter-heading">SMPN 1 Malang</p>
                            </div>                            
                            <div class="col-xs-5 entitas-filter-left">
                               <img src="assets/img/logo-smp/SMPN_1_MALANG_2.png" width="90" height="90">
                               <p>Skor Kualitas : <span>88</span></p>
                            </div>
                            <div class="col-xs-7 grafik-detail no-padding-right">
                               <p class="grafik-detail-heading filter-detail-heading">Nilai Parameter<i class="fa fa-angle-down" aria-hidden="true"></i></p>
                                <ul class="filter-ul">
                                    <li><span class="icon-final fa fa-square" style="color:#ff6c60"></span><p class="nama-icon-final">Fasilitas<span class="label label-success">Bagus</span></p></li>
                                    <li><span class="icon-final fa fa-square" style="color:#36bc9b"></span><p class="nama-icon-final">Guru<span class="label label-success">Bagus</span></p></li>
                                    <li><span class="icon-final fa fa-square" style="color:#967adc"></span><p class="nama-icon-final">Siswa<span class="label label-success">Bagus</span></p></li>
                                    <li><span class="icon-final fa fa-square" style="color:#d870ad"></span><p class="nama-icon-final">Ekstrakulikuler<span class="label label-success">Bagus</span></p></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 filter-btn-wrap">
                                <button name="singlebutton" class="btn btn-primary filter-detail-button center-block">Detail<i class="fa fa-angle-right" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 no-padding-left mix negeri">
                        <div class="entitas-filter row">
                            <div class="col-xs-12 no-padding">
                                <p class="entitas-heading filter-heading">SMPN 1 Malang</p>
                            </div>                            
                            <div class="col-xs-5 entitas-filter-left">
                               <img src="assets/img/logo-smp/SMPN_1_MALANG_2.png" width="90" height="90">
                               <p>Skor Kualitas : <span>88</span></p>
                            </div>
                            <div class="col-xs-7 grafik-detail no-padding-right">
                               <p class="grafik-detail-heading filter-detail-heading">Nilai Parameter<i class="fa fa-angle-down" aria-hidden="true"></i></p>
                                <ul class="filter-ul">
                                    <li><span class="icon-final fa fa-square" style="color:#ff6c60"></span><p class="nama-icon-final">Fasilitas<span class="label label-success">Bagus</span></p></li>
                                    <li><span class="icon-final fa fa-square" style="color:#36bc9b"></span><p class="nama-icon-final">Guru<span class="label label-success">Bagus</span></p></li>
                                    <li><span class="icon-final fa fa-square" style="color:#967adc"></span><p class="nama-icon-final">Siswa<span class="label label-success">Bagus</span></p></li>
                                    <li><span class="icon-final fa fa-square" style="color:#d870ad"></span><p class="nama-icon-final">Ekstrakulikuler<span class="label label-success">Bagus</span></p></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 filter-btn-wrap">
                                <button name="singlebutton" class="btn btn-primary filter-detail-button center-block">Detail<i class="fa fa-angle-right" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 no-padding-left mix negeri">
                        <div class="entitas-filter row">
                            <div class="col-xs-12 no-padding">
                                <p class="entitas-heading filter-heading">SMPN 1 Malang</p>
                            </div>                            
                            <div class="col-xs-5 entitas-filter-left">
                               <img src="assets/img/logo-smp/SMPN_1_MALANG_2.png" width="90" height="90">
                               <p>Skor Kualitas : <span>88</span></p>
                            </div>
                            <div class="col-xs-7 grafik-detail no-padding-right">
                               <p class="grafik-detail-heading filter-detail-heading">Nilai Parameter<i class="fa fa-angle-down" aria-hidden="true"></i></p>
                                <ul class="filter-ul">
                                    <li><span class="icon-final fa fa-square" style="color:#ff6c60"></span><p class="nama-icon-final">Fasilitas<span class="label label-success">Bagus</span></p></li>
                                    <li><span class="icon-final fa fa-square" style="color:#36bc9b"></span><p class="nama-icon-final">Guru<span class="label label-success">Bagus</span></p></li>
                                    <li><span class="icon-final fa fa-square" style="color:#967adc"></span><p class="nama-icon-final">Siswa<span class="label label-success">Bagus</span></p></li>
                                    <li><span class="icon-final fa fa-square" style="color:#d870ad"></span><p class="nama-icon-final">Ekstrakulikuler<span class="label label-success">Bagus</span></p></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 filter-btn-wrap">
                                <button name="singlebutton" class="btn btn-primary filter-detail-button center-block">Detail<i class="fa fa-angle-right" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 no-padding-left mix negeri">
                        <div class="entitas-filter row">
                            <div class="col-xs-12 no-padding">
                                <p class="entitas-heading filter-heading">SMPN 1 Malang</p>
                            </div>                            
                            <div class="col-xs-5 entitas-filter-left">
                               <img src="assets/img/logo-smp/SMPN_1_MALANG_2.png" width="90" height="90">
                               <p>Skor Kualitas : <span>88</span></p>
                            </div>
                            <div class="col-xs-7 grafik-detail no-padding-right">
                               <p class="grafik-detail-heading filter-detail-heading">Nilai Parameter<i class="fa fa-angle-down" aria-hidden="true"></i></p>
                                <ul class="filter-ul">
                                    <li><span class="icon-final fa fa-square" style="color:#ff6c60"></span><p class="nama-icon-final">Fasilitas<span class="label label-success">Bagus</span></p></li>
                                    <li><span class="icon-final fa fa-square" style="color:#36bc9b"></span><p class="nama-icon-final">Guru<span class="label label-success">Bagus</span></p></li>
                                    <li><span class="icon-final fa fa-square" style="color:#967adc"></span><p class="nama-icon-final">Siswa<span class="label label-success">Bagus</span></p></li>
                                    <li><span class="icon-final fa fa-square" style="color:#d870ad"></span><p class="nama-icon-final">Ekstrakulikuler<span class="label label-success">Bagus</span></p></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 filter-btn-wrap">
                                <button name="singlebutton" class="btn btn-primary filter-detail-button center-block">Detail<i class="fa fa-angle-right" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 footer">
                <div class="footer-inner">
                   <span>2016&copy;SIPUT by</span>
                   <a href="">TechnoCode</a>
                    <img src="assets/img/logo50.png" height="30" width="30">
                </div>
            </div>
        </div>
    </div>
<!--    </div>-->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
                    <script>
        $(document).ready(function(){
            $(function(){
  $('#mix-container').mixItUp();
});
        })
    </script>
    <script>
        $('#afif').click(function(e){
            e.preventDefault();
            if($('#afif').hasClass('afif-aktif')){
                $('.left-nav-wrap').animate({width:'10%'});
                $('.left-menu').animate({width:'10%'});
                $('.content').animate({width:'90%'});
                $('#afif').removeClass('afif-aktif');
            }
            else{
                $('.left-nav-wrap').animate({width:'16.66666667%'});
                $('.left-menu').animate({width:'16.66666667%'});
    $('.content').animate({width:'83.33333333%'});
    $('#afif').addClass('afif-aktif');   
            }
});
    </script>
</body>

</html>