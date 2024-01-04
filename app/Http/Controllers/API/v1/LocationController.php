<?php

namespace App\Http\Controllers\API\v1;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Actions\Locations\LocationAction;
use App\Traits\Responsables\ResponseTrait;
use Symfony\Component\HttpFoundation\Response;

class LocationController extends Controller
{
    use ResponseTrait;

    public function nearestDistance(): JsonResponse
    {
        try
        {
            $resource = LocationAction::access() -> nearestDistance();
            return $this -> success(
                Response::HTTP_OK,
                'Successfull retrieved location with the nearest distance',
                $resource,
            );
        }
        catch (\Exception $e)
        {
            return $this -> error(Response::HTTP_CONFLICT, $e -> getMessage(), $e -> getLine());
        }
    }
}
