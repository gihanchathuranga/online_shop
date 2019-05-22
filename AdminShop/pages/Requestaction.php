<?php

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
echo 'tar ' . $target_dir;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$img = $_POST['imgpath'];
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
//if (file_exists($target_file)) {
//    echo "Sorry, file already exists.";
//    $uploadOk = 0;
//}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
$fname = basename($_FILES["fileToUpload"]["name"]);
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //  echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$path = $target_dir . '/' . $fname;
//TO admin
emailtoclient($path);
emailtoadmin($path);


echo "<img src='$path'>";

function emailtoclient($email) {
    $from = $_POST['email'];
    $first_name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $imgpath = $_POST['imgpath'];
    $desc = $_POST['desc'];


    $subject = 'Request a new product';
    $message = 'The summary of the product details you have requested for.<br> Name:' . $first_name . '<br>Phone No:' . $mobile . "";
    $message .= '<br>image <img src=' . $imgpath . '>';
    $message .= '<br>Description:' . $desc;
    $message .= '<br>image path:' . $imgpath;
    $message .= '<br>Description:' . $desc;

    //echo $message;

    $headers = 'From: [your_gmail_account_username]@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
    if (mail($from, $subject, $message, $headers))
        echo "Email sent";
    else
        echo "Email sending failed";
}

function emailtoadmin($target_file) {
    $from = "ifeathern@gmail.com"; //add admin email
  

 
    $first_name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $imgpath = $_POST['imgpath'];
    $desc = $_POST['desc'];




    $subject = 'Request a new product';
    $message = 'The summary of the product details customer have requested for.<br> Name:' . $first_name . '<br>Phone No:' . $mobile . "";
    $message .= '<br>image <img src=' . $imgpath . '>';
    $message .= '<br>Description:' . $desc;
    $message .= '<br>image path:' . $imgpath;
    $message .= '<br>Description:' . $desc;

    $headers = 'From: [your_gmail_account_username]@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
    if (mail($from, $subject, $message, $headers))
        echo "Email sent";
    else
        echo "Email sending failed";
}

?> 