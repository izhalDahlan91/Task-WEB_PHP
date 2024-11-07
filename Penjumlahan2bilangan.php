<!DOCTYPE html>
<html>
<body>
<h1>Penjumlahan 2 Bilangan</h1>	

<form method="POST">
	<input type="number" name="bil1" placeholder="Masukkan Bilangan 1" required>
	+
	<input type="number" name="bil2" placeholder="Masukkan Bilangan 2" required>
	<input type="submit" value="=">
</form>

<?php
if (isset($_POST['bil1']) && isset($_POST['bil2'])) {
 $nilai_1 = $_POST['bil1'];
 $nilai_2 = $_POST['bil2'];
 $hasil = $nilai_1 + $nilai_2;
 echo "Hasil dari penjumlahan ".$nilai_1. " + ". $nilai_2. " = ".$hasil;
}
?>

</body>
</html>