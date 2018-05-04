<?
require 'utama.php';
open_connection();

$ij = $_POST['ij'];
$nj = $_POST['nj'];

if(isset($ij) && isset($nj)){
  $res2 = mysql_query("INSERT INTO jenis_laundry values('$ij','$nj')");
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