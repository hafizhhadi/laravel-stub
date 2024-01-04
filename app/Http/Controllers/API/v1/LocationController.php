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

    public function nearestDistanceHarversine(): JsonResponse
    {
        try
        {
            $resource = LocationAction::access() -> nearestDistanceHarversine();
            return $this -> success(
                Response::HTTP_OK,
                'Successfull retrieved location with the nearest distance haversine',
                $resource,
            );
        }
        catch (\Exception $e)
        {
            return $this -> error(Response::HTTP_CONFLICT, $e -> getMessage(), $e -> getLine());
        }
    }

    public function nearestDistanceOSRM(): JsonResponse
    {
        try
        {
            $resource = LocationAction::access() -> nearestDistanceOSRM();
            return $this -> success(
                Response::HTTP_OK,
                'Successfull retrieved location with the nearest distance using osrm',
                $resource,
            );
        }
        catch (\Exception $e)
        {
            return $this -> error(Response::HTTP_CONFLICT, $e -> getMessage(), $e -> getLine());
        }
    }
}
