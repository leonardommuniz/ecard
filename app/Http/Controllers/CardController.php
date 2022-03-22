<?php

namespace App\Http\Controllers;

use App\Services\CardService;

class CardController extends AbstractController
{
    public function __construct(CardService $service)
    {
        $this->service = $service;
    }
}
