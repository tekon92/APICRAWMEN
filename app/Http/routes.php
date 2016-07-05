<?php

use Embed\Embed;
use Goutte\Client;
use App\Joke;



$app->get('/', function () use ($app) {
    $count = Joke::query()->get()->count();
    $day = (int)date('z');
    $page = $day % $count + 1;

    $jokes = Joke::query()->get()->forPage($page, 1)->all();

    if (empty($jokes)) {
      throw new \Illuminate\Database\Eloquent\ModelNotFoundException();
    }

    return view('joke', ['joke' => $jokes[0]]);
});

$app->get('/{id}', function($id) use ($app){
  $joke = Joke::query()->findOrFail($id);

  return view('quote', ['quote' => $quote]);
});

$app->get('/crw', function(){
  $link = 'https://unsplash.com/';
  $info = Embed::create($link);

  $images = $info->images;
  $img = [];
  $rs = [];

  foreach ($images as $pic) {
    array_push($img, $pic);
  }

  for ($i=0; $i <= 3; $i++) {
    array_push($rs, $img[$i]['value']);
  }

  return dd($rs);
});
