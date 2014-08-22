<form method="get"">
Enter HTML tag :
<input type="text" name = "checkTag">
<br>
<input type="submit" name="submit" value="Calculate">
</form>

<?php
if(isset($_GET['checkTag'])){

    $tag = $_GET['checkTag'];
    function checkTag($tag){
        $arrTags = array('!DOCTYPE','a','abbr','acronym ','address','applet ','area','article','aside','audio','b','base','basefont ','bdi','bdo','big ',
            'blockquote','body','br','button','canvas','caption','center ','cite','code','col','colgroup','command','datalist','dd','del',
            'details','dfn','dir','div','dl','dt','em','embed','fieldset','figcaption','figure','font','footer','form','frame','frameset',
            'h1 - h6','head','header','hgroup','hr','html','i','iframe','img','input','ins','kbd','keygen','label','legend','li','link',
            'map','mark','menu','meta','meter','nav','noframes','noscript','object','ol','optgroup','option','output','p','param','pre','progress',
            'q','rp','rt','ruby','s','samp','script','section','select','small','source','span','strike ','strong','style','sub','summary','sup',
            'table','tbody','td','textarea','tfoot','th','thead','time','title','tr','track','tt','u','ul','var','video ','wbr');
        $arrLen = count($arrTags);
        for($i = 0 ; $i < $arrLen ; $i++){
            if ($arrTags[$i] == $tag){
                return true;
                die;
            }
        }
        return false;
    }

    session_start();
    if (checkTag($tag) ) {
        $_SESSION['count']++;
        echo "<span style=\"font-size: 20px;font-weight: bold\">Valid HTML Tag!</span>"."<br />";
        echo "<span style=\"font-size: 20px;font-weight: bold\">Score:".$_SESSION['count']."</span>";

    }else{
        echo "<span style=\"font-size: 20px;font-weight: bold\">Invalid HTML Tag!</span>"."<br />";
        echo "<span style=\"font-size: 20px;font-weight: bold\">Score:".$_SESSION['count']."</span>";

    }
}
?>