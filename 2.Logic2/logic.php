<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Sederhana</title>
</head>

<body>
    <form>
        <div>
            <label>N </label> <br>
            <input name="n" type="text" placeholder="masukkan nilai N">
        </div>

        <div>
            <button>Submit</button>
        </div>
    </form>
</body>

</html>
<?php
$n = 0;
$n   = $_GET['n'];


for ($i = 1; $i <= $n * 2 + 1; $i++) {
    echo (" # ");
}
echo "</br>";
for ($i = 1; $i <= ($n + 1); $i++) {
    for ($j = 1; $j <= ($n + 2); $j++) {
        if ($j == 1) {
            echo (" # ");
        }
        if ($j == ($n + 2)) {
            echo (" # ");
        }
        if (($i == $j) || ($j == ($n + 2 - $i))) {
            echo (" # ");
        } else {
            echo "&nbsp" . "&nbsp" . "&nbsp" . "&nbsp" . "&nbsp";
        }
    }
    echo "<br>";
}
for ($i = 1; $i <= $n * 2 + 1 ; $i++) {
    echo (" # ");
}
?>