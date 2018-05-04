<?
require 'utama.php';
open_connection();

$is = $_POST['is'];
$ns = $_POST['ns'];
$as = $_POST['as'];
$nt = $_POST['nt'];

if(isset($ns) && isset($as) && isset($nt)){
  $res2 = mysql_query("UPDATE suplier SET nama_suplier='$ns', alamat_suplier='$as', tlp_suplier='$nt' where id_suplier='$is'");
  if($res2){
    echo "Success Update Data";
  } else{
    echo "Fail Update Data";
  }
} else{
  echo "Error Update Data";
}
?> 