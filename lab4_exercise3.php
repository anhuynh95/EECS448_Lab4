<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	echo "<link rel='stylesheet' type='text/css' href='lab4_exercise3.css'/>";  
	echo("<p> Welcome to Random Shop </p>");
	echo("<p>Username: ". $_GET["username"] ."</p>");
	echo("<p>Password: ". $_GET["password"] ."</p><br>");

	$u1 = $_GET["unit1"];
	echo number_format($u1, 2);
	$c1 = 799.99;
	$s1 = $u1*$c1;
	$u2 = $_GET["unit2"];
	echo number_format($u1, 2);
	$c2 = 1999.00;
	$s2 = $u2*$c2;
	$u3 = $_GET["unit3"];
	echo number_format($u1, 2);
	$c3 = 119.99;
	$s3 = $u3*$c3;

	$ship = $_GET["shipping"];
	$total = $s1 + $s2 + $s3 +$ship;

	echo ("<table>");
	echo("<p>Here is Your Receipt</p>");
		echo ("<tr> \n");
			echo ("<th></th>");
			echo ("<th>Quantity</th>");
		  	echo ("<th>Cos Per Item</th>");
		  	echo ("<th>Sub Total</th>");		   
	  	echo ("</tr>");

	  	echo "<tr> \n";
			echo ("<th>EVGA GeForce RTX 2080 XC GAMING</th>");
			echo ("<td>$$u1</td>");
		  	echo ("<td>$$c1</td>");
		  	echo ("<td>$$s1</td>");		   
	  	echo "</tr>";

	  	echo ("<tr> \n") ;
			echo ("<th>GIGABYTE Aero 15W Laptop</th>");
			echo ("<td>$$u2</td>");
		  	echo ("<td>$$c2</td>");
		  	echo ("<td>$$s2</td>");		   
	  	echo ("</tr>");


	  	echo ("<tr> \n");
			echo ("<th>Thermaltake Core P3 TG Snow ATX PC Case</th>");
			echo ("<td>$$u3</td>");
		  	echo ("<td>$$c3</td>");
		  	echo ("<td>$$s3</td>");		   
	  	echo ("</tr>"); 

	  	echo ("<tr> \n");
			echo ("<th>Shipping</th>");
			echo ("<td colspan=2>Express</td>");
		  	echo ("<td>$$ship</td>");
		echo ("</tr>"); 

		echo ("<tr> \n");
			echo ("<th colspan=3>Total Cost</th>");
		  	echo ("<td>$$total</td>");
		echo ("</tr>"); 	  		  		  		  		
		echo ("</table>");

	
		

?>


	  	

	  	
