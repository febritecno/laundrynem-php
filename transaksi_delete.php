<?
require 'utama.php';
open_connection();

$it = $_POST['it'];
if(isset($it)){
  $res2 = mysql_query("DELETE FROM transaksi where no_transaksi='$it'");
  if($res2){
    echo "Alhamdullilah, Sukses Hapus data";
  } else
    echo "Opps, Galat Hapus Data";
} else{
  echo "Fatal Eror Parsing Delete Data !!";
}
koneksi_tutup();
?>