<?php
require_once './../../includes/config.inc.php';

//Id of page to edit
$idPagetoEdit = $_POST["id-page"];
$newtitle = $_POST["page_title"];
$newText1 = $_POST["text1"];
$newText2 = $_POST["text2"];

function upload_images($file, $field, $idPagetoEdit, $pdo)
{
    //file properties
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];
    //work out file extension
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));
    $allowed = array('png', 'jpg', 'jpeg');
    if (in_array($file_ext, $allowed)) {
        if ($file_error === 0) {
            if ($file_size <= 20979952) {
                $file_name_new = uniqid('', true) . '.' . $file_ext;
                $file_destination = './../../img/uploads/' . $file_name_new;

                if (move_uploaded_file($file_tmp, $file_destination)) {

                    if($field=='logo'){
                        $query = "UPDATE pages SET page_logo='$file_name_new' WHERE page_id='$idPagetoEdit';";
                    }
                    if($field=='image1'){
                        $query = "UPDATE pages SET page_img1='$file_name_new' WHERE page_id='$idPagetoEdit';";
                    }
                    if($field=='image2'){
                        $query = "UPDATE pages SET page_img2='$file_name_new' WHERE page_id='$idPagetoEdit';";
                    }

                    $stmt = $pdo->prepare($query);
                    $stmt->execute();
                }
            }
        }
    }else{
        header("location: ./../../manage_pages.php?extwrong");
    }
}

//check if there is an attachment
if ($_FILES['page_logo']['name'] != null) {
    upload_images($_FILES['page_logo'], 'logo', $idPagetoEdit, $pdo);
}
if ($_FILES['page_img1']['name'] != null) {
    upload_images($_FILES['page_img1'], 'image1', $idPagetoEdit, $pdo);
}
if ($_FILES['page_img2']['name'] != null) {
    upload_images($_FILES['page_img2'], 'image2', $idPagetoEdit, $pdo);
}


$query = "UPDATE pages SET page_title=:newtitle, page_text1=:newText1, page_text2=:newText2 WHERE page_id=$idPagetoEdit;";
$stmt = $pdo->prepare($query);
$stmt->bindParam('newtitle', $newtitle, PDO::PARAM_STR);
$stmt->bindParam('newText1', $newText1, PDO::PARAM_STR);
$stmt->bindParam('newText2', $newText2, PDO::PARAM_STR);
if ($stmt->execute()) {
    header("location: ./../../manage_pages.php?saved");
} else {
    return false;
}