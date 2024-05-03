<form action="" method="post">
    <input type="text" name="filename" id="filename" placeholder="Enter File Name">
    <br>
    <br>
    <input type="text" name="content" id="content" placeholder="Enter Content of the file">
    <br>
    <br>
    <button name="res">Submit</button>
</form>


<?php 

if(isset($_POST["res"])){
    $filename = $_POST["filename"];
    $filePath = "result/".$filename;
    $content = $_POST["content"];
    // $file = fopen($filename,"w") or die("unable to create file!");
    $file = fopen($filePath,"w") or die("unable to create file!");
    fwrite($file, $content);
    fclose($file);
    echo "File is Created!";
}

// $fileName = "result/dummy.php";
// $content = "echo 'hello world'!";
// $file = fopen($fileName,"w") or die("unable to create file!");
// fwrite($file, $content);
// fclose($file);
// echo "File is Created!";

?>