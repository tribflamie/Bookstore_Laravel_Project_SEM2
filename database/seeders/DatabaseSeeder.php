<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * using php artisan db:seed --class=DatabaseSeeder
     */
    public function run(): void
    {
        //insert categories table
        DB::table('categories')->insert([
            'categories' => 'Novel',//1
            'description' => 'A novel is a relatively long work of narrative fiction, typically written in prose and published as a book. The present English word for a long work of prose fiction derives from the Italian: novella for "new", "news", or "short story of something new", itself from the Latin: novella, a singular noun use of the neuter plural of novellus, diminutive of novus, meaning "new". Some novelists, including Nathaniel Hawthorne, Herman Melville, Ann Radcliffe, John Cowper Powys, preferred the term "romance" to describe their novels.',
            'photo' => 'images/categories/Novel.jpg'
        ]);
        DB::table('categories')->insert([
            'categories' => 'Fantasy',//2
            'description' => 'Fantasy is a genre of speculative fiction involving magical elements, typically set in a fictional universe and sometimes inspired by mythology and folklore. Its roots are in oral traditions, which then became fantasy literature and drama. From the twentieth century, it has expanded further into various media, including film, television, graphic novels, manga, animations and video games.',
            'photo' => "images/categories/Fantasy.jpg"
        ]);
        DB::table('categories')->insert([
            'categories' => 'Historical fiction',//3
            'description' => 'Historical fiction is a literary genre in which the plot takes place in a setting related to the past events, but is fictional. Although the term is commonly used as a synonym for historical fiction literature, it can also be applied to other types of narrative, including theatre, opera, cinema, and television, as well as video games and graphic novels.',
            'photo'=>'images/categories/HistoricalFiction.jpg'
        ]);
        DB::table('categories')->insert([
            'categories' => 'Family Saga',//4
            'description' => 'The family saga is a genre of literature which chronicles the lives and doings of a family or a number of related or interconnected families over a period of time. In novels (or sometimes sequences of novels) with a serious intent, this is often a thematic device used to portray particular historical events, changes of social circumstances, or the ebb and flow of fortunes from a multitude of perspectives.

            The word saga comes from Old Norse, where it meant "what is said, utterance, oral account, notification" and "(structured) narrative, story (about somebody)", and was originally borrowed into English from Old Norse by scholars in the eighteenth century to refer to the Old Norse prose narratives known as sagas',
            'photo'=>'images/categories/FamilySaga.jpg'
        ]);
        DB::table('categories')->insert([
            'categories' => 'Adventure fiction',//5
            'description' => 'Adventure fiction is a type of fiction that usually presents danger, or gives the reader a sense of excitement. Some adventure fiction also satisfies the literary definition of romance fiction.',
            'photo'=>'images/categories/AdventureFiction.jpg'
        ]);
        DB::table('categories')->insert([
            'categories' => 'Mystery',//6
            'description' => 'Mystery is a fiction genre where the nature of an event, usually a murder or other crime, remains mysterious until the end of the story. Often within a closed circle of suspects, each suspect is usually provided with a credible motive and a reasonable opportunity for committing the crime. The central character is often a detective (such as Sherlock Holmes), who eventually solves the mystery by logical deduction from facts presented to the reader. Some mystery books are non-fiction. Mystery fiction can be detective stories in which the emphasis is on the puzzle or suspense element and its logical solution such as a whodunit. Mystery fiction can be contrasted with hardboiled detective stories, which focus on action and gritty realism.',
            'photo'=>'images/categories/Mystery.jpg'
        ]);
        //insert products table
        DB::table('products')->insert([
            'categories_id' => 1,
            'name' => 'Don Quixote',
            'author' => 'Miguel de Cervantes',
            'country' => 'Habsburg Spain',
            'published' => 1605,
            'price' => 17,
            'discount' => 0.10,
            'photo' => 'images/shop/Don-Quixote.jpg',
            'description' => 'Don Quixote is a Spanish epic novel by Miguel de Cervantes. Originally published in two parts, in 1605 and 1615, its full title is The Ingenious Gentleman Don Quixote of La Mancha or, in Spanish, El ingenioso hidalgo don Quixote de la Mancha (changing in Part 2 to El ingenioso caballero don Quixote de la Mancha). A founding work of Western literature, it is often labelled as the first modern novel and one of the greatest works ever written. Don Quixote is also one of the most-translated books in the world and the best-selling novel of all time.'
        ]);
        DB::table('products')->insert([
            'categories_id' => 2,
            'name' => "Harry Potter and the Philosopher's Stone",
            'author' => 'J. K. Rowling',
            'country' => 'United Kingdom',
            'published' => 1997,
            'price' => 15.00,
            'discount' => 0.10,
            'photo' => "images/shop/Harry_Potter_and_the_Philosopher's_Stone_Book_Cover.jpg",
            'description' => "Harry Potter and the Philosopher's Stone is a 1997 fantasy novel written by British author J. K. Rowling. The first novel in the Harry Potter series and Rowling's debut novel, it follows Harry Potter, a young wizard who discovers his magical heritage on his eleventh birthday, when he receives a letter of acceptance to Hogwarts School of Witchcraft and Wizardry. Harry makes close friends and a few enemies during his first year at the school and with the help of his friends, Ron Weasley and Hermione Granger, he faces an attempted comeback by the dark wizard Lord Voldemort, who killed Harry's parents, but failed to kill Harry when he was just 15 months old.",
        ]);
        DB::table('products')->insert([
            'categories_id' => 3,
            'name' => 'A Tale of Two Cities',
            'author' => 'Charles Dickens',
            'country' => 'United Kingdom',
            'published' => 1859,
            'price' => 23,
            'discount' => 0.10,
            'photo' => 'images/shop/A Tale of Two Cities.jpg',
            'description' => 'A Tale of Two Cities is a historical novel published in 1859 by Charles Dickens, set in London and Paris before and during the French Revolution. The novel tells the story of the French Doctor Manette, his 18-year-long imprisonment in the Bastille in Paris, and his release to live in London with his daughter Lucie whom he had never met. The story is set against the conditions that led up to the French Revolution and the Reign of Terror. In the Introduction to the Encyclopedia of Adventure Fiction, critic Don DAmmassa argues that it is an adventure novel because the protagonists are in constant danger of being imprisoned or killed.'
        ]);
        DB::table('products')->insert([
            'categories_id' => 4,
            'name' => 'Dream of the Red Chamber',
            'author' => 'Cao Xueqin',
            'country' => 'Qing China',
            'published' => 1980,
            'price' => 12,
            'discount' => 0.10,
            'photo' => 'images/shop/Dream of the Red Chamber.jpg',
            'description' => 'Dream of the Red Chamber (Honglou Meng) or The Story of the Stone (Shitou Ji) is a novel composed by Cao Xueqin in the middle of the 18th century. One of the Four Great Classical Novels of Chinese literature, it is known for its psychological scope, and its observation of the worldview, aesthetics, life-styles, and social relations of 18th-century China.'
        ]);
        DB::table('products')->insert([
            'categories_id' => 2,
            'name' => 'The Hobbit',
            'author' => 'J. R. R. Tolkien',
            'country' => 'United Kingdom',
            'published' => 1937,
            'price' => 22,
            'discount' => 0.10,
            'photo' => 'images/shop/The Hobbit.jpg',
            'description' => "The Hobbit, or There and Back Again is a children's fantasy novel by English author J. R. R. Tolkien. It was published in 1937 to wide critical acclaim, being nominated for the Carnegie Medal and awarded a prize from the New York Herald Tribune for best juvenile fiction. The book is recognized as a classic in children's literature, and is one of the best-selling books of all time with over 100 million copies sold."
        ]);
        DB::table('products')->insert([
            'categories_id' => 5,
            'name' => 'She: A History of Adventure',
            'author' => 'H. Rider Haggard',
            'country' => 'United Kingdom',
            'published' => 1887,
            'price' => 16,
            'discount' => 0.10,
            'photo' => 'images/shop/She_A History of Adventure.jpg',
            'description' => 'She, subtitled A History of Adventure, is a novel by the English writer H. Rider Haggard, published in book form in 1887 following serialisation in The Graphic magazine between October 1886 and January 1887. She was extraordinarily popular upon its release and has never been out of print.

            The story is a first-person narrative which follows the journey of Horace Holly and his ward Leo Vincey to a lost kingdom in the African interior. They encounter a native people and a mysterious white queen named Ayesha who reigns as the all-powerful "She" or "She-who-must-be-obeyed". Haggard developed many of the conventions of the lost world genre which countless authors have emulated.'
        ]);
        DB::table('products')->insert([
            'categories_id' => 6,
            'name' => 'The Da Vinci Code',
            'author' => 'Dan Brown',
            'country' => 'United States',
            'published' => 2003,
            'price' => 23,
            'discount' => 0.10,
            'photo' => 'images/shop/The Da Vinci Code.jpg',
            'description' => "The Da Vinci Code is a 2003 mystery thriller novel by Dan Brown. It is Brown's second novel to include the character Robert Langdon: the first was his 2000 novel Angels & Demons. The Da Vinci Code follows symbologist Robert Langdon and cryptologist Sophie Neveu after a murder in the Louvre Museum in Paris causes them to become involved in a battle between the Priory of Sion and Opus Dei over the possibility of Jesus Christ and Mary Magdalene having had a child together."
        ]);
        DB::table('users')->insert([
            'name'=>'user1',
            'email'=>'user1@gmail.com',
            'password'=>Hash::make('12345678')
        ]);
        DB::table('users')->insert([
            'name'=>'user2',
            'email'=>'user2@gmail.com',
            'password'=>Hash::make('12345678')
        ]);
        //insert feedbacks table
        DB::table('feedbacks')->insert([
            'user_id' => 1,
            'products_id' => 1,
            'rating' => 5,
            'description' => 'This is so cool! i love it'
        ]);
        DB::table('feedbacks')->insert([
            'user_id' => 2,
            'products_id' => 1,
            'rating' => 4,
            'description' => 'This is not good in my expectations'
        ]);
        DB::table('coupons')->insert([
            'code'=>'newyear2023',
            'value'=>0.25,
            'description'=>'new year code',
            'exp_date'=>'2023/3/3',
        ]);
        DB::table('coupons')->insert([
            'code'=>'christmas2022',
            'value'=>0.4,
            'description'=>'christmas 2022 code',
            'exp_date'=>'2022/12/30',
        ]);
        DB::table('coupons')->insert([
            'code'=>'abc',
            'value'=>0.4,
            'description'=>'test code',
            'exp_date'=>'2023/12/30',
        ]);
        DB::table('coupons')->insert([
            'code'=>'lmao',
            'value'=>0.24,
            'description'=>'test code 2',
            'exp_date'=>'2023/4/30',
        ]);
    }
}
