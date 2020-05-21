<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

if (13 >= 99){
    
 echo "I like PHP" . "<br>";       
    
}	
    
elseif( 13 <= 99){
       
 echo "I love PHP" . "<br>";    
    
}
  
else {
    
 echo "PHP is ok, I guess." . "<br>";    
    
}
    
for($i = 0; $i <= 10; $i++){
    
  echo $i . "<br>";  
    
    
}
    
 
$number = 17;
    
    switch($number){
        case 82:    
        echo "Not Right!";
        break;  
        case 32:    
        echo "Nope, Not Right!";
        break; 
        case 82:    
        echo "Right!";
        break; 
        case 17:    
        echo "Right!";
        break; 
        case 82:    
        echo "Right!";
        break; 
        Default: 
            echo "None of these";
            break;
            
            
    }
    
    
    
    
    
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>