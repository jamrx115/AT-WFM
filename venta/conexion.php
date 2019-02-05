<?php



function conexion(){



 $con = mysql_connect("localhost","aws_1","Alltic2017");



 if (!$con){



  die('Could not connect: ' . mysql_error());

 }



 mysql_select_db("ejemplos", $con);



 return($con);



}



?>