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
    <input type="number" name="si">
    <input type="submit" value="sub">
    </form>
<?php
if (isset($_POST["si"])) //Śilnia
{
$a=$_POST["si"];
if($a>=0)
{
    $s=1;
    for($i=1;$i<=$a;$i++)
    $s*=$i;
    echo $s;
}}
?>
</body>
</html>