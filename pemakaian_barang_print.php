<?

include('class.ezpdf.php');
$pdf=new Cezpdf();

mysql_connect("localhost","root","root");
mysql_select_db("laundry");

$sql=mysql_query("SELECT * FROM pemakaian_barang");
$i=1;
while($r=mysql_fetch_array($sql)){
    $data[$i]=array('No'=>$i,
                    'Kode Pengeluaran'=>$r[id_keluar],
                    'Jumlah'=>$r[jumlah]);
                    $i++;
                    }
$options=array('shaded'=>50,'width'=>400,'height'=>500);

$pdf->ezTable($data,'','<b>Laporan Data Pemakaian Barang</b>',$options);
$pdf->ezStream();
?>
