<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form method="get">
    Enter number of years<input type="text" name="years">
    <input type="submit" value="Show costs">
</form>
<?php
if(isset($_GET['years']) && !empty($_GET['years'])){
    $yearsNum = $_GET['years'];
    $today = getdate();
    $yearNow = $today[year];
    $years = [];

    for($i = 0 ; $i<$yearsNum;$i++){
        array_push($years,$yearNow-$i);
    }
    //var_dump($years);
    echo("<table><thead><tr><td>Year</td><td>January</td><td>February</td><td>March</td><td>April</td><td>May</td><td>June</td><td>July</td><td>August</td><td>September</td><td>October</td><td>November</td><td>December</td><td>Total:</td></tr></thead><tbody>");
    for($i = 0 ; $i<count($years);$i++){
        $y = $years[$i];
        $sum= 0;
        //echo($y.PHP_EOL."=> ");
        echo("<tr><td>$y</td>");
        for($j = 0 ; $j<12;$j++){
            $rnd = rand(0,999);
            $sum +=$rnd;
         //   echo($j.PHP_EOL .'->'.$rnd.PHP_EOL.";");
            echo("<td>$rnd</td>");//<td>$rnd</td><td>$rnd</td><td>$rnd</td><td>$rnd</td><td>$rnd</td><td>$rnd</td><td>$rnd</td><td>$rnd</td><td>$rnd</td><td>$rnd</td><td>$rnd</td>");
        }
         echo("<td>$sum</td></tr>");
        //echo("<br />");
    }
    echo("</tbody></table>");
}
?>
</body>