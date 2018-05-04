<?

include('class.ezpdf.php');
$pdf=new Cezpdf();

mysql_connect("localhost","root","root");
mysql_select_db("laundry");

$sql=mysql_query("SELECT * FROM rincian_pembelian");
$i=1;
while($r=mysql_fetch_array($sql)){
    $data[$i]=array('No'=>$i,
                    'Nomer Rincian Pembelian'=>$r[no_rincian],
                    'Jumlah Pembelian'=>$r[jumlah]);
                    $i++;
                    }
$options=array('shaded'=>50,'width'=>400,'height'=>500);

$pdf->ezTable($data,'','<b>Laporan Data Rincian Pembelian</b>',$options);
$pdf->ezStream();
?>
