<? session_start();
if (isset($_SESSION['typeuser']))
{
   // jika kondisi level user maka akan diarahkan ke halaman lain
    $_SESSION['typeuser'] == "karyawan";
}
if (!isset($_SESSION['typeuser']))
{
 header('location:404.html');
}
/*if(!session_is_registered('$_POST[username]'.'$_POST[password]')){
header("location:404.html");}*/
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->


    <!--<meta http-equiv="refresh" content="5"/>-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> LAUNDRY </title>




    <!-- Bootstrap core CSS -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->

    <link href="css/bootstrap.css" rel="stylesheet">

    <!--
    <link href="css/datatables/tools/css/dataTables.tableTools.css" rel="stylesheet">
-->

        <link rel="stylesheet" href="css/demo.css">
        
          <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/fakeLoader.css">
    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->

    <link href="/css/datatables/jquery.dataTables.css" type="stylesheet">
    
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>

    <script src="js/nprogress.js"></script>
    <script src="js/fakeLoader.min.js"></script>
    <script>
              $(document).ready(function(){
                $(".fakeloader").fakeLoader({
                    zIndex:"1000",
                    timeToHide:500,
                    bgColor:"#00C853",
                    spinner:"spinner7"
                });
            });
//Increment 
var interval = setInterval(function() { NProgress.inc(); }, 200);
$(document).ready(function(){
     NProgress.set(10);
    
    clearInterval(interval);

        NProgress.start();
NProgress.set(10);
 clearInterval(interval);

       
});
    </script>

    <!-- PNotify -->
    <script type="text/javascript" src="js/notify/pnotify.core.js"></script>
    <script type="text/javascript" src="js/notify/pnotify.buttons.js"></script>

<!-- ajax refresh
<script type="text/JavaScript">

function timedRefresh(timeoutPeriod) {
    setTimeout("location.reload(true);",timeoutPeriod);
}

window.onload = timedRefresh(20000);
</script>
-->
    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>