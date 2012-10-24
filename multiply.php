<?php
   // Declare and instantiate variables (optional)
   
   // get the user data from the form
   $Factor = $_POST["Factor"];
   
   
   // Calculate the discount
   $answer = $Factor * 5;
      
   
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

<title>Multiplication by 5</title>

<link rel="stylesheet" href="CSS/multiply.css"/>

</head>
<body>
<header>
<img src="multi.jpg"
	alt="Multiply" width="100" height="100">
<hgroup>
	<h1>Multiply</h1>
	<h2>Be Fruitful and Multiply!</h2>
	
</hgroup>
</header> 
<section id="container">
<header id="top">
		<h1> Multiply by 5!</h1>
		
		</header>


    <div id="content">
        <h1>Here you go...</h1>

        <label>The Answer is:</label>
        <span><?php echo $answer; ?></span><br />

       
        <p>&nbsp;</p>
    </div>
   </section>
    <footer>
	<p>&copy; Be Fruitful and Multiply!</p>
</footer>
</body>
</html>