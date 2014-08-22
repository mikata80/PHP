<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<table>
    <thead>
        <tr>
            <td>Number</td>
            <td>Square</td>
        </tr>
    </thead>
<?php
       for($i = 0 ; $i<=100;$i++){
           $sq = sqrt($i);
           $sqRound = round($sq,2);
           if($i%2 ==0){
               $sum += $sq;
                echo("<tr><td>$i</td><td>$sqRound </td></tr>");
            }
        }
       $sum = round($sum,2);
     echo("<tr><td><b>Total</b></td><td>$sum</td></tr>");
?>
</table>
</body>