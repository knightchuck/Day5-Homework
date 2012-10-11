<?php 

/* The heading */
print "<font color='red'><b>BELOW IS THE 5X TABLE</font></b><br>";

/*  Variables  */
$i = 1;
$j = 5;
$k = $i * $j;

/* Loop for Multiplying 5 x 1 through 30 */
while ($i <= 30)
{
 	print "5 x $i = $k<br>";
 	$i = $i +1;
 	$k = $i * $j;
 }