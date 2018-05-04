<?

include('class.ezpdf.php');
$pdf=new Cezpdf();

mysql_connect("localhost","root","root");
mysql_select_db("laundry");

$sql=mysql_query("SELECT * FROM login");
$i=1;
while($r=mysql_fetch_array($sql)){
    $data[$i]=array('No'=>$i,
                    'Username'=>$r[username],
                    'Password'=>$r[password],
                    'Typeuser Karyawan'=>$r[typeuser],
    				'Nik'=>$r[nik]);
                    $i++;
                    }
$options=array('shaded'=>50,'width'=>400,'height'=>500);

$pdf->ezTable($data,'','<b>Laporan Data Oprasional User</b>',$options);
$pdf->ezStream();
?>
