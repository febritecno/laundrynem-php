<?
require 'utama.php';
open_connection();

$nik = $_POST['nik'];
if(isset($nik)){
  $res2 = mysql_query("DELETE FROM pemakaian_barang where id_keluar='$nik'");
  if($res2){
    echo "Alhamdullilah, Sukses Hapus data";
  } else
    echo "Opps, Galat Hapus Data";
} else{
  echo "Fatal Eror Parsing Delete Data !!";
}
koneksi_tutup();
?>