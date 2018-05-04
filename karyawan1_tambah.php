<?
require 'utama.php';
open_connection();

$nik = $_POST['nik'];
$nm = $_POST['nm'];
$al = $_POST['al'];
$nt = $_POST['nt'];
$jk = $_POST['jk'];
$ps = $_POST['ps'];
$tu = $_POST['tu'];

if(isset($nik) && isset($nm) && isset($al) && isset($nt) && isset($ps) && isset($tu) && isset($jk)){
  $res2 = mysql_query("INSERT INTO karyawan values('$nik','$nm','$al','$nt','$jk')");
  $res3 = mysql_query("INSERT INTO login values('$nm','$ps','$tu','$nik')");
  if($res2){
    echo "Alhamdullilah, Data Sukses Di Tambahkan :)";
if($res3){
		echo "";
}else{
	echo "";
}
  } else{
    echo "Opps, Terjadi Gagal Parsing Post Data";
  }
} else{
  echo "Fatal Error Post Data";
}

koneksi_tutup();
?>