<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Config;
use Storage;

class Setting extends Model
{
    use HasFactory;
    protected $table = 'settings';
    protected $fillable = ['key', 'value'];
    protected $appends = [
        'social_image_url',
    ];

    public static function get($key)
    {
        $setting = new self();
        $entry = $setting->where('key', $key)->first();

        return $entry->value ?? null;

    }

}