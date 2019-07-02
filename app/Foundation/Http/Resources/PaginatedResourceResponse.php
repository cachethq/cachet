<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Foundation\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceResponse;
use Illuminate\Pagination\LengthAwarePaginator;

class PaginatedResourceResponse extends ResourceResponse
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function toResponse($request)
    {
        return tap(response()->json(
            $this->wrap(
                $this->resource->resolve($request),
                array_merge_recursive(
                    $this->paginationInformation($request),
                    $this->resource->with($request),
                    $this->resource->additional
                )
            ),
            $this->calculateStatus()
        ), function ($response) use ($request) {
            $response->original = $this->resource->resource->pluck('resource');

            $this->resource->withResponse($request, $response);
        });
    }

    /**
     * Add the pagination information to the response.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    protected function paginationInformation($request)
    {
        /** @var LengthAwarePaginator $paginator */
        $paginator = $this->resource->resource;

        return [
            'pagination' => [
                'total'        => (int) $paginator->total(),
                'count'        => count($paginator->items()),
                'per_page'     => (int) $paginator->perPage(),
                'current_page' => (int) $paginator->currentPage(),
                'total_pages'  => (int) $paginator->lastPage(),
                'links'        => [
                    'next_page'     => $paginator->nextPageUrl(),
                    'previous_page' => $paginator->previousPageUrl(),
                ],
            ],
        ];
    }
}
