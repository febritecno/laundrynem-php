<?
require 'utama.php';
open_connection();

$nik = $_POST['nik'];
$nm = $_POST['nm'];

if(isset($nik) && isset($nm)){
  $res2 = mysql_query("INSERT INTO rincian_pembelian values('$nik','$nm')");
  if($res2){
    echo "Alhamdullilah, Data Sukses Di Tambahkan :)";
  } else{
    echo "Opps, Terjadi Gagal Parsing Post Data";
  }
} else{
  echo "Fatal Error Post Data";
}

koneksi_tutup();
?>