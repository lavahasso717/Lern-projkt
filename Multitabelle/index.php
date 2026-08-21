
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multitable</title>
</head>
<body>
    <h1>MultiplicationTabell</h1>
    
<form method="POST" action="index.php ">
    <input type = text  id = "zahl" name ="zahl"  placeholder="gib  ein Zahl hier !" >

    <input type = submit  id = "senden"  name=" senden">
    

</form>
</body>
</html>




<?php

$zahl=0;
$ergebnise= "";
$i= 0;

if  (isset($_POST["zahl"])) {
    $zahl=intval($_POST["zahl"]);
    for ($i=1 ; $i<=10 ; $i++){

     $ergebnise = $zahl * $i; 

    
          echo  $i  ."X"  .$zahl  ."=" . $ergebnise  . "<br>"  ; 

}
    


}
?>
