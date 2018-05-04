<?

include('class.ezpdf.php');
$pdf=new Cezpdf();

mysql_connect("localhost","root","root");
mysql_select_db("laundry");

$sql=mysql_query("SELECT * FROM pembelian");
$i=1;
while($r=mysql_fetch_array($sql)){
    $data[$i]=array('No'=>$i,
                    'Nomer Pembelian Barang'=>$r[no_pembelian],
                    'Tanggal Pembelian Barang'=>$r[tgl_pembelian],
                    'Total Biaya Pembelian Barang'=>$r[total_biaya]);
                    $i++;
                    }
$options=array('shaded'=>50,'width'=>400,'height'=>500);

$pdf->ezTable($data,'','<b>Laporan Data Pembelian</b>',$options);
$pdf->ezStream();
?>
