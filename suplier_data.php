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
   <th>ID Suplier</th>
   <th>Nama Suplier</th>
   <th>Alamat Suplier</th>
   <th>Nomer Telpon</th>
   <th class=" no-link last"><span class="nobr">Action</span>
 </tr>
 </thead>
<tbody>
<?
$res = mysql_query("SELECT * FROM suplier");//edit iki ganti karyawan'e
while($row = mysql_fetch_array($res)){
?>
 <tr class="even pointer">
   <td><? echo $row['id_suplier']; ?></td> <!--edit iki sesuai jeneng database lan angger kurang tambahi neh-->
   <td><? echo $row['nama_suplier']; ?></td>
   <td><? echo $row['alamat_suplier']; ?></td>
   <td><? echo $row['tlp_suplier']; ?></td>
   <!--/edit iki-->
   <td><a style="text-decoration:none;cursor:pointer;color:#aa5500;" data-toggle="modal" data-target="#edit-<? echo $row['id_suplier']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a>  <a onclick="deletedata('<?php echo $row['id_suplier']; ?>')" style="text-decoration:none;cursor:pointer;color:#aa0000;"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a></td>
   
 </tr>
      
<!-- /tutup rest -->

      <!-- Modal kanggo update iki -->
      <div class="modal fade" id="edit-<? echo $row['id_suplier']; ?>" tabindex="-<? echo $row['id_suplier']; ?>" role="dialog" aria-labelledby="myModalLabel-<?php echo $row['id_suplier']; ?>" aria-hidden="true">
      
      <div class="modal-dialog">
      
 <div class="modal-content">
 <form>
   <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
     <h4 class="modal-title" id="myModalLabel-<? echo $row['id_suplier']; ?>">Update Data</h4>
   </div>

   <div class="modal-body">
       <input type="hidden" id="is<? echo $row['id_suplier']; ?>" value="<? echo $row['id_suplier']; ?>">
       
       <div class="form-group">
  <label for="ns">Nama Suplier</label>
  <input type="text" class="form-control" id="ns<? echo $row['id_suplier']; ?>" value="<? echo $row['nama_suplier']; ?>">
       </div>

       <div class="form-group">
  <label for="as">Alamat Suplier</label>
  <input type="text" class="form-control" id="as<? echo $row['id_suplier']; ?>" value="<? echo $row['alamat_suplier']; ?>">
       </div>

       <div class="form-group">
  <label for="nt">Nomer Telpon Suplier</label>
  <input type="text" class="form-control" id="nt<? echo $row['id_suplier']; ?>" value="<? echo $row['tlp_suplier']; ?>">
       </div>

   <div class="modal-footer">
     <button type="button" onclick="updatedata('<? echo $row['id_suplier']; ?>')" class="btn btn-primary">Save Changes</button>
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
