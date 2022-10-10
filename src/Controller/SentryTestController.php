<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SentryTestController
{

    #[Route('/sentry/index')]
    public function index(): Response
    {
        $response = new Response('Servus 👋', Response::HTTP_OK);

        return $response;
    }

    #[Route('/sentry/test-log')]
    public function testLog()
    {
        // the following code will test if an uncaught exception logs to sentry
        throw new \RuntimeException('Example exception.');
    }
}