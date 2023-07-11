
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <title>Document</title>
    <style>
        @import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);

        body {
        background-color: black;
        font-family: 'Calibri', sans-serif !important
        }

        .container{
        margin-top:100px;
        }
        .card {
            position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0px solid transparent;
        border-radius: 0px;
        }
        

        .card-body {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.25rem;
        }

        .card .card-title {
        position: relative;
        font-weight: 600;
        margin-bottom: 10px;
        }


        .table {
        width: 100%;
        max-width: 100%;
        margin-bottom: 1rem;
        background-color: transparent;
        }

        * {
        outline: none;
        }

        .table th, .table thead th {
        font-weight: 500;
        }


        .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6;
        }


        .table th {
        padding: 1rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
        }


        .table th, .table thead th {
        font-weight: 500;
        }


        th {
        text-align: inherit;
        }


        .m-b-20 {
        margin-bottom: 20px;
        }


        .customcheckbox {
        display: block;
        position: relative;
        padding-left: 24px;
        font-weight: 100;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        }


        .customcheckbox input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        }

        .checkmark {
        position: absolute;
        top: -3px;
        left: 0;
        height: 20px;
        width: 20px;
        background-color: black;
        border-radius: 6px;
        }


        .customcheckbox input:checked ~ .checkmark {
        background-color: black;
        }


        .customcheckbox .checkmark:after {
        left: 8px;
        top: 4px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
        }
    </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
        background: white;
        font-family: cursive;
        }

        .form-control:focus {
        box-shadow: none;
        border-color: black
        }

        .profile-button {
        background: black;
        box-shadow: none;
        border: none
        }

        .profile-button:hover {
        background: black
        }

        .profile-button:focus {
        background: black;
        box-shadow: none
        }

        .profile-button:active {
        background: black;
        box-shadow: none
        }

        .back:hover {
        color: black;
        cursor: pointer
        }

        .labels {
        font-size: 11px
        }

        .add-experience:hover {
        background: black;
        color: #fff;
        cursor: pointer;
        border: solid 1px black
        }
    </style>
</head>
<body style='font-family: cursive;'>
<form action="/accueil"method="post" >
    @csrf
@foreach($affiche as $reponse)
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                    <span class="font-weight-bold">{{$reponse -> nom_etu}}</span>
                    <span class="text-black-50">{{$reponse-> mail_etu}}</span>
                    <span>    
                        <form action="/accueil" method="post">
                            @csrf
                            <input type="submit" name="deco" value="Deconnexion">
                        </form>
                    </span>
                </div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Informations personnel</h4>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"> 
                            <label class="labels">Matricule</label>
                            <input type="text" class="form-control"value="{{$reponse -> id_etu}}">
                        </div>
                        <div class="col-md-12"> 
                            <label class="labels">Nom et prenom</label>
                            <input type="text" class="form-control" name="nom_etu" value="{{$reponse -> nom_etu}}">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Niveau d'etude</label>
                            <input type="text" class="form-control" name="niveau_etu" id="" value="{{$reponse -> niveau_etu}}">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Téléphone</label>
                            <input type="text" class="form-control" name="tel_etu" id="" value="{{$reponse -> tel_etu}}">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Addresse</label>
                            <input type="text" class="form-control" name="ad_etu" row="3" value="{{$reponse -> ad_etu}}">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Email</label>
                            <input type="text" class="form-control"  name="mail_etu" id="" value="{{$reponse -> mail_etu}}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Departement</label>
                        <input type="text" class="form-control"  name="nom_dep" id="" value="{{$reponse -> nom_dep}}">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Filière</label>
                        <input type="text" class="form-control"  name="nom_fil" id="" value="{{$reponse -> nom_fil}}">
                    </div>
                    
                    <div class="col-md-12">
                        <label class="labels">Encadreur</label>
                        <input type="text" class="form-control" id="" value="{{$reponse -> id_enc}}">
                    </div>
                    <div class="mt-5 text-center"><input class="btn btn-primary profile-button" type="submit" value="Modifier" name="ajouter">
                    
                    </div>
                </div>
            </div>
            @endforeach
            </form>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience">
                        <span>Postulation</span>
                        @php echo isset($msg1)?$msg1:''; @endphp
                    </div><br>
                    <form action="/accueil" method="post">
                        @csrf
                    <div class="col-md-12">

                        <label for="" class="labels">
                        @php echo isset($msg2)?$msg2:'Numero Stage'; @endphp
                        </label> 
                        <select  name="id_sta"> 
                            <option disabled selected>N°</option>
                            @php echo $options; @endphp
                        </select>
                        <input type="submit" value="postuler" class="form-control" name="pos">
                    </div>
                    <div class="mt-5 text-center"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
                      
                                
        <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title m-b-0">Liste des offres de stage</h5>
                </div>
                
            
            <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">numero de stage</th>
                                    <th scope="col">Poste</th>
                                    <th scope="col">Debut de stage</th>
                                    <th scope="col">Fin de stage</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Entreprise</th>
                                </tr>
                            </thead>
                            <tbody class="customtable">
                            @php echo isset($msg3)?$msg3:""; @endphp
                                @foreach($affiche2 as $reponse1)
                            <tr>
                                <td>{{$reponse1 -> id_sta}}</td>
                                <td>{{$reponse1 -> poste}}  </td>
                                <td>{{$reponse1 -> deb_sta}}</td>
                                <td>{{$reponse1 -> fin_sta}}</td>
                                <td>{{$reponse1 -> des_sta}}</td>
                                <td>{{$reponse1 -> nom_ent}}</td>
                            </tr>
                            @endforeach
                            </tbody>
         
                        </table>
                    </div>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title m-b-0">Liste des stages</h5>
                </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                            
                                <tr>
                                    <th scope="col">Numero de stage</th>
                                    <th scope="col">Poste</th>
                                    <th scope="col">Debut de stage</th>
                                    <th scope="col">Fin de stage</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Entreprise</th>
                                    <th scope="col">Acceptation</th>
                                    <th scope="col">Supprimer</th>
                                </tr>
                            </thead>
                            <tbody class="customtable">
                            @php echo isset($msg4)?$msg4:""; @endphp
                            @foreach($affiche3 as $reponse2)
                            <tr>

                                <td>{{$reponse2 -> id_sta}}</td>
                                <td>{{$reponse2 -> poste}}</td>
                                <td>{{$reponse2 -> deb_sta}}</td>
                                <td>{{$reponse2 -> fin_sta}}</td>
                                <td>{{$reponse2 -> des_sta}}</td>
                                <td>{{$reponse2 -> nom_ent}}</td>
                                <td>{{$reponse2 -> lib_pos}}</td>
                                <td><a href="/postule/{{$reponse2 -> id_pos}}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
        </div>
    </div>



</body>
</html>