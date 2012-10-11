<?php
/* Sale Announcement */
print "<font color='red'><font size='18'>TODAY'S SALE</font><br>";
print "10%  OFF ON ALL ITEMS $10 OR LESS <br>";
print "20% OFF ON ALL ITEMS OVER $10<br><br>";
print "<font color='black'>";

/* Variables */
$i = 1;
$j = $i * .10;
$k = $i - $j;

/* While loop for costs $10 or less */
while ($i <= 10) {
	$i = number_format($i, 2);
	print "Your Item Price is $$i &nbsp - &nbsp Item Discount is 10 % &nbsp - &nbsp <b>Your Final Price is $";
	$k = number_format($k, 2);
	print "$k <br></b>";
	$i = $i + 1;
	$j = $i * .10;
	$k = $i - $j;
	echo "<br/>";
	}
/* While loop for costs above $10 and less than 200*/
while ($i > 10 && $i < 200) {

/* number format to have prices display as desired */
	$i = number_format($i, 2);
	
	print "Your Item Price is $$i &nbsp - &nbsp Item Discount is 20 % &nbsp - &nbsp <b>Your Final Price is $";
	$k = number_format($k, 2);
	print "$k <br></b>";
	$i = $i + 1;
	$j = $i * .20;
	$k = $i - $j;
	echo "<br/>";
	}
	
/* Reset Variables Due to Break in Increment */
	
	$i = 995;
	$j = $i * .20;
	$k = $i - $j;

	
/* While loop for costs between $995 and 1,010*/	
	while ($i >= 995 && $i < 1010) {
		$i=number_format($i, 2, '.', '');
		print "Your Item Price is $$i &nbsp - &nbsp Item Discount is 20 % &nbsp - &nbsp <b>Your Final Price is $";
		$k = number_format($k, 2);
		print "$k <br></b>";
		$i = $i + 1;
		$j = $i * .20;
		$k = $i - $j;
		echo "<br/>";
	}