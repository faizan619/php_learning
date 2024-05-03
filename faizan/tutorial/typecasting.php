<?php 
// echo "Type Casting In PHP";
// echo "<hr/>";
// $a = 5;
// echo "before changing the type : ";
// echo var_dump($a);
// echo "<hr/>";
// echo "<br/>";
// $a = (string) $a;
// echo "After changing the type  : ";
// echo var_dump($a);


// echo "<br/>";
// $a = (boolean) $a;
// echo "After changing the type  : ";
// echo var_dump($a);
// echo "<br/>";
// $a = (float) $a;
// echo "After changing the type  : ";
// echo var_dump($a);
// echo "<br/>";
// $a = (array) $a;
// echo "After changing the type  : ";
// echo var_dump($a);

?>

<?php
echo "Global and Local variable in PHP!";
echo "<hr/>";

// $name = "faizan";

// function getName(){
//     $name = "adnan";
//     // global $name;
//     echo $name;
// }
// function getName1($name){
//     // $name = "adnan";
//     // global $name;
//     echo $name;
// }


// echo $name;
// echo "<br/>";
// getName();
// echo "<br/>";
// getName1($name);


$name = "royal college";
function test(){
    $name = "baneghar school";
    echo $name;

    function test1(){
        $name ="faizan";
        echo $name;

        function main(){
            global $name;
            echo $name;

            function test2($name){
                echo $name;
            }
        }
    }
}

echo "out : $name";
echo "<br/>";
test();
echo "<br/>";
test1();
echo "<br/>";
main();
echo "<br/>";
test2($name);
?>