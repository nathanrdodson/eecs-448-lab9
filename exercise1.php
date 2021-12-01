<?php
	for ($i = 0; $i <= 100; $i++)
	{
		echo "<tr>";
		if($i == 0) {echo "<td></td>";}
		for ($j = 0; $j <= 100; $j++)
		{	
			if ($i == 0)
			{
				echo "<td>" . ($j+1) . "</td>";
			} else if ($j == 0) {
				echo "<td>" . $i * ($j+1). "</td>";
			} else {
				echo "<td>" . $i*$j . "</td>";
			}
		}
		echo "</tr>";
	}
?>

