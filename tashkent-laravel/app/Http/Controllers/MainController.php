<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class MainController extends Controller
{
    public function index(string $epoch, string $locale = "") {
      if($locale) {
        App::setLocale($locale);
      }

    	return view('epoch.epoch', compact('epoch'));
    }

    public function lol(string $epoch, string $locale = "") {
      if($locale) {
        App::setLocale($locale);
      }

    	return view('epoch.epoch', compact('epoch'));
    }
}
