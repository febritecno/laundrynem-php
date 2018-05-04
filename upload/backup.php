<? require("app/head.php"); ?>

<?

error_reporting(0);
header("Last-Modified: " .gmdate("D, d M Y H:i:s"). " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=, pre-check=0", false);

@session_start();
set_time_limit(0);
require ("config_con.php");

  $myFile = "alamat.txt";
  $fh = fopen($myFile, 'r');
  $theData = fread($fh, filesize($myFile));
  fclose($fh);
    
?>

<style>


.br_dropzone {
  position: relative;
  border: 1px solid rgba(#000, 0.1);
  width: 100%;
  height: 256px;
  display: block;
  border-radius: 4px;
  box-sizing: border-box;
  
  background-image: linear-gradient(135deg,rgba(0,0,0,.03)25%, transparent 25%, transparent 50%, rgba(0,0,0,.03)50%, rgba(0,0,0,.03)75%, transparent 75%, transparent);
  background-color: #FAFCFD;
  background-size: 16px 16px;
}

.br_dropzone input[type=file] {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 0;
  font-size: 2rem;
  opacity: 0;
  width: 100%;
  height: 100%;
  cursor: pointer;
  box-sizing: border-box;
}

.br_dropzone input[type=text] {
  background: none;
  border: none;
  padding: 0.5em;
  width: 100%;
  height: 100%;
  text-align: center;
  font-size: 2rem;
  box-sizing: border-box;
}

.br_dropzone.dragover {
  background-color: #eee;
  border: 6px dashed rgba(#000, 0.1);
}


.demo-title {
  text-align: center;
  font-size: 3rem;
  margin-top :50px;
  margin-bottom: 50px;
}

.pricing-table {
  display: table;
  width: 100%;

}


.pricing-table .pricing-option {
  width: 70%;
  background: white;
  float: left;
  padding: 2%;
  
  margin-left :15%;
  text-align: center;
  -webkit-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}
.pricing-table .pricing-option:nth-child(even) {
  margin: 0 2%;
}
.pricing-table .pricing-option:hover {
  cursor: pointer;
  box-shadow: 0px 2px 30px rgba(0, 0, 0, 0.3);
  -webkit-transform: scale(1.04);
          transform: scale(1.04);
}
.pricing-table .pricing-option:hover i, .pricing-table .pricing-option:hover h1, .pricing-table .pricing-option:hover span, .pricing-table .pricing-option:hover b {
  color: #F85E6A;
}
.pricing-table .pricing-option:hover .front {
  opacity: 0;
  visibility: hidden;
}
.pricing-table .pricing-option:hover .back {
  opacity: 1 !important;
  visibility: visible !important;
}
.pricing-table .pricing-option:hover .back input.button {
  -webkit-transform: translateY(0px) !important;
          transform: translateY(0px) !important;
}
.pricing-table .pricing-option hr {
  border: none;
  border-bottom: 1px solid #F0F0F0;
}
.pricing-table .pricing-option i {
  font-size: 3rem;
  color: #D8D8D8;
  -webkit-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}
.pricing-table .pricing-option h1 {
  margin: 10px 0;
  color: #212121;
  -webkit-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}
.pricing-table .pricing-option p {
  color: #999;
  padding: 0 10px;
  line-height: 1.3;
}
.pricing-table .pricing-option .price {
  position: relative;
}
.pricing-table .pricing-option .price .front span.price {
  font-size: 2rem;
  text-transform: uppercase;
  margin-top: 20px;
  display: block;
  font-weight: 700;
  position: relative;
}
.pricing-table .pricing-option .price .front span.price b {
  position: absolute;
  font-size: 1rem;
  margin-left: 2px;
  font-weight: 600;
}
.pricing-table .pricing-option .price .back {
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}
.pricing-table .pricing-option .price .back input.button {
  background: #F85E6A;
  padding: 15px 20px;
  display: inline-block;
  text-decoration: none;
  color: white;
  position: absolute;
  font-size: 13px;
  top: -5px;
  left: 0;
  right: 0;
  width: 150px;
  margin: auto;
  text-transform: uppercase;
  -webkit-transform: translateY(20px);
          transform: translateY(20px);
  -webkit-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}
.pricing-table .pricing-option .price .back input.button:hover {
  background: #f62d3d;
}

@media screen and (max-width: 600px) {
  .pricing-table .pricing-option {
    padding: 5%;
    width: 90%;
  }
  .pricing-table .pricing-option:nth-child(even) {
    margin: 30px 0 !important;
  }
}

</style>


<script scr="js/dropzone/dropzone.js" type="text/javascript"></script>



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




<?

if(isset($_REQUEST['restore'])){
	$filename=$_FILES['file']['tmp_name'];
	restore_data($_hostname, $_user , $_password, $_database, $filename );
	
	
	echo '<script>alert("Sukses Restore Database !!");</script>';

}else if(isset($_REQUEST['backup'])){

	$handle = fopen('alamat.txt','w+');
	fwrite($handle,$_REQUEST['txt_destini']);
	fclose($handle);
	
backup_tables($_hostname,$_user,$_password,$_database, $_REQUEST['txt_destini']);
	
  echo '<script>alert("Sukses Backup Database !!");</script>';
}

?>


            <!-- page content -->
            <div role="main">

<h1 class="demo-title">Backup & Restore Database *.SQL</h1>

                    <div class="row">


<form action="" enctype="multipart/form-data" method="post">


                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Backup Database<small></small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link" style="margin-left: 50px;"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">




<div class="pricing-table">
    <div class="pricing-option">
        <i class="fa fa-suitcase"></i>
        <h1>Backup Current Database</h1>
        <hr />
                        

        <p>Backup Data adalah program keamanan untuk memberikan sebuah keamanan kepada database dalam sistem. Agar dapat menjaga sistem utuh dan dapat di restore kembali dalam system yang baru. </p>
        <p>Apapun cara untuk backup adalah tulis lokasi directory yang akan menjadi tempat backup tujuan, contoh Drive E: -> tulis E:[nama folder backup yang kamu hendaki], sesudah itu muncul folder dan didalamnya ada format *.sql -> format database sistem.</p>
        <hr />


   <div class="form-group">
              <label for="txt_destini">Lokasi Save file *.sql</label>
              <input type="text" class="form-control" name="txt_destini" size="55" id="txt_destini" value="<? echo $theData;?>">
                   </div>

        <div class="price">
            <div class="front">
                <span class="price">Hover<b>Me</b></span>
            </div>
            <div class="back">
                <input class="button" name="backup" type="submit" id="backup" value="Backup Data">
            </div>
        </div>
    </div>
    

  </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Restore Database <small></small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link" style="margin-left: 50px;"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    
<div class="pricing-table">
  <div class="pricing-option">
        <i class="fa fa-user"></i>
        <h1>Restore Your Database</h1>
        <hr />

		
  <label for="file" class="br_dropzone">
    <input type="file" id="file" name="file" size="55" onchange="this.form.fileName.value = this.value">
    <input type="text" id="fileName" name="fileName" placeholder="Seret File Kesini (Atau click)" readonly>
  </label>
        <hr />
        <div class="price">
            <div class="front">
                <span class="price">Hover<b>Me</b></span>
            </div>
            <div class="back">
                <input class="button" name="restore" type="submit" id="restore" value="Restore Data">
            </div>
        </div>
    </div>

  </div>

  





                                </div>
                            </div>
                        </div>
                            </form>

                            </div>
                        </div>



  </div>
<!--konten-->

    <script src="js/bootstrap.min.js"></script>

    <!-- bootstrap progress js -->
    <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="js/nicescroll/jquery.nicescroll.min.js"></script>

<!--
        <script src="js/datatables/js/jquery.dataTables.js"></script>
        <script src="js/datatables/tools/js/dataTables.tableTools.js"></script>
-->
    <script src="js/custom.js"></script>


    <!-- flot js -->
    <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
    <script>
    
NProgress.configure({ easing: 'ease', speed: 5000 });
NProgress.configure({ trickleRate: 0.02, trickleSpeed: 2000 });
NProgress.done();
    </script>


<script type="text/javascript">
var onDragEnter = function (event) {
    //event.preventDefault();
    $(".br_dropzone").addClass("dragover");
},
 
onDragOver = function (event) {
    event.preventDefault();
    if (!$(".br_dropzone").hasClass("dragover"))
        $(".br_dropzone").addClass("dragover");
},
 
onDragLeave = function (event) {
    event.preventDefault();
    $(".br_dropzone").removeClass("dragover");
},
 
onDrop = function (event) {
    //event.preventDefault();
    $(".br_dropzone").removeClass("dragover");
    $(".br_dropzone").addClass("dragdrop");
    console.log(event.originalEvent.dataTransfer.files);
};
 
$(".br_dropzone")
.on("dragenter", onDragEnter)
.on("dragover", onDragOver)
.on("dragleave", onDragLeave)
.on("drop", onDrop);


    </script>

</body>
</html>