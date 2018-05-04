<?
require 'utama.php';
open_connection();

$ir = $_POST['ir'];
if(isset($ir)){
  $res2 = mysql_query("DELETE FROM rincian_transaksi where id_rincian='$ir'");
  if($res2){
    echo "Alhamdullilah, Sukses Hapus data";
  } else
    echo "Opps, Galat Hapus Data";
} else{
  echo "Fatal Eror Parsing Delete Data !!";
}
koneksi_tutup();
?>