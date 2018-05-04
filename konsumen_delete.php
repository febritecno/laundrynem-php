<?
require 'utama.php';
open_connection();

$ik = $_POST['ik'];
if(isset($ik)){
  $res2 = mysql_query("DELETE FROM konsumen where id_konsumen='$ik'");
  if($res2){
    echo "Alhamdullilah, Sukses Hapus data";
  } else
    echo "Opps, Galat Hapus Data";
} else{
  echo "Fatal Eror Parsing Delete Data !!";
}
koneksi_tutup();
?>