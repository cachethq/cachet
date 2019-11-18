<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Http\Controllers\Api;

use App\Bus\Commands\Subscriber\UnsubscribeSubscriptionCommand;
use App\Models\Subscription;

/**
 * This is the subscription controller class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class SubscriptionController extends AbstractApiController
{
    /**
     * Delete a subscription.
     *
     * @param \App\Models\Subscription $subscription
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Subscription $subscription)
    {
        execute(new UnsubscribeSubscriptionCommand($subscription));

        return $this->noContent();
    }
}
