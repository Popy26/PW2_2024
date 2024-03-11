<?php
    include_once 'header.php';
?>

<div class="container">
  <h2>Data Mahasiswa</h2>
  <table class="table">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>rata</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>Annisa</td>
              <td>Statistika dan Probabilitas</td>
              <td>89</td>
              <td>95</td>
              <td>80</td>
              <td>87.95</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>2</td>
              <td>Rul</td>
              <td>Statistika dan Probabilitas</td>
              <td>78</td>
              <td>81</td>
              <td>80</td>
              <td>79.75</td>
              <td>B</td>
              <td>Memuaskan</td>
              <td>Lulus</td>
          </tr>

          <?php
			require_once 'libfungsi.php';
            
            if(isset($_POST['submit'])) {
                
                $nama = $_POST["nama"];
                $matkul = $_POST["matkul"];
                $uts = $_POST["uts"];
                $uas = $_POST["uas"];
                $praktek = $_POST["praktek"];
                $rata = number_format(($uts + $uas + $praktek) / 3, 2);
                $grde = grde($rata);
                $predikat = predikat($grde);
                $lulus = kelulusan($rata);
  
                
                echo "<tr>";
                echo "<td>3</td>";
                echo "<td>$nama</td>";
                echo "<td>$matkul</td>";
                echo "<td>$uts</td>";
                echo "<td>$uas</td>";
                echo "<td>$praktek</td>";
                echo "<td>$rata</td>";
                echo "<td>$grde</td>";
                echo "<td>$predikat</td>";
                echo "<td>$lulus</td>";
                echo "</tr>";
            } else {
                
                echo "<tr><td colspan='10'></td></tr>";
            }
                    /**
					* Task 3
					* 1. Import libfungsi.php
					* 2. Tampilkan data dalam bentuk table
              
					* 3. Berikan error handling untuk mengatasi ketika form belum disubmit
					* Note: Sesuaikan dengan isi table yang sudah ada						
					*/
          ?>
      </tbody>
  </table>

</div>
