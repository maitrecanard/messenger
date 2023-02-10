<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Errors;

class ErrorsServiceProvider extends ServiceProvider
{
    public static function error($module,$content)
    {
        $error = new Errors();
        
        $error->module = $module;
        $error->content =  $content;
        $error->created_at = date('Ymd');

        $error->save();
    }
}