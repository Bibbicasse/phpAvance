<?php 

namespace App\Controller;

use App\Entity\Atelier;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AtelierController extends AbstractController
{ 
/**
     * @Route("/atelier/", name="atelier_afficher")
     */
    public function afficher(): Response
    {
        return $this->render('atelier.html.twig');
    }
     /**
     * @Route("/atelier/afficher", name="atelier_afficher")
     */
    public function traiter(Request $requête, EntityManagerInterface $em): Response
    {
        //Récupération des données de l'atelier
        // $id = ($requête->request->get('id'));
        $url = ($requête->request->get('url'));
        $titre = ($requête->request->get('titre'));
        $max_participant = ($requête->request->get('max_partcipant'));

        //Création d'un produit vide
        $p= new Atelier();
        // $p->getId($id);//Assignation des données au produit vide
        $p->setUrl($url);//Assignation des données au produit vide
        $p->setTitre($titre);//Assignation des données au produit vide
        $p->setMax_participant($max_participant);//Assignation des données au produit vide 

        //Envoi des données à la BDD
        $em->persist($p);
        $em->flush();
        
        return new Response("
        <html>
            <body>
            <nav></nav>
                <main>
                
                <main/>
                
                <p> lorem</p>
                
                <footer></footer>
            <body>
        <html>
        ");
    }
    
}



