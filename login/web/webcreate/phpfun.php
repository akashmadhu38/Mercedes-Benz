<html>  
    <head>  
    <title>Factorial Program using loop in PHP</title>  
    </head>  
    <body>  
    <form method="post">  
        Enter the NAME:<br>  
        <input type="text" name="name" id="name"> <br>
		
        <input type="submit" name="submit" value="Submit" /><br>
<?php

	 $name = $_POST['name']; 
     	 
function abc($name)
{
echo "length of the string:";
echo strlen($name)."<br><br>";
echo "reverse of the string:";
echo strrev($name)."<br><br>";
echo "upper case of a string:";
echo strtoupper($name)."<br><br>";
echo "lower case of the string:";
echo strtolower($name)."<br><br>";
}

 
 abc($name);
	 
?>
</body>
</html>