<?php
include "db_conn.php";
$ID = $_GET["id"];

if (isset($_POST["submit"])) {
  $Description = $_POST['Description'];
  $Datedb = $_POST['Datedb'];
  $Datefin = $_POST['Datefin'];
  $State = $_POST['State'];

  $sql = "UPDATE `fault` SET `Description`='$Description',`Datedb`='$Datedb',`Datefin`='$Datefin',`State`='$gender' WHERE Id = $ID";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: index.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
   
  </nav>

  <div class="container">
    <div class="text-center mb-4">
      <h3>Edit </h3>
      <p class="text-muted">Click update after changing any information</p>
    </div>

    <?php
    $sql = "SELECT * FROM `fault` WHERE ID = $ID LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Description</label>
            <input type="text" class="form-control" name="Description" value="<?php echo $row['Description'] ?>">
          </div>

          <div class="col">
            <label class="form-label">Date de  debut:</label>
            <input type="text" class="form-control" name="Date de  debut" value="<?php echo $row['Datedb'] ?>">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Date de fin:</label>
          <input type="text" class="form-control" name="Date fin" value="<?php echo $row['Datefin'] ?>">
        </div>

        <div class="form-group mb-3">
          <label>State:</label>
          &nbsp;
          <input type="radio" class="form-check-input" name="State" id="Urgent" value="Urgent" <?php echo ($row["State"] == 'male') ? "checked" : ""; ?>>
          <label for="Urgent" class="form-input-label">Urgent</label>
          &nbsp;
          <input type="radio" class="form-check-input" name="State" id="female" value="Not Urgent" <?php echo ($row["State"] == 'female') ? "checked" : ""; ?>>
          <label for="Not Urgent" class="form-input-label">Not Urgent</label>
        </div>

        <div>
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>