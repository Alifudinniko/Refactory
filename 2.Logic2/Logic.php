<?php

for ( $i=0; $i<7 ; $i++ ){
echo "# ";
}
echo "<br>";
for ( $i=0; $i<2 ; $i++){
echo "# ";
}
for ( $i=0; $i<3 ; $i++){
echo "&nbsp"." ";
}
for ( $i=0; $i<2 ; $i++){
echo "# ";
}
echo "<br>";






?>

<html>
<head></head>
<body>
<script type="text/javascript">
 var n=prompt("Masukkan nilai");
 n=parseInt(n);

  var i = 2;
  var j = 2;
   for(i = 1 ; i <= n+1 ; i ++){
    for(j = 1 ; j <= n + 1; j ++)
     {
  if(( i == j ) || (j == n + 2 - i )){
  document.write("&nbsp"+" # ");
  }
   else
  {
   document.write("&nbsp"+"&nbsp"+"&nbsp"+"&nbsp"+"&nbsp");
  }
 }
document.write("<br/>");
}

</script>
</body>
</html>
