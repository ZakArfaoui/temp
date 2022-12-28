<?php 
class client {
    private $code;
    private $nom_du_corps_medical;
    private $email_professionnel;
    private $Adresse;
    private $pays;
    private $ville;


    function __construct($code,$nom_du_corps_medical,$email_professionnel,$Adresse,$pays,$ville){
        $this->code=$code;
        $this->nom_du_corps_medical=$nom_du_corps_medical;
        $this->email_professionnel=$email_professionnel;
        $this->Adresse=$Adresse;
        $this->pays=$pays;
        $this->ville=$ville;
        
    }

    //GE0T000000000000TERS
    function getcodeclient(){
        return $this->code;
    }
    function getnom_du_corps_medical(){
        return $this->nom_du_corps_medical;
    }
    function getemail_professionnel(){
        return $this->email_professionnel;
    }
    function getAdresse(){
        return $this->Adresse;
    }
    function getpays(){
        return $this->pays;
    }
    function getville(){
        return $this->ville;
    }

    //SETTERS
    function setcode(string $code){
        $this->code=$code;
    }
    function setnom_du_corps_medical(string $nom_du_corps_medical){
        $this->nom_du_corps_medicam=$nom_du_corps_medical;
    }
    function setemail_professionnel(string $email_professionnel){
        $this->email_professionnel=$email_professionnel;
    }
   function setAdresse(string $Adresse){
       $this->Adresse=$Adresse;
   }
    }
    function setpays(string $pays){
        $this->pays=$pays;
    }
    function setville(string $ville){
        $this->ville=$ville;
    }

?>