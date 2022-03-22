<?php
namespace App\Repositories;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

abstract class AbstractRepository
{

    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return JsonResponse
     */
    public function list():JsonResponse
    {
       return response()->json([
            'status'=>200,
            'message'=>'Listagem retornada com sucesso',
            'data'=>$this->model::all()
        ]);
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function show($id):JsonResponse
    {
        $obj = $this->model->find($id);
       return response()->json([
            'status'=>200,
            'message'=>'Busca realizada com sucesso',
            'data'=>$obj
        ]);
    }

    /**
     * @param Request
     * @return JsonResponse
     */
    public function create(Request $req):JsonResponse
    {
        $obj = $this->model->create($req->all());
        return response()->json([
            'status'=>200,
            'message'=>'Inserção realizada com sucesso',
            'data'=>$obj
        ]);
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function delete(int $id):JsonResponse
    {

        $this->model->find($id)->delete();
        return response()->json([
            'status'=>200,
            'message'=>'Remoção realizada com sucesso',
        ]);
    }

}