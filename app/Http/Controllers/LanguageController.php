<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function getLang()
    {
        return view('admin.includes.Languages.language');
    }
}
