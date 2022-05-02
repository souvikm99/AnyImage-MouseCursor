<?php

/* Get the name of the uploaded file */
//$filename = $_FILES['file']['name'];
$target_dir = "upload/";

$image = $_POST['image'];
$image = str_replace('data:image/png;base64,', '', $image);
$image = str_replace(' ', '+', $image);
$data = base64_decode($image);
$unique = $_COOKIE['cname'];

/* Choose where to save the uploaded file */
//$location = "upload/".$filename.".png";
$file = $target_dir.$unique.'.png';
$success = file_put_contents($file, $data);
if($success != false)
  echo '{"success": true}';

/* Save the uploaded file to the local filesystem 
if ( move_uploaded_file($_FILES['file']['tmp_name'], $location) ) { 
  echo 'Success'; 
} else { 
  echo 'Failure'; 
}*/

?>