<?php
function upload($files, $valid_extensions, $path, $title)
{
    if (!isset($valid_extensions)) {
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
    }
    if (!isset($path)) {
        $path = 'uploads/'; // upload directory
    }
    if (!file_exists($path)) {
        mkdir($path, 0755, true);
    }
    if (isset($files)) {
        //print_r($files);
        $img = $files['name'];
        $tmp = $files['tmp_name'];

        // get uploaded file's extension
        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

        // can upload same image using rand function
        $final_image = md5(rand(10000, 10000000)) . "." . $ext;

        // check's valid format
        if (in_array($ext, $valid_extensions)) {
            $path = $path . strtolower($final_image);

            if (move_uploaded_file($tmp, $path)) {
                return $title . "/" . $final_image;
            }
        } else {
            return '';
        }
    }


}
?>