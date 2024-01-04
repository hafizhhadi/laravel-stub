<?php

namespace App\Traits\Utilities;

trait PaginationSorter
{
    /**
     * Used to sort paginated data received from Central API
     *
     * @param mixed $data
     * @return mixed
     */
    public function sortCentralPaginate(mixed $data): array
    {
        return [
            'path'           => request() -> url(),
            'first_page_url' => request() -> url() . '?page=1',
            'last_page_url'  => request() -> url() . '?page=' . $data['last_page'],
            "current_page"   => $data['current_page'],
            "from"           => $data['from'],
            "to"             => $data['to'],
            "last_page"      => $data['last_page'],
            "per_page"       => $data['per_page'],
            "total"          => $data['total'],
            "data"           => $data['data'],
        ];
    }

    /**
     * Used to sort paginated data for API resource collection
     *
     * @param mixed $resource
     * @param mixed $data
     * @return array
     */
    public function sortAPICollectionPaginate(mixed $resource, mixed $data): array
    {
        return [
            'path'           => request() -> url(),
            'first_page_url' => request() -> url() . '?page=1',
            'last_page_url'  => request() -> url() . '?page=' . $resource -> lastPage(),
            "current_page"   => $resource -> currentPage(),
            "from"           => $resource -> firstItem(),
            "to"             => $resource -> lastItem(),
            "last_page"      => $resource -> lastPage(),
            "per_page"       => $resource -> perPage(),
            "total"          => $resource -> total(),
            "data"           => $data,
        ];
    }

    /**
     * Used to sort paginated data received from Central API v2
     *
     * @param mixed $data
     * @return mixed
     */
    public function sortCentralPaginateV2(mixed $data, mixed $resource): array
    {
        return [
            'path'           => request() -> url(),
            'first_page_url' => request() -> url() . '?page=1',
            'last_page_url'  => request() -> url() . '?page=' . $data['last_page'],
            "current_page"   => $data['current_page'],
            "from"           => $data['from'],
            "to"             => $data['to'],
            "last_page"      => $data['last_page'],
            "per_page"       => $data['per_page'],
            "total"          => $data['total'],
            "data"           => $resource,
        ];
    }
}
