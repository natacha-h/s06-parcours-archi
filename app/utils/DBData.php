<?php

require_once __DIR__.'/../models/CharacterModel.php';
require_once __DIR__.'/../models/TypeModel.php';

// Création de la class DBData qui permettra de retourner les infos de la BDD

class DBData {

    private $dbh;

    /**
     * Constructeur se connectant à la base de données à partir des informations du fichier de configuration
     */
    public function __construct() {
        // Récupération des données du fichier de config
        //   la fonction parse_ini_file parse le fichier et retourne un array associatif
        // Attention, "config.conf" ne doit pas être versionné,
        //   on versionnera plutôt un fichier d'exemple "config.dist.conf" ne contenant aucune valeur
        $configData = parse_ini_file(__DIR__.'/../config.conf');
        
        try {
            $this->dbh = new PDO(
                "mysql:host={$configData['DB_HOST']};dbname={$configData['DB_NAME']};charset=utf8",
                $configData['DB_USERNAME'],
                $configData['DB_PASSWORD'],
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING) // Affiche les erreurs SQL à l'écran
            );
        }
        catch(\Exception $exception) {
            echo 'Erreur de connexion...<br>';
            echo $exception->getMessage().'<br>';
            echo '<pre>';
            echo $exception->getTraceAsString();
            echo '</pre>';
            exit;
        }
    }

    /**
     * Méthode permettant de retourner les données sur les personnages
     * 
     */

     public function getCharacters() {
        // requête
        $sql="SELECT * FROM `character` ORDER BY `name` ASC;";

        $statement=$this->dbh->query($sql);

        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }

     /**
     * Méthode permettant de retourner les données sur les types
     * 
     */

    public function getTypes() {
        // requête
        $sql="SELECT * FROM `type`;";

        $statement=$this->dbh->query($sql);

        return $statement->fetchAll(PDO::FETCH_ASSOC);

     }
}