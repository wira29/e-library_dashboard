<?php 

namespace App\Traits;

use Illuminate\Support\Str;

trait GenerateSlugTrait
{
    public static function generateSlug($string)
    {
        return Str::of($string)->slug('-');
    }
}