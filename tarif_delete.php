<?
require 'utama.php';
open_connection();

$ia = $_POST['ia'];
if(isset($ia)){
  $res2 = mysql_query("DELETE FROM tarif where id_tarif='$ia'");
  if($res2){
    echo "Alhamdullilah, Sukses Hapus data";
  } else
    echo "Opps, Galat Hapus Data";
} else{
  echo "Fatal Eror Parsing Delete Data !!";
}
koneksi_tutup();
?>