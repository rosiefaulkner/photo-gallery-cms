<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

    
    echo rand(1, 50);
    
    echo "<br>";
    
    $string = "Karim is the best ever!";
    
    echo "<br>";

    
    echo strlen($string);
    
    echo "<br>";

    $list = [676, 999, 0, 819, 18, 24, 17];
    
    echo "<br>";

    
    echo max($list);
    
    echo "<br>";
    
    sort($list);

    print_r($list);
    
    
    
    
    
    
	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>