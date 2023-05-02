<?php
		function kalkulator($angka1, $angka2, $operator) {
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
					$hasil = $angka1 / $angka2;
					break;
				default:
					$hasil = "Masukkan operator yang benar";
					break;
			}
			return $hasil;
		}
	?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
	<title>Kalkulator Sederhana</title>
</head>
<body>
    <div class="card" style="width: 22rem;">
        <div class="card-body">
            <h2>Kalkulator</h2>
            <form method="post">
                <input type="text" name="angka1" placeholder="Masukkan angka">
                <input type="text" name="angka2" placeholder="Masukkan angka"><br>
            <select name="operator">
                <option value="">Pilih operator</option>
                <option value="+">Tambah (+)</option>
                <option value="-">Kurang (-)</option>
                <option value="*">Kali (*)</option>
                <option value="/">Bagi (/)</option>
            </select>
                <input type="submit" name="hitung" value="Hitung">

                <?php if(isset($_POST['hitung'])) {
                $angka1 = $_POST['angka1'];
                $angka2 = $_POST['angka2'];
                $operator = $_POST['operator'];
                echo "<br>Hasil dari $angka1 $operator $angka2 = ".kalkulator($angka1, $angka2, $operator);
            }?>

            </form>
        </div>
    </div>
</body>
</html>
