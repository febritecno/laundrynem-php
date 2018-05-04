<?
require 'utama.php';
open_connection();

$nik = $_POST['nik'];
$nm = $_POST['nm'];
$al = $_POST['al'];

if(isset($nik) && isset($nm) && isset($al)){
  $res2 = mysql_query("INSERT INTO pembelian values('$nik','$nm','$al')");
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