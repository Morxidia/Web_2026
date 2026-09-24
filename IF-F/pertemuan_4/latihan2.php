<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $angka1 = (float) $_POST["angka1"];
  $angka2 = (float) $_POST["angka2"];
  $operator = $_POST["operator"];

  switch ($operator) {
    case '+':
      $hasil = $angka1 + $angka2;
      break;
    case '-':
      $hasil = $angka1 - $angka2;
      break;
    case '*':
      $hasil = $angka1 * $angka2;
      break;
    case '/':
      if ($angka2 == 0) {
        $hasil = null;
        $error = "Tidak bisa membagi dengan nol";
      } else {
        $hasil = $angka1 / $angka2;
      }
      break;
    default:
      $hasil = null;
      $error = "Operator gajelas";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Kalkulator Gampang</h2>
  <form method="post" action="">
    <input type="number" name="angka1" placeholder="Bilangan pertama" required>
    <select name="operator">
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="*">*</option>
      <option value="/">/</option>
    </select>
    <input type="number" name="angka2" placeholder="Bilangan kedua" required>
    <button type="submit">Hitung</button>
  </form>

  <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
    <?php if (isset($error)): ?>
      <p><?php echo $error; ?>
    <?php else: ?>
      <p><?php echo "$angka1 $operator $angka2 = $hasil"; ?></p>
    <?php endif; ?>
  <?php endif; ?>
</body>
</html>










