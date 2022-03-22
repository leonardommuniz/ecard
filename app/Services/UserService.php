<?php
namespace App\Services;

use App\Services\AbstractService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class UserService  extends AbstractService
{
    /**
     * @param Request
     * @return JsonResponse
     */
    public function login(Request $req):JsonResponse
    {
        return $this->repository->login($req);
    }
}