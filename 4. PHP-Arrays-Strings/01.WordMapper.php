<head>
    <style>
        table{
            background: lightgrey;
            font-weight: bold;
        }
    </style>
</head>
<body>
<form method="post">
    <textarea name="txtArea"></textarea>
    <br>
    <input type="submit" value="Count Words">
</form>
<?php
if(isset($_POST['txtArea'])){
    $txtArea =$_POST['txtArea'];
    $regex = "/[A-Za-z]+/";
    preg_match_all($regex,strtolower($txtArea),$arr,PREG_SET_ORDER);
    //echo (json_encode($arr)."<br>");
    $arrRes = array();
    foreach ($arr as $word){
        $w = $word[0];
        if (isset($arrRes[$w])) {
            $arrRes[$w]++;
        } else {
            $arrRes[$w] = 1;
        }
    }
    arsort($arrRes);
    //echo (json_encode($arrRes)."<br>");
}
?>
<table border="=1px solid">
    <?php foreach ($arrRes as $w=>$cnt):?>
        <tr>
            <td><?= $w ?></td>
            <td><?= $cnt ?></td>
        </tr>
    <?php endforeach?>
</table>
</body>