<?php
$DATABASE_HOST = '127.0.0.1';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'tasks';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
// To save the comment and the recipe that liked the visitor in the database
@$a=$_POST['one'];
@$b=$_POST['two'];
@$c=$_POST['three'];
@$d=$_POST['four'];
@$e=$_POST['five'];
@$f=$_POST['six'];
if(@$_POST['submit'])  
{  
echo $s="insert into arm (m1,m2,m3,m4,m5,m6) values('$a','$b','$c','$d','$e','$f')";  
echo '<script type="text/javascript"> alert("Data Inserted")</script>';
mysqli_query($con,$s);  
}
?>
<?php
$DATABASE_HOST = '127.0.0.1';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'tasks';
$con1 = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if(@$_POST['run'])  
{  
 $s1="update arm set run = '1' order by id desc limit 1";  

mysqli_query($con1,$s1);  
}