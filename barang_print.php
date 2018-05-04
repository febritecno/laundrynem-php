<?

include('class.ezpdf.php');
$pdf=new Cezpdf();

mysql_connect("localhost","root","root");
mysql_select_db("laundry");

$sql=mysql_query("SELECT * FROM barang");
$i=1;
while($r=mysql_fetch_array($sql)){
    $data[$i]=array('No'=>$i,
                    'Kode Barang'=>$r[kode_barang],
                    'Nama Barang'=>$r[nama_barang],
                    'Stok Barang'=>$r[stok],
                    'Tanggal Update Barang'=>$r[tgl_update_stok]);
                    $i++;
                    }
$options=array('shaded'=>50,'width'=>400,'height'=>500);

$pdf->ezTable($data,'','<b>Laporan Data Barang</b>',$options);
$pdf->ezStream();
?>
