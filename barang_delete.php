<?
require 'utama.php';
open_connection();

$kb = $_POST['kb'];
if(isset($kb)){
  $res2 = mysql_query("DELETE FROM barang where kode_barang='$kb'");
  if($res2){
    echo "Alhamdullilah, Sukses Hapus data";
  } else
    echo "Opps, Galat Hapus Data";
} else{
  echo "Fatal Eror Parsing Delete Data !!";
}
koneksi_tutup();
?>