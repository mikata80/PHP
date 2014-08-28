<?php
const FORMAT_DATE = 'd-m-Y';
date_default_timezone_set("Europe/Sofia");
$dateOne = $_GET['dateOne'];
$dateTwo = $_GET['dateTwo'];

$dateStart = parseDate($dateOne);
$dateEnd = parseDate($dateTwo);

$dates = [];
$flag= 0;
if($dateStart < $dateEnd) {
    while($dateStart < $dateEnd){
        $dateStart->add(DateInterval::createFromDateString('1 day'));
        array_push($dates,clone $dateStart);
    }

} else{
    while($dateStart > $dateEnd){
        array_push($dates,clone $dateStart);
        $dateStart->sub(DateInterval::createFromDateString('1 day'));

    }
    $flag = 1;
}


$resDates = [];
foreach ( $dates as $day) {
    $d = $day->format(FORMAT_DATE);

    if(checkDay($d)){
        $resDates[] = $d;
    }
}

//usort($resDates, "cmp");
//
//function cmp($a, $b){
//    return $b-$a;
//}

if(count($resDates)!=0){
//    echo('<ol>');
//    foreach ($resDates as $resDate) {
//        echo('<li>');
//        echo($resDate);
//        echo('</li>');
//    }
//    echo('</ol>');
    printRes($resDates,$flag);
} else{
    echo('<h2>No Thursdays</h2>');
}

function parseDate($dateText){
    $date = DateTime::createFromFormat(FORMAT_DATE,$dateText);
    $date->setTime(0,0);
    return $date;
}

function checkDay($day){
    if(date('w', strtotime($day))==4){
        return true;
    }
    return false;
}


function printRes($arr, $flag){
    if($flag ==1){
        echo('<ol>');
        for($i = count($arr)-1;$i>=0;$i--){
            echo('<li>');
            echo($arr[$i]);
            echo('</li>');
        }
        echo('</ol>');
    } else{
        echo('<ol>');
        foreach ($arr as $element) {
            echo('<li>');
            echo($element);
            echo('</li>');
        }
        echo('</ol>');
    }

}
