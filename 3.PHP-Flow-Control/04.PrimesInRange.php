<body>
<form method="get">
    Starting index <input type="text" name="start"> End:<input type="text" name="end"><input type="submit">
</form>
<?php
if(isset($_GET['start']) && isset($_GET['end']) && !empty($_GET['start'])  && !empty($_GET['end'])){
   $start = $_GET['start'];
   $end = $_GET['end'];
   for( $i = $start; $i <= $end; $i++ ){
     for( $j = 2; $j < $i; $j++ ){
        if( $i % $j == 0 ){
            if($i<$end){
                echo($i.",".PHP_EOL);
            }else{
                echo($i.PHP_EOL);
            }

            break;
        }
      }
      if( $i == $j ){
          if($j<$end){
            echo("<b>$j</b>".",".PHP_EOL);
          }  else{
              echo("<b>$j</b>".PHP_EOL);
          }
      }
   }
 }
?>
</body>