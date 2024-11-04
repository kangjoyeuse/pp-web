<?php
if ($_SERVER["REQUEST_METHOD" ] == "POST") {
    // Import variables from form
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    // Arithmetics for displaying results
    $sum = $num1 + $num2;
    $subtraction = $num1 - $num2;
    $multiplication = $num1 * $num2;

    if ($num2 == 0 || $num1 == 0) {
        $division = "Can't divide by zero";
    } else {
        $division = $num1 / $num2;
    }

    // Logic for displaying results
    $and = $num1 && $num2 ? "True" : "False";
    $or = $num1 || $num2 ? "True" : "False";
    $not =!$num1 ? "True" : "False"; 

    // Comparison for displaying results
    $greaterThan = $num1 > $num2 ? "True" : "False";
    $lessThan = $num1 < $num2 ? "True" : "False";
    $equal = $num1 == $num2 ? "True" : "False";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Hasil</h1>
        <section class="result">
            <h2>Operasi Perhitungan</h2>
            <p>Penjumlahan: <?php echo $sum ?>;</p>
            <p>Pengurangan: <?php echo $subtraction ?>;</p>
            <p>Perkalian: <?php echo $multiplication ?>;</p>
            <p>Pembagian: <?php echo $division ?>;</p>

            <h2>Operasi Perbandingan</h2>
            <p>Lebih besar: <?php echo $greaterThan ?>;</p>
            <p>Lebih kecil: <?php echo $lessThan ?>;</p>
            <p>Sama dengan: <?php echo $equal ?>;</p>

            <h2>Operasi Logika</h2>
            <p>Logika AND: <?php echo $and ?>;</p>
            <p>Logika OR: <?php echo $or ?>;</p>
            <p>Logika NOT (Angka 1): <?php echo $not ?>;</p>
        </section>

        <a href="index.php">Kembali ke Kalkulator</a>
    </main>
</body>
</html>