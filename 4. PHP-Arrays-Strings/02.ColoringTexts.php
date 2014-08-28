<body>
<form method="post">
    <input type="text" name="text">
    <input type="submit" value="Count Words">

</form>
<?php
if(isset($_POST['text'])){
    $txt = $_POST['text'];
    $arr = preg_split('/ /',$txt);
    foreach ( $arr as $word) {
        $arrRes = str_split($word);

        foreach ( $arrRes as $ch) {
            $res = $ch." ";
            if(ord($ch)%2 == 0){
                echo("<span style='color: red'>$res</span>");
            } else {
                echo("<span style='color: blue'>$res</span>");
            }
        }
    }
}
?>
</body>

