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

use CachetHQ\Cachet\Events\CustomerHasSubscribedEvent;
use CachetHQ\Cachet\Models\Subscriber;
use Exception;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class SubscriberController extends AbstractApiController
{
    /**
     * Get all subscribers.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getSubscribers(Request $request)
    {
        $subscribers = Subscriber::paginate(Binput::get('per_page', 20));

        return $this->paginator($subscribers, $request);
    }

    /**
     * Create a new subscriber.
     *
     * @return \CachetHQ\Cachet\Models\Subscriber
     */
    public function postSubscribers()
    {
        $subscriberData = Binput::except('verify');

        try {
            $subscriber = Subscriber::create($subscriberData);
        } catch (Exception $e) {
            throw new BadRequestHttpException();
        }

        if ($subscriber->isValid()) {
            // If we're auto-verifying the subscriber, don't bother with this event.
            if (!(Binput::get('verify'))) {
                event(new CustomerHasSubscribedEvent($subscriber));
            }

            return $this->item($subscriber);
        }

        throw new BadRequestHttpException();
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
        $subscriber->delete();

        return $this->noContent();
    }
}
