<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    /**
     * Save the model to the database.
     *
     * @param array $options
     *
     * @return bool
     */
    public function saveQuietly(array $options = [])
    {
        return static::withoutEvents(function () use ($options) {
            return $this->save($options);
        });
    }

    /**
     * Determine if the model was created after a given date.
     *
     * @param \DateTimeInterface $date
     *
     * @return bool
     */
    public function createdAfter(DateTimeInterface $date)
    {
        return $this->created_at->gte($date);
    }

    /**
     * Prepare a date for array / JSON serialization.
     *
     * @param \DateTimeInterface $date
     *
     * @return string
     */
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format(DateTimeInterface::ISO8601);
    }
}
