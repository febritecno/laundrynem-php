<?
error_reporting(0);
header("Last-Modified: " .gmdate("D, d M Y H:i:s"). " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=, pre-check=0", false);

@session_start();
set_time_limit(0);
require ("config_con.php");

  $myFile = "alamat.txt";
  $fh = fopen($myFile, 'r');
  $theData = fread($fh, filesize($myFile));
  fclose($fh);
    
?>

<title>Backup Restore Data </title>
<form action="" enctype="multipart/form-data" method="post">
  <table width="100%" border="0" cellspacing="0" cellpadding="1">
    
    <tr>
      <td> <legend><strong>Backup dan Restore Data *.sql </strong></legend>
	    <table width="70%" border="0" cellspacing="2" cellpadding="1">

        <tr>
          <td class="style1">&nbsp;</td>
          <td class="style1">&nbsp;</td>
        </tr>
        <tr>
          <td width="23%" class="style1" style="border-bottom:1px solid #CCC;">Backup Destination Folder </td>
          <td width="77%" class="style1" style="border-bottom:1px solid #CCC;">:   
            <input name="txt_destini" size="55" type="text" id="txt_destini" value="<? echo $theData;?>"/>
            <input name="backup" type="submit" id="backup" value="Backup Data"/></td>
        </tr>
        <tr>
          <td class="style1">Restore File </td>
          <td class="style1">:
            <input name='file_sql' size="55" type='file' id="file_sql">
            <input name="restore" type="submit" id="restore" value="Restore Data"></td>
        </tr>
      </table>
	   
	  <legend></legend>
	  </td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>

<a href='menu.php'>Kembali</a><br>
<?

if(isset($_REQUEST['restore'])){
	$filename=$_FILES['file_sql']['tmp_name'];
	restore_data($_hostname, $_user , $_password, $_database, $filename );
	
	
	echo "Berhasil Direstore";
}else if(isset($_REQUEST['backup'])){

	$handle = fopen('alamat.txt','w+');
	fwrite($handle,$_REQUEST['txt_destini']);
	fclose($handle);
	
backup_tables($_hostname,$_user,$_password,$_database, $_REQUEST['txt_destini']);
	echo "Berhasil DiBackup";
}

?>