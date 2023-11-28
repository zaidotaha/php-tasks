<!DOCTYPE html>  
<html>  
<head>  
<title>Example</title>  
</head>  
<body>  
	<?php  
	echo 'Tomorrow I \'ll learn PHP global variables.<br>';
	$string1 =  'This is a bad command: del c:\.';
	$result = str_replace("\\", "*", $string1);
	echo $result." *";
	?>
</body>  
</html>