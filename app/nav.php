<!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    
<? if ($_SESSION['typeuser'] == "admin")
{ 

                                    echo '</span><span></span>Admin'.' '.$_SESSION['username'];
               
                                    }else {
                                        echo '</span><span></span>Karyawan'.' '.$_SESSION['username'];
                                    }
                                    
                ?>

                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">

             <?    if ($_SESSION['typeuser']=='admin') {                   
                                        echo '<li>';
                                       echo '<a href="karyawan1">';
                                         echo   '<span class="badge bg-red pull-right"><i class="fa fa-spin fa-refresh"></i></span>';
                                           echo '<span>Tambah Karyawan</span>';
                                        echo '</a></li>';
                                    }
     
     ?>
                                <li><a href="help"><span class="badge bg-blue pull-right"><i class="fa fa-flag"></i></span><span>Help !</span></a></li> 

                                    <li><a href="logout"><span class="badge bg-black pull-right"><i class="fa fa-sign-out pull-right"></i></span><b>Log Out</b></a>
                                    </li>
                                </ul>
                            </li>

                    </nav>
                </div>

            </div>
            <!-- /top navigation -->
			
			<!--konten-->
			       <!-- page content -->
            <div class="right_col" role="main">

                <br />
<!--konten-->