<? require_once 'utama.php';
$conn = open_connection();
if (isset($_GET['c'])) {
    $data = "%".$_GET['c']."%";
    $sql = 'SELECT * FROM karyawan WHERE nik like ?';
    $stmt = $conn->prepare($sql);
    $results = $stmt->execute(array($data));
    $rows = $stmt->fetchAll();
}
if(empty($rows)) {
    echo "<tr>";
        echo "<td colspan='4'>There were not records</td>";
    echo "</tr>";
}
else {
    foreach ($rows as $row) {
        echo "<tr>";
            echo "<td>".$row['nik']."</td>";
            echo "<td>".$row['nm_karyawan']."</td>";
            echo "<td>".$row['alamat_karyawan']."</td>";
            echo "<td>".$row['telp_karyawan']."</td>";
            echo "<td>".$row['jenis_kelamin']."</td>";
        echo "</tr>";
    }
}

?>