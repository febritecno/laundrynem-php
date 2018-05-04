<?
require 'utama.php';
open_connection();

$nik = $_POST['nik'];
$nm = $_POST['nm'];
$al = $_POST['al'];

if(isset($nm) && isset($al)){
  $res2 = mysql_query("UPDATE pembelian SET tgl_pembelian='$nm',total_biaya='$al' where no_pembelian='$nik'");
  if($res2){
    echo "Success Update Data";
  } else{
    echo "Fail Update Data";
  }
} else{
  echo "Error Update Data";
}
?> 