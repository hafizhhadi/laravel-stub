<?php

namespace App\Actions\Locations;

use Illuminate\Support\Facades\Http;

class LocationAction
{
    public function __construct()
    {

    }

    //******************************************************************************************************************
    // Calling Functions
    //******************************************************************************************************************

    public static function access(): self
    {
        return new self();
    }

    /**
     * Calculate nearest distance based on latitude and longitude using haversine formula (LOS)
     */
    public function nearestDistanceHarversine()
    {
        $pcari = [
            'id'        => 4,
            'name'      => 'pcari',
            'latitude'  => 2.921296069433424,
            'longitude' => 101.635830381178,
        ];

        $locations = [
            [
                'id'        => 1,
                'name'      => 'galeri setia',
                'latitude'  => 2.9167047233303247,
                'longitude' => 101.6351086881025,
            ],
            [
                'id'        => 2,
                'name'      => 'hospital',
                'latitude'  => 2.9202565687613973,
                'longitude' => 101.63133214242828,
            ],
            [
                'id'        => 3,
                'name'      => 'school',
                'latitude'  => 2.91991190649858,
                'longitude' => 101.63852621537121,
            ],
        ];

        foreach ($locations as $location)
        {
            $location['distance'] = $this -> haversine($pcari, $location['latitude'], $location['longitude']);
            $new_locations[] = $location;
        }

        return collect($new_locations) -> sortBy('distance');
    }

    public function nearestDistanceOSRM()
    {
        $pcari = [
            'id'        => 4,
            'name'      => 'pcari',
            'latitude'  => 2.921296069433424,
            'longitude' => 101.635830381178,
        ];

        $locations = [
            [
                'id'        => 1,
                'name'      => 'galeri setia',
                'latitude'  => 2.9167047233303247,
                'longitude' => 101.6351086881025,
            ],
            [
                'id'        => 2,
                'name'      => 'hospital',
                'latitude'  => 2.9202565687613973,
                'longitude' => 101.63133214242828,
            ],
            [
                'id'        => 3,
                'name'      => 'school',
                'latitude'  => 2.91991190649858,
                'longitude' => 101.63852621537121,
            ],
        ];

        $osrm_base_url = 'http://router.project-osrm.org/route/v1/driving/';

        foreach ($locations as $location)
        {
            $data = [
                'origin_longitude'      => $pcari['longitude'],
                'origin_latitude'       => $pcari['latitude'],
                'destination_longitude' => $location['longitude'],
                'destination_latitude'  => $location['latitude'],
            ];

            $response = Http::get($osrm_base_url . "{$data['origin_longitude']},{$data['origin_latitude']};{$data['destination_longitude']},{$data['destination_latitude']}");

            $location['distance'] = $response -> json()['routes'][0]['legs'][0]['distance'] / 1000;

            $new_locations[] = $location;
        }

        return collect($new_locations) -> sortBy('distance');
    }

    //******************************************************************************************************************
    // Helper Functions
    //******************************************************************************************************************

    public function haversine(array $target_place, float $latitude, float $longitude)
    {
        $earth_radius = 6371;

        $distance_latitude  = deg2rad($latitude - $target_place['latitude']);
        $distance_longitude = deg2rad($longitude - $target_place['longitude']);

        $a = sin($distance_latitude / 2) * sin($distance_latitude / 2) +
            cos(deg2rad($target_place['latitude'])) * cos(deg2rad($distance_latitude)) * sin($distance_longitude / 2) * sin($distance_longitude / 2);

        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        
        return $earth_radius * $c;
    }
}