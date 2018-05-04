<?
require 'utama.php';
open_connection();

$nik = $_POST['is'];
$nm = $_POST['ns'];
$al = $_POST['as'];
$nt = $_POST['nt'];


if(isset($nik) && isset($nm) && isset($al) && isset($nt)){
  $res2 = mysql_query("INSERT INTO suplier values('$nik','$nm','$al','$nt')");
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