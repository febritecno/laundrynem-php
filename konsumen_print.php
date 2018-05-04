<?

include('class.ezpdf.php');
$pdf=new Cezpdf();

mysql_connect("localhost","root","root");
mysql_select_db("laundry");

$sql=mysql_query("SELECT * FROM konsumen");
$i=1;
while($r=mysql_fetch_array($sql)){
    $data[$i]=array('No'=>$i,
                    'ID Konsumen'=>$r[id_konsumen],
                    'Nama Konsumen'=>$r[nama_konsumen],
                    'Alamat Konsumen'=>$r[alamat_konsumen],
                    'Telepon Konsumen'=>$r[tlp_konsumen]);
                    $i++;
                    }
$options=array('shaded'=>50,'width'=>400,'height'=>500);

$pdf->ezTable($data,'','<b>Laporan Data Konsumen</b>',$options);
$pdf->ezStream();
?>
