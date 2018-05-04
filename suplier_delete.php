<?
require 'utama.php';
open_connection();

$is = $_POST['is'];
if(isset($is)){
  $res2 = mysql_query("DELETE FROM suplier where id_suplier='$is'");
  if($res2){
    echo "Alhamdullilah, Sukses Hapus data";
  } else
    echo "Opps, Galat Hapus Data";
} else{
  echo "Fatal Eror Parsing Delete Data !!";
}
koneksi_tutup();
?>