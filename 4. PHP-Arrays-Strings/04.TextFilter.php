<form method="post">
    Text:<input type="text" name="txt">
    <br>
    Banlist:<input type="text" name="banList">
    <br>
    <input type="submit" value="Ban!">
</form>
<?php
if(!empty($_POST['txt']) && !empty($_POST['banList']) ){
    $banList = explode(", ",$_POST['banList']);
    $text = $_POST['txt'];
    foreach ( $banList as $b) {
        $text = str_replace($b,str_repeat('*',strlen($b)),$text);
    }
    echo($text);
}

?>