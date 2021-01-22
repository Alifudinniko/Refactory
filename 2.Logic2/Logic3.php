<form action=”logic3.php” method=”post”>
	<h1>n : <br>
		<input type=”text” name=”n”><br>
		<input type=”submit” value=”Hitung”>
</form>
<?php

$n   = $_POST[‘n’];


for ($i = 1; $i <= $n * 2 + 1; $i++) {
	echo (" # ");
}
echo "</br>";
for ($i = 1; $i <= ($n + 1); $i++) {
	for ($j = 1; $j <= ($n + 2); $j++) {
		if ($j == 1) {
			echo ("#");
		}
		if ($j == ($n + 2)) {
			echo ("#");
		}
		if (($i == $j) || ($j == ($n + 2 - $i))) {
			echo (" # ");
		} else {
			echo "&nbsp" . "&nbsp" . "&nbsp" . "&nbsp" . "&nbsp";
		}
	}
	echo "<br>";
}
for ($i = 1; $i <= $n * 2 + 1; $i++) {
	echo (" # ");
}
?>