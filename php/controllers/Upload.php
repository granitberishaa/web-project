<?php
function upload($photoname, $targetDir){
  $target_dir = "C:/wamp64/www/web-project/img/$targetDir";
  $target_file = $target_dir . $photoname;
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      $uploadOk = 1;
    } else {
      $uploadOk = 0;
    }
  }
  // Check if file already exists
  if (file_exists($target_file)) {
    $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 500000000) {
    $uploadOk = 0;
  }
  // Allow certain file formats
  if( $imageFileType != "png" && $imageFileType != "jpg" && $imageFileType != "jpeg") {
    $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    return false;
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      return true;
    } else {
      return false;
    }
  }
}
?>