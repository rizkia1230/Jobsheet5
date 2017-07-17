<html>
<head>
<title>Function Dengan 2 Parameter</title>
</head>
<body>
<?php
echo"<b>";
function panggil($param1,$param2)
{
	$total=$param1*$param2;
	echo"hasil perkalian dari $param1 x $param2 adalah $total";
	echo"<br>";
}
$a=4;
for($i=1;$i<=30;$i=$i+2)
	{ $a=$a+5;
		panggil($a,$i);
	}
echo"</b>";
?>
</body>
</html>