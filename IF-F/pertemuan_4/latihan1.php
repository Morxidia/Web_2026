




<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $bulan = (int) $_POST["bulan"]||null;
  $nama = null;
  switch ($bulan) {
    case 1:
      $nama = "Januari";
      break;
    case 2:
      $nama = "Februari";
      break;
    case 3:
      $nama = "Maret";
      break;
    case 4:
      $nama = "April";
      break;
    case 5:
      $nama = "May";
      break;
    case 6:
      $nama = "June";
      break;
    case 7:
      $nama = "July";
      break;
    case 8:
      $nama = "August";
      break;
    case 9:
      $nama = "September";
      break;
    case 10:
      $nama = "October";
      break;
    case 11:
      $nama = "November";
      break;
    case 12:
      $nama = "December";
      break;
    default:
      $nama = null;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soal 1 - Nama Bulan</title>
</head>
<body>
  <h2>Cek Nama Bulan</h2>
  <form method="post" action="">
    <label>Masukkan angka bulan (1 s.d. 12):</label>
    <input type="number" name="bulan" min="1" max="12" required>
    <button type="submit">Cek</button>
  </form>

  <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
    <?php if ($nama !== null): ?>
      <p>
        Bulan ke-<?php echo $bulan; ?> adalah
        <strong>
          <?php echo $nama; ?>
        </strong>
      </p>
    <?php else: ?>
      <p>Angka bulan tidak valid. Masukkan angka 1 sampai 12.</p>
    <?php endif; ?>
  <?php endif; ?>  
</body>
</html>











