<form method="post">
    Enter Tags:
    <input type="text" name="tags">
    <input type="submit">
</form>

<?php
if(isset($_POST['tags'])){
    $intags = $_POST['tags'];
    $arr  = explode (", ", $intags);
    for($i = 0;$i<count($arr); $i++){
        echo($i." : ".$arr[$i]."<br />");
    }
//    foreach ($arr as $key => $value) {
//        echo "$key : $value<br />";
//    }
}
?>