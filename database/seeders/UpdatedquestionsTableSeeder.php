<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;

class UpdatedquestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Example data
        $questions = [
           //Category-1: Geography
        //1
        [
            'category_id' => 1,
            'text' => 'Which country has the largest population?',
            'correct_answer' => 3,
            'difficulty' => 1,
        ],
        //2
        [
            'category_id' => 1,
            'text' => 'What is the capital of Australia?',
            'correct_answer' => 7,
            'difficulty' => 1,
        ],
        //3
        [
            'category_id' => 1,
            'text' => 'Which river is the longest in the world?',
            'correct_answer' => 10,
            'difficulty' => 1,
        ],
        //4
        [
            'category_id' => 1,
            'text' => 'Which is the smallest country in the world by area?',
            'correct_answer' => 15,
            'difficulty' => 1,
        ],
        //5
        [
            'category_id' => 1,
            'text' => 'What is the largest desert in the world?',
            'correct_answer' => 19,
            'difficulty' => 1,
        ],
        //6
        [
            'category_id' => 1,
            'text' => 'Which mountain is the highest in the world?',
            'correct_answer' => 24,
            'difficulty' => 1,
        ],
        //7
        [
            'category_id' => 1,
            'text' => 'Which continent has the most countries?',
            'correct_answer' => 26,
            'difficulty' => 1,
        ],
        //8
        [
            'category_id' => 1,
            'text' => 'What is the capital city of Japan?',
            'correct_answer' => 31,
            'difficulty' => 1,
        ],
        //9
        [
            'category_id' => 1,
            'text' => 'Which sea is the largest by surface area?',
            'correct_answer' => 36,
            'difficulty' => 1,
        ],
        //10
        [
            'category_id' => 1,
            'text' => 'Which country has the longest coastline?',
            'correct_answer' => 38,
            'difficulty' => 1,
        ],
        //Category-2: History
        //1
        [
            'category_id' => 2,
            'text' => 'Who was the first President of the United States?',
            'correct_answer' => 43,
            'difficulty' => 1,
        ],
        //2
        [
            'category_id' => 2,
            'text' => 'In which year did the Titanic sink?',
            'correct_answer' => 46,
            'difficulty' => 1,
        ],
        //3
        [
            'category_id' => 2,
            'text' => 'Who discovered America in 1492?',
            'correct_answer' => 51,
            'difficulty' => 1,
        ],
        //4
        [
            'category_id' => 2,
            'text' => 'Which empire was ruled by Julius Caesar?',
            'correct_answer' => 55,
            'difficulty' => 1,
        ],
        //5
        [
            'category_id' => 2,
            'text' => 'What year did World War II end?',
            'correct_answer' => 59,
            'difficulty' => 1,
        ],
        //6
        [
            'category_id' => 2,
            'text' => 'Who was the first woman to fly solo across the Atlantic Ocean?',
            'correct_answer' => 61,
            'difficulty' => 1,
        ],
        //7
        [
            'category_id' => 2,
            'text' => 'Which event began on July 28, 1914?',
            'correct_answer' => 66,
            'difficulty' => 1,
        ],
        //8
        [
            'category_id' => 2,
            'text' => 'Who was the British Prime Minister during World War II?',
            'correct_answer' => 69,
            'difficulty' => 1,
        ],
        //9
        [
            'category_id' => 2,
            'text' => 'Which ancient civilization built the pyramids?',
            'correct_answer' => 76,
            'difficulty' => 1,
        ],
        //10
        [
            'category_id' => 2,
            'text' => 'Who was known as the "Maid of Orleans"?',
            'correct_answer' => 78,
            'difficulty' => 1,
        ],
        //Category-3: Science
        //1
        [
            'category_id' => 3,
            'text' => 'What is the chemical symbol for water?',
            'correct_answer' => 84,
            'difficulty' => 1,
        ],
        //2
        [
            'category_id' => 3,
            'text' => 'Which planet is known as the Red Planet?',
            'correct_answer' => 86,
            'difficulty' => 1,
        ],
        //3
        [
            'category_id' => 3,
            'text' => 'What is the speed of light?',
            'correct_answer' => 89,
            'difficulty' => 1,
        ],
        //4
        [
            'category_id' => 3,
            'text' => 'Who developed the theory of relativity?',
            'correct_answer' => 95,
            'difficulty' => 1,
        ],
        //5
        [
            'category_id' => 3,
            'text' => 'What is the most abundant gas in Earth\'s atmosphere?',
            'correct_answer' => 98,
            'difficulty' => 1,
        ],
        //6
        [
            'category_id' => 3,
            'text' => 'What is the powerhouse of the cell?',
            'correct_answer' => 103,
            'difficulty' => 1,
        ],
        //7
        [
            'category_id' => 3,
            'text' => 'Which element has the atomic number 1?',
            'correct_answer' => 106,
            'difficulty' => 1,
        ],
        //8
        [
            'category_id' => 3,
            'text' => 'What is the boiling point of water at sea level?',
            'correct_answer' => 111,
            'difficulty' => 1,
        ],
        //9
        [
            'category_id' => 3,
            'text' => 'Who is known as the father of modern physics?',
            'correct_answer' => 113,
            'difficulty' => 1,
        ],
        //10
        [
            'category_id' => 3,
            'text' => 'Which planet is the largest in the Solar System?',
            'correct_answer' => 119,
            'difficulty' => 1,
        ],
        // Category-4: Literature
        //1
        [
            'category_id' => 4,
            'text' => 'Who wrote "Pride and Prejudice"?',
            'correct_answer' => 122,
            'difficulty' => 1,
        ],
        //2
        [
            'category_id' => 4,
            'text' => 'Which author created Sherlock Holmes?',
            'correct_answer' => 126,
            'difficulty' => 1,
        ],
        //3
        [
            'category_id' => 4,
            'text' => 'What is the title of the first Harry Potter book?',
            'correct_answer' => 131,
            'difficulty' => 1,
        ],
        //4
        [
            'category_id' => 4,
            'text' => 'Who wrote "To Kill a Mockingbird"?',
            'correct_answer' => 133,
            'difficulty' => 1,
        ],
        //5
        [
            'category_id' => 4,
            'text' => 'What is the pen name of Samuel Langhorne Clemens?',
            'correct_answer' => 137,
            'difficulty' => 1,
        ],
        //6
        [
            'category_id' => 4,
            'text' => 'Who wrote "1984"?',
            'correct_answer' => 142,
            'difficulty' => 1,
        ],
        //7
        [
            'category_id' => 4,
            'text' => 'Who is the author of "The Catcher in the Rye"?',
            'correct_answer' => 146,
            'difficulty' => 1,
        ],
        //8
        [
            'category_id' => 4,
            'text' => 'Which epic poem was written by Homer?',
            'correct_answer' => 152,
            'difficulty' => 1,
        ],
        //9
        [
            'category_id' => 4,
            'text' => 'Who wrote "Moby-Dick"?',
            'correct_answer' => 154,
            'difficulty' => 1,
        ],
        //10
        [
            'category_id' => 4,
            'text' => 'What is the title of Jane Austen\'s last completed novel?',
            'correct_answer' => 159,
            'difficulty' => 1,
        ],
        // Category-5: Sports
        //1
        [
            'category_id' => 5,
            'text' => 'Which country won the FIFA World Cup in 2018?',
            'correct_answer' => 163,
            'difficulty' => 1,
        ],
        //2
        [
            'category_id' => 5,
            'text' => 'Who holds the record for the most home runs in a single MLB season?',
            'correct_answer' => 165,
            'difficulty' => 1,
        ],
        //3
        [
            'category_id' => 5,
            'text' => 'Which tennis player has won the most Grand Slam titles?',
            'correct_answer' => 171,
            'difficulty' => 1,
        ],
        //4
        [
            'category_id' => 5,
            'text' => 'In which sport is the Vince Lombardi Trophy awarded?',
            'correct_answer' => 175,
            'difficulty' => 1,
        ],
        //5
        [
            'category_id' => 5,
            'text' => 'Which country has hosted the most Olympic Games?',
            'correct_answer' => 178,
            'difficulty' => 1,
        ],
        //6
        [
            'category_id' => 5,
            'text' => 'Who won the Tour de France seven consecutive times?',
            'correct_answer' => 183,
            'difficulty' => 1,
        ],
        //7
        [
            'category_id' => 5,
            'text' => 'In which year did Michael Jordan first retire from basketball?',
            'correct_answer' => 185,
            'difficulty' => 1,
        ],
        //8
        [
            'category_id' => 5,
            'text' => 'Which country has won the most Cricket World Cups?',
            'correct_answer' => 191,
            'difficulty' => 1,
        ],
        //9
        [
            'category_id' => 5,
            'text' => 'Who is known as "The Great One" in ice hockey?',
            'correct_answer' => 196,
            'difficulty' => 1,
        ],
        //10
        [
            'category_id' => 5,
            'text' => 'Which golf tournament is held annually at Augusta National Golf Club?',
            'correct_answer' => 200,
            'difficulty' => 1,
        ],
        // Category-6: Entertainment
        //1
        [
            'category_id' => 6,
            'text' => 'Which movie won the Oscar for Best Picture in 2020?',
            'correct_answer' => 203,
            'difficulty' => 1,
        ],
        //2
        [
            'category_id' => 6,
            'text' => 'Who played Jack Dawson in "Titanic"?',
            'correct_answer' => 206,
            'difficulty' => 1,
        ],
        //3
        [
            'category_id' => 6,
            'text' => 'What is the highest-grossing film of all time?',
            'correct_answer' => 210,
            'difficulty' => 1,
        ],
        //4
        [
            'category_id' => 6,
            'text' => 'Who is the author of the "Harry Potter" series?',
            'correct_answer' => 215,
            'difficulty' => 1,
        ],
        //5
        [
            'category_id' => 6,
            'text' => 'Which TV series features the character Walter White?',
            'correct_answer' => 218,
            'difficulty' => 1,
        ],
        //6
        [
            'category_id' => 6,
            'text' => 'Who directed "Inception"?',
            'correct_answer' => 223,
            'difficulty' => 1,
        ],
        //7
        [
            'category_id' => 6,
            'text' => 'Which actor played the character of Harry Potter?',
            'correct_answer' => 226,
            'difficulty' => 1,
        ],
        //8
        [
            'category_id' => 6,
            'text' => 'Which band released the album "Abbey Road"?',
            'correct_answer' => 230,
            'difficulty' => 1,
        ],
        //9
        [
            'category_id' => 6,
            'text' => 'What is the longest-running animated TV show in the United States?',
            'correct_answer' => 234,
            'difficulty' => 1,
        ],
        //10
        [
            'category_id' => 6,
            'text' => 'Who is the voice of Woody in "Toy Story"?',
            'correct_answer' => 238,
            'difficulty' => 1,
        ],
        // Category-7: Art
            //1
            [
                'category_id' => 7,
                'text' => 'Who painted the Mona Lisa?',
                'correct_answer' => 244,
                'difficulty' => 1,
            ],
            //2
            [
                'category_id' => 7,
                'text' => 'Which art movement is Salvador Dalí associated with?',
                'correct_answer' => 246,
                'difficulty' => 1,
            ],
            //3
            [
                'category_id' => 7,
                'text' => 'What is the title of Edvard Munch\'s famous painting?',
                'correct_answer' => 251,
                'difficulty' => 1,
            ],
            //4
            [
                'category_id' => 7,
                'text' => 'Who sculpted David?',
                'correct_answer' => 254,
                'difficulty' => 1,
            ],
            //5
            [
                'category_id' => 7,
                'text' => 'In which city is the Louvre Museum located?',
                'correct_answer' => 259,
                'difficulty' => 1,
            ],
            //6
            [
                'category_id' => 7,
                'text' => 'What is the art technique of painting on wet plaster called?',
                'correct_answer' => 261,
                'difficulty' => 1,
            ],
            //7
            [
                'category_id' => 7,
                'text' => 'Who painted The Starry Night?',
                'correct_answer' => 265,
                'difficulty' => 1,
            ],
            //8
            [
                'category_id' => 7,
                'text' => 'Which artist is famous for the painting The Night Watch?',
                'correct_answer' => 271,
                'difficulty' => 1,
            ],
            //9
            [
                'category_id' => 7,
                'text' => 'What is the title of Pablo Picasso\'s anti-war mural?',
                'correct_answer' => 274,
                'difficulty' => 1,
            ],
            //10
            [
                'category_id' => 7,
                'text' => 'Which period is characterized by a revival of interest in classical art and learning?',
                'correct_answer' => 278,
                'difficulty' => 1,
            ],
            // Category-8: Music
            //1
            [
                'category_id' => 8,
                'text' => 'Which composer is known for the Fifth Symphony?',
                'correct_answer' => 282,
                'difficulty' => 1,
            ],
            //2
            [
                'category_id' => 8,
                'text' => 'Which band is known for the song "Bohemian Rhapsody"?',
                'correct_answer' => 287,
                'difficulty' => 1,
            ],
            //3
            [
                'category_id' => 8,
                'text' => 'Who is known as the "King of Pop"?',
                'correct_answer' => 290,
                'difficulty' => 1,
            ],
            //4
            [
                'category_id' => 8,
                'text' => 'Which singer is known as the "Queen of Soul"?',
                'correct_answer' => 295,
                'difficulty' => 1,
            ],
            //5
            [
                'category_id' => 8,
                'text' => 'What is the title of the Beatles\' last studio album?',
                'correct_answer' => 297,
                'difficulty' => 1,
            ],
            //6
            [
                'category_id' => 8,
                'text' => 'Who composed the Four Seasons?',
                'correct_answer' => 302,
                'difficulty' => 1,
            ],
            //7
            [
                'category_id' => 8,
                'text' => 'Which instrument did Louis Armstrong play?',
                'correct_answer' => 307,
                'difficulty' => 1,
            ],
            //8
            [
                'category_id' => 8,
                'text' => 'What is the stage name of Marshall Mathers?',
                'correct_answer' => 310,
                'difficulty' => 1,
            ],
            //9
            [
                'category_id' => 8,
                'text' => 'Which artist released the album "Thriller"?',
                'correct_answer' => 315,
                'difficulty' => 1,
            ],
            //10
            [
                'category_id' => 8,
                'text' => 'Who is the lead singer of the Rolling Stones?',
                'correct_answer' => 319,
                'difficulty' => 1,
            ],
            // Category-9: Technology
            //1
            [
                'category_id' => 9,
                'text' => 'Who is known as the father of the computer?',
                'correct_answer' => 321,
                'difficulty' => 1,
            ],
            //2
            [
                'category_id' => 9,
                'text' => 'Which company developed the iPhone?',
                'correct_answer' => 327,
                'difficulty' => 1,
            ],
            //3
            [
                'category_id' => 9,
                'text' => 'What does HTML stand for?',
                'correct_answer' => 331,
                'difficulty' => 1,
            ],
            //4
            [
                'category_id' => 9,
                'text' => 'Which programming language is known for its snake mascot?',
                'correct_answer' => 334,
                'difficulty' => 1,
            ],
            //5
            [
                'category_id' => 9,
                'text' => 'What does "CPU" stand for in computers?',
                'correct_answer' => 337,
                'difficulty' => 1,
            ],
            //6
            [
                'category_id' => 9,
                'text' => 'Who co-founded Microsoft?',
                'correct_answer' => 343,
                'difficulty' => 1,
            ],
            //7
            [
                'category_id' => 9,
                'text' => 'What is the main function of a router?',
                'correct_answer' => 347,
                'difficulty' => 1,
            ],
            //8
            [
                'category_id' => 9,
                'text' => 'Which social media platform is known for its 280-character limit?',
                'correct_answer' => 351,
                'difficulty' => 1,
            ],
            //9
            [
                'category_id' => 9,
                'text' => 'What does "AI" stand for?',
                'correct_answer' => 354,
                'difficulty' => 1,
            ],
            //10
            [
                'category_id' => 9,
                'text' => 'What year was the World Wide Web invented?',
                'correct_answer' => 358,
                'difficulty' => 1,
            ],
            // Category-10: Movies
            //1
            [
                'category_id' => 10,
                'text' => 'Who directed "The Godfather"?',
                'correct_answer' => 362,
                'difficulty' => 1,
            ],
            //2
            [
                'category_id' => 10,
                'text' => 'Which movie features the quote, "I\'ll be back"?',
                'correct_answer' => 366,
                'difficulty' => 1,
            ],
            //3
            [
                'category_id' => 10,
                'text' => 'Who played the Joker in "The Dark Knight"?',
                'correct_answer' => 371,
                'difficulty' => 1,
            ],
            //4
            [
                'category_id' => 10,
                'text' => 'Which movie won the first Academy Award for Best Picture?',
                'correct_answer' => 373,
                'difficulty' => 1,
            ],
            //5
            [
                'category_id' => 10,
                'text' => 'Who is the lead actor in the "Mission: Impossible" series?',
                'correct_answer' => 378,
                'difficulty' => 1,
            ],
            //6
            [
                'category_id' => 10,
                'text' => 'Which movie is based on the novel "Do Androids Dream of Electric Sheep?"',
                'correct_answer' => 382,
                'difficulty' => 1,
            ],
            //7
            [
                'category_id' => 10,
                'text' => 'Who directed "Pulp Fiction"?',
                'correct_answer' => 385,
                'difficulty' => 1,
            ],
            //8
            [
                'category_id' => 10,
                'text' => 'Which movie won the most Oscars in 1998?',
                'correct_answer' => 391,
                'difficulty' => 1,
            ],
            //9
            [
                'category_id' => 10,
                'text' => 'Who played Forrest Gump?',
                'correct_answer' => 393,
                'difficulty' => 1,
            ],
            //10
            [
                'category_id' => 10,
                'text' => 'Which animated film features a fish named Nemo?',
                'correct_answer' => 398,
                'difficulty' => 1,
            ],
            // Category-11: Food and Drink
            //1
            [
                'category_id' => 11,
                'text' => 'What is the main ingredient in guacamole?',
                'correct_answer' => 402,
                'difficulty' => 1,
            ],
            //2
            [
                'category_id' => 11,
                'text' => 'Which country is the largest producer of coffee?',
                'correct_answer' => 407,
                'difficulty' => 1,
            ],
            //3
            [
                'category_id' => 11,
                'text' => 'What type of pastry is used to make a traditional Baklava?',
                'correct_answer' => 411,
                'difficulty' => 1,
            ],
            //4
            [
                'category_id' => 11,
                'text' => 'Which fruit is known as the "king of fruits"?',
                'correct_answer' => 414,
                'difficulty' => 1,
            ],
            //5
            [
                'category_id' => 11,
                'text' => 'What is the main ingredient of hummus?',
                'correct_answer' => 418,
                'difficulty' => 1,
            ],
            //6
            [
                'category_id' => 11,
                'text' => 'What type of cheese is used in a traditional Greek salad?',
                'correct_answer' => 422,
                'difficulty' => 1,
            ],
            //7
            [
                'category_id' => 11,
                'text' => 'Which country is famous for inventing pizza?',
                'correct_answer' => 428,
                'difficulty' => 1,
            ],
            //8
            [
                'category_id' => 11,
                'text' => 'What is the alcoholic component of a margarita?',
                'correct_answer' => 431,
                'difficulty' => 1,
            ],
            //9
            [
                'category_id' => 11,
                'text' => 'Which spice is known as the most expensive by weight?',
                'correct_answer' => 433,
                'difficulty' => 1,
            ],
            //10
            [
                'category_id' => 11,
                'text' => 'What is sushi traditionally wrapped in?',
                'correct_answer' => 438,
                'difficulty' => 1,
            ],
            // Category-12: Language
            //1
            [
                'category_id' => 12,
                'text' => 'Which language has the most native speakers?',
                'correct_answer' => 443,
                'difficulty' => 1,
            ],
            //2
            [
                'category_id' => 12,
                'text' => 'What is the official language of Brazil?',
                'correct_answer' => 446,
                'difficulty' => 1,
            ],
            //3
            [
                'category_id' => 12,
                'text' => 'What is the term for a word that is similar in multiple languages?',
                'correct_answer' => 450,
                'difficulty' => 1,
            ],
            //4
            [
                'category_id' => 12,
                'text' => 'Which language is known for having a Cyrillic alphabet?',
                'correct_answer' => 455,
                'difficulty' => 1,
            ],
            //5
            [
                'category_id' => 12,
                'text' => 'What is the most spoken language in the world?',
                'correct_answer' => 458,
                'difficulty' => 1,
            ],
            //6
            [
                'category_id' => 12,
                'text' => 'What is the official language of Egypt?',
                'correct_answer' => 461,
                'difficulty' => 1,
            ],
            //7
            [
                'category_id' => 12,
                'text' => 'Which language is primarily spoken in Austria?',
                'correct_answer' => 466,
                'difficulty' => 1,
            ],
            //8
            [
                'category_id' => 12,
                'text' => 'What is the term for a language that has died out and is no longer spoken?',
                'correct_answer' => 470,
                'difficulty' => 1,
            ],
            //9
            [
                'category_id' => 12,
                'text' => 'Which language family does Spanish belong to?',
                'correct_answer' => 475,
                'difficulty' => 1,
            ],
            //10
            [
                'category_id' => 12,
                'text' => 'Which language is considered the lingua franca of international business?',
                'correct_answer' => 480,
                'difficulty' => 1,
            ],
           
        ];

        // Insert or update questions
        foreach ($questions as $questionData) {
            Question::updateOrCreate(
                ['text' => $questionData['text']], // Use text as unique identifier
                $questionData
            );
        }
    }
}