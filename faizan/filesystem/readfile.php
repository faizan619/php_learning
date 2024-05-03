<?php 
// $file = "result/abc.txt";
// $myfile = fopen($file,"r") or die("unable to read file");
// echo fread($myfile, filesize($file));
// fclose($myfile);


if(isset($_FILES['file'])){
    // print_r($_FILES['file']);
    $file = $_FILES['file']['tmp_name'];
    $myfile = fopen($file,"r") or die("unable to read file");
    echo fread($myfile, filesize($file));
    fclose($myfile);
    echo "<br/>";
    echo "COmplete reading the file!";
}
?>


<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file" id="file">
    <br>
    <br>
    <button>Read File</button>
</form>