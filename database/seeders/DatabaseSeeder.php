<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('quizzes')->insert(
            [
                [
                    'question' => 'Wie viele Bits hat ein Byte?',
                    'correct_answers' => '["8"]',
                    'answers' => '["2", "4", "8"]'
                ],
                [
                    'question' => 'Was ist H2O?',
                    'correct_answers' => '["Wasser"]',
                    'answers' => '["Wasser","Helium","Sauerstoff"]'
                ],
                [
                    'question' => 'Was beinhaltet H2O? (nur beide Antworten zusammen richtig)?',
                    'correct_answers' =>'["Wasserstoff","Sauerstoff" ]',
                    'answers' => '["Stickstoff","Wasserstoff","Kohlendioxid","Sauerstoff" ]'
                ],
                [
                    'question' => 'Dein Herz pumpt Blut. Ist das richtig?',
                    'correct_answers' =>'["Ja"]',
                    'answers' => '["Ja","Nein"]'
                ],
                [
                    'question' => 'Wo steht ein Eiffelturm? Das Original und Nachbildungen zählen.',
                    'correct_answers' =>'["Tokio","Paris", "Las Vegas"]',
                    'answers' => '["Tokio","Berlin","Dubai","Paris", "Las Vegas" ]'
                ],

            ]
        );
    }
}
