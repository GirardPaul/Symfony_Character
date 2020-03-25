<?php

namespace App\Controller;

use App\Entity\Personnages;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PersonnageController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        return $this->render('personnage/index.html.twig');
    }

     /**
     * @Route("/persos", name="personnages")
     */
    public function persos()
    {
        Personnages::creationPersos();
        return $this->render('personnage/persos.html.twig', [
           "players" => Personnages::$personnages
        ]);
    }

     /**
     * @Route("/persos/{pseudo}", name="afficher_personnage")
     */
    public function afficherPerso($pseudo)
    {
        Personnages::creationPersos();
        $perso = Personnages::getPersonnageParPseudo($pseudo);
        return $this->render('personnage/perso.html.twig', [
           "perso" => $perso
        ]);
    }
}
