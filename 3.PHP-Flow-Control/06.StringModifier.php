<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form method="get">
    <input type="text" name="string">
    <input type="radio" name="modifier" value="1"> Check palindrome
    <input type="radio" name="modifier" value="2"> Reverse String
    <input type="radio" name="modifier" value="3"> Split
    <input type="radio" name="modifier" value="4"> Hash String
    <input type="radio" name="modifier" value="5"> Shuffle  String
    <input type="submit">
</form>
<?php
        function is_palindrome($string)
        {
            $a = strtolower(preg_replace("/[^A-Za-z0-9]/","",$string));
            if($a==strrev($a)){
                return $string." is palindrome!";
            } else{
                return $string." is not palindrome!";
            }
            return $a==strrev($a);
        }

        function splitString($string){
            preg_match_all('/[a-zA-z]/',$string,$arr);
            //var_dump($arr);
            foreach($arr as $value){
                foreach($value as $ch){
                  echo($ch.PHP_EOL);
                }
            }
        }
    if(isset($_GET['string']) && $_GET['modifier'] > 0){
        $str = $_GET['string'];
        $mod = $_GET['modifier'];
        switch ($mod) {
            case 1:
                echo is_palindrome($str);
                break;
            case 2:
                echo strrev($str);
                break;
            case 3:
                echo splitString($str);
                break;
            case 4:
                echo crypt($str);
                break;
            case 5:
                echo str_shuffle($str);
                break;
        }
    }
?>
</body>