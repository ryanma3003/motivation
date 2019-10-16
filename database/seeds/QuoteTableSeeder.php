<?php

use App\Quote;
use Illuminate\Database\Seeder;

class QuoteTableSeeder extends Seeder
{
    public function run()
    {
        Quote::create([
            'text' => 'Success is going from failure to failure without losing your enthusiasm',
            'author' => 'Winston Churchill',
            'background' => '1.jpg'
        ]);

        Quote::create([
            'text' => 'The unexamined life is not worth living',
            'author' => 'Socrates',
            'background' => '2.jpg'
        ]);

        Quote::create([
            'text' => 'Religion is the sign of the oppressed ... it is the opium of the people',
            'author' => 'Karl Marx',
            'background' => '3.jpg'
        ]);
    }
}