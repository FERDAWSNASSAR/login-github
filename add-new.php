<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $Description = $_POST['Description'];
   $Datedb = $_POST['Datedb'];
   $Datefin = $_POST['Datefin'];
   $State = $_POST['State'];

   $sql = "INSERT INTO `fault`(`ID`, `Description`, `Datedb`, `Datefin`, `State`) VALUES (NULL,'$Description','$datedb','$Datefin','$State')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=New record created successfully");
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
         <h3>Add  breakdown</h3>
         <p class="text-muted">Complete the form below to add  breakdown</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Description:</label>
                  <input type="text" class="form-control" name="Description" placeholder="">
               </div>

               <div class="col">
                  <label class="form-label">Datedb:</label>
                  <input type="Datedb" class="form-control" name="Datedb" placeholder="../../....">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Datefin:</label>
               <input type="Datefin" class="form-control" name="Datefin" placeholder="../../....">
            </div>

            <div class="form-group mb-3">
               <label>State:</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="State" id="Urgent" value="Urgent">
               <label for="Urgent" class="form-input-label">Urgent</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="State" id="Not Urgent" value="Not Urgent">
               <label for="Not Urgent" class="form-input-label">Not Urgent</label>
            </div>

            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
