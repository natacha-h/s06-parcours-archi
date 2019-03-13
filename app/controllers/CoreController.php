<?php
require_once __DIR__.'/../utils/DBData.php';

class CoreController {
    protected $dbd;

    public function __construct() {
        //on instancie DBData
        $this->dbd = new DBData();
    }
    
    //méthode show qui permettra d'afficher les pages.
    //protected pour être accessibles par ses enfants uniquement
    protected function show($viewName, $viewVars=[]) {
        extract($viewVars);
        $baseUrl = dirname($_SERVER['SCRIPT_NAME']); 
        require __DIR__.'/../views/header.tpl.php';
        require __DIR__.'/../views/' . $viewName .'.tpl.php';
        require __DIR__.'/../views/footer.tpl.php';
    }
}