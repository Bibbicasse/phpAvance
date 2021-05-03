<?php

namespace App\Controller;

use App\Entity\Produits;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SimpleFormulaireController extends AbstractController
{
    /**
     * @Route("/formulaire/affichage", name="formulaire_affichage")
     */
    public function afficher(): Response
    {
        return $this->render('formulaire.html.twig');
    }
     /**
     * @Route("/formulaire/traitement", name="formulaire_traitement")
     */
    public function traiter(Request $requête, EntityManagerInterface $em): Response
    {
        //Récupération des données du formulaire
        $titre = ($requête->request->get('titre'));
        $description = ($requête->request->get('description'));
        $stock = ($requête->request->get('stock'));
        $date_publication = ($requête->request->get('date_publication'));
        $prix = ($requête->request->get('prix'));

        //Création d'un produit vide
        $p= new Produits();
        $p->setTitre($titre);//Assignation des données au produit vide
        $p->setDescription($description);//Assignation des données au produit vide
        $p->setStock($stock);//Assignation des données au produit vide
        $p->setDate_Publication(\DateTime::createFromFormat('Y-m-d\TH:i', $date_publication));//Assignation des données au produit vide 
        $p->setPrix($prix);//Assignation des données au produit vide 

        //Envoi des données à la BDD
        $em->persist($p);
        $em->flush();
        
        return new Response("
        <html>
            <body>
                <a href=/>Retour à la page d'accueil<a/>
            <body>
        <html>
        ");
    }
    
}
