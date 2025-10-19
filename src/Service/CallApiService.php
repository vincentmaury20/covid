<?php

// Déclare le namespace du service, utile pour l'organisation du code et l'autoloading.
namespace App\Service;

// Déclaration de la classe CallApiService.
// Elle est conçue pour encapsuler la logique d'appel à une API externe (ex : chiffres COVID).
class CallApiService
{
   // Méthode publique accessible depuis un contrôleur ou un autre service.
   // Elle est censée interroger une API pour récupérer les données COVID en France.
   // Actuellement, elle retourne un tableau statique à des fins de test.
   public function getFranceData(): array
   {
      // Données fictives retournées pour tester le fonctionnement du service.
      // À remplacer par un appel HTTP réel vers une API (ex : covid19api.com).
      return ['test', 'test2'];
   }
}
