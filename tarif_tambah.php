<?
require 'utama.php';
open_connection();

$ia = $_POST['ia'];
$np = $_POST['np'];
$tr = $_POST['tr'];

if(isset($ia) && isset($np) && isset($tr)){
  $res2 = mysql_query("INSERT INTO tarif values('$ia','$np','$tr')");
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