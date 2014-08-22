<form method="get"">
    Enter Amount:
    <input type="text" name = "amount">
    <br>
    <input type="radio" name="curr" value="$"> USD
    <input type="radio" name="curr" value=""> EUR
    <input type="radio" name="curr" value=""> BGN
    <br>
    Compound Interest Amount:
    <input type="text" name="compoundAmount">
    <br>
    <select name="periods">
        <option value="6">6 Months</option>
        <option value="12">1 Year</option>
        <option value="24">2 Years</option>
        <option value="60">5 Years</option>
    </select>
    <input type="submit" name="submit" value="Calculate">
</form>
<?php
    if(isset($_GET['amount'])){
        $interest = $_GET['compoundAmount'];
        $amount = $_GET['amount'];
        $period = $_GET['periods'];
        $prcPerMonth = 12/$interest/100.00;
        $curr = $_GET['curr'];
//        echo("interest = ".$interest."<br />");
//        echo("amount = ".$amount."<br />");
//        echo("period = ".$period."<br />");
//        echo("prcPerMonth = ".$prcPerMonth."<br />");
//        echo("tmpAmount = ".$tmpAmount."<br />");
//        echo("curr = ".$curr."<br />");

        for ($i = 1; $i<=$period;$i++){
            $amount =$amount  + $amount *$prcPerMonth;
        }
        echo $curr." ".number_format($amount, 2, '.', '');
    }
?>