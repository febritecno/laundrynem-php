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
   <th>Nik</th>
   <th>Nama</th>
   <th>Alamat</th>
   <th>Telp</th>
   <th>Kelamin</th>
   <th class=" no-link last"><span class="nobr">Action</span>
 </tr>
 </thead>
<tbody>
<?
$res = mysql_query("SELECT * FROM karyawan");//edit iki ganti karyawan'e
while($row = mysql_fetch_array($res)){
?>
 <tr class="even pointer">
   <td><? echo $row['nik']; ?></td> <!--edit iki sesuai jeneng database lan angger kurang tambahi neh-->
   <td><? echo $row['nm_karyawan']; ?></td>
   <td><? echo $row['alamat_karyawan']; ?></td>
   <td><? echo $row['telp_karyawan']; ?></td>
   <td><? echo $row['jenis_kelamin']; ?></td>
   <!--/edit iki-->
   <td><a style="text-decoration:none;cursor:pointer;color:#aa5500;" data-toggle="modal" data-target="#edit-<? echo $row['nik']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a></td>
   
 </tr>
      
<!-- /tutup rest -->

      <!-- Modal kanggo update iki -->
      <div class="modal fade" id="edit-<? echo $row['nik']; ?>" tabindex="-<? echo $row['nik']; ?>" role="dialog" aria-labelledby="myModalLabel-<?php echo $row['nik']; ?>" aria-hidden="true">
      
      <div class="modal-dialog">
      
 <div class="modal-content">
 <form>
   <div class="modal-header">
     <button type="button" class="close" id="#close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
     <h4 class="modal-title" id="myModalLabel-<? echo $row['nik']; ?>">Update Data</h4>
   </div>

   <div class="modal-body">
       <input type="hidden" id="nik<? echo $row['nik']; ?>" value="<? echo $row['nik']; ?>">
       
       <div class="form-group">
  <label for="nm">Nama Karyawan</label>
  <input type="text" class="form-control" id="nm<? echo $row['nik']; ?>" value="<? echo $row['nm_karyawan']; ?>">
       </div>

       <div class="form-group">
  <label for="al">Alamat Karyawan</label>
  <input type="text" class="form-control" id="al<? echo $row['nik']; ?>" value="<? echo $row['alamat_karyawan']; ?>">
       </div>

       <div class="form-group">
  <label for="nt">Nomer Telpon Karyawan</label>
  <input type="text" class="form-control" id="nt<? echo $row['nik']; ?>" value="<? echo $row['telp_karyawan']; ?>">
       </div>

       <div class="form-group">

              <label class="form-label" for="jk">Jenis Kelamin </label>
                    <select class="input-medium" class="form-control" id="jk<? echo $row['nik']; ?>">
                    <?
                    $nik= $_POST['nik'];
                // tampilkan untuk combobox
                if($nik == is_null($nik)) { ?>
                    <option value="<? echo $row['jenis_kelamin']; ?>"><? echo $row['jenis_kelamin']; ?></option>
                <? } ?>
                
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option> 
                    </select>
       </div>

   <div class="modal-footer">
     <button type="button" onclick="updatedata('<? echo $row['nik']; ?>')" class="btn btn-primary">Save Changes</button>
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
