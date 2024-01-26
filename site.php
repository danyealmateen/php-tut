<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<form action="site.php" method="get">
    <input type="text" name="color">
    <input type="text" name="plural noun">
    <input type="text" name="celebrity">
    <input type="submit">
</form>
<br><br>

<?php 
echo "Roses are {color} <br>";
echo "{plural noun} are blue <br>";
echo "I love {celebrity} <br>";
?>


</body>
</html>