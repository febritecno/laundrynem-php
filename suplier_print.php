<?

include('class.ezpdf.php');
$pdf=new Cezpdf();

mysql_connect("localhost","root","root");
mysql_select_db("laundry");

$sql=mysql_query("SELECT * FROM suplier");
$i=1;
while($r=mysql_fetch_array($sql)){
    $data[$i]=array('No'=>$i,
                    'ID Suplier'=>$r[id_suplier],
                    'Nama Suplier'=>$r[nama_suplier],
                    'Alamat Suplier'=>$r[alamat_suplier],
                    'Telepon Suplier'=>$r[tlp_suplier]);
                    $i++;
                    }
$options=array('shaded'=>50,'width'=>400,'height'=>500);

$pdf->ezTable($data,'','<b>Laporan Data Suplier</b>',$options);
$pdf->ezStream();
?>
