<?php

namespace App\Http\Controllers;


use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class PagesController extends Controller
{

    public function home()
    {
        Cache::remember('foo', 60, fn() => 'foobar');

        return Cache::get('foo');
    }

}
