<?php

namespace App\Traits\Responsables;

trait ResponseTrait
{
    //******************************************************************************************************************
    // Public Functions
    //******************************************************************************************************************

    /**
     * @param int $code
     * @param string|null $message
     * @param mixed $data
     * @param array $meta
     * @param string $status
     * @return object
     */
    public function success(int $code, string $message = null, mixed $data = null, array $meta = [], string $status = "success"): object
    {
        return response() -> json([
            'status'  => $status,
            'message' => $message,
            'meta'    => $this -> metaMerger($meta),
            'data'    => $data
        ], $code);
    }

    /**
     * @param int $code
     * @param string $message
     * @param string|null $trigger_line
     * @param mixed $data
     * @param array $meta
     * @param string $status
     * @return object
     */
    public function error(int $code, string $message, string|null $trigger_line, mixed $data = null, array $meta = [], string $status = "error"): object
    {
        return response() -> json([
            'status'  => $status,
            'message' => $message,
            'line'    => $trigger_line,
            'meta'    => $this -> metaMerger($meta),
            'data'    => $data
        ], $code);
    }

    //******************************************************************************************************************
    // Protected Functions
    //******************************************************************************************************************

    /**
     * @param array $meta
     * @return array
     */
    protected function metaMerger(array $meta): array
    {
        return array_merge($meta, [
            'timestamp' => now() -> format('Y-m-d H:i:s'),
        ]);
    }
}
