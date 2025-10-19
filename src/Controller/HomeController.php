<?php

// Déclare le namespace du contrôleur, utile pour l'autoloading et l'organisation du code.
namespace App\Controller;

// Importe le service personnalisé qui va interroger une API (ici pour les données COVID).
use App\Service\CallApiService;

// Importe la classe de base des contrôleurs Symfony, qui fournit des méthodes comme render(), redirectToRoute(), etc.
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

// Représente une réponse HTTP que Symfony renverra au navigateur.
use Symfony\Component\HttpFoundation\Response;

// Permet de définir une route via un attribut PHP moderne (équivalent à l'annotation @Route).
use Symfony\Component\Routing\Attribute\Route;

// Déclaration du contrôleur. Le mot-clé "final" empêche d'étendre cette classe.
final class HomeController extends AbstractController
{
    // Définit une route accessible via l'URL "/home", avec le nom "app_home" (utilisé pour les liens et redirections).
    #[Route('/home', name: 'app_home')]
    public function index(CallApiService $callApiService): Response
    {
        // Appelle la méthode getFranceData() du service CallApiService.
        // Cette méthode est censée retourner les données COVID pour la France.
        // dd() = "dump and die" : affiche le contenu et arrête l'exécution.
        dd($callApiService->getFranceData());

        // Cette ligne ne sera jamais atteinte à cause du dd() juste avant.
        // Elle servirait à afficher le template Twig "home/index.html.twig" avec une variable "controller_name".
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
