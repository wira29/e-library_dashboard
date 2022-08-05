<?php

namespace Database\Factories;

use App\Traits\GenerateSlugTrait;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     use GenerateSlugTrait;

    public function definition()
    {
        return [
            'name' => $this->faker->title(),
            'author' => $this->faker->name(),
            'publisher' => 'airlangga',
            'published' => $this->faker->date(),
            'description' => $this->faker->paragraph(),
            'synopsis' => $this->faker->paragraph(),
            'price'    => $this->faker->randomDigit(),
            'pages'    => $this->faker->randomDigit(),
            'language'  => 'Indonesia',
            'photo'     => 'photo_ebook/JcRWwvwTyhR6Zbrj1dvm4Nzd15gBRXV3Ib1dzWe9.jpg',
            'file'      => 'file_ebook/4Ow370JmdHWG8LhrXTF2eVYDEt2yKBbNsNK8PPYB.pdf',
            'slug'      => GenerateSlugTrait::generateSlug($this->faker->title()),
        ];
    }
}
