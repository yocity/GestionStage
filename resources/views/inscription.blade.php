
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
                        <form method="POST" class="register-form" id="register-form" action="/inscrire">
                            @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="id_etu" id="" placeholder="Matricule" style="font-family: cursive;"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nom_etu" id="" placeholder="Nom & Prénom" style="font-family: cursive;"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="niveau_etu" id="" placeholder="Niveau d'étude" style="font-family: cursive;"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="mail_etu" id="" placeholder="Mail" style="font-family: cursive;"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="number" name="tel_etu" id="" placeholder="Téléphone" style="font-family: cursive;"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="ad_etu" id="" placeholder="Adresse" style="font-family: cursive;"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <select name="nom_fil" style="font-family: cursive; width: 100px;">
                                    <option value="filire" disabled selected>filière</option>
                                    @php echo $options1; @endphp
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <select name='nom_dep' style="font-family: cursive; width: 100px;"> 
                                    <option value="Departement" disabled selected>Departement</option>
                                    @php echo $options; @endphp
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="log_etu" id="" placeholder="Login" style="font-family: cursive;"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="password" name="pass_etu" id="" placeholder="Password" style="font-family: cursive;"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="password" name="con_pass_etu" id="" placeholder="Confirmer votre password" style="font-family: cursive;"/>
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