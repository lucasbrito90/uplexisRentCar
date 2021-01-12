<?php


namespace App\Facade;


use Illuminate\Support\Facades\Facade;

class SyncTagsKeystoArrays extends Facade
{
    protected static function getFacadeAccessor() {
        return 'sync_tags_keys_to_array';
    }
}
