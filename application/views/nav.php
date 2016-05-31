    <nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-2 no-padding left-nav-wrap">
                    <div class="left-nav">
                        <p>SIPUT
                        <a href="<?php echo base_url() ?>javascript:" id="toggle-nav" class="toggle-nav-aktif"><i class="fa fa-bars"></i></a>
                        </p>
                    </div>
                </div>
                <div class="col-xs-7 no-padding">
                    <div class="center-nav">
                        <div class="search-nav">
                            <input type="text" placeholder="search" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-xs-3 no-padding dropdown fif">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                    <div class="right-nav">
                        <ul class="">
                           <li class="user-photo">
                                <img src="<?php echo base_url() ?>/assets/img/logo-dinas-pendidikan.png" height="40" width="40">
                            </li>
                            <li class="user-name">
                                <?php echo $this->session->userdata['isLogin']['Nama_admin']?><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('login/logout')?>">Logout<i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                            </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>