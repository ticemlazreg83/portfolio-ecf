<?php
namespace App\Controllers;

/**
 * Contrôleur gérant la page de contact du portfolio
 */
class ContactController extends Controller {
    
    /**
     * Affiche la page de contact
     * Utilise la méthode render héritée du contrôleur principal
     */
    public function index() {
        // Appelle la vue contact.php située dans Views/includes/
        $this->render('contact'); 
    }
}