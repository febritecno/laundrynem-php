<?
require 'utama.php';
open_connection();

$nik = $_POST['nik'];
$nm = $_POST['nm'];

if(isset($nm)){
  $res2 = mysql_query("UPDATE rincian_pembelian SET jumlah='$nm' where no_rincian='$nik'");
  if($res2){
    echo "Success Update Data";
  } else{
    echo "Fail Update Data";
  }
} else{
  echo "Error Update Data";
}
?> 