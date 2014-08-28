<head>
    <style>
        div{
            width: 150px;
            border: 1px solid;
            border-radius: 20px;
            padding: 10px;
            float: left;
            background: linear-gradient(lightsteelblue,cornflowerblue);
            margin-right: 1050px;
            margin-bottom: 20px;
     }
        ul{
            list-style-type: circle;
            text-decoration: underline;
        }
        hr{
            border: 1px solid black;
        }
    </style>

</head>
<body>
<form method="post">
    Categories: <input type="text" name="categories">
    <br>
    Tags: <input type="text" name="tags">
    <br>
    Months: <input type="text" name="months">
    <br>
    <input type="submit" value="Generate">
</form>
</body>
<?php
if(!empty($_POST['categories'])&&!empty($_POST['tags'])&&!empty($_POST['months'])) {
    $categories =explode(", ",$_POST['categories']);
    $tags =explode(", ",$_POST['tags']);
    $months =explode(", ",$_POST['months']);
    $arrALL['Categories'] = $categories;
    $arrALL['Tags'] = $tags;
    $arrALL['Months'] = $months;
    //echo(json_encode($arrALL));
    foreach ($arrALL as $key=>$value) {
        echo("<div>");
        echo("<h2>$key</h2>");
        echo("<hr>");
        echo("<ul>");
        foreach ($value as $str) {
            echo("<li>$str</li>");
        }
        echo("</ul>");
        echo("</div>");
    }

}
?>
