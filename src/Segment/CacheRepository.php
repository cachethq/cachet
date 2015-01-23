<?php

namespace CachetHQ\Cachet\Segment;

use CachetHQ\Cachet\Facades\Setting;
use CachetHQ\Cachet\Models\Setting as SettingModel;
use Carbon\Carbon;

class CacheRepository implements RepositoryInterface
{
    /**
     * @var \CachetHQ\Cachet\Segment\HttpRepository
     */
    protected $repository;

    /**
     * Instantiates a new instance of the Cache Repository.
     *
     * @param \CachetHQ\Cachet\Segment\HttpRepository $repository
     */
    public function __construct(RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Determines whether to use the segment_write_key setting or to fetch a new.
     *
     * @return string
     */
    public function fetch()
    {
        // Firstly, does the setting exist?
        if (false === ($writeKey = Setting::get('segment_write_key'))) {
            // No, let's go fetch it.
            $writeKey = $this->repository->fetch();
            Setting::set('segment_write_key', $writeKey);
        } else {
            // It does, but how old is it?
            $setting = SettingModel::where('name', 'segment_write_key')->first();

            // It's older than an hour, let's refresh
            if ($setting->updated_at->lt(Carbon::now()->subHour())) {
                $writeKey = $this->repository->fetch();

                // Update the setting. This is done manual to make sure updated_at is overwritten.
                $setting->value = $writeKey;
                $setting->updated_at = Carbon::now();
                $setting->save();
            }
        }

        return $writeKey;
    }
}
