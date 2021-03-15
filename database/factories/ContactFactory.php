<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fname'=>$this->faker->name,
            'lname' => $this->faker->name,
            'email' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'streetAddress' => $this->faker->streetAddress,
            'zip' => $this->faker->postcode,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'hearaboutUs' => $this->faker->sentences($nb = 3, $asText = false),
            'budget' => $this->faker->numberBetween($min = 1000, $max = 100000)
        ];
    }
}
