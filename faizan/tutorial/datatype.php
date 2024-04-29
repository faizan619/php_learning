<?php
 echo "Types of Data Types in PHP:<br/>";
 echo "<br/>1] String <br/>2] Integer <br/>3] FLoat <br/>4] Boolean <br/>5] Null <br/>6] Array <br/>7] Object <br/>8] Recourse<br/>";
?>

<?php
    $name = "faizan";
    echo var_dump( $name);

    echo "<br/>";

    $num = 24;
    echo var_dump($num);

    echo "<br/>";

    $num1 = 24.5;
    echo var_dump($num1);

    echo "<br/>";
    
    $bool = true;
    echo var_dump($bool);

    echo "<br/>";
    
    $arr = ["faizan","alam","sajjad"];
    echo var_dump($arr);
       
    echo "<br/>";

    $nul= null;
    echo var_dump($nul);
?>