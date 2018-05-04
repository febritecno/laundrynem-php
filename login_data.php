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
   <th>Username</th>
   <th>Password</th>
   <th>Type User Karyawan</th>
   <th>Nik</th>
   
   
   <th class=" no-link last"><span class="nobr">Action</span>
 </tr>
 </thead>
<tbody>
<?
$res = mysql_query("SELECT * FROM login");//edit iki ganti karyawan'e
while($row = mysql_fetch_array($res)){
?>
 <tr class="even pointer">
   <td><? echo $row['username']; ?></td> <!--edit iki sesuai jeneng database lan angger kurang tambahi neh-->
   <td><? echo $row['password']; ?></td>
   <td><? echo $row['typeuser']; ?></td>
   <td><a href="karyawan"><? echo $row['nik']; ?></a></td>
   <!--/edit iki-->
   <td><a style="text-decoration:none;cursor:pointer;color:#aa5500;" data-toggle="modal" data-target="#edit-<? echo $row['username']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a></td>
   
 </tr>
      
<!-- /tutup rest -->

      <!-- Modal kanggo update iki -->
      <div class="modal fade" id="edit-<? echo $row['username']; ?>" tabindex="-<? echo $row['username']; ?>" role="dialog" aria-labelledby="myModalLabel-<?php echo $row['username']; ?>" aria-hidden="true">
      
      <div class="modal-dialog">
      
 <div class="modal-content">
 <form>
   <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
     <h4 class="modal-title" id="myModalLabel-<? echo $row['username']; ?>">Update Data</h4>
   </div>

   <div class="modal-body">
       <input type="hidden" id="nik<? echo $row['username']; ?>" value="<? echo $row['username']; ?>">
       
       <div class="form-group">
  <label for="nm">Password<span>*</span></label>
  <input type="password" class="form-control" id="nm<? echo $row['username']; ?>" value="<? echo $row['password']; ?>">
       </div>

<div class="form-group">
  <label for="nm">Nik<span>*</span></label>
  <input type="text" class="form-control" id="nk<? echo $row['username']; ?>" value="<? echo $row['nik']; ?>">
       </div>



              <div class="form-group">
              <label class="form-label" for="jk">Type User Karyawan : </label>
                   <select class="input-medium" class="form-control" id="jk<? echo $row['username']; ?>">
                        <option value="karyawan">karyawan</option>
                        <option value="admin">admin</option> 
                    </select>
              
                   </div>



   <div class="modal-footer">
     <button type="button" onclick="updatedata('<? echo $row['username']; ?>')" class="btn btn-primary">Save Changes</button>
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
