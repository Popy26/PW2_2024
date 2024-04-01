<?php
require_once '../config/Database.php';
require_once '../class/Kartu.php';

$database = new Database();
$db = $database->dbConnection();

$kartu = new Kartu($db);

if(isset($_POST['update'])) {
    $kartu->id= $_POST['id'];
    $kartu->kode = $_POST['kode'];
    $kartu->nama = $_POST['nama'];
    $kartu->diskon = $_POST['diskon'];
    $kartu->iuran = $_POST['iuran'];

    $kartu->update();
    header("Location: index.php");
    exit;
} elseif(isset($_GET['id'])) {
    $kartu->id = $_GET['id'];
    $stmt = $kartu->edit();
    $num = $stmt->rowCount();

    if($num > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        extract($row);
    } else {
        echo "Data tidak ditemukan.";
        exit;
    }
} else {
    echo "ID tidak ditemukan.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Data</h1>
    <form method="POST" action="">
       <label for="id">id:</label>
        <input type="text" name="id" required>
        <br>
        <label for="kode">kode:</label>
        <input type="number" name="kode" required>
        <br>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>
        <br>
        <label for="diskon">diskon:</label>
        <input type="number" name="diskon" required>
        <br>
        <label for="iuran">iuran:</label>
        <input type="number" name="iuran" required>
        <br>
        <input type="submit" name="tambah" value="Tambah">
    </form>
</body>
</html>