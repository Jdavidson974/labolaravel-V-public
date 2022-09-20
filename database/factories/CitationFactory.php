<?php

namespace Database\Factories;

use App\Models\Citation;
use Illuminate\Database\Eloquent\Factories\Factory;

class CitationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @var string
     */
    protected $model = Citation::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'example' => "J'aime coder"
        ];
    }
}
