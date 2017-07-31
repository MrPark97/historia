<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Carbon\Carbon;
use App\Architecture;
use App\Image;
use App\Event;
use App\Individual;

class MainController extends Controller

{

    public function index(string $locale = "")

    {

      if($locale) {
        App::setLocale($locale);
      }

      return view('index');

    }

    public function epoch(Request $request, string $epoch, string $locale = "", string $category = "architecture")

    {

      $path = $request->path();

      if($path) {
        $path = substr($path, 2);
      }

      if($locale) {
        App::setLocale($locale);
      }

      Carbon::setLocale(App::getLocale());

      $articles;

      if($category == "architecture") {
        $articles = Architecture::latest()->where('epoch_name', $epoch)->paginate('7');
      } else  if($category == "individuals") {
        $articles = Individual::latest()->where('epoch_name', $epoch)->paginate('7');
      } else if($category == "events") {
        $articles = Event::latest()->where('epoch_name', $epoch)->paginate('7');
      }

      $articles->toArray();

    	return view('epoch.epoch', compact('epoch', 'category', 'articles', 'path'));

    }


    public function gallery(Request $request, $locale)

    {

      $path = substr($request->path(), 2);

      App::setLocale($locale);

      $images = Image::latest()->limit(120)->get();

      $images->toArray();

      return view('layouts.gallery', compact('epoch', 'images', 'path'));

    }

    public function show(Request $request, string $epoch, string $locale, string $category, int $id)

    {

      $path = substr($request->path(), 2);

      App::setLocale($locale);

      Carbon::setLocale(App::getLocale());

      $article;

      if($category == "architecture") {
        $article = Architecture::where('epoch_name', $epoch)->where('id', $id)->firstOrFail();
      } else  if($category == "individuals") {
        $article = Individual::where('epoch_name', $epoch)->where('id', $id)->firstOrFail();
      } else if($category == "events") {
        $article = Event::where('epoch_name', $epoch)->where('id', $id)->firstOrFail();
      }

      $article->toArray();

      return view('epoch.article', compact('epoch', 'category', 'article', 'path'));

    }

    public function about(Request $request, string $locale)

    {
      $path = substr($request->path(), 2);

      App::setLocale($locale);

      return view('layouts.about', compact('path'));

    }

}
