<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DepartementController extends Controller 
{
    public function affiche_connexion()
    {
        return view('connect_dep');
    }

    public function connexion()
    {
        if (request()->has('con')) 
        {
            $requete ="SELECT *FROM departement WHERE log_dep=? AND pass_dep=?";
            $table = [request('log_dep'),request('pass_dep')];
            $execute = DB::select($requete,$table);

            if (!empty($execute)) 
            {
                session()->put('nom_dep', $execute[0]->nom_dep);
                return redirect('/accueil_dep');

            }
        }
    }

    public function index() 
    {
        if (!session()->has('nom_dep')){
            return redirect('/connect_dep');
        }
        $requete= "SELECT * FROM departement WHERE nom_dep=?";
        $table=[session()->get('nom_dep')];
        $affiche = DB::select($requete,$table);
        
        $requete2 = "SELECT id_etu FROM etudiant";
        $affiche2 = DB::select($requete2); 
        if (empty($affiche2)){ 
            $options = "";
        } 
        else{
            $options = "";
            foreach($affiche2 as $n){
                $nom = $n -> id_etu;
                $options .= "<option value='$nom'>$nom</option>";
            }
        }
        
        $requete3 = "SELECT id_enc FROM encadreur";
        $affiche3 = DB::select($requete3); 
        if (empty($affiche3)){ 
            $options1 = "";
        } 
        else{
            $options1 = "";
            foreach($affiche3 as $n1){
                $nom1 = $n1 -> id_enc;
                $options1 .= "<option value='$nom1'>$nom1</option>";
            }
        }

        $requete1 = "SELECT * FROM departement,filiere,stage WHERE departement.nom_dep=filiere.nom_dep AND stage.nom_fil=filiere.nom_fil AND departement.nom_dep=?";
        $affiche1 = DB::select($requete1,$table); 

        $requete4 = "SELECT * FROM etudiant,departement WHERE etudiant.nom_dep=departement.nom_dep AND departement.nom_dep=?";
        $affiche4 = DB::select($requete4,$table);
        $nb1 = count($affiche4);

        $requete5 = "SELECT * FROM etudiant,postuler WHERE etudiant.id_etu=postuler.id_etu AND etudiant.nom_dep=?";
        $affiche5 = DB::select($requete5,$table);

        $requete6 = "SELECT * FROM encadreur WHERE nom_dep=?";
        $affiche6 = DB::select($requete6,$table);
       
        return view('accueil_dep', compact("options","options1","affiche","affiche1","affiche4","affiche5","affiche6","nb1")); 
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("inscription_dep");
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $msg = "";
    
        if (isset($_POST['ajouter'])) {
            $requete = "INSERT INTO departement VALUES(?,?,?,?,?)";
                
            $nom_dep= $_POST['nom_dep'];
            $log_dep=$_POST['log_dep'];
            $pass_dep=$_POST['pass_dep'];
            $tel_dep=$_POST['tel_dep'];
            $mail_dep=$_POST['mail_dep'];
            $conf=$_POST['con_pass_dep'];
    
            if($pass_dep == $conf){
                $table = [$nom_dep,$log_dep,$pass_dep,$mail_dep,$tel_dep];
                $execute = DB::insert($requete, $table);
                if ($execute == 1) {
                    return redirect("connect_dep");
                } else {
                    $msg = "Problème survenu lors de l'insertion: INSERTION NON EFFECTUEE";
                }
            } else {
                $msg = "Entrez un bon mot de passe.";
            }
        }
    
        return view("inscription_dep", compact("msg"));
    }
        

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        if (request()-> has('ajouter')) 
        {
            $requete= "UPDATE departement SET mail_dep=?,tel_dep=? WHERE nom_dep=?";
            $table = [request('mail_dep'),request('tel_dep'),session()->get('nom_dep')];
            $execute = DB::update($requete,$table);
            if ($execute==1) 
            {
                return redirect('/accueil_dep');
            }
            else 
            {
                $msg = "Probleme survenue lors de l'insertion :INSERTION NON EFFECTUEE";
                return view('accuiel_dep',compact('msg'));
            }
        }
    
        if(request()-> has('deco')){
            session()->forget('nom_dep');
            return redirect('/connect_dep');
        }
        if(request()-> has('fil')){
            $requete1="INSERT INTO filiere VALUES (?,'Activer',?)";
            $table1=[request('nom_fil'),session()->get('nom_dep')];
            $execute1= DB::insert($requete1,$table1);
            if($execute1==1){
                $msg1="Ajout effectuer avec succes";
                return redirect('/accueil_dep')->with('msg1',$msg1);
            }
        }
        
        if (request()-> has('enc')){
            $requete2 = "INSERT INTO encadreur VALUES (?,?,?,?,?,?)";
            $table2 = [request('id_enc'),request('nom_enc'),request('ad_enc'),request('tel_enc'),request('mail_enc'),session()->get('nom_dep')];
            $execute2= DB::insert($requete2,$table2);
            if($execute2==1){
                $msg1="Ajout effectuer avec succes";
                return redirect('/accueil_dep')->with('msg1',$msg1);
            }
        } 

        if(request()-> has('pos')){
            $requete3 = "UPDATE etudiant SET id_enc=?  WHERE etudiant.id_etu=?";
            $table3 = [request('id_enc'),request('id_etu')];
            $execute3= DB::insert($requete3,$table3);
            if($execute3==1){
                $msg2="Ajout effectuer avec succes";
                return redirect('/accueil_dep')->with('msg2',$msg2);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
