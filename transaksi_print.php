<?

include('class.ezpdf.php');
$pdf=new Cezpdf();

mysql_connect("localhost","root","root");
mysql_select_db("laundry");

$sql=mysql_query("SELECT * FROM transaksi");
$i=1;
while($r=mysql_fetch_array($sql)){
    $data[$i]=array('No'=>$i,
                    'No Transaksi'=>$r[no_transaksi],
                    'Tanggal Transaksi'=>$r[tgl_transaksi],
                    'Tanggal Ambil'=>$r[tgl_ambil],
                    'Diskon'=>$r[diskon]);
                    $i++;
                    }
$options=array('shaded'=>50,'width'=>400,'height'=>500);

$pdf->ezTable($data,'','<b>Laporan Data Transaksi</b>',$options);
$pdf->ezStream();
?>
