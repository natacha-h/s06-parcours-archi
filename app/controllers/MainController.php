<?php


require_once __DIR__.'/CoreController.php';

// Le MainController va gérer l'affichage de la home et de la page créateur
class MainController  extends CoreController {

    // méthode gérant l'affichade de la home
    public function home() {
        $character = $this->dbd->getCharacters();
        $this->show('home', ['characters' => $character]);
    }

    //méthode gérant l'affichage de  la page créateurs
    public function creators() {
        $this->show('creators');
    }

    public function notFound(){
        $this->show('404');
    }

}