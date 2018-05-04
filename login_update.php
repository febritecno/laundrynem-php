<?
require 'utama.php';
open_connection();

$nik = $_POST['nik'];
$nm = $_POST['nm'];
$jk = $_POST['jk'];
$nk = $_POST['nk'];

if(isset($nm) && isset($jk) && isset($nk)){
  $res2 = mysql_query("UPDATE login SET password='$nm', typeuser='$jk', nik='$nk' where username='$nik'");
  if($res2){
    echo "Success Update Data";
  } else{
    echo "Fail Update Data";
  }
} else{
  echo "Error Update Data";
}
?> 