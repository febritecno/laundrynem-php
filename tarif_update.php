<?
require 'utama.php';
open_connection();

$ia = $_POST['ia'];
$np = $_POST['np'];
$tr = $_POST['tr'];

if(isset($ia)){
  $res2 = mysql_query("UPDATE tarif SET nama_pakaian='$np', tarif='$tr' where id_tarif='$ia'");
  if($res2){
    echo "Success Update Data";
  } else{
    echo "Fail Update Data";
  }
} else{
  echo "Error Update Data";
}
?> 