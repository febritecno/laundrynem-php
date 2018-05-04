<?
require 'utama.php';
open_connection();

$it = $_POST['it'];
$tt = $_POST['tt'];
$ta = $_POST['ta'];
$ds = $_POST['ds'];
$ni =$_POST['ni'];
$kd =$_POST['kd'];

if(isset($tt) && isset($ta) && isset($ds)  && isset($ni)&& isset($kd)){
  $res2 = mysql_query("UPDATE transaksi SET tgl_transaksi='$tt', tgl_ambil='$ta', diskon='$ds',nik='$ni',kode_konsumen='$kd' where no_transaksi='$it'");
  if($res2){
    echo "Success Update Data";
  } else{
    echo "Fail Update Data";
  }
} else{
  echo "Error Update Data";
}
?> 