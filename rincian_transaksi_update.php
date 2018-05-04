<?
require 'utama.php';
open_connection();

$ir = $_POST['ir'];
$jl = $_POST['jl'];

if(isset($ir)){
  $res2 = mysql_query("UPDATE rincian_transaksi SET jumlah='$jl' where id_rincian='$ir'");
  if($res2){
    echo "Success Update Data";
  } else{
    echo "Fail Update Data";
  }
} else{
  echo "Error Update Data";
}
?> 