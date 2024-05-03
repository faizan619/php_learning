<?php
// echo "<pre>";
// print_r($_FILES['fileUpload']);
// echo "</pre>";
// echo "<hr/>";


// if ($_FILES['fileUpload']) {
//     echo 'file name is  : ' . $_FILES['fileUpload']['name'];
//     echo "<br/>";
//     echo 'file full_path is  : ' . $_FILES['fileUpload']['full_path'];
//     echo "<br/>";
//     echo 'file type is  : ' . $_FILES['fileUpload']['type'];
//     echo "<br/>";
//     echo 'file tmp_name is  : ' . $_FILES['fileUpload']['tmp_name'];
//     echo "<br/>";
//     echo 'file size is  : ' . $_FILES['fileUpload']['size'];
//     echo "<br/>";
// }

// if($_FILES['fileUpload']){
//     $path = $_FILES['fileUpload']['name'];
//     echo $path;
//     $uploatAt = "./upload/".$path;
    
//     if(move_uploaded_file($_FILES['fileUpload']["tmp_name"],$uploatAt)){
//         echo "File Uploaded Successfully!";
//     }
//     else{
//         die("Error While File is transfering!");
//     }
// }
// else{
//     die("No File FOund");
// }





// just for the practise purpose this below code is created.
// if($_FILES["fileUpload"]){
//     $path = $_FILES['fileUpload']['name'];
//     $uploadAt = './upload/'.$path;
//     if(move_uploaded_file($_FILES['fileUpload']['tmp_name'],$uploadAt)){
//         echo "File Moved Successfully!";
//     }
//     else{
//         die("Failed to Move the File");
//     }
// }
