<?php
$feh ="";
$cels= "";

if (isset($_POST["ART"]) &&  isset($_POST["temp"])){
    $temp =  round(doubleval($_POST["temp"]));

    if($_POST["ART"] == "feh"){

        $feh = round(doubleval($temp*9/5+32 ) ,1);
    
    }

     else if ($_POST["ART"] == "cels"){

        $cels = round(doubleval($temp*9-32)*5/9 , 1);
    
}
}

?>


<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>Temperatur- Umrechnen</h1>

<form  action ="/index.php" method="POST">

<input type = "text" id = "temp" name = "temp" placeholder = "temperatur  eingeben" >

<select name ="ART" >
    <option value ="feh"> feh</option>
    <option value ="cels"> cels</option>
</select>



<input type = "submit" id ="klicK"   >

<br>

<input TYPE ="text"  id = "ergebnisse" name ="ergebnisse" placeholder = "ergebnisse"  size="50"  value = "<?php echo $feh . $cels; ?> " >

</form>


</body>
</html>
