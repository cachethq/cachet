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

use CachetHQ\Cachet\Commands\Subscriber\SubscribeSubscriberCommand;
use CachetHQ\Cachet\Commands\Subscriber\UnsubscribeSubscriberCommand;
use CachetHQ\Cachet\Models\Subscriber;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Facades\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class SubscriberController extends AbstractApiController
{
    use DispatchesJobs;

    /**
     * Get all subscribers.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getSubscribers()
    {
        $subscribers = Subscriber::paginate(Binput::get('per_page', 20));

        return $this->paginator($subscribers, Request::instance());
    }

    /**
     * Create a new subscriber.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function postSubscribers()
    {
        try {
            $subscriber = $this->dispatch(new SubscribeSubscriberCommand(Binput::get('email'), Binput::get('verify', false)));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($subscriber);
    }

    /**
     * Delete a subscriber.
     *
     * @param \CachetHQ\Cachet\Models\Subscriber $subscriber
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteSubscriber(Subscriber $subscriber)
    {
        $this->dispatch(new UnsubscribeSubscriberCommand($subscriber));

        return $this->noContent();
    }
}
