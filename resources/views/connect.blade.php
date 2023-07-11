<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body {
            font-family: cursive;
        }
    </style>
</head>
<body>
@php echo isset($msg)?$msg:''; @endphp
<div class="main">
    <!-- Sing in  Form -->
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image" style="font-family: cursive;">
                    <figure><img src="../images/signin-image.jpg" alt="sing up image"></figure>
                    <a href="inscription.php" class="signup-image-link" style="font-family: cursive;">Inscription</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title" style="font-family: cursive;">Se connecter</h2>
                    <form method="POST" action='/connect' class="register-form" id="login-form">
                        @csrf
                        
                        <div class="form-group">
                            <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="log" id="your_name" placeholder="Login" style="font-family: cursive;"/>
                        </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="pass" id="your_pass" placeholder="Password" style="font-family: cursive;"/>
                        </div>
                        <div class="form-group">
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="con" id="signin" class="form-submit" value="Connexion" style="font-family: cursive;"/>
                        </div>
                    </form>
                    <div class="social-login">
                        <span class="social-label"></span>
                        <ul class="socials">
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    <!-- JS -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>