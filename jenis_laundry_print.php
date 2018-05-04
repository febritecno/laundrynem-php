<?

include('class.ezpdf.php');
$pdf=new Cezpdf();

mysql_connect("localhost","root","root");
mysql_select_db("laundry");

$sql=mysql_query("SELECT * FROM jenis_laundry");
$i=1;
while($r=mysql_fetch_array($sql)){
    $data[$i]=array('No'=>$i,
                    'ID Jenis Pakaian'=>$r[id_jenis],
                    'Nama Jenis Pakaian'=>$r[nama_jenis]);
                    $i++;
                    }
$options=array('shaded'=>50,'width'=>400,'height'=>500);

$pdf->ezTable($data,'','<b>Laporan Data Jenis Laundry</b>',$options);
$pdf->ezStream();
?>
