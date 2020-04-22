<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>SCP - Subject Files</title>
  </head>
  <body class="container">

  <?php include "connection.php"; ?>

    <h1>SCP Subject Files</h1>
    <!--menu row -->

    <div class="navigation">
        <div class="col">
            <ul class="nav">
            <li class="nav-item">
                    <a class="nav-link active" href = "create.php">
                        <?php echo "Create New SCP Subject" ?>
                    </a>
                </li>
                <?php foreach($result as $menu_item): ?>
                <li class="nav-item">
                    <a class="nav-link active" href = "index.php?SCP_Subjects='<?php echo $menu_item['item_no']; ?>'">
                        <?php echo $menu_item['item_no']; ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <!-- Display record in div below -->
    <div class="information">
        <div class="col">
            <?php 
            //check if subject get values exist
            if(isset($_GET['SCP_Subjects']))
            {
                //remove single quotes from subject get value
                $item_number = trim($_GET['SCP_Subjects'], "'");

                //run sql command to get record based on get value
                $record = $connection->query("select * from SCP_Subjects where item_no = '$item_number'") or die($connection->error());

                //convert $record into an array for us to echo out on screen
                $row = $record->fetch_assoc();

                //create variables that hold data from db fields
                $item = $row['item_no'];
                $object_class= $row['object_class'];
                $procedures = $row['procedures'];
                $description = $row['description'];
                $reference = $row['reference'];
                $notes = $row['notes'];
                $extra = $row['extra'];
                $subject_image = $row['subject_image'];

                //strip out \n and replace with line breaks
                $procedures = str_replace('\n', '<br><br>', $procedures);
                $description = str_replace('\n', '<br><br>', $description);
                $reference = str_replace('\n', '<br><br>', $reference);
                $reference = str_replace('\c', '<code>', $reference);
                $notes = str_replace('\n', '<br><br>', $notes);
                $extra = str_replace('\n', '<br><br>', $extra);
                $notes = str_replace('\b', '<b>', $notes);
                $extra = str_replace('\b', '<b>', $extra);
                $notes = str_replace('\d', '</b>', $notes);
                $extra = str_replace('\d', '</b>', $extra);

                //display record to the screen
                echo "<br><h2>Item_#: {$item}</h2><br>
                <h3>Object Class: {$object_class}</h3><br>";  
                              
                if ($subject_image){
                    echo "<p><img src='images/{$subject_image}' 
                    alt='{$subject_image}'/></p>";
                };


                echo "<b>Special Containment Procedures:</b><br><br>
                <p>{$procedures}</p><br>
                <b>Description</b><br><br>
                <p>{$description}</p><br>";
                
                if ($reference){
                    echo "<b>Reference</b><br>
                    <p>{$reference}</p>";
                };

                if ($notes){
                    echo "<p>{$notes}</p>";
                };

                if ($extra){
                    echo "<p>{$extra}</p>";
                };

            };
            ?>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
