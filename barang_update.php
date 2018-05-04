<?
require 'utama.php';
open_connection();

$kb = $_POST['kb'];
$nb = $_POST['nb'];
$sb = $_POST['sb'];
$tus = $_POST['tus'];

if(isset($nb) && isset($sb) && isset($tus)){
  $res2 = mysql_query("UPDATE barang SET nama_barang='$nb',stok='$sb',tgl_update_stok='$tus' where kode_barang='$kb'");
  if($res2){
    echo "Success Update Data";
  } else{
    echo "Fail Update Data";
  }
} else{
  echo "Error Update Data";
}
?> 