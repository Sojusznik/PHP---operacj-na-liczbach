<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form name="f" method="post">
     Podaj liczbę calkowitą:<input type="number" name="liczba"><br>
     <input type="submit" value="sub">
 </form>
<?php
if (isset($_POST["liczba"])) //Dzielniki liczby
{
$a=$_POST["liczba"];
if($a>0)
{
for($i=1;$i<=$a;$i++)
 if($a%$i==0)
   echo "$i ";
}
}

?>
</body>
</html>