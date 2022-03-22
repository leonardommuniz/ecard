<?php
namespace App\Services;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

abstract class AbstractService
{

    public function __construct($repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return JsonResponse
     */
    public function list():JsonResponse
    {
        return $this->repository->list();
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function show($id):JsonResponse
    {
       return $this->repository->show($id);
    }
    
    /**
     * @param Request
     * @return JsonResponse
     */
    public function create(Request $req):JsonResponse
    {
        return $this->repository->create($req);
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function delete(int $id):JsonResponse
    {
        return $this->repository->delete($id);
    }
}