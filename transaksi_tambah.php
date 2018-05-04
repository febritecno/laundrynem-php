<?
require 'utama.php';
open_connection();

$it = $_POST['it'];
$tt = $_POST['tt'];
$ta = $_POST['ta'];
$ds = $_POST['ds'];
$ni =$_POST['ni'];
$kd =$_POST['kd'];


if(isset($it) && isset($tt) && isset($ta) && isset($ds) && isset($ni) && isset($kd)){
  $res2 = mysql_query("INSERT INTO transaksi values('$it','$tt','$kd','$ni','$ta','$ds')");
  if($res2){
    echo "Alhamdullilah, Data Sukses Di Tambahkan :)";
  } else{
    echo "Opps, Terjadi Gagal Parsing Post Data";
  }
} else{
  echo "Fatal Error Post Data";
}

koneksi_tutup();
?>