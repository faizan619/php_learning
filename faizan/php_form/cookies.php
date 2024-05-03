<?php 
// echo "Cookies In Php";
// $fruits = "apple";
// setcookie("fruit","apple",time()+(86400));
// echo "<br/>";
// if(isset($_COOKIE["fruit"])){
//     // print_r($_COOKIE);
//     echo "current cookie is ".$_COOKIE["fruit"];
// }else{
//     echo "no cookies set";
// }



// echo "<pre>";
// print_r($_COOKIE); 
// echo "</pre>";


echo "Cookies in PHP!";
echo "<hr/>";
setcookie("fruit","apple", time() +(86400));
if(isset($_COOKIE['fruit'])){
    echo "Current Cookie Available is : " .$_COOKIE['fruit'];
    echo "<br/>";
    echo "<br/>";
    print_r($_COOKIE['fruit']);
}else{
    echo "no Cookie Available!";
}

?>