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
    <h1>Create New SCP Subject</h1>
    <div class="navigation">
        <div class="col">
            <ul class="nav">
            <li class="nav-item">
                    <a class="nav-link active" href = "index.php">
                        <?php echo "Back" ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="information">
        <?php include 'create_data.php'; ?>
        <div class="form-group">
            <form action="create_data.php" method="POST">
                <label>Item_#:</label>
                <br>
                <input type="text" name="item_no" placeholder="Enter the item number..." required class="form-control">
                <br>
                <label>Object Class:</label>
                <br>
                <input type="text" name="object_class" placeholder="Enter the object class" required class="form-control">
                <br>
                <label>Special Containment Procedures:</label>
                <br>
                <input type="text" name="procedures" placeholder="Enter the procedures for the subject..." required class="form-control">
                <br>
                <label>Description:</label>
                <br>
                <input type="text" name="description" placeholder="Enter the description of the subject..." required class="form-control">
                <br>
                <label>Reference:</label>
                <br>
                <input type="text" name="reference" placeholder="Enter any references..." required class="form-control">
                <br>
                <label>Additional Information:</label>
                <br>
                <input type="text" name="notes" placeholder="Any additional notes..." required class="form-control">
                <br>
                <label>Extra Information:</label>
                <br>
                <input type="text" name="extra" placeholder="And extra information..." required class="form-control">
                <br><br>
                <button type="submit" class="btn createBtn">Create Subject</button>
                
            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>