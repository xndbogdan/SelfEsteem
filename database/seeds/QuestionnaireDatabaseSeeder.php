<?php

use Illuminate\Database\Seeder;
use App\Question_Category;
use App\Question;
use App\Questionnaire;


class QuestionnaireDatabaseSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        Question_Category::firstOrCreate([
            'name' => 'Sociability'
        ]);
        Question_Category::firstOrCreate([
            'name' => 'Helpfulness'
        ]);
        Question_Category::firstOrCreate([
            'name' => 'Openness'
        ]);
        Question_Category::firstOrCreate([
            'name' => 'Selfesteem'
        ]);
        Question_Category::firstOrCreate([
            'name' => 'Intuition'
        ]);

        Questionnaire::firstOrCreate([
            'name' => 'General Purpose Questionnaire'
        ]);
        Question::firstOrCreate([
            'text' => 'I enjoy meeting new people',
            'questionnaire_id' => Questionnaire::where('name','General Purpose Questionnaire')->first()->id,
            'category_id' => Question_Category::where('name', 'Sociability')->first()->id
        ]);
        Question::firstOrCreate([
            'text' => 'I like helping people',
            'questionnaire_id' => Questionnaire::where('name','General Purpose Questionnaire')->first()->id,
            'category_id' => Question_Category::where('name', 'Helpfulness')->first()->id
        ]);
        Question::firstOrCreate([
            'text' => 'I sometimes make mistakes',
            'questionnaire_id' => Questionnaire::where('name','General Purpose Questionnaire')->first()->id,
            'category_id' => Question_Category::where('name', 'Openness')->first()->id
        ]);
        Question::firstOrCreate([
            'text' => "I'm easily disappointed",
            'questionnaire_id' => Questionnaire::where('name','General Purpose Questionnaire')->first()->id,
            'category_id' => Question_Category::where('name', 'Selfesteem')->first()->id
        ]);
        Question::firstOrCreate([
            'text' => 'I enjoy repairing things',
            'questionnaire_id' => Questionnaire::where('name','General Purpose Questionnaire')->first()->id,
            'category_id' => Question_Category::where('name', 'Intuition')->first()->id
        ]);

    }
}
