<?
require 'utama.php';
open_connection();

$ik = $_POST['ik'];
$nk = $_POST['nk'];
$ak = $_POST['ak'];
$nt = $_POST['nt'];

if(isset($nk) && isset($ak) && isset($nt)){
  $res2 = mysql_query("UPDATE konsumen SET nama_konsumen='$nk', alamat_konsumen='$ak', tlp_konsumen='$nt' where id_konsumen='$ik'");
  if($res2){
    echo "Success Update Data";
  } else{
    echo "Fail Update Data";
  }
} else{
  echo "Error Update Data";
}
?> 