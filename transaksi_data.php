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
   <th>No Transaksi</th>
   <th>Tanggal Transaksi</th>
   <th>Tanggal Ambil</th>
   <th>Diskon laundry</th>
   <th>Nik</th>
   <th>Kode Konsumen</th>
   
   <th class=" no-link last"><span class="nobr">Action</span>
 </tr>
 </thead>
<tbody>
<?
$res = mysql_query("SELECT * FROM transaksi");//edit iki ganti karyawan'e
while($row = mysql_fetch_array($res)){
?>
 <tr class="even pointer">
   <td><? echo $row['no_transaksi']; ?></td> <!--edit iki sesuai jeneng database lan angger kurang tambahi neh-->
   <td><? echo $row['tgl_transaksi']; ?></td>
   <td><? echo $row['tgl_ambil']; ?></td>
   <td><? echo $row['diskon']; ?></td>
   <td><? echo $row['nik']; ?></td>
   <td><? echo $row['kode_konsumen']; ?></td>
   <!--/edit iki-->
   <td><a style="text-decoration:none;cursor:pointer;color:#aa5500;" data-toggle="modal" data-target="#edit-<? echo $row['no_transaksi']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a>  <a onclick="deletedata('<? echo $row['no_transaksi']; ?>')" style="text-decoration:none;cursor:pointer;color:#aa0000;"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a></td>
   
 </tr>
      
<!-- /tutup rest -->

      <!-- Modal kanggo update iki -->
      <div class="modal fade" id="edit-<? echo $row['no_transaksi']; ?>" tabindex="-<? echo $row['no_transaksi']; ?>" role="dialog" aria-labelledby="myModalLabel-<?php echo $row['no_']; ?>" aria-hidden="true">
      
      <div class="modal-dialog">
      
 <div class="modal-content">
 <form>
   <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
     <h4 class="modal-title" id="myModalLabel-<? echo $row['no_transaksi']; ?>">Update Data</h4>
   </div>

   <div class="modal-body">
       <input type="hidden" id="it<? echo $row['no_transaksi']; ?>" value="<? echo $row['no_transaksi']; ?>">
       
       <div class="form-group">
  <label for="tt">Tanggal Transaksi</label>
  <input type="text" class="form-control" id="tt<? echo $row['no_transaksi']; ?>" value="<? echo $row['tgl_transaksi']; ?>">
       </div>

       <div class="form-group">
  <label for="ta">Tanggal Ambil</label>
  <input type="text" class="form-control" id="ta<? echo $row['no_transaksi']; ?>" value="<? echo $row['tgl_ambil']; ?>">
       </div>


       <div class="form-group">
  <label for="ni">Nik</label>
  <input type="text" class="form-control" id="ni<? echo $row['no_transaksi']; ?>" value="<? echo $row['nik']; ?>">
       </div>


       <div class="form-group">
  <label for="kd">Kode Konsumen</label>
  <input type="text" class="form-control" id="kd<? echo $row['no_transaksi']; ?>" value="<? echo $row['kode_konsumen']; ?>">
       </div>



       <div class="form-group">
  <label for="ds">Diskon </label>
  <input type="text" class="form-control" data-inputmask="'mask': '99%'" id="ds<? echo $row['no_transaksi']; ?>" value="<? echo $row['diskon']; ?>">
       </div>


   <div class="modal-footer">
     <button type="button" onclick="updatedata('<? echo $row['no_transaksi']; ?>')" class="btn btn-primary">Save Changes</button>
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
