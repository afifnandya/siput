<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/font-awesome-4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/login.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/font/flaticon.css">
</head>
<style>
    body{
    background-image: url(<?php echo base_url()?>assets/img/bexy.jpg);
    background-repeat: no-repeat;
}
</style>
<body>
<div class="container">
    <div class="login">
        <div class="col-xs-5 col-centered">
            <div>
                <div class="top-section">
                    <p class="siput-header">SIPUT</p>
                    <p class="siput-subheader">Sistem Informasi Pemerataan Kualitas Pendidikan</p>
                </div>
                <div class="down-section">
                    <div class="inner-down">
                        <p class="login-header">Login</p>
                        <p class="login-subheader">Masukkan Username dan Password</p>
                        <form action="">
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
                                    <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></div>
                                    <input type="password" class="form-control" id="exampleInputAmount" placeholder="Amount">
                                </div>
                            </div>
                            <input type="submit" value="Log In" class="login-btn center-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/holder.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.classyloader.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/slick.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/Chart.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/siput.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.waypoints.min.js"></script>
    <script type="text/javascript"src="<?php echo base_url() ?>assets/js/jquery.counterup.min.js"></script>
</body>

</html>