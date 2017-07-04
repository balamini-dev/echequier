<head>

<link rel="stylesheet" type="text/css" href="echequier-bordures.css">


</head>

<body>

<table border=1>
<?php

$color1="red";
$color2="#000000";

for($j=1;$j<9;$j++)
{
	echo "<tr>";

		for($i=1;$i<9;$i++)
		{
			
			if(($i+$j)%2==0){ $color=$color1; }	else{$color=$color2;}

			echo"<td bgcolor=$color> 2</td>";
		}

	echo "</tr>";

}




?>
</table>


</body>
