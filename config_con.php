<?
$_hostname 	= "localhost";
$_user 		= "root";
$_password 	= "root";
$_database 	= "laundry";

$db = mysql_connect($_hostname, $_user, $_password) or die("Koneksi database salah");	
	  mysql_select_db($_database, $db) or die("Database not exist !!!");


// cek login user
function cek_login_user(){
	$session = $_SESSION['username'];
	if(empty($session)){
		echo "<script>document.location.href='index.php'</script>";
	}else{
		//
	}
}
// end cek login


/* backup the db OR just a table */
function backup_tables($host,$user,$pass,$name, $place, $tables = '*')
{
	
	$link = mysql_connect($host,$user,$pass);
	mysql_select_db($name,$link);
	
	//get all of the tables
	if($tables == '*')
	{
		$tables = array();
		$result = mysql_query('SHOW TABLES');
		while($row = mysql_fetch_row($result))
		{
			$tables[] = $row[0];
		}
	}
	else
	{
		$tables = is_array($tables) ? $tables : explode(',',$tables);
	}
	
	//cycle through
	foreach($tables as $table)
	{
		$result = mysql_query('SELECT * FROM '.$table);
		$num_fields = mysql_num_fields($result);
		
		$return.= 'DROP TABLE '.$table.';';
		$row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
		$return.= "\n\n".$row2[1].";\n\n";
		
		for ($i = 0; $i < $num_fields; $i++) 
		{
			while($row = mysql_fetch_row($result))
			{
				$return.= 'INSERT INTO '.$table.' VALUES(';
				for($j=0; $j<$num_fields; $j++) 
				{
					$row[$j] = addslashes($row[$j]);
					$row[$j] = ereg_replace("/\n/","\\n",$row[$j]);
					if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
					if ($j<($num_fields-1)) { $return.= ','; }
				}
				$return.= ");\n";
			}
		}
		$return.="\n\n\n";
	}
	
	@mkdir($place,'0777');
	$destini=$place;
	
	$return=base64_encode($return);
	//save file

	$handle = fopen($destini.'\db-backup-tes-'."tanggal ".date("d-M-Y").' jam '.date("H.i").'.sql','w+');
	fwrite($handle,$return);
	fclose($handle);
}
  

function restore_data($mysql_host, $mysql_username, $mysql_password, $mysql_database, $filename ){

		 
		//////////////////////////////////////////////////////////////////////////////////////////////
		 
		// Connect to MySQL server
		mysql_connect($mysql_host, $mysql_username, $mysql_password) or die('Error connecting to MySQL server: ' . mysql_error());
		// Select database
		mysql_select_db($mysql_database) or die('Error selecting MySQL database: ' . mysql_error());
		 
	
		// Temporary variable, used to store current query
		$templine = '';
		// Read in entire file
		
		
		$myFile = $filename;
		$fh = fopen($myFile, 'r');
		$theData = fread($fh, filesize($myFile));
		fclose($fh);
		
		$return=base64_decode($theData);

		$nama_db='Dump/db-restore-'.time().'.sql';
		$handle = fopen($nama_db,'w+');
		fwrite($handle,$return);
		fclose($handle);
		
		$lines = file($nama_db);
		
		// Loop through each line
		foreach ($lines as $line)
		{
			// Skip it if it's a comment
			if (substr($line, 0, 2) == '--' || $line == '')
				continue;
		 
			// Add this line to the current segment
			$templine .= $line;
			// If it has a semicolon at the end, it's the end of the query
			if (substr(trim($line), -1, 1) == ';')
			{
				// Perform the query
				mysql_query($templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
				// Reset temp variable to empty
				$templine = '';
			}
		}
} 

?>