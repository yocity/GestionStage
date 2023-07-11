<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EntrepriseController extends Controller 
{
    public function affiche_connexion()
    {
        return view('connect_ent');
    }

    public function connexion()
    {
        if (request()->has('con')) 
        {
            $requete ="SELECT * FROM entreprise WHERE log_ent=? AND pass_ent=?";
            $table = [request('log_ent'),request('pass_ent')];
            $execute = DB::select($requete,$table);

            if (!empty($execute)) 
            {
                session()->put('nom_ent', $execute[0]->nom_ent);
                return redirect('/accueil_ent');
            }
        }
    }

    public function index()
    {
        if (!session()->has('nom_ent')){
            return redirect('/connect_ent');
        }
        $requete= "SELECT * FROM entreprise WHERE nom_ent=?";
        $table=[session()->get('nom_ent')];
        $affiche = DB::select($requete,$table);
        
        $requete2 = "SELECT nom_fil FROM filiere";
        $affiche2 = DB::select($requete2); 
        if (empty($affiche2)){ 
            $options = "";
        } 
        else{
            $options = "";
            foreach($affiche2 as $n){
                $nom = $n -> nom_fil;
                $options .= "<option value='$nom'>$nom</option>";
            }
        }

        $requete1 = "SELECT * FROM stage WHERE nom_ent=?";
        $affiche1 = DB::select($requete1,$table); 

        $requete3 = "SELECT * FROM postuler,etudiant,stage WHERE postuler.id_etu=etudiant.id_etu AND stage.id_sta=postuler.id_sta AND nom_ent=?";
        $affiche3 = DB::select($requete3,$table);
       
        return view('accueil_ent', compact("options","affiche","affiche1","affiche3")); 
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("inscription_ent");
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
            $requete = "INSERT INTO entreprise VALUES(?,?,?,?,?,?)";
                
            $nom_ent= $_POST['nom_ent'];
            $log_ent=$_POST['log_ent'];
            $pass_ent=$_POST['pass_ent'];
            $tel_ent=$_POST['tel_ent'];
            $ad_ent=$_POST['ad_ent'];
            $mail_ent=$_POST['mail_ent'];
            $conf=$_POST['con_pass_ent'];
    
            if($pass_ent == $conf){
                $table = [$nom_ent,$ad_ent,$tel_ent,$mail_ent,$log_ent,$pass_ent];
                $execute = DB::insert($requete, $table);
                if ($execute == 1) {
                    return redirect("connect_ent");
                } else {
                    $msg = "Problème survenu lors de l'insertion: INSERTION NON EFFECTUEE";
                }
            } else {
                $msg = "Entrez un bon mot de passe.";
            }
        }
    
        return view("inscription_ent", compact("msg"));
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
            $requete= "UPDATE entreprise SET ad_ent=?,tel_ent=?,mail_ent=? WHERE nom_ent=?";
            $table = [request('ad_ent'),request('tel_ent'),request('mail_ent'),session()->get('nom_ent')];
            $execute = DB::update($requete,$table);
            if ($execute==1) 
            {
                return redirect('/accueil_ent');
            }
            else 
            {
                $msg = "Probleme survenue lors de l'insertion :INSERTION NON EFFECTUEE";
                return view('accuiel_ent',compact('msg'));
            }
        }

        if (request()-> has('sta')) 
        {
            $requete= "INSERT INTO stage VALUES (?,?,?,?,?,?,?)";
            $table = [request('id_sta'),request('deb_sta'),request('fin_sta'),request('poste'),request('des_sta'),session()->get('nom_ent'),request('nom_fil')];
            $execute = DB::insert($requete,$table);
            if ($execute==1) 
            {
                return redirect('/accueil_ent');
            }
            else 
            {
                $msg = "Probleme survenue lors de l'insertion :INSERTION NON EFFECTUEE";
                return view('accuiel_ent',compact('msg'));
            }
        }
    
        if(request()-> has('deco')){
            session()->forget('nom_ent');
            return redirect('/connect_ent');
        }

        if(isset($_POST['val'])){
            $requete="UPDATE postuler SET lib_pos=? WHERE id_pos=?";
            $table = [request('lib_pos'),$affiche3 -> id_pos];
            $execute= DB::update($requete,$table);

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
        $requete= "DELETE FROM stage WHERE id_sta=?";
        $tab =[$id];
        $execute = DB::delete($requete,$tab);
        if($execute==1){
            return redirect('/accueil_ent');
        }
    }
}
