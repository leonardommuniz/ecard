<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class AbstractController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @return JsonResponse
     */
    public function list():JsonResponse
    {
        return $this->service->list();
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function show($id):JsonResponse
    {
       return $this->service->show($id);
    }

    /**
     * @param Request
     * @return JsonResponse
     */
    public function create(Request $req):JsonResponse
    {
        return $this->service->create($req);
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function delete(int $id):JsonResponse
    {
        return $this->service->delete($id);
    }
}
