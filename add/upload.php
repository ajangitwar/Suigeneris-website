<?php

if(isset($_POST['submit'])){
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["myimage"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$category = $_POST['category'];
$name = $_POST['name'];
$post = $_POST['post'];
$year = $_POST['year'];
$img = $_FILES["myimage"]["name"];
// Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["myimage"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["myimage"]["size"] > 5000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    echo $_FILES["myimage"]["tmp_name"];
    if (move_uploaded_file($_FILES["myimage"]["tmp_name"], $target_file)) {
        $insert = mysqli_query($conn,"INSERT INTO $category( `image`, `name`, `post`, `year`) VALUES ('$img','$name', '$post', '$year')");
        echo "<script>alert('uploaded!');</script>";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}
?>