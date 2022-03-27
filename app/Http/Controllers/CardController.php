<?php

namespace App\Http\Controllers;

use App\Services\CardService;
use Symfony\Component\HttpFoundation\JsonResponse;

class CardController extends AbstractController
{
    public function __construct(CardService $service)
    {
        $this->service = $service;
    }

    /**
     * @return JsonResponse
     */
    public function cardUser():JsonResponse
    {
       return $this->service->cardUser();
    }
}
