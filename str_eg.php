<?php
$d = "xyz" ;
$m = 0 ;
$n = strlen($d);
$y = 0 ;
while ($y<$n)
{
	
	$x = substr($d,$y,1) ;
	if ($x % 3 == 0)
			$m = $m + 1 ;
				
	$y = $y + 1 ;
}
echo $m ;

	
?> 
