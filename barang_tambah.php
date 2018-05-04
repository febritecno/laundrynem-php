<?
require 'utama.php';
open_connection();

$kb = $_POST['kb'];
$nb = $_POST['nb'];
$sb = $_POST['sb'];
$tus = $_POST['tus'];

if(isset($kb) && isset($nb) && isset($sb) && isset($tus)){
  $res2 = mysql_query("INSERT INTO barang values('$kb','$nb','$sb','$tus')");
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