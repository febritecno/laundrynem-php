<?
/**
 * fungsi file ini digunakan untuk memanggil table data dengan api dari mysql lewat ajax
 * serta terdapat function modal pop up untuk membuat modal (edit modal sesuai form yang kamu bikin)
 * ikuti petunjuk komen untuk mengedit file yak !! 
 */

// panggil berkas koneksi.php
require "utama.php";

// buat koneksi ke database mysql
open_connection();

?>

<!--bukak table -->

<!--konten table rest ajax iki -->

<div class="x_content">
<table id="example" class="table table-condensed table-bordered table-hover table-striped responsive-utilities jambo_table">
<thead>
<tr class="headings">
   <th>Nomer Pembelian Barang</th>
   <th>Tanggal Pembelian Barang</th>
   <th>Total Biaya Pembelian Barang</th>
   <th class=" no-link last"><span class="nobr">Action</span>
 </tr>
 </thead>
<tbody>
<?
$res = mysql_query("SELECT * FROM pembelian");//edit iki ganti karyawan'e
while($row = mysql_fetch_array($res)){
?>
 <tr class="even pointer">
   <td><? echo $row['no_pembelian']; ?></td> <!--edit iki sesuai jeneng database lan angger kurang tambahi neh-->
   <td><? echo $row['tgl_pembelian']; ?></td>
   <td><? echo $row['total_biaya']; ?></td>
   <!--/edit iki-->
   <td><a style="text-decoration:none;cursor:pointer;color:#aa5500;" data-toggle="modal" data-target="#edit-<? echo $row['no_pembelian']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a>  <a onclick="deletedata('<?php echo $row['no_pembelian']; ?>')" style="text-decoration:none;cursor:pointer;color:#aa0000;"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a></td>
   
 </tr>
      
<!-- /tutup rest -->

      <!-- Modal kanggo update iki -->
      <div class="modal fade" id="edit-<? echo $row['no_pembelian']; ?>" tabindex="-<? echo $row['no_pembelian']; ?>" role="dialog" aria-labelledby="myModalLabel-<?php echo $row['no_pembelian']; ?>" aria-hidden="true">
      
      <div class="modal-dialog">
      
 <div class="modal-content">
 <form>
   <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
     <h4 class="modal-title" id="myModalLabel-<? echo $row['no_pembelian']; ?>">Update Data</h4>
   </div>

   <div class="modal-body">
       <input type="hidden" id="nik<? echo $row['no_pembelian']; ?>" value="<? echo $row['no_pembelian']; ?>">
       
       <div class="form-group">
  <label for="nm">Tanggal Pembelian Barang</label>
  <input type="text" class="form-control" id="nm<? echo $row['no_pembelian']; ?>" value="<? echo $row['tgl_pembelian']; ?>">
       </div>

       <div class="form-group">
  <label for="al">Total Biaya Pembelian Barang</label>
  <input type="text" class="form-control" data-inputmask="'mask': 'Rp.999999999'" id="al<? echo $row['no_pembelian']; ?>" value="<? echo $row['total_biaya']; ?>">
       </div>

   <div class="modal-footer">
     <button type="button" onclick="updatedata('<? echo $row['no_pembelian']; ?>')" class="btn btn-primary">Save Changes</button>
   </div>
  </form>

<?
}
?>
<!-- akhiran fungsi php -->
</div>
</div>
    </tbody>
     </table>

<!-- tutup table -->
<? 
// tutup koneksi ke database mysql
koneksi_tutup(); 
?>
