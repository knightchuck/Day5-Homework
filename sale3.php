<?php
   // Declare and instantiate variables (optional)
   
   // get the user data from the form
   $product_description = $_POST["product_description"];
   $list_price = $_POST["list_price"];
   $discount_percent = $_POST["discount_percent"];
   
   // Calculate the discount
   $discount = $list_price * $discount_percent * 0.01;
   $discount_price = $list_price - $discount;
   
   
   // apply currency formatiing to the dollar amounts for output
   $list_price_formatted = "$".number_format($list_price, 2);
   $discount_percent_formatted = $discount_percent."%";
   $discount_formatted = "$".number_format($discount, 2);
   $discount_price_formatted = "$".number_format($discount_price, 2);
   
   // output the results
?>
   
<!DOCTYPE html>
<html>
<head>
<style>
	article
	{
	-webkit-column-count: 3;
	-webkit-column-gap: 25px;
	-webkit-column-rule: 5px dotted red;
	}
	articl h2 {
		text-align: center;
		-webkit-column-span: all;
		}
</style>	

<title>Widget Store, Inc.</title>
<link rel="shortcut icon" href="images/homer.ico"/>
<link rel="stylesheet" href="CSS/main.css"/>
<link rel="stylesheet" href="CSS/nav.css"/>
</head>
<body>
<header>
<img src="widgets.jpg"
	alt="Widgets" width="100" height="100">
<hgroup>
	<h1>Widget Store, Inc.</h1>
	<h2>WIDGEE  WIDGEE!!</h2>
	
</hgroup>
<section id="container">
<header id="top">
		<h1> Sale Today!</h1>
		
		</header>


    <div id="content">
        <h1>Your Discount Price!</h1>

        <label>Product Description:</label>
        <span><?php echo $product_description; ?></span><br />

        <label>List Price:</label>
        <span><?php echo $list_price_formatted; ?></span><br />

        <label>Standard Discount:</label>
        <span><?php echo $discount_percent_formatted; ?></span><br />

        <label>Discount Amount:</label>
        <span><?php echo $discount_formatted; ?></span><br />

        <label>Discount Price:</label>
        <span><?php echo $discount_price_formatted; ?></span><br />

        <p>&nbsp;</p>
    </div>
   </section>
    <footer>
	<p>&copy; 2012 Widget Store, Inc.</p>
</footer>
</body>
</html>