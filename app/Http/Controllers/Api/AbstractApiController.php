<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers\Api;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Response;
use McCool\LaravelAutoPresenter\Facades\AutoPresenter;

abstract class AbstractApiController extends Controller
{
    /**
     * The HTTP response headers.
     *
     * @var array
     */
    protected $headers = [];

    /**
     * The HTTP response meta data.
     *
     * @var array
     */
    protected $meta = [];

    /**
     * The HTTP response data.
     *
     * @var mixed
     */
    protected $data = null;

    /**
     * The HTTP response status code.
     *
     * @var int
     */
    protected $statusCode = 200;

    /**
     * Set the response headers.
     *
     * @param array $headers
     *
     * @return $this
     */
    protected function setHeaders(array $headers)
    {
        $this->headers = $headers;

        return $this;
    }

    /**
     * Set the response meta data.
     *
     * @param array $meta
     *
     * @return $this
     */
    protected function setMetaData(array $meta)
    {
        $this->meta = $meta;

        return $this;
    }

    /**
     * Set the response meta data.
     *
     * @param array $data
     *
     * @return $this
     */
    protected function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Set the response status code.
     *
     * @param int $statusCode
     *
     * @return $this
     */
    protected function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * Respond with an item response.
     *
     * @param mixed
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function item($item)
    {
        return $this->setData(AutoPresenter::decorate($item))->respond();
    }

    /**
     * Respond with a collection response.
     *
     * @param \Illuminate\Support\Collection $collection
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function collection(Collection $collection)
    {
        return $this->setData(AutoPresenter::decorate($collection))->respond();
    }

    /**
     * Respond with a pagination response.
     *
     * @param \Illuminate\Pagination\Paginator $paginator
     * @param \Illuminate\Http\Request         $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function paginator(Paginator $paginator, Request $request)
    {
        foreach ($request->query as $key => $value) {
            if ($key != 'page') {
                $paginator->addQuery($key, $value);
            }
        }

        $pagination = [
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

        $items = $paginator->getCollection();

        if ($sortBy = $request->get('sort')) {
            $direction = $request->has('order') && $request->get('order') == 'desc';

            $items = $items->sortBy($sortBy, SORT_REGULAR, $direction);
        }

        return $this->setMetaData($pagination)->setData(AutoPresenter::decorate($items->values()))->respond();
    }

    /**
     * Respond with a no content response.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function noContent()
    {
        return $this->setStatusCode(204)->respond();
    }

    /**
     * Build the response.
     *
     * @return \Illuminate\Http\Response
     */
    protected function respond()
    {
        $response = [];

        if (!empty($this->meta)) {
            $response['meta'] = $this->meta;
        }

        $response['data'] = $this->data;

        if ($this->data instanceof Arrayable) {
            $response['data'] = $this->data->toArray();
        }

        return Response::json($response, $this->statusCode, $this->headers);
    }
}
