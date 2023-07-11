<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Routing\Route;

class EtudiantController extends Controller
{

    public function affiche_connexion()
    {
        return view('connect');
    }

    public function connexion()
    {
        if (request()->has('con')) 
        {
            $requete ="SELECT * FROM etudiant WHERE log_etu=? AND pass_etu=?";
            $table = [request('log'),request('pass')];
            $execute = DB::select($requete,$table);

            if (!empty($execute)) 
            {
                session()->put('id_etu', $execute[0]->id_etu);
                return redirect('/accueil');

            }
            else 
            {
                $msg = "ERROR";
                return view("connect",compact("msg"));
            }
        }
    }

    public function index()
    {
        if (!session()->has('id_etu')){
            return redirect('/connect');
        }
        $requete= "SELECT * FROM etudiant WHERE id_etu=?";
        $table=[session()->get('id_etu')];
        $affiche = DB::select($requete,$table);

        $requete1 = "SELECT id_sta FROM stage WHERE nom_fil=?";
        foreach($affiche as $tab){
            $table1 = [$tab -> nom_fil];
        }
        $affiche1 = DB::select($requete1,$table1); 
        if (empty($affiche1)){
            $msg2 = "pas de stage disponible";
            return view('accueil', compact("msg2")); 
        } 
        else{
            $options = "";
            foreach($affiche1 as $n){
                $nom = $n -> id_sta;
                $options .= "<option value='$nom'>$nom</option>";
            }
        }
        $requete2 = "SELECT * FROM etudiant JOIN stage ON etudiant.nom_fil = stage.nom_fil WHERE etudiant.nom_fil = stage.nom_fil AND id_etu=?";
        $affiche2 = DB::select($requete2,$table);

        $requete3 = "SELECT * FROM postuler,stage WHERE postuler.id_sta=stage.id_sta AND id_etu=?";
        $affiche3 = DB::select($requete3,$table);
       
        return view('accueil', compact("affiche","options","affiche1","affiche2","affiche3")); 
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $requete = "SELECT nom_dep FROM departement";
        $affiche = DB::select($requete);
        $options = "";
        foreach ($affiche as $departement) {
            $nom = $departement->nom_dep;
            $options .= "<option value='$nom'>$nom</option>";
        }
        $requete1 = "SELECT nom_fil FROM filiere";
        $affiche1 = DB::select($requete1);
        $options1 = "";
        foreach ($affiche1 as $filiere) {
            $nom1 = $filiere->nom_fil;
            $options1 .= "<option value='$nom1'>$nom1</option>";
        }
        return view("inscription", compact("options", "options1"));
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
            $requete = "INSERT INTO etudiant (id_etu, nom_etu, niveau_etu, tel_etu, ad_etu, mail_etu, log_etu, pass_etu, nom_dep, nom_fil, id_enc) VALUES (?,?,?,?,?,?,?,?,?,?,'')";
                
            $id_etu = $_POST['id_etu'];
            $nom_etu = $_POST['nom_etu'];
            $niveau_etu = $_POST['niveau_etu'];
            $tel_etu = $_POST['tel_etu'];
            $ad_etu = $_POST['ad_etu'];
            $mail_etu = $_POST['mail_etu'];
            $log_etu = $_POST['log_etu']; 
            $pass_etu = $_POST['pass_etu'];
            $nom_dep = $_POST['nom_dep'];
            $nom_fil = $_POST['nom_fil'];
            $conf = $_POST['con_pass_etu'];
    
            if($pass_etu == $conf){
                $table = [$id_etu, $nom_etu, $niveau_etu, $tel_etu, $ad_etu, $mail_etu, $log_etu, $pass_etu, $nom_dep, $nom_fil];
                $execute = DB::insert($requete, $table);
                if ($execute == 1) {
                    return view("connect");
                } else {
                    $msg = "Problème survenu lors de l'insertion: INSERTION NON EFFECTUEE";
                }
            } else {
                $msg = "Entrez un bon mot de passe.";
            }
        }
    
        return view("inscription", compact("msg"));
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
            $requete= "UPDATE etudiant SET nom_etu=?,niveau_etu=?,tel_etu=?,ad_etu=?,mail_etu=? WHERE id_etu=?";
            $table = [request('nom_etu'),request('niveau_etu'),request('tel_etu'),request('ad_etu'),request('mail_etu'),session()->get('id_etu')];
            $execute = DB::update($requete,$table);
            if ($execute==1) 
            {
                return redirect('/accueil');
            }
            else 
            {
                $msg = "Probleme survenue lors de l'insertion :INSERTION NON EFFECTUEE";
                return view('accuiel',compact('msg'));
            }
        }
    
        if(request()-> has('deco')){
            session()->forget('id_etu');
            return redirect('/connect');
        }

        if(request()->has('pos')){

            $requete2 = "SELECT * FROM postuler WHERE id_etu=? AND id_sta=?";
            $table2 = [session()->get('id_etu'), request('id_sta')];
            $execute2 = DB::select($requete2, $table2);
        
            if(empty($execute2)){
                $requete1 = "INSERT INTO postuler (id_etu, id_sta, lib_pos) VALUES (?, ?, 'En cours')";
                $table1 = [session()->get('id_etu'),request('id_sta')];
                $execute1 = DB::insert($requete1, $table1);
            }
            return redirect('/accueil');
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
        $requete= "DELETE FROM postuler WHERE id_pos=?";
        $tab =[$id];
        $execute = DB::delete($requete,$tab);
        if($execute==1){
            return redirect('/accueil');
        }
    }
}
