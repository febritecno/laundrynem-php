<?
require 'utama.php';
open_connection();

$ij = $_POST['ij'];
$nj = $_POST['nj'];

if(isset($nj)){
  $res2 = mysql_query("UPDATE jenis_laundry SET nama_jenis='$nj' where id_jenis='$ij'");
  if($res2){
    echo "Success Update Data";
  } else{
    echo "Fail Update Data";
  }
} else{
  echo "Error Update Data";
}
?>