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
   <th>ID Tarif</th>
   <th>Nama Pakaian</th>
   <th>Tarif Pakaian</th>
   <th class=" no-link last"><span class="nobr">Action</span>
 </tr>
 </thead>
<tbody>
<?
$res = mysql_query("SELECT * FROM tarif");//edit iki ganti table
while($row = mysql_fetch_array($res)){
?>
 <tr class="even pointer">
   <td><? echo $row['id_tarif']; ?></td> <!--edit iki sesuai jeneng database lan angger kurang tambahi neh-->
   <td><? echo $row['nama_pakaian']; ?></td>
   <td><? echo $row['tarif']; ?></td>
   <!--/edit iki-->
   <td><a style="text-decoration:none;cursor:pointer;color:#aa5500;" data-toggle="modal" data-target="#edit-<? echo $row['id_tarif']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a>  <a onclick="deletedata('<?php echo $row['id_tarif']; ?>')" style="text-decoration:none;cursor:pointer;color:#aa0000;"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a></td>
   
 </tr>
      
<!-- /tutup rest -->

      <!-- Modal kanggo update iki -->
      <div class="modal fade" id="edit-<? echo $row['id_tarif']; ?>" tabindex="-<? echo $row['id_tarif']; ?>" role="dialog" aria-labelledby="myModalLabel-<?php echo $row['id_tarif']; ?>" aria-hidden="true">
      
      <div class="modal-dialog">
      
 <div class="modal-content">
 <form>
   <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
     <h4 class="modal-title" id="myModalLabel-<? echo $row['id_tarif']; ?>">Update Data</h4>
   </div>

   <div class="modal-body">
       <input type="hidden" id="ia<? echo $row['id_tarif']; ?>" value="<? echo $row['id_tarif']; ?>">
       
       <div class="form-group">
  <label for="np">Nama Pakaian</label>
  <input type="text" class="form-control" id="np<? echo $row['id_tarif']; ?>" value="<? echo $row['nama_pakaian']; ?>">
       </div>

       <div class="form-group">
  <label for="tr">Tarif Laundry</label>
  <input type="text" class="form-control" data-inputmask="'mask': 'Rp.999999999'" id="tr<? echo $row['id_tarif']; ?>" value="<? echo $row['tarif']; ?>">
       </div>



   <div class="modal-footer">
     <button type="button" onclick="updatedata('<? echo $row['id_tarif']; ?>')" class="btn btn-primary">Save Changes</button>
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