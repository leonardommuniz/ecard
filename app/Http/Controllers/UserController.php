<?php

namespace App\Http\Controllers;

use App\Services\UserService;

class UserController extends AbstractController
{
    public function __construct(UserService $service)
    {
        $this->service = $service;
    }
}
