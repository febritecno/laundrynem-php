<?
require 'utama.php';
open_connection();

$nik = $_POST['nik'];
$nm = $_POST['nm'];
$al = $_POST['al'];
$nt = $_POST['nt'];
$jk = $_POST['jk'];

if(isset($nm) && isset($al) && isset($nt) && isset($jk)){
  $res2 = mysql_query("UPDATE karyawan SET nm_karyawan='$nm', alamat_karyawan='$al', telp_karyawan='$nt', jenis_kelamin='$jk' where nik='$nik'");
  if($res2){
    echo "Success Update Data";
  } else{
    echo "Fail Update Data";
  }
} else{
  echo "Error Update Data";
}
?> 