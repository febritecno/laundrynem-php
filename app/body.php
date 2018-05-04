
<div class="fakeloader">
                    </div>
<body class="nav-md" onload="viewdata()">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="menu.php" class="site_title"><i class="fa fa-tasks"></i> <span> LAUNDRY</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <!--editgambar-->
                            <img src="image/a.png" alt="..." class="img-circle profile_img">
                        
                        </div>
                        <div class="profile_info">
                        <!--editjeneng-->
<?
if ($_SESSION['typeuser']=='admin'){
            echo '<span>Halo Admin,</span>';
            echo '<h2>'.$_SESSION['username'].'</h2>';

}else {
                        echo '<span>Hai Karyawan,</span>';
            echo '<h2>'.$_SESSION['username'].'</h2>';
}

                            
?>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />
