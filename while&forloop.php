
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
         $a = 0;
         $b = 0;
         
         for( $i = 0; $i<5; $i++ ) {
            $a += 10;
            $b += 5;
         }
         
         echo "At the end of the loop a = $a and b = $b" ;
      ?>
      
      ******************************************************************************************************************************

<?php 
  
  $num = 2; 
  do { 
      $num += 2; 
      echo $num, "\n"; 
  } while ($num < 100);
      
    
  ?>


echo "<P>******************************************************************************************************************************</p>";

<?php 

{ 
      
      $num = 1; 
    
            for ($i = 0; $i < $n; $i++) 
      { 
     
          for ($j = 0; $j <= $i; $j++ ) 
          { 
                
              echo $num." "; 
          } 
            
              $num = $num + 1; 
    
             echo "\n"; 
      } 
  } 
    
    
  ?> 
  
  echo "<P>******************************************************************************************************************************</p>";


  <?php	
for ($i=1; $i<=5; $i++) 	       
{ 	 
for ($k=5; $k>$i; $k--)	 
{	  
echo " ";	  
}	
for($j=1;$j<=$i;$j++)	  
{	  	
echo "*";	  
}	  	
echo "<br/>";	
} 
?>

echo "<P>******************************************************************************************************************************</p>";


<?php  
for($i=0;$i<=5;$i++)
{  
for($k=5;$k>=$i;$k--)
{  
echo "  ";  
}  
for($j=1;$j<=$i;$j++)
{  
echo "*  ";  
}  
echo "<br>";  
}  
for($i=4;$i>=1;$i--)
{  
for($k=5;$k>=$i;$k--)
{  
echo "   ";  
}  
for($j=1;$j<=$i;$j++)
{  
echo "*  ";  
}  
echo "<br>";  
}  
?>  

echo "<P>******************************************************************************************************************************</p>";

<?php  
for($i=5; $i>=1; $i--)  
{  
if($i%2 != 0)  
{  
for($j=5; $j>=$i; $j--)  
{  
echo "* ";  
}  
echo "<br>";  
}  
}  
for($i=2; $i<=5; $i++)  
{  
 if($i%2 != 0)  
{  
 for($j=5; $j>=$i; $j--)  
{  
echo "* ";  
}  
echo "<br>";  
}  
}  
?> 

echo "<P>******************************************************************************************************************************</p>";


<?php
$x=1;
for($i=1;$i<=3;$i++)
{
	for($j=1;$j<=3;$j++)
	{
	echo $x++;	
	}		
	echo "<br>";
}
?>

echo "<P>******************************************************************************************************************************</p>";

</body>

</html>