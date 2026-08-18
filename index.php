
<?php
$BMI="";
$art ="";

if (isset($_POST["gewicht"]  ) && isset ($_POST["grosse"])) {
    $gewicht = floatval($_POST["gewicht"]);
    
    $grosse= floatval($_POST["grosse"]);
    if ($gewicht > 0 && $grosse  > 0) {
        $BMI=round($gewicht/($grosse/100*$grosse/100) , 2); 

        if ($BMI <18.5 ){
        $art = "untergewicht" ;
        

        }
        elseif ($BMI < 25  ){
         $art ="Normal" ;
     }
         elseif ($BMI < 30){
        $art = "übergewischt";

     }
         else {
        $art = "Adipositas";
        }
    } else {
        echo"null geht nicht";
  
    }
   
    
     
    
}


?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>BMI rechner</h1>

<form  action ="/index.php" method="POST">

<input type = "text" id = "grosse" name = "grosse" placeholder = "Größe eingeben" >
<input type = "text" id = "gewicht" name = "gewicht" placeholder = "Gewicht eingeben">

<input type = "submit" id ="klicK"   >

<br>

<input TYPE ="text"  id = "ergebnisse" name ="ergebnisse" placeholder = "ergebnisse"  size="50"   value="<?php echo $BMI ."   " . "Kategorie : " .$art ; ?>" >

</form>


</body>
</html>



