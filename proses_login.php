<? 


session_start();
require 'utama.php';
$username = $_POST['username'];
$password = $_POST['password'];
$y=open_connection();
// query untuk mendapatkan record dari username
$query = "SELECT * FROM login WHERE username = '$username'";
$hasil = mysql_query($query,$y);
$data = mysql_fetch_array($hasil);
// cek kesesuaian password
if ($password == $data['password'])
{
    // menyimpan username dan level ke dalam session
    // 
    // 
    echo "<script>window.location='menu'</script>";
    $_SESSION['typeuser'] = $data['typeuser'];
    $_SESSION['username'] = $data['username'];
}
else { 
echo "<script>alert('MAAF USER DAN PASSWORD TIDAK TERSEDIA')</script>";
echo "<script>window.location='index'</script>";
}

/*require("utama.php");
$koneksi=open_connection();
$cek = "SELECT * from login where username='$_POST[username]' and password='$_POST[password]'";
$hasil = mysql_query($cek);
$hasil_cek = mysql_num_rows($hasil);
if ($hasil_cek==0){
echo "<script>alert('MAAF USER DAN PASSWORD TIDAK TERSEDIA')</script>";
echo "<script>window.location='index'</script>";
}else{
header("location:menu");
$_SESSION['$_POST[username]'.'$_POST[password]']=1;

}*/

?>