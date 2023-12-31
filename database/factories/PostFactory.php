<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\user;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => user::all()->random()->id,
            'title'   => $title = $this->faker->sentence(),
            'slug'  => Str::slug($title),
            'body'  => $this->faker->text(2200)
            //
        ];
    }
}
