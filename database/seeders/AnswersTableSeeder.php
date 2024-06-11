<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Answer;
class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // protected $fillable = ['question_id', 'text', 'is_correct']; create 4 answers for each question
        // Category: Geography Question 1
        Answer::create([
            "question_id" => 1,
            "text" => "United States 1",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 1,
            "text" => "India",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 1,
            "text" => "China",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 1,
            "text" => "Indonesia",
            "is_correct" => false,
        ]);
        // Category: Geography Question 2  1. Sydney 2. Melbourne 3. Canberra * 4. Brisbane
        Answer::create([
            "question_id" => 2,
            "text" => "Sydney",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 2,
            "text" => "Melbourne",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 2,
            "text" => "Canberra",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 2,
            "text" => "Brisbane",
            "is_correct" => false,
        ]);
        // Category: Geography Question 3  1. Amazon 2. Nile * 3. Yangtze 4. Mississippi
        Answer::create([
            "question_id" => 3,
            "text" => "Amazon",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 3,
            "text" => "Nile",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 3,
            "text" => "Yangtze",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 3,
            "text" => "Mississippi",
            "is_correct" => false,
        ]);
        // Category: Geography Question 4  1. Monaco 2. San Marino 3. Vatican City * 4. Liechtenstein
        Answer::create([
            "question_id" => 4,
            "text" => "Monaco",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 4,
            "text" => "San Marino",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 4,
            "text" => "Vatican City",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 4,
            "text" => "Liechtenstein",
            "is_correct" => false,
        ]);
        // Category: Geography Question 5   1. Arabian Desert 2. Gobi Desert 3. Sahara Desert *   4. Kalahari Desert
        Answer::create([
            "question_id" => 5,
            "text" => "Arabian Desert",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 5,
            "text" => "Gobi Desert",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 5,
            "text" => "Sahara Desert",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 5,
            "text" => "Kalahari Desert",
            "is_correct" => false,
        ]);
        // Category: Geography Question 6  1. K2 2. Kangchenjunga   3. Lhotse   4. Mount Everest *
        Answer::create([
            "question_id" => 6,
            "text" => "K2",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 6,
            "text" => "Kangchenjunga",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 6,
            "text" => "Lhotse",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 6,
            "text" => "Mount Everest",
            "is_correct" => true,
        ]);
        // Category: Geography Question 7     1. Asia 2. Africa *  3. Europe 4. South America
        Answer::create([
            "question_id" => 7,
            "text" => "Asia",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 7,
            "text" => "Africa",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 7,
            "text" => "Europe",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 7,
            "text" => "South America",
            "is_correct" => false,
        ]);
        // Category: Geography Question 8  1. Osaka 2. Kyoto 3. Tokyo *   4. Nagoya
        Answer::create([
            "question_id" => 8,
            "text" => "Osaka",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 8,
            "text" => "Kyoto",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 8,
            "text" => "Tokyo",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 8,
            "text" => "Nagoya",
            "is_correct" => false,
        ]);
        // Category: Geography Question 9  1. Mediterranean Sea 2. Caribbean Sea 3. South China Sea  4. Philippine Sea *
        Answer::create([
            "question_id" => 9,
            "text" => "Mediterranean Sea",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 9,
            "text" => "Caribbean Sea",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 9,
            "text" => "South China Sea",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 9,
            "text" => "Philippine Sea",
            "is_correct" => true,
        ]);
        // Category: Geography Question 10  1. Australia  2. Canada *  3. Indonesia  4. Russia
        Answer::create([
            "question_id" => 10,
            "text" => "Australia",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 10,
            "text" => "Canada",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 10,
            "text" => "Indonesia",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 10,
            "text" => "Russia",
            "is_correct" => false,
        ]);
        // Category: History Question 1   1. Thomas Jefferson  2. John Adams 3. George Washington   4. James Madison
        Answer::create([
            "question_id" => 11,
            "text" => "Thomas Jefferson",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 11,
            "text" => "John Adams",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 11,
            "text" => "George Washington",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 11,
            "text" => "James Madison",
            "is_correct" => false,
        ]);
        // Category: History Question 2 1. 1905 2. 1912 * 3. 1918 4. 1920
        Answer::create([
            "question_id" => 12,
            "text" => "1905",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 12,
            "text" => "1912",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 12,
            "text" => "1918",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 12,
            "text" => "1920",
            "is_correct" => false,
        ]);
        // Category: History Question 3   1. Ferdinand Magellan 2. Vasco da Gama 3. Christopher Columbus * 4. Hernán Cortés
        Answer::create([
            "question_id" => 13,
            "text" => "Ferdinand Magellan",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 13,
            "text" => "Vasco da Gama",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 13,
            "text" => "Christopher Columbus",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 13,
            "text" => "Hernán Cortés",
            "is_correct" => false,
        ]);
        // Category: History Question 4     1. Greek Empire 2. Egyptian Empire 3. Roman Empire *   4. Ottoman Empire
        Answer::create([
            "question_id" => 14,
            "text" => "Greek Empire",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 14,
            "text" => "Egyptian Empire",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 14,
            "text" => "Roman Empire",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 14,
            "text" => "Ottoman Empire",
            "is_correct" => false,
        ]);
        // Category: History Question 5     1. 1943  2. 1944   3. 1945 *   4. 1946
        Answer::create([
            "question_id" => 15,
            "text" => "1943",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 15,
            "text" => "1944",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 15,
            "text" => "1945",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 15,
            "text" => "1946",
            "is_correct" => false,
        ]);
        // Category: History Question 6    1. Amelia Earhart *  2. Bessie Coleman  3. Harriet Quimby  4. Jacqueline Cochran
        Answer::create([
            "question_id" => 16,
            "text" => "Amelia Earhart",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 16,
            "text" => "Bessie Coleman",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 16,
            "text" => "Harriet Quimby",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 16,
            "text" => "Jacqueline Cochran",
            "is_correct" => false,
        ]);
        // Category: History Question 7   1. American Civil War 2. World War I * 3. World War II  4. Korean War
        Answer::create([
            "question_id" => 17,
            "text" => "American Civil War",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 17,
            "text" => "World War I",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 17,
            "text" => "World War II",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 17,
            "text" => "Korean War",
            "is_correct" => false,
        ]);
        // Category: History Question 8     1. Winston Churchill * 2. Neville Chamberlain 3. Clement Attlee 4. Anthony Eden
        Answer::create([
            "question_id" => 18,
            "text" => "Winston Churchill",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 18,
            "text" => "Neville Chamberlain",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 18,
            "text" => "Clement Attlee",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 18,
            "text" => "Anthony Eden",
            "is_correct" => false,
        ]);
        // Category: History Question 9     1. Mayan 2. Aztec   3. Incan   4. Egyptian *
        Answer::create([
            "question_id" => 19,
            "text" => "Mayan",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 19,
            "text" => "Aztec",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 19,
            "text" => "Incan",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 19,
            "text" => "Egyptian",
            "is_correct" => true,
        ]);
        // Category: History Question 10    1. Marie Antoinette  2. Joan of Arc *  3. Eleanor of Aquitaine    4. Catherine de' Medici
        Answer::create([
            "question_id" => 20,
            "text" => "Marie Antoinette",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 20,
            "text" => "Joan of Arc",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 20,
            "text" => "Eleanor of Aquitaine",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 20,
            "text" => 'Catherine de\' Medici',
            "is_correct" => false,
        ]);
        // Category: Science Question 1    1. H2  2. O2 3. CO2 4. H2O *
        Answer::create([
            "question_id" => 21,
            "text" => "H2",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 21,
            "text" => "O2",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 21,
            "text" => "CO2",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 21,
            "text" => "H2O",
            "is_correct" => true,
        ]);
        // Category: Science Question 2       1. Earth  2. Mars *   3. Jupiter   4. Venus
        Answer::create([
            "question_id" => 22,
            "text" => "Earth",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 22,
            "text" => "Mars",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 22,
            "text" => "Jupiter",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 22,
            "text" => "Venus",
            "is_correct" => false,
        ]);
        // Category: Science Question 3    1. 299,792 km/s * 2. 150,000 km/s  3. 500,000 km/s   4. 1,000,000 km/s
        Answer::create([
            "question_id" => 23,
            "text" => "299,792 km/s",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 23,
            "text" => "150,000 km/s",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 23,
            "text" => "500,000 km/s",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 23,
            "text" => "1,000,000 km/s",
            "is_correct" => false,
        ]);
        // Category: Science Question 4       1. Isaac Newton 2. Galileo Galilei   3. Albert Einstein *   4. Niels Bohr
        Answer::create([
            "question_id" => 24,
            "text" => "Isaac Newton",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 24,
            "text" => "Galileo Galilei",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 24,
            "text" => "Albert Einstein",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 24,
            "text" => "Niels Bohr",
            "is_correct" => false,
        ]);
        // Category: Science Question 5       1. Oxygen 2. Nitrogen *   3. Carbon Dioxide   4. Hydrogen
        Answer::create([
            "question_id" => 25,
            "text" => "Oxygen",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 25,
            "text" => "Nitrogen",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 25,
            "text" => "Carbon Dioxide",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 25,
            "text" => "Hydrogen",
            "is_correct" => false,
        ]);
        // Category: Science Question 6      1. Nucleus  2. Ribosome   3. Mitochondrion *   4. Chloroplast
        Answer::create([
            "question_id" => 26,
            "text" => "Nucleus",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 26,
            "text" => "Ribosome",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 26,
            "text" => "Mitochondrion",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 26,
            "text" => "Chloroplast",
            "is_correct" => false,
        ]);
        // Category: Science Question 7        1. Helium   2. Hydrogen *   3. Lithium   4. Carbon
        Answer::create([
            "question_id" => 27,
            "text" => "Helium",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 27,
            "text" => "Hydrogen",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 27,
            "text" => "Lithium",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 27,
            "text" => "Carbon",
            "is_correct" => false,
        ]);
        // Category: Science Question 8      1. 90°C   2. 95°C   3. 100°C *   4. 105°C
        Answer::create([
            "question_id" => 28,
            "text" => "90°C",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 28,
            "text" => "95°C",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 28,
            "text" => "100°C",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 28,
            "text" => "105°C",
            "is_correct" => false,
        ]);
        // Category: Science Question 9         1. Isaac Newton *   2. Albert Einstein   3. Galileo Galilei   4. James Clerk Maxwell
        Answer::create([
            "question_id" => 29,
            "text" => "Isaac Newton",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 29,
            "text" => "Albert Einstein",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 29,
            "text" => "Galileo Galilei",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 29,
            "text" => "James Clerk Maxwell",
            "is_correct" => false,
        ]);
        // Category: Science Question 10          1. Earth    2. Mars    3. Jupiter *    4. Saturn
        Answer::create([
            "question_id" => 30,
            "text" => "Earth",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 30,
            "text" => "Mars",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 30,
            "text" => "Jupiter",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 30,
            "text" => "Saturn",
            "is_correct" => false,
        ]);
        // Category: Literature Question 1     1. Charlotte Brontë   2. Jane Austen *   3. Emily Brontë   4. Mary Shelley
        Answer::create([
            "question_id" => 31,
            "text" => "Charlotte Brontë",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 31,
            "text" => "Jane Austen",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 31,
            "text" => "Emily Brontë",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 31,
            "text" => "Mary Shelley",
            "is_correct" => false,
        ]);
        // Category: Literature Question 2        1. Agatha Christie   2. Arthur Conan Doyle *   3. Edgar Allan Poe   4. J.K. Rowling
        Answer::create([
            "question_id" => 32,
            "text" => "Agatha Christie",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 32,
            "text" => "Arthur Conan Doyle",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 32,
            "text" => "Edgar Allan Poe",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 32,
            "text" => "J.K. Rowling",
            "is_correct" => false,
        ]);
        // Category: Literature Question 3       1. Harry Potter and the Chamber of Secrets   2. Harry Potter and the Goblet of Fire   3. Harry Potter and the Philosopher's Stone *   4. Harry Potter and the Half-Blood Prince
        Answer::create([
            "question_id" => 33,
            "text" => "Harry Potter and the Chamber of Secrets",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 33,
            "text" => "Harry Potter and the Goblet of Fire",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 33,
            "text" => 'Harry Potter and the Philosopher\'s Stone',
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 33,
            "text" => "Harry Potter and the Half-Blood Prince",
            "is_correct" => false,
        ]);
        // Category: Literature Question 4          1. Harper Lee *   2. F. Scott Fitzgerald   3. Ernest Hemingway   4. John Steinbeck
        Answer::create([
            "question_id" => 34,
            "text" => "Harper Lee",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 34,
            "text" => "F. Scott Fitzgerald",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 34,
            "text" => "Ernest Hemingway",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 34,
            "text" => "John Steinbeck",
            "is_correct" => false,
        ]);
        // Category: Literature Question 5      1. Mark Twain *   2. Lewis Carroll   3. George Orwell   4. O. Henry
        Answer::create([
            "question_id" => 35,
            "text" => "Mark Twain",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 35,
            "text" => "Lewis Carroll",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 35,
            "text" => "George Orwell",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 35,
            "text" => "O. Henry",
            "is_correct" => false,
        ]);
        // Category: Literature Question 6       1. Aldous Huxley   2. George Orwell *   3. Ray Bradbury   4. J.D. Salinger
        Answer::create([
            "question_id" => 36,
            "text" => "Aldous Huxley",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 36,
            "text" => "George Orwell",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 36,
            "text" => "Ray Bradbury",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 36,
            "text" => "J.D. Salinger",
            "is_correct" => false,
        ]);
        // Category: Literature Question 7   1. William Faulkner   2. J.D. Salinger *   3. John Steinbeck   4. Jack Kerouac
        Answer::create([
            "question_id" => 37,
            "text" => "William Faulkner",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 37,
            "text" => "J.D. Salinger",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 37,
            "text" => "John Steinbeck",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 37,
            "text" => "Jack Kerouac",
            "is_correct" => false,
        ]);
        // Category: Literature Question 8     1. The Aeneid   2. Beowulf   3. The Divine Comedy   4. The Iliad *
        Answer::create([
            "question_id" => 38,
            "text" => "The Aeneid",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 38,
            "text" => "Beowulf",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 38,
            "text" => "The Divine Comedy",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 38,
            "text" => "The Iliad",
            "is_correct" => true,
        ]);
        // Category: Literature Question 9   1. Nathaniel Hawthorne   2. Herman Melville *   3. Charles Dickens   4. Joseph Conrad
        Answer::create([
            "question_id" => 39,
            "text" => "Nathaniel Hawthorne",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 39,
            "text" => "Herman Melville",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 39,
            "text" => "Charles Dickens",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 39,
            "text" => "Joseph Conrad",
            "is_correct" => false,
        ]);
        // Category: Literature Question 10   1. Sense and Sensibility    2. Emma    3. Persuasion *    4. Mansfield Park
        Answer::create([
            "question_id" => 40,
            "text" => "Sense and Sensibility",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 40,
            "text" => "Emma",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 40,
            "text" => "Persuasion",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 40,
            "text" => "Mansfield Park",
            "is_correct" => false,
        ]);
        // Category: Sports Question 1      1. Brazil   2. Germany   3. France *   4. Argentina
        Answer::create([
            "question_id" => 41,
            "text" => "Brazil",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 41,
            "text" => "Germany",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 41,
            "text" => "France",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 41,
            "text" => "Argentina",
            "is_correct" => false,
        ]);
        // Category: Sports Question 2  1. Barry Bonds *   2. Babe Ruth   3. Hank Aaron   4. Mark McGwire
        Answer::create([
            "question_id" => 42,
            "text" => "Barry Bonds",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 42,
            "text" => "Babe Ruth",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 42,
            "text" => "Hank Aaron",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 42,
            "text" => "Mark McGwire",
            "is_correct" => false,
        ]);
        // Category: Sports Question 3    1. Roger Federer   2. Rafael Nadal   3. Novak Djokovic *   4. Pete Sampras
        Answer::create([
            "question_id" => 43,
            "text" => "Roger Federer",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 43,
            "text" => "Rafael Nadal",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 43,
            "text" => "Novak Djokovic",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 43,
            "text" => "Pete Sampras",
            "is_correct" => false,
        ]);
        // Category: Sports Question 4      1. Basketball   2. Baseball   3. American Football *   4. Ice Hockey
        Answer::create([
            "question_id" => 44,
            "text" => "Basketball",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 44,
            "text" => "Baseball",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 44,
            "text" => "American Football",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 44,
            "text" => "Ice Hockey",
            "is_correct" => false,
        ]);
        // Category: Sports Question 5    1. France   2. United States *   3. Japan   4. United Kingdom
        Answer::create([
            "question_id" => 45,
            "text" => "France",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 45,
            "text" => "United States",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 45,
            "text" => "Japan",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 45,
            "text" => "United Kingdom",
            "is_correct" => false,
        ]);
        // Category: Sports Question 6      1. Chris Froome   2. Greg LeMond   3. Lance Armstrong *   4. Bernard Hinault
        Answer::create([
            "question_id" => 46,
            "text" => "Chris Froome",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 46,
            "text" => "Greg LeMond",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 46,
            "text" => "Lance Armstrong",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 46,
            "text" => "Bernard Hinault",
            "is_correct" => false,
        ]);
        // Category: Sports Question 7    1. 1993 *   2. 1995   3. 1997   4. 1999
        Answer::create([
            "question_id" => 47,
            "text" => "1993",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 47,
            "text" => "1995",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 47,
            "text" => "1997",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 47,
            "text" => "1999",
            "is_correct" => false,
        ]);
        // Category: Sports Question 8       1. India   2. West Indies   3. Australia *   4. England
        Answer::create([
            "question_id" => 48,
            "text" => "India",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 48,
            "text" => "West Indies",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 48,
            "text" => "Australia",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 48,
            "text" => "England",
            "is_correct" => false,
        ]);
        // Category: Sports Question 9    1. Mario Lemieux   2. Gordie Howe   3. Bobby Orr   4. Wayne Gretzky *
        Answer::create([
            "question_id" => 49,
            "text" => "Mario Lemieux",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 49,
            "text" => "Gordie Howe",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 49,
            "text" => "Bobby Orr",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 49,
            "text" => "Wayne Gretzky",
            "is_correct" => true,
        ]);
        // Category: Sports Question 10      1. The Open Championship    2. The U.S. Open    3. The PGA Championship    4. The Masters *
        Answer::create([
            "question_id" => 50,
            "text" => "The Open Championship",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 50,
            "text" => "The U.S. Open",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 50,
            "text" => "The PGA Championship",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 50,
            "text" => "The Masters",
            "is_correct" => true,
        ]);
        // Category: Entertainment Question 1  1. 1917   2. Joker   3. Parasite *   4. Once Upon a Time in Hollywood
        Answer::create([
            "question_id" => 51,
            "text" => "1917",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 51,
            "text" => "Joker",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 51,
            "text" => "Parasite",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 51,
            "text" => "Once Upon a Time in Hollywood",
            "is_correct" => false,
        ]);
        // Category: Entertainment Question 2 1. Brad Pitt   2. Leonardo DiCaprio *   3. Matt Damon   4. Tom Cruise
        Answer::create([
            "question_id" => 52,
            "text" => "Brad Pitt",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 52,
            "text" => "Leonardo DiCaprio",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 52,
            "text" => "Matt Damon",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 52,
            "text" => "Tom Cruise",
            "is_correct" => false,
        ]);
        // Category: Entertainment Question 3    1. Avatar   2. Avengers: Endgame *   3. Titanic   4. Star Wars: The Force Awakens
        Answer::create([
            "question_id" => 53,
            "text" => "Avatar",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 53,
            "text" => "Avengers: Endgame",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 53,
            "text" => "Titanic",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 53,
            "text" => "Star Wars: The Force Awakens",
            "is_correct" => false,
        ]);
        // Category: Entertainment Question 4   1. J.R.R. Tolkien   2. George R.R. Martin   3. J.K. Rowling *   4. Suzanne Collins
        Answer::create([
            "question_id" => 54,
            "text" => "J.R.R. Tolkien",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 54,
            "text" => "George R.R. Martin",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 54,
            "text" => "J.K. Rowling",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 54,
            "text" => "Suzanne Collins",
            "is_correct" => false,
        ]);
        // Category: Entertainment Question 5   1. The Sopranos   2. Breaking Bad *   3. Game of Thrones  4. Mad Men
        Answer::create([
            "question_id" => 55,
            "text" => "The Sopranos",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 55,
            "text" => "Breaking Bad",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 55,
            "text" => "Game of Thrones",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 55,
            "text" => "Mad Men",
            "is_correct" => false,
        ]);
        // Category: Entertainment Question 6 1. Steven Spielberg   2. Martin Scorsese   3. Christopher Nolan * 4. Quentin Tarantino
        Answer::create([
            "question_id" => 56,
            "text" => "Steven Spielberg",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 56,
            "text" => "Martin Scorsese",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 56,
            "text" => "Christopher Nolan",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 56,
            "text" => "Quentin Tarantino",
            "is_correct" => false,
        ]);
        // Category: Entertainment Question 7    1. Elijah Wood   2. Daniel Radcliffe *  3. Rupert Grint  4. Tom Felton
        Answer::create([
            "question_id" => 57,
            "text" => "Elijah Wood",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 57,
            "text" => "Daniel Radcliffe",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 57,
            "text" => "Rupert Grint",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 57,
            "text" => "Tom Felton",
            "is_correct" => false,
        ]);
        // Category: Entertainment Question 8   1. The Rolling Stones   2. The Beatles *   3. Led Zeppelin   4. Pink Floyd
        Answer::create([
            "question_id" => 58,
            "text" => "The Rolling Stones",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 58,
            "text" => "The Beatles",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 58,
            "text" => "Led Zeppelin",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 58,
            "text" => "Pink Floyd",
            "is_correct" => false,
        ]);
        // Category: Entertainment Question 9    1. Family Guy   2. The Simpsons *   3. South Park   4. SpongeBob SquarePants
        Answer::create([
            "question_id" => 59,
            "text" => "Family Guy",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 59,
            "text" => "The Simpsons",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 59,
            "text" => "South Park",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 59,
            "text" => "SpongeBob SquarePants",
            "is_correct" => false,
        ]);
        // Category: Entertainment Question 10   1. Tim Allen    2. Tom Hanks *    3. Billy Crystal    4. Robin Williams
        Answer::create([
            "question_id" => 60,
            "text" => "Tim Allen",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 60,
            "text" => "Tom Hanks",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 60,
            "text" => "Billy Crystal",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 60,
            "text" => "Robin Williams",
            "is_correct" => false,
        ]);
        // Category: Art Question 1   1. Vincent van Gogh   2. Pablo Picasso   3. Claude Monet   4. Leonardo da Vinci *
        Answer::create([
            "question_id" => 61,
            "text" => "Vincent van Gogh",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 61,
            "text" => "Pablo Picasso",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 61,
            "text" => "Claude Monet",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 61,
            "text" => "Leonardo da Vinci",
            "is_correct" => true,
        ]);
        // Category: Art Question 2    1. Cubism   2. Surrealism *   3. Impressionism   4. Realism
        Answer::create([
            "question_id" => 62,
            "text" => "Cubism",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 62,
            "text" => "Surrealism",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 62,
            "text" => "Impressionism",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 62,
            "text" => "Realism",
            "is_correct" => false,
        ]);
        // Category: Art Question 3    1. Starry Night   2. The Persistence of Memory   3. The Scream *   4. Girl with a Pearl Earring
        Answer::create([
            "question_id" => 63,
            "text" => "Starry Night",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 63,
            "text" => "The Persistence of Memory",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 63,
            "text" => "The Scream",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 63,
            "text" => "Girl with a Pearl Earring",
            "is_correct" => false,
        ]);
        // Category: Art Question 4 1. Auguste Rodin   2. Michelangelo *   3. Donatello   4. Gian Lorenzo Bernini
        Answer::create([
            "question_id" => 64,
            "text" => "Auguste Rodin",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 64,
            "text" => "Michelangelo",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 64,
            "text" => "Donatello",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 64,
            "text" => "Gian Lorenzo Bernini",
            "is_correct" => false,
        ]);
        // Category: Art Question 5    1. London   2. Rome   3. Paris *   4. Berlin
        Answer::create([
            "question_id" => 65,
            "text" => "London",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 65,
            "text" => "Rome",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 65,
            "text" => "Paris",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 65,
            "text" => "Berlin",
            "is_correct" => false,
        ]);
        // Category: Art Question 6     1. Fresco *   2. Tempera   3. Impasto   4. Encaustic
        Answer::create([
            "question_id" => 66,
            "text" => "Fresco",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 66,
            "text" => "Tempera",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 66,
            "text" => "Impasto",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 66,
            "text" => "Encaustic",
            "is_correct" => false,
        ]);
        // Category: Art Question 7  1. Vincent van Gogh *   2. Paul Cézanne   3. Paul Gauguin   4. Georges Seurat
        Answer::create([
            "question_id" => 67,
            "text" => "Vincent van Gogh",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 67,
            "text" => "Paul Cézanne",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 67,
            "text" => "Paul Gauguin",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 67,
            "text" => "Georges Seurat",
            "is_correct" => false,
        ]);
        // Category: Art Question 8 1. Jan Vermeer   2. Hieronymus Bosch   3. Rembrandt van Rijn *  4. Pieter Bruegel the Elder
        Answer::create([
            "question_id" => 68,
            "text" => "Jan Vermeer",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 68,
            "text" => "Hieronymus Bosch",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 68,
            "text" => "Rembrandt van Rijn",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 68,
            "text" => "Pieter Bruegel the Elder",
            "is_correct" => false,
        ]);
        // Category: Art Question 9  1. Les Demoiselles d'Avignon   2. Guernica *   3. The Weeping Woman   4. The Old Guitarist
        Answer::create([
            "question_id" => 69,
            "text" => 'Les Demoiselles d\'Avignon',
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 69,
            "text" => "Guernica",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 69,
            "text" => "The Weeping Woman",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 69,
            "text" => "The Old Guitarist",
            "is_correct" => false,
        ]);
        // Category: Art Question 10 1. Baroque    2. Renaissance *    3. Rococo    4. Romanticism
        Answer::create([
            "question_id" => 70,
            "text" => "Baroque",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 70,
            "text" => "Renaissance",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 70,
            "text" => "Rococo",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 70,
            "text" => "Romanticism",
            "is_correct" => false,
        ]);
        // Category: Music Question 1 1. Mozart   2. Beethoven *   3. Bach   4. Tchaikovsky
        Answer::create([
            "question_id" => 71,
            "text" => "Mozart",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 71,
            "text" => "Beethoven",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 71,
            "text" => "Bach",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 71,
            "text" => "Tchaikovsky",
            "is_correct" => false,
        ]);
        // Category: Music Question 2 1. Led Zeppelin   2. The Beatles   3. Queen * 4. Pink Floyd
        Answer::create([
            "question_id" => 72,
            "text" => "Led Zeppelin",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 72,
            "text" => "The Beatles",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 72,
            "text" => "Queen",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 72,
            "text" => "Pink Floyd",
            "is_correct" => false,
        ]);
        // Category: Music Question 3 1. Elvis Presley   2. Michael Jackson *   3. Prince   4. David Bowie
        Answer::create([
            "question_id" => 73,
            "text" => "Elvis Presley",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 73,
            "text" => "Michael Jackson",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 73,
            "text" => "Prince",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 73,
            "text" => "David Bowie",
            "is_correct" => false,
        ]);
        // Category: Music Question 4 1. Tina Turner   2. Diana Ross   3. Aretha Franklin *   4. Whitney Houston
        Answer::create([
            "question_id" => 74,
            "text" => "Tina Turner",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 74,
            "text" => "Diana Ross",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 74,
            "text" => "Aretha Franklin",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 74,
            "text" => "Whitney Houston",
            "is_correct" => false,
        ]);
        // Category: Music Question 5 1. Let It Be *   2. Abbey Road   3. Revolver   4. Rubber Soul
        Answer::create([
            "question_id" => 75,
            "text" => "Let It Be",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 75,
            "text" => "Abbey Road",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 75,
            "text" => "Revolver",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 75,
            "text" => "Rubber Soul",
            "is_correct" => false,
        ]);
        // Category: Music Question 6  1. Johann Sebastian Bach   2. Antonio Vivaldi * 3. Wolfgang Amadeus Mozart 4. Ludwig van Beethoven
        Answer::create([
            "question_id" => 76,
            "text" => "Johann Sebastian Bach",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 76,
            "text" => "Antonio Vivaldi",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 76,
            "text" => "Wolfgang Amadeus Mozart",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 76,
            "text" => "Ludwig van Beethoven",
            "is_correct" => false,
        ]);
        // Category: Music Question 7 1. Saxophone   2. Trombone   3. Trumpet *   4. Piano
        Answer::create([
            "question_id" => 77,
            "text" => "Saxophone",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 77,
            "text" => "Trombone",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 77,
            "text" => "Trumpet",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 77,
            "text" => "Piano",
            "is_correct" => false,
        ]);
        // Category: Music Question 8 1. Dr. Dre   2. Eminem *   3. Snoop Dogg   4. Ice Cube
        Answer::create([
            "question_id" => 78,
            "text" => "Dr. Dre",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 78,
            "text" => "Eminem",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 78,
            "text" => "Snoop Dogg",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 78,
            "text" => "Ice Cube",
            "is_correct" => false,
        ]);
        // Category: Music Question 9 1. Prince   2. Madonna   3. Michael Jackson *   4. David Bowie
        Answer::create([
            "question_id" => 79,
            "text" => "Prince",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 79,
            "text" => "Madonna",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 79,
            "text" => "Michael Jackson",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 79,
            "text" => "David Bowie",
            "is_correct" => false,
        ]);
        // Category: Music Question 10 1. Roger Daltrey    2. Freddie Mercury    3. Mick Jagger *    4. Steven Tyler
        Answer::create([
            "question_id" => 80,
            "text" => "Roger Daltrey",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 80,
            "text" => "Freddie Mercury",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 80,
            "text" => "Mick Jagger",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 80,
            "text" => "Steven Tyler",
            "is_correct" => false,
        ]);
        // Category: Technology Question 1 1. Charles Babbage *   2. Alan Turing   3. John von Neumann   4. Bill Gates
        Answer::create([
            "question_id" => 81,
            "text" => "Charles Babbage",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 81,
            "text" => "Alan Turing",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 81,
            "text" => "John von Neumann",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 81,
            "text" => "Bill Gates",
            "is_correct" => false,
        ]);
        // Category: Technology Question 2 1. Google   2. Microsoft   3. Apple *   4. Samsung
        Answer::create([
            "question_id" => 82,
            "text" => "Google",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 82,
            "text" => "Microsoft",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 82,
            "text" => "Apple",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 82,
            "text" => "Samsung",
            "is_correct" => false,
        ]);
        // Category: Technology Question 3 1. HyperText Machine Language   2. HighText Markup Language   3. HyperText Markup Language *   4. Hyperlink Text Markup Language
        Answer::create([
            "question_id" => 83,
            "text" => "HyperText Machine Language",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 83,
            "text" => "HighText Markup Language",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 83,
            "text" => "HyperText Markup Language",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 83,
            "text" => "Hyperlink Text Markup Language",
            "is_correct" => false,
        ]);
        // Category: Technology Question 4  1. Java   2. Python *   3. Ruby   4. PHP
        Answer::create([
            "question_id" => 84,
            "text" => "Java",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 84,
            "text" => "Python",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 84,
            "text" => "Ruby",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 84,
            "text" => "PHP",
            "is_correct" => false,
        ]);
        // Category: Technology Question 5   1. Central Processing Unit * 2. Computer Processing Unit  3. Central Performance Unit 4. Computer Performance Unit
        Answer::create([
            "question_id" => 85,
            "text" => "Central Processing Unit",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 85,
            "text" => "Computer Processing Unit",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 85,
            "text" => "Central Performance Unit",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 85,
            "text" => "Computer Performance Unit",
            "is_correct" => false,
        ]);
        // Category: Technology Question 6  1. Steve Jobs and Steve Wozniak   2. Bill Gates and Steve Ballmer   3. Bill Gates and Paul Allen *   4. Bill Gates and Mark Zuckerberg
        Answer::create([
            "question_id" => 86,
            "text" => "Steve Jobs and Steve Wozniak",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 86,
            "text" => "Bill Gates and Steve Ballmer",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 86,
            "text" => "Bill Gates and Paul Allen",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 86,
            "text" => "Bill Gates and Mark Zuckerberg",
            "is_correct" => false,
        ]);
        // Category: Technology Question 7 1. To connect to the internet   2. To store data   3. To route data packets between networks *   4. To process data
        Answer::create([
            "question_id" => 87,
            "text" => "To connect to the internet",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 87,
            "text" => "To store data",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 87,
            "text" => "To route data packets between networks",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 87,
            "text" => "To process data",
            "is_correct" => false,
        ]);
        // Category: Technology Question 8 1. Facebook   2. Instagram   3. Twitter *   4. Snapchat
        Answer::create([
            "question_id" => 88,
            "text" => "Facebook",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 88,
            "text" => "Instagram",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 88,
            "text" => "Twitter",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 88,
            "text" => "Snapchat",
            "is_correct" => false,
        ]);
        // Category: Technology Question 9 1. Automated Intelligence   2. Artificial Intelligence *   3. Advanced Intelligence   4. Augmented Intelligence
        Answer::create([
            "question_id" => 89,
            "text" => "Automated Intelligence",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 89,
            "text" => "Artificial Intelligence",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 89,
            "text" => "Advanced Intelligence",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 89,
            "text" => "Augmented Intelligence",
            "is_correct" => false,
        ]);
        // Category: Technology Question 10 1. 1985    2. 1989 *    3. 1992    4. 1995
        Answer::create([
            "question_id" => 90,
            "text" => "1985",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 90,
            "text" => "1989",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 90,
            "text" => "1992",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 90,
            "text" => "1995",
            "is_correct" => false,
        ]);
        // Category: Movies Question 1    1. Steven Spielberg   2. Francis Ford Coppola *   3. Martin Scorsese   4. Quentin Tarantino
        Answer::create([
            "question_id" => 91,
            "text" => "Steven Spielberg",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 91,
            "text" => "Francis Ford Coppola",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 91,
            "text" => "Martin Scorsese",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 91,
            "text" => "Quentin Tarantino",
            "is_correct" => false,
        ]);
        // Category: Movies Question 2 1. Rambo   2. Terminator *   3. Predator   4. Commando
        Answer::create([
            "question_id" => 92,
            "text" => "Rambo",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 92,
            "text" => "Terminator",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 92,
            "text" => "Predator",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 92,
            "text" => "Commando",
            "is_correct" => false,
        ]);
        // Category: Movies Question 3 1. Jack Nicholson   2. Jared Leto   3. Heath Ledger *   4. Joaquin Phoenix
        Answer::create([
            "question_id" => 93,
            "text" => "Jack Nicholson",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 93,
            "text" => "Jared Leto",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 93,
            "text" => "Heath Ledger",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 93,
            "text" => "Joaquin Phoenix",
            "is_correct" => false,
        ]);
        // Category: Movies Question 4  1. Wings *   2. The Jazz Singer   3. Sunrise   4. Metropolis
        Answer::create([
            "question_id" => 94,
            "text" => "Wings",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 94,
            "text" => "The Jazz Singer",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 94,
            "text" => "Sunrise",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 94,
            "text" => "Metropolis",
            "is_correct" => false,
        ]);
        // Category: Movies Question 5 1. Matt Damon   2. Tom Cruise *   3. Daniel Craig   4. Leonardo DiCaprio
        Answer::create([
            "question_id" => 95,
            "text" => "Matt Damon",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 95,
            "text" => "Tom Cruise",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 95,
            "text" => "Daniel Craig",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 95,
            "text" => "Leonardo DiCaprio",
            "is_correct" => false,
        ]);
        // Category: Movies Question 6  1. Minority Report   2. Blade Runner *   3. The Matrix   4. Total Recall
        Answer::create([
            "question_id" => 96,
            "text" => "Minority Report",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 96,
            "text" => "Blade Runner",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 96,
            "text" => "The Matrix",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 96,
            "text" => "Total Recall",
            "is_correct" => false,
        ]);
        // Category: Movies Question 7 1. Quentin Tarantino *   2. Martin Scorsese   3. Francis Ford Coppola   4. Steven Spielberg
        Answer::create([
            "question_id" => 97,
            "text" => "Quentin Tarantino",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 97,
            "text" => "Martin Scorsese",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 97,
            "text" => "Francis Ford Coppola",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 97,
            "text" => "Steven Spielberg",
            "is_correct" => false,
        ]);
        // Category: Movies Question 8 1. Saving Private Ryan   2. Life Is Beautiful   3. Shakespeare in Love *   4. The Thin Red Line
        Answer::create([
            "question_id" => 98,
            "text" => "Saving Private Ryan",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 98,
            "text" => "Life Is Beautiful",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 98,
            "text" => "Shakespeare in Love",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 98,
            "text" => "The Thin Red Line",
            "is_correct" => false,
        ]);
        // Category: Movies Question 9  1. Tom Hanks *   2. Robin Williams   3. Jim Carrey   4. Mel Gibson
        Answer::create([
            "question_id" => 99,
            "text" => "Tom Hanks",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 99,
            "text" => "Robin Williams",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 99,
            "text" => "Jim Carrey",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 99,
            "text" => "Mel Gibson",
            "is_correct" => false,
        ]);
        // Category: Movies Question 10 1. Shark Tale    2. Finding Nemo *    3. The Little Mermaid    4. A Bug's Life
        Answer::create([
            "question_id" => 100,
            "text" => "Shark Tale",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 100,
            "text" => "Finding Nemo",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 100,
            "text" => "The Little Mermaid",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 100,
            "text" => 'A Bug\'s Life',
            "is_correct" => false,
        ]);
        // Category: Food and Drink Question 1    1. Tomato   2. Avocado *   3. Onion   4. Lime
        Answer::create([
            "question_id" => 101,
            "text" => "Tomato",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 101,
            "text" => "Avocado",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 101,
            "text" => "Onion",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 101,
            "text" => "Lime",
            "is_correct" => false,
        ]);
        // Category: Food and Drink Question 2  1. Colombia   2. Vietnam   3. Brazil *   4. Ethiopia
        Answer::create([
            "question_id" => 102,
            "text" => "Colombia",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 102,
            "text" => "Vietnam",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 102,
            "text" => "Brazil",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 102,
            "text" => "Ethiopia",
            "is_correct" => false,
        ]);
        // Category: Food and Drink Question 3    1. Puff Pastry   2. Shortcrust Pastry   3. Filo Pastry *   4. Choux Pastry
        Answer::create([
            "question_id" => 103,
            "text" => "Puff Pastry",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 103,
            "text" => "Shortcrust Pastry",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 103,
            "text" => "Filo Pastry",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 103,
            "text" => "Choux Pastry",
            "is_correct" => false,
        ]);
        // Category: Food and Drink Question 4    1. Apple   2. Mango *   3. Banana   4. Pineapple
        Answer::create([
            "question_id" => 104,
            "text" => "Apple",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 104,
            "text" => "Mango",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 104,
            "text" => "Banana",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 104,
            "text" => "Pineapple",
            "is_correct" => false,
        ]);
        // Category: Food and Drink Question 5  1. Lentils   2. Chickpeas *   3. Peas   4. Beans
        Answer::create([
            "question_id" => 105,
            "text" => "Lentils",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 105,
            "text" => "Chickpeas",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 105,
            "text" => "Peas",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 105,
            "text" => "Beans",
            "is_correct" => false,
        ]);
        // Category: Food and Drink Question 6 1. Cheddar   2. Feta *   3. Brie   4. Gouda
        Answer::create([
            "question_id" => 106,
            "text" => "Cheddar",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 106,
            "text" => "Feta",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 106,
            "text" => "Brie",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 106,
            "text" => "Gouda",
            "is_correct" => false,
        ]);
        // Category: Food and Drink Question 7  1. Greece   2. Spain   3. France   4. Italy *
        Answer::create([
            "question_id" => 107,
            "text" => "Greece",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 107,
            "text" => "Spain",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 107,
            "text" => "France",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 107,
            "text" => "Italy",
            "is_correct" => true,
        ]);
        // Category: Food and Drink Question 8 1. Vodka   2. Rum   3. Tequila *   4. Gin
        Answer::create([
            "question_id" => 108,
            "text" => "Vodka",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 108,
            "text" => "Rum",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 108,
            "text" => "Tequila",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 108,
            "text" => "Gin",
            "is_correct" => false,
        ]);
        // Category: Food and Drink Question 9 1. Saffron *   2. Vanilla   3. Cinnamon   4. Cardamom
        Answer::create([
            "question_id" => 109,
            "text" => "Saffron",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 109,
            "text" => "Vanilla",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 109,
            "text" => "Cinnamon",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 109,
            "text" => "Cardamom",
            "is_correct" => false,
        ]);
        // Category: Food and Drink Question 10 1. Rice Paper    2. Nori (Seaweed) *    3. Lettuce    4. Cabbage
        Answer::create([
            "question_id" => 110,
            "text" => "Rice Paper",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 110,
            "text" => "Nori (Seaweed)",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 110,
            "text" => "Lettuce",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 110,
            "text" => "Cabbage",
            "is_correct" => false,
        ]);
        // Category: Language Question 1 1. English   2. Spanish   3. Mandarin Chinese *   4. Hindi
        Answer::create([
            "question_id" => 111,
            "text" => "English",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 111,
            "text" => "Spanish",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 111,
            "text" => "Mandarin Chinese",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 111,
            "text" => "Hindi",
            "is_correct" => false,
        ]);
        // Category: Language Question 2 1. Spanish   2. Portuguese *   3. French   4. Italian
        Answer::create([
            "question_id" => 112,
            "text" => "Spanish",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 112,
            "text" => "Portuguese",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 112,
            "text" => "French",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 112,
            "text" => "Italian",
            "is_correct" => false,
        ]);
        // Category: Language Question 3  1. Homophone   2. Cognate *   3. Antonym   4. Synonym
        Answer::create([
            "question_id" => 113,
            "text" => "Homophone",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 113,
            "text" => "Cognate",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 113,
            "text" => "Antonym",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 113,
            "text" => "Synonym",
            "is_correct" => false,
        ]);
        // Category: Language Question 4   1. Greek   2. Hebrew   3. Russian *   4. Arabic
        Answer::create([
            "question_id" => 114,
            "text" => "Greek",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 114,
            "text" => "Hebrew",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 114,
            "text" => "Russian",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 114,
            "text" => "Arabic",
            "is_correct" => false,
        ]);
        // Category: Language Question 5 1. English   2. Mandarin Chinese *   3. Spanish   4. Hindi
        Answer::create([
            "question_id" => 115,
            "text" => "English",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 115,
            "text" => "Mandarin Chinese",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 115,
            "text" => "Spanish",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 115,
            "text" => "Hindi",
            "is_correct" => false,
        ]);
        // Category: Language Question 6   1. Arabic *   2. English   3. French   4. Hebrew
        Answer::create([
            "question_id" => 116,
            "text" => "Arabic",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 116,
            "text" => "English",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 116,
            "text" => "French",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 116,
            "text" => "Hebrew",
            "is_correct" => false,
        ]);
        // Category: Language Question 7 1. French   2. German *   3. Dutch   4. Italian
        Answer::create([
            "question_id" => 117,
            "text" => "French",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 117,
            "text" => "German",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 117,
            "text" => "Dutch",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 117,
            "text" => "Italian",
            "is_correct" => false,
        ]);
        // Category: Language Question 8 1. Ancient Language   2. Dead Language *   3. Extinct Language   4. Obsolete Language
        Answer::create([
            "question_id" => 118,
            "text" => "Ancient Language",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 118,
            "text" => "Dead Language",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 118,
            "text" => "Extinct Language",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 118,
            "text" => "Obsolete Language",
            "is_correct" => false,
        ]);
        // Category: Language Question 9 1. Germanic   2. Slavic   3. Romance *   4. Celtic
        Answer::create([
            "question_id" => 119,
            "text" => "Germanic",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 119,
            "text" => "Slavic",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 119,
            "text" => "Romance",
            "is_correct" => true,
        ]);
        Answer::create([
            "question_id" => 119,
            "text" => "Celtic",
            "is_correct" => false,
        ]);
        // Category: Language Question 10 1. Spanish    2. Mandarin    3. French    4. English *
        Answer::create([
            "question_id" => 120,
            "text" => "Spanish",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 120,
            "text" => "Mandarin",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 120,
            "text" => "French",
            "is_correct" => false,
        ]);
        Answer::create([
            "question_id" => 120,
            "text" => "English",
            "is_correct" => true,
        ]);
    }
}
