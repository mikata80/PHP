<form method="post">
    Enter Tags:
    <input type="text" name="tags">
    <input type="submit">
</form>
<?php
if(isset($_POST['tags'])){
    $intags = $_POST['tags'];
    $arr  = explode (", ", $intags);
    $arr = array_count_values($arr);
    $maxvalue = max($arr);
    $num = array();
    foreach($arr as $key => $value){
        $num[] = $value;
    }
    array_multisort($num, SORT_DESC, $arr);
    foreach ($arr as $key => $value) {
       echo $key .":".$value." times"."<br />";
    }
    $strmost= "";
    foreach ($arr as $key => $value) {
        if($value == $maxvalue){
            $strmost = $strmost.$key.", ";
        }
    }
    echo("<br />"."The most frequency tag is: ".$strmost ." ");
}
?>