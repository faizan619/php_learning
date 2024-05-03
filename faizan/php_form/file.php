<?php 

echo "<pre>";
print_r($_FILES);
echo "</pre>";


echo "<hr/>";
if($_FILES['fileUpload']){
    $path = $_FILES['fileUpload']['name'];
    echo "Name of the File : ".$path;
    $upload_path = "./uploads/".$path;

    if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $upload_path)){
        echo "<br/>File Uploaded Successfully!";
    }
    else{
        die("Failed to Upload the file");
    }
}
else{
    die("No File Found");
}

?>