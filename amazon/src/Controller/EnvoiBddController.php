<?php

namespace App\Controller;

use App\Entity\Produits;
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
        $p = new Produits();//Ici on crée une instance de la classe Produit
        $p->setTitre('Spay');
        $p->setDescription('Plus de saleté !');
        $p->setStock('5');
        $p->setStock('5');
        $p->setDate_Publication(\DateTime::createFromFormat('Y-m-d H:i:s', '2000-01-01 14:00:00'));
        $p->setPrix(25.5);
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
