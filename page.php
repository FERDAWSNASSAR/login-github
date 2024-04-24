

<?php  session_start();
if(isset($_SESSION ['admin']) ){   ?>

<!DOCTYPE html>
<html>
    <head>
<script>
    Page
</script>
<title>Page</title>

<style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }
    
    .navbar {
      background-color: #333;
      overflow: hidden;
    }
    
    .navbar a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }
    
    .navbar a:hover {
      background-color: #ddd;
      color: black;
    }
    
    .navbar .active {
      background-color: #4CAF50;
      color: white;
    }
    
    .content {
      padding: 20px;
    }
    
   
    
    table {
      width: 100%;
      border-collapse: collapse;
      border: 5px #333;

    }
    
    .tab{
      border: 5px;
    }
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    
    th {
      background-color: #f2f2f2;
    }
      .btn {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
      border-radius: 4px;
    }
    
    .btn:hover {
      background-color: #45a049;

    
    }
  .header{
    position: fixed;
  }
    

  </style>
    </head>
    <body>
    <body> <header>
  <div class="navbar">
    <a  href="fault.php">List of faults</a> 
    <a href="/Home/EquipementList.html">Equipement list </a>
    <a href="/Home//CreateWorkorders.html">Create Work orders</a>
    <a href="/Home/ListWp.ph"> List of work orders</a>
    <a href="/Home/Notifications.html">Notifications </a>
    <a href="logout.php" class="btn btn-danger" >Logout </a>
</div>
</header>

  </div>
<div class="content">
    
    </body>
</html>
<?php 
}
else{
    echo'
    <script>
    alert(" please login");
    window.location"index.php";
    </script>
    ';
}
?>
