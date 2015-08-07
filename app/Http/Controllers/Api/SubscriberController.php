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
use Exception;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class SubscriberController extends AbstractApiController
{
    use DispatchesJobs;

    /**
     * Get all subscribers.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getSubscribers(Request $request)
    {
        $subscribers = Subscriber::paginate(Binput::get('per_page', 20));

        return $this->paginator($subscribers, $request);
    }

    /**
     * Create a new subscriber.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function postSubscribers()
    {
        try {
            $subscriber = $this->dispatch(new SubscribeSubscriberCommand(Binput::get('email'), Binput::get('verified', false)));
        } catch (Exception $e) {
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
