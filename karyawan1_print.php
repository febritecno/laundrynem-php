<?

include('class.ezpdf.php');
$pdf=new Cezpdf();

mysql_connect("localhost","root","root");
mysql_select_db("laundry");

$sql=mysql_query("SELECT * FROM karyawan INNER JOIN login ON karyawan.nik=login.nik");
$i=1;
while($r=mysql_fetch_array($sql)){
    $data[$i]=array('No'=>$i,
                    'Nik'=>$r[nik],
                    'Nama Karyawan'=>$r[nm_karyawan],
                    'Alamat Karyawan'=>$r[alamat_karyawan],
                    'Telepon Karyawan'=>$r[telp_karyawan],
                    'Password'=>$r[password],
                    'Type User'=>$r[typeuser],
                    'Jenis Kelamin'=>$r[jenis_kelamin]);
                    $i++;
                    }
$options=array('shaded'=>50,'width'=>450,'height'=>800);

$pdf->ezTable($data,'','<b>Laporan Data Karyawan Lengkap</b>',$options);
$pdf->ezStream();
?>
