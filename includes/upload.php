<?php
if(isset($_POST['submit'])){
    $file = $_FILES['eventImage'];

    $filename = $_FILES['eventImage']['name'];
    $fileTMPname= $_FILES['eventImage']['tmp_name'];
    $fileSize = $_FILES['eventImage']['size'];
    $fileError = $_FILES['eventImage']['error'];
    $fileType = $_FILES['eventImage']['type'];

    $fileExt = explode('.',$filename);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');
    if(in_array($fileActualExt, $allowed )){
        if($fileError === 0){
            if($fileSize < 5000000){
                $fileNameNew = $filename;
                $filedestination = '../images/events/'. $fileNameNew;
                move_uploaded_file($fileTMPname, $filedestination);
                header("Location: ../admin-add-event.php?imageuploaded=".$fileNameNew."username=".$_GET['username']);
            }
            else{
                echo "file size too big!";
            }
        }else{
            echo "error uploading your file";
        }
    }
    else{
        echo "File type not accepted";
    }
}