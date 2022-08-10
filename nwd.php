<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="number" name="nwda">
        <input type="number" name="nwdb">
        <input type="submit" value="sub">
    </form>
<?php
if (isset($_POST["nwda"]))
{
 $a=$_POST["nwda"];
 $b=$_POST["nwdb"];
 while($a!=$b){
 if($a>$b)
 {
    $a-=$b;
 }
 else if($a<$b)
 {
     $b-=$a;
 }
}
echo $a;
}
?>
</body>
</html>