<?php
 $buah = array(
  array(
     "id" => "1",
      "nama" => "Apel",
      "warna" => "Merah",
      "stok" => 100,
      "harga" => 5000,
      "deskripsi" => "Buah apel segar dengan rasa manis."
  ),
  array(
    "id" => "2",
      "nama" => "Jeruk",
      "warna" => "Oranye",
      "stok" => 50,
      "harga" => 7000,
      "deskripsi" => "Buah jeruk asam dan menyegarkan."
  ),
  array(
    "id" => "3",
      "nama" => "Anggur",
      "warna" => "Ungu",
      "stok" => 80,
      "harga" => 12000,
      "deskripsi" => "Buah anggur dengan rasa manis dan lezat."
  ),
  
  array(
    "id" => "5",
      "nama" => "Rambutan",
      "warna" => "Merah,Hijau",
      "stok" => 50,
      "harga" => 15000,
      "deskripsi" => "Buah Rambutan enak dan menyegarkan."
  ),
  
  // Tambahkan buah lainnya sesuai kebutuhan
);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px;
        }
        th, td {
            border: 3px solid #dddddd;
            text-align: center;
            padding: 8px;
        }
         
    </style>

<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
        
      </thead>
      
      <tbody>
      <?php
foreach ($buah as $infoBuah) {
    echo "<tr>";
    echo "<td>" . $infoBuah['id'] . "</td>";
    echo "<td>" . $infoBuah['nama'] . "</td>";
    echo "<td>" . $infoBuah['warna'] . "</td>";
    echo "<td>" . $infoBuah['stok'] . "</td>";
    echo "<td>Rp/kg " . $infoBuah['harga'] . "</td>";
    echo "<td>" . $infoBuah['deskripsi'] . "</td>";
    echo "</tr>";
}
?>

      </tbody>
    </table>
  </div>
</body>
</html>
