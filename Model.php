<?php

class Model
{
    /**
     * Attribut contenant l'instance PDO
     */
    private $bd;

    /**
     * Attribut statique qui contiendra l'unique instance de Model
     */
    private static $instance = null;
    
    //private $dsn;
    /**
     * Constructeur : effectue la connexion à la base de données.
     */
    private function __construct()
    {
        include "connexion.php";
        $this->bd = new PDO($dsn, $login, $mdp);// VARIABLES A RENSEIGNER DANS connexion.php
        $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->bd->query("SET nameS 'utf8'");
    }
    public static function getModel(){
    if (self::$instance === null) {
        self::$instance = new self();
    }
    return self::$instance;}

    public function getLdf()
    {
        $req = $this->bd->prepare('SELECT * FROM masters WHERE id_region = "R11" ORDER BY commune ');
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);}
    public function getRegion()
    {
        $req = $this->bd->prepare('SELECT DISTINCT id_region, region FROM masters ');
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getMasterRegion($region) 
    {
        $requete = $this->bd->prepare('SELECT * from masters WHERE id_region = :region');
        $requete->bindValue(':region', $region);
        $requete->execute();
        return $requete->fetchall(PDO::FETCH_ASSOC);
    }   


    
}




