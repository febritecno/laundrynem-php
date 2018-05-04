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
   <th>Password</th>
   <th>Typeuser</th>
   
   <th>Kelamin</th>
   <th class=" no-link last"><span class="nobr">Action</span>
 </tr>
 </thead>
<tbody>
<?
$res = mysql_query("SELECT karyawan.nik,karyawan.nm_karyawan,karyawan.alamat_karyawan,karyawan.telp_karyawan,login.password,login.typeuser,karyawan.jenis_kelamin  FROM karyawan INNER JOIN login ON karyawan.nik=login.nik");//edit iki ganti karyawan'e
while($row = mysql_fetch_array($res)){
?>
 <tr class="even pointer">
   <td><a href="karyawan" target="window"><? echo $row['nik']; ?></a></td> <!--edit iki sesuai jeneng database lan angger kurang tambahi neh-->
   <td><a href="login" target="window"><? echo $row['nm_karyawan']; ?></a></td>
   <td><? echo $row['alamat_karyawan']; ?></td>

   <td><? echo $row['telp_karyawan']; ?></td>
   <td><? echo $row['password']; ?></td>
   <td><? echo $row['typeuser']; ?></td>
   
   <td><? echo $row['jenis_kelamin']; ?></td>
   <!--/edit iki-->
   <td><a onclick="deletedata('<?php echo $row['nik']; ?>')" style="text-decoration:none;cursor:pointer;color:#aa0000;"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a></td>
   
 </tr>
      
<!-- /tutup rest -->


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
