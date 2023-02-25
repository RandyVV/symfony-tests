<?php

namespace App\Controller\Api;

use App\Service\Calculator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculatorController extends AbstractController
{
    #[Route('/api/calculator', name: 'app_api_calculator')]
    public function index(): Response
    {
        return $this->render('api/calculator/index.html.twig', [
            'controller_name' => 'CalculatorController',
        ]);
    }

    #[Route('/api/calculator/sum', methods: ['POST'], name: 'app_api_calculator_sum')]
    public function sum(Request $request, Calculator $calculator): Response
    {
        // on récupère le premier nombre envoyé par le client dans la requête
        $nombreA = $request->request->get('a');

        // on récupère le second nombre envoyé par le client dans la requête
        $nombreB = $request->request->get('b');

        // on calcule la somme des deux nombres
        $sum = $calculator->sum($nombreA, $nombreB);

        // on renvoie une réponse en JSON contenant le résultat
        return $this->json([
            'result' => $sum
        ]);
    }

    #[Route('/api/calculator/diff', methods: ['POST'], name: 'app_api_calculator_diff')]
    public function diff(Request $request, Calculator $calculator): Response
    {
        // on récupère le premier nombre envoyé par le client dans la requête
        $nombreA = $request->request->get('a');

        // on récupère le second nombre envoyé par le client dans la requête
        $nombreB = $request->request->get('b');

        // on calcule la différence des deux nombres
        $diff = $calculator->diff($nombreA, $nombreB);

        // on renvoie une réponse en JSON contenant le résultat
        return $this->json([
            'result' => $diff
        ]);
    }

    #[Route('/api/calculator/product', methods: ['POST'], name: 'app_api_calculator_product')]
    public function product(Request $request, Calculator $calculator): Response
    {
        // on récupère le premier nombre envoyé par le client dans la requête
        $nombreA = $request->request->get('a');

        // on récupère le second nombre envoyé par le client dans la requête
        $nombreB = $request->request->get('b');

        // on calcule le produit des deux nombres
        $product = $calculator->product($nombreA, $nombreB);

        // on renvoie une réponse en JSON contenant le résultat
        return $this->json([
            'result' => $product
        ]);
    }

    #[Route('/api/calculator/quotient', methods: ['POST'], name: 'app_api_calculator_quotient')]
    public function quotient(Request $request, Calculator $calculator): Response
    {
        // on récupère le premier nombre envoyé par le client dans la requête
        $nombreA = $request->request->get('a');

        // on récupère le second nombre envoyé par le client dans la requête
        $nombreB = $request->request->get('b');

        // on calcule le quotient des deux nombres
        $product = $calculator->quotient($nombreA, $nombreB);

        // on renvoie une réponse en JSON contenant le résultat
        return $this->json([
            'result' => $product
        ]);
    }
}