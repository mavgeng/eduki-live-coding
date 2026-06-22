<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response as ResponseCode;

class AppController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json('index');
    }

    public function show(): JsonResponse
    {
        return response()->json('show');
    }

    public function store(): JsonResponse
    {
        return response()->json('store', ResponseCode::HTTP_CREATED);
    }

    public function update(): JsonResponse
    {
        return response()->json('update');
    }

    public function destroy(): Response
    {
        return response()->noContent();
    }
}
