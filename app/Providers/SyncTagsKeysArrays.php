<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SyncTagsKeysArrays extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('sync_tags_keys_to_array', function (){
            return new \App\Models\SyncTagsKeysArrays();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
