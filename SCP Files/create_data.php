<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles.css">

    <div id="popup" style="visibility:hidden;">
        Record added successfully
    </div>
  </head>
</html>

<?php

$mysqli = new mysqli('localhost', 'a3000273_user', 'Toiohomai1234', 'a3000273_SCP_Files') or die(mysqli_error($mysqli));
$subjectAdded = false;
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

    $mysqli->query("insert into SCP_Subjects (item_no, subject_image, object_class, procedures, description, reference, notes, extra) values ('$item_no', '$subject_image', '$object_class', '$procedures', '$description', '$reference', '$notes', '$extra')") or die($mysqli->error);

    $subjectAdded = true;

    if($subjectAdded)
    {
     echo '
       <script type="text/javascript">
         function hideMsg()
         {
            document.getElementById("popup").style.visibility = "hidden";
         }

         document.getElementById("popup").style.visibility = "visible";
         window.setTimeout("hideMsg()", 2000);         
       </script>';
    }else{
        header("Location: create.php");
    };

    $subjectAdded = false;   
};

?>
