
<?php
@include 'config.php';
session_start();
if(isset($_POST['submit'])){
    $email =mysqli_real_escape_string($conn,$_POST['email']);
    $pass=md5($_post['password']);
    $pass=md5($_post['cpassword']);
    $select= "SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";
    $result =musqli_query($conn,$result);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page create by win Coder</title>
    <link rel="stylesheet" href="css1/login.css">
</head>
<body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Login</header>

                    <form action="#">
                        <?php
                        if(isset($error)){
                            foreach($error as $error){
                                echo '<span class="error-msg">' .$error. '</span>';
                            }
                        }
                        ?>
                        <div class="field input-field">
                            <input type="email" placeholder="Email" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="password" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="form-link">
                            <a href="#" class=""forgot-pass>Forgot password?</a>
                        </div>

                        <div class=""field button-field">
                            <button>Login</button>
                        </div>

                    </form>

                    <div class="form-link">
                        <span>Already have an account? <a href="#" class="link signup-link">Signup</a></span>
                    </div>
                </div>

                <div class=""line">

                    </div>
                </div>
            </div>

            <!-- Signup Form -->
<?php
@include 'config.php';
if(isset($_POST['submit'])){
    $email =mysqli_real_escape_string($conn,$_POST['email']);
    $pass=md5($_post['password']);
    $pass=md5($_post['cpassword']);
    $select= "SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";
    $result =musqli_query($conn,$result);

}
    
?>

            <div class="form signup">
                <div class="form-content">
                    <header>Signup</header>

                    <form action="#">
                        <?php
                        if(isset($error)) {
                            foreach($error as $error){
                                echo'<span class="error-msg">'.$error.'</span>';
                            }
                        }
                        
                        ?>
                        <div class="field input-field">
                            <input type="email" placeholder="Email" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="password" class="password">
                        </div>

                        <div class="field input-field">
                            <input type="cpassword" placeholder="cpassword" class="cpassword">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="form-link">
                            <a href="#" class=""forgot-pass>Forgot password?</a>
                        </div>

                        <div class=""field button-field">
                            <button>Signup</button>
                        </div>

                    </form>
                    
                    <div class="form-link">
                        <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                    </div>
                </div>

                <div class=""line">

                    </div>
                </div>
            </div>
        </section>

        <!-- JavaScript -->
        <script src="script.js"></script>
    </body>
</html>