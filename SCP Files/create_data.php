<?php

$mysqli = new mysqli('localhost', 'a3000273_user', 'Toiohomai1234', 'a3000273_SCP_Files') or die(mysqli_error($mysqli));
if(isset($_POST['item_no']))
{
    $item_no = $_POST['item_no'];
    $subject_image= $_POST['subject_image'];
    $object_class= $_POST['object_class'];
    $procedures = $_POST['procedures'];
    $description = $_POST['description'];
    $reference = $_POST['reference'];
    $notes = $_POST['notes'];
    $extra = $_POST['extra'];

    $procedures = str_replace("'","\'",$procedures);
    $description = str_replace("'","\'",$description);
    $reference = str_replace("'","\'",$reference);
    $notes = str_replace("'","\'",$notes);
    $extra = str_replace("'","\'",$extra);

    $mysqli->query("insert into SCP_Subjects (item_no, subject_image, object_class, procedures, description, reference, notes, extra) values ('$item_no', '$subject_image', '$object_class', '$procedures', '$description', '$reference', '$notes', '$extra')") or die($mysqli->error);

    header("Location: index.php");  
};

?>
