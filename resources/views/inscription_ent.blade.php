
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>


    <!-- Main css -->
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body {
            font-family: cursive;
        } 
    </style>
</head>
<body style="font-family: cursive;">

    <div class="main" style="font-family: cursive;">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form" style="font-family: cursive;">
                        <h2 class="form-title" style="font-family: cursive;">@php echo isset($msg)?$msg:"Inscription"; @endphp</h2>
                        <form method="POST" class="register-form" id="register-form" action="/inscrire_ent">
                            @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nom_ent" id="" placeholder="Nom & Prénom" style="font-family: cursive;"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="mail_ent" id="" placeholder="Mail" style="font-family: cursive;"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="number" name="tel_ent" id="" placeholder="Téléphone" style="font-family: cursive;"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="ad_ent" id="" placeholder="Adresse" style="font-family: cursive;"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="log_ent" id="" placeholder="Login" style="font-family: cursive;"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="password" name="pass_ent" id="" placeholder="Password" style="font-family: cursive;"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="password" name="con_pass_ent" id="" placeholder="Confirmer votre password" style="font-family: cursive;"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="ajouter" id="" class="form-submit" value="S'inscrire" style="font-family: cursive;"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="../images/signup-image.jpg" alt="sing up image"></figure>
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