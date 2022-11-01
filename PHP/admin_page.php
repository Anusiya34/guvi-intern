
<?php
@include 'config.php';
session_start();
if(isset($_SESSION['admin_name'])){
    header('location:login_form.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page create by win Coder</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class ="content">
            <h3><i>hi</i><span>admin</span></h3>
            <h1>welcome</h1>
            <p1>This is an admin page</p1>
            <a href="login_form.php">login</a>
            <a href="logout.php" class="btn">logout</a>
        </div>
    </div>

</body>
</html>
