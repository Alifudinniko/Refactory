<?php
for ($i = 7; $i > 0; $i--) {
    echo $i; // 7 6 5 4 3 2 1
   
}
echo "<br>";
for ($i = 6; $i > 0; $i--) {
echo $i; //  6 5 4 3 2 1
   
}echo "<br>";
for ($i = 5; $i >0; $i--) {
echo $i; //  5 4 3 2 1
   
}echo "<br>";
for ($i = 4; $i >0; $i--) {
echo $i; // 4 3 2 1
  
} echo "<br>";
for ($i = 3; $i >0; $i--) {
echo $i; // 3 2 1
   
}echo "<br>";
for ($i = 2; $i >0; $i--) {
echo $i; //  2 1
   
}echo "<br>";
for ($i = 1; $i >0; $i--) {
echo $i; //   1
   
}echo "<br>";
?>
<?php
   echo "Saya sedang belajar PHP di duniailkom.com";
   echo "<br>";
   echo "Hello World...";

   echo '<br>';


for ($i = 1; $i <= 7; $i++) {
	for ($j = 8; $i <= $j ; $j--) {
		$k = $j - $i;
	
		if ($k != 0)
		{ 
		echo $k;
		continue;
		 }
	}
	echo '<br>';
}

echo '<br>';
?>