<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller; 

class LanguageController extends Controller
{
    /**
     * Change language.
     *
     * @param  string $lang
     * @return \Illuminate\Http\Response
     */
    public function show($lang)
    {
        $language = in_array($lang, config('app.languages')) ? $lang : config('app.fallback_locale');
         
        session()->set('locale', $language);
 
        return back();
    }
}