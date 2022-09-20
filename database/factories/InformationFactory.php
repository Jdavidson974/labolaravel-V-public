<?php

namespace Database\Factories;

use App\Models\Information;
use Illuminate\Database\Eloquent\Factories\Factory;

class InformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @var string
     */
    protected $model = Information::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'adresse' => "180 Ter chemin commune Bègue 97441 Sainte-Suzanne",
            'mail' => "sautronjdavidson@gamil.com",
            'tel' => '0692380854',
            'nom' => 'SAUTRON',
            'prenom' => 'Jean Davidson',
            'permis' => true,
            'vehicule' => true,
            'distance' => "Saint-Denis à Saint-Benoît",
            'naissance' => '1995-01-31',
        ];
    }
}
