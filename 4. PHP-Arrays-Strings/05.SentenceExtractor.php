<form method="post">
    <textarea name="txtArea"></textarea>
    <br />
    <input type="text" name="match" >
    <br>
    <input type="submit"">
</form>
<?php

if(!empty($_POST['txtArea']) && !empty($_POST['txtArea'])){
$txtArea =$_POST['txtArea'];
//  $txtArea = "This is my cat! And this is my dog. We happily live in Paris – the most beautiful city in the world! Isn’t it great? Well it is :)";
$matchWord = $_POST['match'];
$regex = "/(?<=[.?!])\s/";
$arr = preg_split($regex,$txtArea,-1,PREG_SPLIT_NO_EMPTY);
$matcher = "/\s+".$matchWord."\s+.*[.?!]+$/";
foreach ($arr as $sent) {
        if(preg_match($matcher,$sent)>0){
            echo($sent."<br/>");
        };
    }

}
?>