<?php
/* Stores the uploaded file to the given destination.
* $form_element_name : The name of HTML form element.
* $destination : Destination path to store the uploaded file (Must end with '/').
(example) Linux "/tmp/", Windows "C:/temp/"
*
* Returned value: Full path to the stored file on success. False if failed.
*/
class _file_upload{
function store_uploaded_file($file_element_name, $destination) {
$temp_file = $_FILES[$file_element_name]['tmp_name'];

//echo "temp_file:".$temp_file;

if (!is_uploaded_file($temp_file)) {
	//echo "okkkkkkkkkkk";
	return false;
}


$original = pathinfo($_FILES[$file_element_name]['name']);
if (!preg_match("/.*\/$/", $destination)) return false;
//----- If destination file exists, append number to the filename
$i = 0;
do {
$dest_path = $destination.$original['filename']
.($i==0?'':"[$i]").'.'.$original['extension'];
$i++;
} while (file_exists($dest_path));
//----- Move the temporaly file to the destination
echo "22".$temp_file;
echo "33".$dest_path;
if (move_uploaded_file($temp_file, $dest_path))
//echo "PHOTO PATH is".$dest_path;
return $dest_path; //else return false;
}
}