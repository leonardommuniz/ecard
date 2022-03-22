<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\JsonResponse;

class UserRepository extends AbstractRepository
{

    /**
     * @param Request
     * @return JsonResponse
     */
    public function create(Request $req):JsonResponse
    {
        $obj = User::create([
            'name' => $req->input('name'),
            'email' => $req->input('email'),
            'password' => Hash::make($req->input('password'))
        ]);
        return response()->json([
            'status'=>200,
            'message'=>'Inserção realizada com sucesso',
            'data'=>$obj
        ]);
    }
}