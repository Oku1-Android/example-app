<?php

namespace Database\Factories;

use App\Models\Posts;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * the name of the factories corresponding model
     * 
     * @var string
     */
    protected $model = \App\Models\Post::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      return[
          'title' => $this->faker->title,
        'body'=>$this->faker->paragraph,
        'created_at' => now(), 
        ];
    }
}
