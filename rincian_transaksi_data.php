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
   <th>ID Rincian Transaksi</th>
   <th>Jumlah</th>
   <th class=" no-link last"><span class="nobr">Action</span>
 </tr>
 </thead>
<tbody>
<?
$res = mysql_query("SELECT * FROM rincian_transaksi");//edit iki ganti table
while($row = mysql_fetch_array($res)){
?>
 <tr class="even pointer">
   <td><? echo $row['id_rincian']; ?></td> <!--edit iki sesuai jeneng database lan angger kurang tambahi neh-->
   <td><? echo $row['jumlah']; ?></td>
   <!--/edit iki-->
   <td><a style="text-decoration:none;cursor:pointer;color:#aa5500;" data-toggle="modal" data-target="#edit-<? echo $row['id_rincian']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a>  <a onclick="deletedata('<?php echo $row['id_rincian']; ?>')" style="text-decoration:none;cursor:pointer;color:#aa0000;"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a></td>
   
 </tr>
      
<!-- /tutup rest -->

      <!-- Modal kanggo update iki -->
      <div class="modal fade" id="edit-<? echo $row['id_rincian']; ?>" tabindex="-<? echo $row['id_rincian']; ?>" role="dialog" aria-labelledby="myModalLabel-<?php echo $row['id_rincian']; ?>" aria-hidden="true">
      
      <div class="modal-dialog">
      
 <div class="modal-content">
 <form>
   <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
     <h4 class="modal-title" id="myModalLabel-<? echo $row['id_rincian']; ?>">Update Data</h4>
   </div>

   <div class="modal-body">
       <input type="hidden" id="ir<? echo $row['id_rincian']; ?>" value="<? echo $row['id_rincian']; ?>">
       
       <div class="form-group">
  <label for="jl">Jumlah</label>
  <input type="number" class="form-control" id="jl<? echo $row['id_rincian']; ?>" value="<? echo $row['jumlah']; ?>">
       </div>

        <div class="modal-footer">
     <button type="button" onclick="updatedata('<? echo $row['id_rincian']; ?>')" class="btn btn-primary">Save Changes</button>
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