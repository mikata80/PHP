<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form method="get">
    Enter cars <input type="text" name="cars"><input type="submit" name="res" value="Show result">
</form>
<?php
if(isset($_GET['cars']) && !empty($_GET['cars'])){
    $cars = $_GET['cars'];
    $arr = explode(", ", $cars);
    $arrColors = ["Red","Green","Blue","Yellow","Black"];
    echo("<table><thead><tr><td>Car</td><td>Color</td><td>Count</td></tr></thead><tbody>");
    for($i = 0 ; $i<count($arr);$i++){
        $car = $arr[$i];
        $count = rand(1,5);
        $rndIdex = rand(1,4);
        $color = $arrColors[$rndIdex];
        echo("<tr><td>$car</td><td>$color</td><td>$count</td></tr>");
    }
    echo("</tbody></table>");
   }
?>
</body>