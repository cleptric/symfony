<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SentryTestController extends AbstractController
{

    #[Route('/sentry/index/{name}')]
    public function index(Request $request, string $name = null): JsonResponse
    {
        $response = new JsonResponse([
            'foo' => 'bar',
        ]);

        return $response;
    }

    #[Route('/sentry/view')]
    public function view(): Response
    {
        return $this->render('view.html.twig');
    }

    #[Route('/sentry/test-log')]
    public function testLog()
    {
        // the following code will test if an uncaught exception logs to sentry
        throw new \RuntimeException('Example exception.');
    }
}