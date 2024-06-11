<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Score;
class ScoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //protected $fillable = ['user_id', 'category_id', 'score']; 
        //create for each user  start with user id 2 total users is 11 scores with random scores between 0 and 500 and  category from  1 and 10

        for ($i = 2; $i <= 11; $i++) {
            for ($j = 1; $j <= 10; $j++) {
                Score::create([
                    'user_id' => $i,
                    'category_id' => $j,
                    'score' => rand(0, 500),
                ]);
            }
        }
       
        

        
    }
}
