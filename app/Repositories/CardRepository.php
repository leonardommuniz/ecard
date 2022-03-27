<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\JsonResponse;

class CardRepository extends AbstractRepository
{
    /**
     * @return JsonResponse
     */
    public function cardUser():JsonResponse
    {
        $obj = DB::table('cards')->where('user_id',auth()->user()->id)->get();
        return response()->json([
            'status'=>200,
            'message'=>'Busca realizada com sucesso',
            'data'=>$obj
        ]);
    }
}