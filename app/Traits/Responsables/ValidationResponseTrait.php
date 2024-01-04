<?php

namespace App\Traits\Responsables;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

trait ValidationResponseTrait
{
    //******************************************************************************************************************
    // Public Functions
    //******************************************************************************************************************

    /**
     * Handle a failed validation attempt.
     *
     * @param Validator $validator
     * @return void
     *
     */
    protected function failedValidation(Validator $validator): void
    {
        $response = new JsonResponse([
            'status' => 'error',
            'errors' => $validator -> errors(),
            'meta'   => [
                'timestamp' => now() -> format('Y-m-d H:i:s'),
            ],
        ], 422);

        throw new HttpResponseException($response);
    }
}