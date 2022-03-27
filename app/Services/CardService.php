<?php
namespace App\Services;

use App\Services\AbstractService;
use Symfony\Component\HttpFoundation\JsonResponse;

class CardService  extends AbstractService
{
 
    /**
     * @return JsonResponse
     */
    public function cardUser():JsonResponse
    {
        return $this->repository->cardUser();
    }
}