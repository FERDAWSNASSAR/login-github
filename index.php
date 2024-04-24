<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Project</title>
   
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:orange;
        }
        
        .card {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 3px solid #ccc;
            border-radius: 10px;
            margin-top: 200px;
            height: 300px;
        }
        
        
        <style>
    h1 {
        text-align: center;
        font-size: 24px;
        margin-bottom: 20px;
    }
    
    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }
    
    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 12px 20px;
        margin-bottom: 12px;
        border: 1px solid #ccc;
        box-sizing: border-box;
        border-radius: 4px;
    }
    
    .sbtn {
        background-color: #4CAF50;
        color: #fff;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
        font-size: 16px;
    }
</style>    
    </style>
</head>
<body>
    <div class="card div1">
        <div class="card-body">
            <form method="post" class="form-group">
              <h1>Login:</h1>
                <label class="usr" ><strong>Username</strong></label>
                <input type="text" name="uname" class="form-control" /><br>
                <b></b>
                <label class="psw"><strong>Password</strong></label>
                <input type="password" name="Password" class="form-control" /><br>
                <button  class="sbtn" type="submit" name="login" class="btn btn-info">Login</button>
            </form>
            <?php 
            include('db.php');
            if(isset($_POST['login']))
            {
                $uname = $_POST['uname'];
                $password = $_POST['Password'];
                $query = mysqli_query($con, "SELECT * FROM `admin` WHERE username='$uname' and password='$password'");
                $row = mysqli_num_rows($query);
                if($row == 1)
                {
                    $_SESSION["admin"] ='admin';
                    echo '
                    <script>
                    alert("logged in");
                    window.location="page.php";
                    </script>';
                }
                else
                {
                    echo '
                    <script>
                    alert("error");
                    window.location="index.php";
                    </script>';
                }
            }
            ?>
        </div>
    </div>
</body>
</html>