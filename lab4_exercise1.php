<?php
echo "<table border =\"1\" style='border-collapse: collapse';
	'font-family: arial, sans-serif';>";
	for ($row=1; $row <= 100; $row++) { 
		echo "<tr> \n";
		for ($col=1; $col <= 100; $col++) { 
		   $p = $col * $row;
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>