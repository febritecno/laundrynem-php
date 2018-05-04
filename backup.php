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






      <? require("backup_restore.php"); ?>




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