<?
require 'utama.php';
open_connection();

$ij = $_POST['ij'];
if(isset($ij)){
  $res2 = mysql_query("DELETE FROM jenis_laundry where id_jenis='$ij'");
  if($res2){
    echo "Alhamdullilah, Sukses Hapus data";
  } else
    echo "Opps, Galat Hapus Data";
} else{
  echo "Fatal Eror Parsing Delete Data !!";
}
koneksi_tutup();
?>