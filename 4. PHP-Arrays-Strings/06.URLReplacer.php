<form method="post">
    <textarea name="txtArea"></textarea>
    <br>
    <input type="submit"">
</form>
<?php
if(!empty($_POST['txtArea'])) {
$txt =$_POST['txtArea'];
$matcher1 = "(<a href=\W+)";
$replace1 = "[URL=";
$replace2 = "[/URL]";
preg_match_all($matcher1, $txt, $matches);
foreach ($matches as $match) {
    $txt = str_replace($match,$replace1,$txt);
    }
$matcher2 = "/\W*\/\W*a>/";
$replace2 = "[/URL]";
preg_match_all($matcher2, $txt, $matches2);
foreach ($matches2 as $match2) {
    $txt = str_replace($match2,$replace2,$txt);
}
echo($txt."\n");
}
?>