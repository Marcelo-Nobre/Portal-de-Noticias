<?php

namespace App\Http\Controllers\Web\News;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class SetLanguageController extends Controller
{
    public function __invoke(Request $request, $lang = null)
    {
        $lang ??= $request->get('lang', 'en');
        $lang = in_array($lang, Arr::wrap(config('app.avaliable_locales', ['en']))) ? $lang : 'en';
        Session::put(['lang' => $lang]);
        return redirect()->route('home');
    }
}
