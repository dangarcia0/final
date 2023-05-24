<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ventas</title>
    
</head>
<body>
    

<?php

include 'head.php';

?>

<h1>PEDIDOS</h1>
<?php


$username = "root"; 
$password = ""; 
$database = "exau5"; 
$mysqli = new mysqli("localhost", $username, $password, $database);



$query = "SELECT * FROM ventas";
echo '<table border="" cellspacing="3" cellpadding="3"> 
      <tr> 
          <td> <font face="Arial">id</font> </td> 
          <td> <font face="Arial">producto</font> </td> 
          <td> <font face="Arial">cantidad</font> </td> 
          <td> <font face="Arial">total</font> </td> 
          <td> <font face="Arial">cliente</font> </td> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["id"];
        $field2name = $row["producto"];
        $field3name = $row["cantidad"];
        $field4name = $row["total"];
        $field5name = $row["cliente"]; 

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>


</body>
</html>