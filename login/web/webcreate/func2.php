<html>  
<head>  
    <title>Parameter Addition and Subtraction Example</title>  
</head>  
<body>  
<?php  
//add() function with two parameter  
function add($x,$y)    
{  
$sum=$x+$y;  
echo "Sum = $sum <br><br>";  
}  
//sub() function with two parameter  
function sub($x,$y)    
{  
$sub=$x-$y;  
echo "Diff = $sub <br><br>";  
}  
//call function, get  two argument through input box and click on add or sub button  
if(isset($_POST['add']))  
{  
//call add() function  
 add($_POST['first'],$_POST['second']);  
}     
if(isset($_POST['sub']))  
{  
//call add() function  
sub($_POST['first'],$_POST['second']);  
}  
?>  
<form method="post">  
Enter first number: <input type="number" name="first"/><br><br>  
Enter second number: <input type="number" name="second"/><br><br>  
<input type="submit" name="add" value="ADDITION"/>  
<input type="submit" name="sub" value="SUBTRACTION"/>  
</form>
<br><br>
<?php		 
function sayHello($name="Sonoo"){  
    echo "Hello $name<br/>";  
    }  
    sayHello("Rajesh");  
    sayHello();//passing no value  
    sayHello("John");  		 
      ?>  
	  
</body>  
</html>  