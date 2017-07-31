<?php

// fichier MashesController.php, dans app/controller

/*******************************************************************/
/*  Tuto Facemash CakePHP, Foundation - Auteur: Mubb 2013/2014.    */
/*  Merci à Priyesh Patel pour la classe Rating    			       */
/*				                                                   */
/*******************************************************************/

App::uses('AppController', 'Controller');

class MashesController extends AppController {

	public $components = array('Session'); //servira pour la suite
    
	public function test() {
		//cette action est vide pour l'instant.
	}

}

?>