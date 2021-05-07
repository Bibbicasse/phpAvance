<?php

namespace App\Controller;

use App\Entity\Atelier;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EnvoiBddController extends AbstractController
{
    /**
     * @Route("/creation_entite", name="envoi_bdd")
     */
    public function index(EntityManagerInterface $em): Response
    {
        $p = new Atelier();//Ici on crée une instance de la classe Produit
        // $p->getId('');
        $p->setUrl('https://colombbus.org');
        $p->setTitre('Évaluation 4 PHP Symfony');
        $p->setMax_participant(14);
        /**
         * 
         */
        $em->persist($p);
        //ici on envoie les données grâce à l'entity manager jusqu'au serveur de la base de données.
        $em->flush();
        //ici on les écrit dans la BDD
        return new Response('Entité créée');
    }
}
