<?
require 'utama.php';
open_connection();

$ir = $_POST['ir'];
$jl = $_POST['jl'];

if(isset($ir) && isset($jl)){
  $res2 = mysql_query("INSERT INTO rincian_transaksi values('$ir','$jl')");
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