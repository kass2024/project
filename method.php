<?php
$l4= mysqli_connect('localhost','root','','method');
$query="SELECT * FROM method";

if($l4->connect_error){
    die("connection failed: ".$conn_error);

}
if(isset($_POST['on'])){
    $query="SELECT * FROM method";
    $obed=mysqli_query($l4,$query);
    if(mysqli_num_rows($obed)== 1){
        $update=mysqli_query($l4,"UPDATE method set number=1 where number=0");
        echo "adds";
    }else{
        $insert=mysqli_query($l4,"INSERT INTO method set number=1");
        echo "ob";
    }
    echo "done";
}
if(isset($_POST['off'])){
    $query="SELECT * FROM method";
    $obed=mysqli_query($l4,$query);
    if(mysqli_num_rows($obed)== 1){
        $update=mysqli_query($l4,"UPDATE method set number=0 where number=1");
        echo "jo";
    }else{
        $insert=mysqli_query($l4,"INSERT INTO method set number=0");
        echo "al";
    }
    echo "done";
}
$l4->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vhuvuj</title>
    <style>
       #col1{
        background-color: rgb(128, 0, 60);
        cursor: pointer;
       }
       #col1:hover{
        background-color: rgb(136, 42, 165);
       }
       .jolie{
        background: rgb(255, 192, 192);
       }
    </style>
</head>
<link ril="style sheet"href="button.css">
<body bgcolor="pink">
    <form action="" method="post">
        <fieldset>
        <input type="submit" style="font-size: 80px;" value="ON" name="on" id="col1">  
        <input type="submit" style="font-size: 82px";  value="OFF" name="off" class="jolie">
        </fieldset>
    </form>
</body>
</html>