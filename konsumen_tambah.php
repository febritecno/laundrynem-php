<?
require 'utama.php';
open_connection();

$ik = $_POST['ik'];
$nk = $_POST['nk'];
$ak = $_POST['ak'];
$nt = $_POST['nt'];

if(isset($ik) && isset($nk) && isset($ak) && isset($nt)){
  $res2 = mysql_query("INSERT INTO konsumen values('$ik','$nk','$ak','$nt')");
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