<?php

use App\Joke;
use Illuminate\Database\Seeder;

class JokeTableSeeder extends Seeder
{
  public function run()
  {
    Joke::create([
      'text' => 'Success is going from failure to failure without losing your enthusiasm',
      'author' => 'Winston Churchill',
      'background' => 'http://images.unsplash.com/photo-1464655646192-3cb2ace7a67e?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=5a46937ae3f4f177da248eaf850a0a11'
    ]);

    Joke::create([
      'text' => 'It does not matter how slowly you go as long as you do not stop',
      'author' => 'Confucius',
      'background' => 'http://images.unsplash.com/photo-1461295025362-7547f63dbaea?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=318b7818f0c30ca96c096fe8c6dce1be'
    ]);

    Joke::create([
      'text' => 'Dream big and dare to fail',
      'author' => 'Norman Vaughan',
      'background' => 'http://images.unsplash.com/photo-1461016951828-c09537329b3a?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=f880092e496462e48391aa0b2ff62b09'
    ]);
  }
}
