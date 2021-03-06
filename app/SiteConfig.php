<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteConfig extends Model
{
    public $connection = 'mysql_admin';
    public $fillable = [
        'key',
        'value',
        'type'
    ];

    public static function config($key)
    {
        return SiteConfig::where('key', $key)->first()->value;
    }
}
