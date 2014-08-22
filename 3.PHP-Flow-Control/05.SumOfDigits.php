<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form method="get">
    Input String: <input type="text" name="string"><input type="submit">
</form>
<?php
if(isset($_GET['string']) && !empty($_GET['string'])){
    $string = $_GET['string'];
    $numbers = explode(", ", $string);
    //var_dump($numbers);
    echo("<table>");
    for($i = 0 ; $i<count($numbers);$i++){
        $num = $numbers[$i];
        $numStr = $num;
        $sum= 0;
        if(!is_numeric($num)){
            echo("<tr><td>$numStr</td><td>I cannot sum that</td></tr>");
            continue;
        }
        while($num>0){
                if(!is_numeric($num)){
                    echo("<tr><td>$numStr</td><td>I cannot sum that</td></tr>");
                    break;
                }
                $sum += $num%10;
                $num /=10;
                //echo($num."<br />");
        }
        echo("<tr><td>$numStr</td><td>$sum</td></tr>");
    }
    echo("</table>");
}
?>
</body>