<? require("app/head.php"); ?>

  
<div class="fakeloader">
                    </div>
<body class="nav-md">

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


            <? require("app/side.php");?>
                
                <? require("app/nav.php"); ?>


<div class="row">
                        <div class="col-md-12">
                            <div class="x_panel">
                                
                                    
                            </div>
                        </div>
                    </div>








<?
include 'utama.php';
?>







                    <div class="row top_tiles">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="1">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                                </div>
                                <div class="count">
                                    

<?
$link=open_connection();
$result = mysql_query("SELECT * FROM transaksi", $link);
$num_rows = mysql_num_rows($result);

echo "$num_rows \n";
?>

                                </div>

                                <h3>Transaksi</h3>
                                <p>Jumlah data transaksi laundry.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="2">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-cube"></i>
                                </div>
                                <div class="count">
<?
$link=open_connection();
$result = mysql_query("SELECT * FROM barang", $link);
$num_rows = mysql_num_rows($result);

echo "$num_rows \n";
?>

                                </div>

                                <h3>Barang</h3>
                                <p>jumlah data barang yang telah di inputkan.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="3">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-sort-amount-desc"></i>
                                </div>
                                <div class="count">
                                    
<?
$link=open_connection();
$result = mysql_query("SELECT * FROM karyawan", $link);
$num_rows = mysql_num_rows($result);

echo "$num_rows \n";
?>

                                </div>

                                <h3>Karyawan</h3>
                                <p>Lorem ipsum psdea itgum rixt.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="4">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-check-square-o"></i>
                                </div>
                                <div class="count">

                                  <?
$link=open_connection();
$result = mysql_query("SELECT * FROM suplier", $link);
$num_rows = mysql_num_rows($result);

echo "$num_rows \n";
?>  


                                </div>

                                <h3>Suplier</h3>
                                <p>Lorem ipsum psdea itgum rixt.</p>
                            </div>
                        </div>



                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="5">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-user"></i>
                                </div>
                                <div class="count">

                                  <?
$link=open_connection();
$result = mysql_query("SELECT * FROM konsumen", $link);
$num_rows = mysql_num_rows($result);

echo "$num_rows \n";
?>  


                                </div>

                                <h3>Konsumen</h3>
                                <p>Lorem ipsum psdea itgum rixt.</p>
                            </div>
                        </div>





<!--
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                                </div>
                                <div class="count">5</div>

                                <h3>Jumlah Modul</h3>
                                <p>Lorem ipsum psdea itgum rixt.</p>
                            </div>
                        </div>
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-comments-o"></i>
                                </div>
                                <div class="count">
1

                                </div>

                                <h3>Jumlah Barang</h3>
                                <p>jumlah data barang pada database.</p>
                            </div>
                        </div>
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-sort-amount-desc"></i>
                                </div>
                                <div class="count">179</div>

                                <h3>New Sign ups</h3>
                                <p>Lorem ipsum psdea itgum rixt.</p>
                            </div>
                        </div>
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-check-square-o"></i>
                                </div>
                                <div class="count">179</div>

                                <h3>New Sign ups</h3>
                                <p>Lorem ipsum psdea itgum rixt.</p>
                            </div>



                            </div>



-->

<!--<script>

$("#1").hover(function(){
    $(this).stop(true, false).animate({ width: "1117" });
},function() {
    $(this).stop(true, false).animate({ width: "278px" });
});

$("#2").hover(function(){
    $(this).stop(true, false).animate({ 

        width: "1117" });
}, function() {
    $(this).stop(true, false).animate({ width: "278px" });
});

$("#3").hover(function(){
    $(this).stop(true, false).animate({ width: "1117" });
}, function() {
    $(this).stop(true, false).animate({ width: "278px" });
});
$("#4").hover(function(){
    $(this).stop(true, false).animate({ width: "1117" });
}, function() {
    $(this).stop(true, false).animate({ width: "278px" });
});
</script>-->

                                <? require("app/footer.php"); ?>