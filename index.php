<?php
$conn = mysqli_connect("localhost","root","","method");

if(isset($_POST['insert'])){
    $numberToInsert = 1;

    $sql= "INSERT INTO method (number) VALUES ($numberToInsert)";

    if($sql){
        echo "number inserted";
    }
}

if(isset($_POST['reset'])){
    $reset= "UPDATE method SET (number)=0 WHERE number=1";

    if($reset){
        echo "Number Updated";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vhuvuj</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
        <input type="submit" value="submit" name="insert">  
        <input type="submit" value="reset" name="delete">
        </fieldset>
    </form>
</body>
</html>