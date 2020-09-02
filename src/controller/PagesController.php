<?php


class PagesController {

    public static function about() {

        // Traitement de la data
        $text = "Ce site est à propos de ça et ça";

        // Renvoi d'une vue
        require 'about.php';
    }

    public static function sayBye() {

        // Récupérer les données en session ou en bdd...
        $name = "Thomas";

        // Traitement des données...
        $name = strtoupper($name);

        // Envoi d'un mail, fermeture de la session...
        // etc etc etc

        // Affichage de la vue
        require 'bye.php';
    }
}