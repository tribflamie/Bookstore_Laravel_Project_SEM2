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
            'categories' => 'Speculative fiction',//4
            'description' => 'Speculative fiction is a category of fiction that, in its broadest sense, encompasses the genres that depart from reality,[1] such as in the context of supernatural, futuristic, and other imaginative realms.[2] This umbrella category includes, but is not limited to, science fiction, fantasy, horror, superhero fiction, alternate history, utopian and dystopian fiction, and supernatural fiction, as well as combinations thereof (for example, science fantasy).[3] The term has been used with a variety of meanings for works of literature.',
            'photo'=>'images/categories/Speculative fiction.jpg'
        ]);
        DB::table('categories')->insert([
            'categories' => 'Tragedy',//5
            'description' => 'Tragedy (from the Greek: τραγῳδία, tragōidia) is a genre of drama based on human suffering and, mainly, the terrible or sorrowful events that befall a main character. Traditionally, the intention of tragedy is to invoke an accompanying catharsis, or a "pain [that] awakens pleasure", for the audience.While many cultures have developed forms that provoke this paradoxical response, the term tragedy often refers to a specific tradition of drama that has played a unique and important role historically in the self-definition of Western civilization. That tradition has been multiple and discontinuous, yet the term has often been used to invoke a powerful effect of cultural identity and historical continuity—"the Greeks and the Elizabethans, in one cultural form; Hellenes and Christians, in a common activity," as Raymond Williams puts it.',
            'photo'=>'images/categories/Tragedy.jpg'
        ]);
        DB::table('categories')->insert([
            'categories' => 'Mystery',//6
            'description' => 'Mystery is a fiction genre where the nature of an event, usually a murder or other crime, remains mysterious until the end of the story. Often within a closed circle of suspects, each suspect is usually provided with a credible motive and a reasonable opportunity for committing the crime. The central character is often a detective (such as Sherlock Holmes), who eventually solves the mystery by logical deduction from facts presented to the reader. Some mystery books are non-fiction. Mystery fiction can be detective stories in which the emphasis is on the puzzle or suspense element and its logical solution such as a whodunit. Mystery fiction can be contrasted with hardboiled detective stories, which focus on action and gritty realism.',
            'photo'=>'images/categories/Mystery.jpg'
        ]);
        DB::table('categories')->insert([
            'categories' => 'Coming-of-age',//7
            'description' => 'In genre studies, a coming-of-age story is a genre of literature, theatre, film, and video game that focuses on the growth of a protagonist from childhood to adulthood, or "coming of age". Coming-of-age stories tend to emphasize dialogue or internal monologue over action, and are often set in the past. The subjects of coming-of-age stories are typically teenagers. The Bildungsroman is a specific subgenre of coming-of-age story.

            The plot points of coming of age stories are usually emotional changes within the character(s) in question.',
            'photo'=>'images/categories/Coming-of-age.jpg'
        ]);
        DB::table('categories')->insert([
            'categories' => 'Romance novel',//8
            'description' => 'A romance novel or romantic novel generally refers to a type of genre fiction novel which places its primary focus on the relationship and romantic love between two people, and usually has an "emotionally satisfying and optimistic ending." Precursors include authors of literary fiction, such as Samuel Richardson, Jane Austen, and Charlotte Brontë.',
            'photo'=>'images/categories/Romance.jpg'
        ]);
        DB::table('categories')->insert([
            'categories' => 'Philosophy of education',//9
            'description' => 'The philosophy of education is the branch of applied philosophy that investigates the nature of education as well as its aims and problems. It includes the examination of educational theories, the presuppositions present in them, and the arguments for and against them. It is an interdisciplinary field that draws inspiration from various disciplines both within and outside philosophy, like ethics, political philosophy, psychology, and sociology. These connections are also reflected in the significant and wide-ranging influence the philosophy of education has had on other disciplines. Many of its theories focus specifically on education in schools but it also encompasses other forms of education. Its theories are often divided into descriptive and normative theories. Descriptive theories provide a value-neutral account of what education is and how to understand its fundamental concepts, in contrast to normative theories, which investigate how education should be practiced or what is the right form of education.',
            'photo'=>'images/categories/Philosophy of education.jpg'
        ]);
        DB::table('categories')->insert([
            'categories' => 'Magic Realism',//10
            'description' => 'Magic realism or magical realism is a style of literary fiction and art. It paints a realistic view of the world while also adding magical elements, often blurring the lines between fantasy and reality. Magic realism often refers to literature in particular, with magical or supernatural phenomena presented in an otherwise real-world or mundane setting, commonly found in novels and dramatic performances. Despite including certain magic elements, it is generally considered to be a different genre from fantasy because magical realism uses a substantial amount of realistic detail and employs magical elements to make a point about reality, while fantasy stories are often separated from reality.Magical realism is often seen as an amalgamation of real and magical elements that produces a more inclusive writing form than either literary realism or fantasy.',
            'photo'=>'images/categories/MagicRealism.jpg'
        ]);
        DB::table('categories')->insert([
            'categories' => 'Southern Gothic',//11
            'description' => 'Southern Gothic is an artistic subgenre of fiction, country music, film and television that are heavily influenced by Gothic elements and the American South. Common themes of Southern Gothic include storytelling of deeply flawed, disturbing or eccentric characters who may be involved in hoodoo,decayed or derelict settings, grotesque situations, and other sinister events relating to or stemming from poverty, alienation, crime, or violence.',
            'photo'=>'images/categories/Southern Gothic.jpg'
        ]);
        DB::table('categories')->insert([
            'categories' => 'Novel of manner',//12
            'description' => 'The novel of manners is a work of fiction that re-creates a social world, conveying with detailed observation the complex of customs, values, and mores of a stratified society. The behavioural conventions (manners) of the society dominate the plot of the story, and characters are differentiated by the degree to which they meet or fail to meet the uniform standard of ideal social behaviour, as established by society.',
            'photo'=>'images/categories/NovelOfManner.jpg'
        ]);
        DB::table('categories')->insert([
            'categories' => 'Popular science',//13
            'description' => 'Popular science (also called pop-science or popsci) is an interpretation of science intended for a general audience. While science journalism focuses on recent scientific developments, popular science is more broad-ranging. It may be written by professional science journalists or by scientists themselves. It is presented in many forms, including books, film and television documentaries, magazine articles, and web pages.',
            'photo'=>'images/categories/Popular_science.jpg'
        ]);
        DB::table('categories')->insert([
            'categories' => 'Detective fiction',//14
            'description' => 'Detective fiction is a subgenre of crime fiction and mystery fiction in which an investigator or a detective—whether professional, amateur or retired—investigates a crime, often murder. The detective genre began around the same time as speculative fiction and other genre fiction in the mid-nineteenth century and has remained extremely popular, particularly in novels.[1] Some of the most famous heroes of detective fiction include C. Auguste Dupin, Sherlock Holmes, and Hercule Poirot. Juvenile stories featuring The Hardy Boys, Nancy Drew, and The Boxcar Children have also remained in print for several decades.',
            'photo'=>'images/categories/DetectiveFiction.jpg'
        ]);
        DB::table('categories')->insert([
            'categories' => 'Novella',//15
            'description' => 'A novella is a narrative prose fiction whose length is shorter than most novels, but longer than most short stories. The English word novella derives from the Italian novella meaning a short story related to true (or apparently so) facts.',
            'photo'=>'images/categories/Novel.jpg'
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
            'photo' => 'images/shop/A-Tale-of-Two-Cities.jpg',
            'description' => 'A Tale of Two Cities is a historical novel published in 1859 by Charles Dickens, set in London and Paris before and during the French Revolution. The novel tells the story of the French Doctor Manette, his 18-year-long imprisonment in the Bastille in Paris, and his release to live in London with his daughter Lucie whom he had never met. The story is set against the conditions that led up to the French Revolution and the Reign of Terror. In the Introduction to the Encyclopedia of Adventure Fiction, critic Don DAmmassa argues that it is an adventure novel because the protagonists are in constant danger of being imprisoned or killed.'
        ]);
        DB::table('products')->insert([
            'categories_id' => 2,
            'name' => 'The Hobbit',
            'author' => 'J. R. R. Tolkien',
            'country' => 'United Kingdom',
            'published' => 1937,
            'price' => 22,
            'discount' => 0.10,
            'photo' => 'images/shop/The-Hobbit.jpg',
            'description' => "The Hobbit, or There and Back Again is a children's fantasy novel by English author J. R. R. Tolkien. It was published in 1937 to wide critical acclaim, being nominated for the Carnegie Medal and awarded a prize from the New York Herald Tribune for best juvenile fiction. The book is recognized as a classic in children's literature, and is one of the best-selling books of all time with over 100 million copies sold."
        ]);
        DB::table('products')->insert([
            'categories_id' => 6,
            'name' => 'The Da Vinci Code',
            'author' => 'Dan Brown',
            'country' => 'United States',
            'published' => 2003,
            'price' => 23,
            'discount' => 0.10,
            'photo' => 'images/shop/The-Da-Vinci-Code.jpg',
            'description' => "The Da Vinci Code is a 2003 mystery thriller novel by Dan Brown. It is Brown's second novel to include the character Robert Langdon: the first was his 2000 novel Angels & Demons. The Da Vinci Code follows symbologist Robert Langdon and cryptologist Sophie Neveu after a murder in the Louvre Museum in Paris causes them to become involved in a battle between the Priory of Sion and Opus Dei over the possibility of Jesus Christ and Mary Magdalene having had a child together."
        ]);
        DB::table('products')->insert([
            'categories_id' => 7,
            'name' => 'The Catcher in the Rye',
            'author' => 'J. D. Salinger',
            'country' => 'United States',
            'published' => 1951,
            'price' => 33,
            'discount' => 0.10,
            'photo' => 'images/shop/The-Catcher-in-the-Rye.jpg',
            'description' => "The Catcher in the Rye is an American novel by J. D. Salinger that was partially published in serial form 1945 to 1946 before being novelized in 1951. Originally intended for adults, it is often read by adolescents for its themes of angst and alienation, and as a critique of superficiality in society. The novel also deals with complex issues of innocence, identity, belonging, loss, connection, sex, and depression. The main character, Holden Caulfield, has become an icon for teenage rebellion. Caulfield, nearly of age, gives his opinion on a wide variety of topics as he narrates his recent life events."
        ]);
        DB::table('products')->insert([
            'categories_id' => 10,
            'name' => 'One Hundred Years of Solitude',
            'author' => 'Gabriel García Márquez',
            'country' => 'Colombia',
            'published' => 1970,
            'price' => 27,
            'discount' => 0.10,
            'photo' => 'images/shop/One-Hundred-Years-of-Solitude.jpg',
            'description' => "One Hundred Years of Solitude (Spanish: Cien años de soledad, American Spanish: [sjen 'aɲoz ðe sole'ðað]) is a 1967 novel by Colombian author Gabriel García Márquez that tells the multi-generational story of the Buendía family, whose patriarch, José Arcadio Buendía, founded the fictitious town of Macondo. The novel is often cited as one of the supreme achievements in world literature."
        ]);
        DB::table('products')->insert([
            'categories_id' => 11,
            'name' => 'To Kill a Mockingbird',
            'author' => 'Harper Lee',
            'country' => 'United States',
            'published' => 1960,
            'price' => 23,
            'discount' => 0.10,
            'photo' => 'images/shop/To-Kill-a-Mockingbird.jpg',
            'description' => "To Kill a Mockingbird is a novel by the American author Harper Lee. It was published in 1960 and was instantly successful. In the United States, it is widely read in high schools and middle schools. To Kill a Mockingbird has become a classic of modern American literature, winning the Pulitzer Prize. The plot and characters are loosely based on Lee's observations of her family, her neighbors and an event that occurred near her hometown of Monroeville, Alabama, in 1936, when she was ten."
        ]);
        DB::table('products')->insert([
            'categories_id' => 12,
            'name' => 'Emma ',
            'author' => 'Jane Austen',
            'country' => 'United Kingdom',
            'published' => 1816,
            'price' => 40,
            'discount' => 0.10,
            'photo' => 'images/shop/Emma.jpg',
            'description' => "Emma is a novel written by Jane Austen. It is set in the fictional country village of Highbury and the surrounding estates of Hartfield, Randalls and Donwell Abbey, and involves the relationships among people from a small number of families. The novel was first published in December 1815, with its title page listing a publication date of 1816. As in her other novels, Austen explores the concerns and difficulties of genteel women living in Georgian-Regency England. Emma is a comedy of manners."
        ]);
        DB::table('products')->insert([
            'categories_id' => 8,
            'name' => 'Pride and Prejudice',
            'author' => 'Jane Austen',
            'country' => 'United Kingdom',
            'published' => 1813,
            'price' => 25,
            'discount' => 0.10,
            'photo' => 'images/shop/Pride-and-Prejudice.jpg',
            'description' => "Pride and Prejudice is an 1813 novel of manners by Jane Austen. The novel follows the character development of Elizabeth Bennet, the dynamic protagonist of the book who learns about the repercussions of hasty judgments and comes to appreciate the difference between superficial goodness and actual goodness."
        ]);
        DB::table('products')->insert([
            'categories_id' => 9,
            'name' => 'Excellent Sheep',
            'author' => 'William Deresiewicz',
            'country' => 'United States',
            'published' => 2015,
            'price' => 55,
            'discount' => 0.10,
            'photo' => 'images/shop/Excellent-Sheep.jpg',
            'description' => "Excellent Sheep: The Miseducation of the American Elite and the Way to a Meaningful Life is a 2015 book of social criticism on the role of elite colleges in American society written by William Deresiewicz and published by Free Press.Deresiewicz addresses the pressure of succeeding under which students are put by their parents and by society, considering more particularly the ones that are planning to attend Ivy League universities."
        ]);
        DB::table('products')->insert([
            'categories_id' => 2,
            'name' => 'The War of the Jewels',
            'author' => 'J. R. R. Tolkien',
            'country' => 'United Kingdom',
            'published' => 1994,
            'price' => 33,
            'discount' => 0.10,
            'photo' => 'images/shop/The-War-of-the-Jewels.jpg',
            'description' => "The War of the Jewels (1994) is the 11th volume of Christopher Tolkien's series The History of Middle-earth, analysing the unpublished manuscripts of his father J. R. R. Tolkien. It is the second of two volumes—Morgoth's Ring being the first—to explore the later 1951 Silmarillion drafts (those written after the completion of The Lord of the Rings)."
        ]);
        DB::table('products')->insert([
            'categories_id' => 15,
            'name' => 'The Little Prince',
            'author' => 'Antoine de Saint-Exupéry',
            'country' => 'France',
            'published' => 1945,
            'price' => 39,
            'discount' => 0.10,
            'photo' => 'images/shop/The-Little-Prince.jpg',
            'description' => "The Little Prince (French: Le Petit Prince, pronounced [lə p(ə)ti pʁɛ̃s]) is a novella written and illustrated by French aristocrat, writer, and military pilot Antoine de Saint-Exupéry. It was first published in English and French in the United States by Reynal & Hitchcock in April 1943 and was published posthumously in France following liberation; Saint-Exupéry's works had been banned by the Vichy Regime. The story follows a young prince who visits various planets in space, including Earth, and addresses themes of loneliness, friendship, love, and loss. Despite its style as a children's book, The Little Prince makes observations about life, adults, and human nature."
        ]);
        DB::table('products')->insert([
            'categories_id' => 2,
            'name' => 'The Priory of the Orange Tree',
            'author' => 'Samantha Shannon',
            'country' => 'United Kingdom',
            'published' => 2019,
            'price' => 19,
            'discount' => 0.10,
            'photo' => 'images/shop/The-Priory-of-the-Orange-Tree.jpg',
            'description' => "The Priory of the Orange Tree is a 2019 fantasy novel by writer Samantha Shannon. The novel was published on 26 February 2019 by Bloomsbury Publishing. Shannon describes the novel as a 'feminist retelling of Saint George and the Dragon.'

            In April 2022, Shannon announced A Day of Fallen Night, a 'standalone prequel,' to The Priory of the Orange Tree. The novel was published on February 28, 2023 by Bloomsbury Publishing."
        ]);
        DB::table('products')->insert([
            'categories_id' => 5,
            'name' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'country' => 'United States',
            'published' => 1925,
            'price' => 36,
            'discount' => 0.10,
            'photo' => 'images/shop/The-Great-Gatsby.jpg',
            'description' => "The Great Gatsby is a 1925 novel by American writer F. Scott Fitzgerald. Set in the Jazz Age on Long Island, near New York City, the novel depicts first-person narrator Nick Carraway's interactions with mysterious millionaire Jay Gatsby and Gatsby's obsession to reunite with his former lover, Daisy Buchanan.

            The novel was inspired by a youthful romance Fitzgerald had with socialite Ginevra King, and the riotous parties he attended on Long Island's North Shore in 1922. Following a move to the French Riviera, Fitzgerald completed a rough draft of the novel in 1924. He submitted it to editor Maxwell Perkins, who persuaded Fitzgerald to revise the work over the following winter. After making revisions, Fitzgerald was satisfied with the text, but remained ambivalent about the book's title and considered several alternatives. Painter Francis Cugat's cover art greatly impressed Fitzgerald, and he incorporated its imagery into the novel."
        ]);
        DB::table('products')->insert([
            'categories_id' => 2,
            'name' => 'The Peoples of Middle-earth',
            'author' => 'J. R. R. Tolkien',
            'country' => 'United Kingdom',
            'published' => 1996,
            'price' => 29,
            'discount' => 0.10,
            'photo' => 'images/shop/The-Peoples-of-Middle-earth.jpg',
            'description' => "The Peoples of Middle-earth (1996) is the 12th and final volume of The History of Middle-earth, edited by Christopher Tolkien from the unpublished manuscripts of his father J. R. R. Tolkien. Some characters (including Anairë, the wife of Fingolfin) only appear here, as do a few other works that did not fit anywhere else."
        ]);
        DB::table('products')->insert([
            'categories_id' => 13,
            'name' => 'The Future of the Mind',
            'author' => 'J. R. R. Tolkien',
            'country' => 'United Kingdom',
            'published' => 1996,
            'price' => 29,
            'discount' => 0.10,
            'photo' => 'images/shop/The-Future-of-the-Mind.jpg',
            'description' => "The Future of the Mind: The Scientific Quest to Understand, Enhance, and Empower the Mind is a popular science book by the futurist and physicist Michio Kaku. The book was initially published on February 25, 2014 by Doubleday.

            In 2015 the book was translated into Hebrew."
        ]);
        DB::table('products')->insert([
            'categories_id' => 2,
            'name' => 'The Fall Of Gondolin',
            'author' => 'J. R. R. Tolkien',
            'country' => 'United Kingdom',
            'published' => 2018,
            'price' => 35,
            'discount' => 0.10,
            'photo' => 'images/shop/The-Fall-Of-Gondolin.jpg',
            'description' => "J. R. R. Tolkien's The Fall of Gondolin is one of the stories which formed the basis for a section in his posthumously-published work, The Silmarillion, with a version later appearing in The Book of Lost Tales. In the narrative, Gondolin was founded by King Turgon in the First Age; the city was carefully hidden, enduring for centuries before being betrayed and destroyed.

            A stand-alone, book-length version of the story edited by Christopher Tolkien was published in 2018. The Fall of Gondolin is one of three stories from the First Age of Middle-earth that was published as a stand-alone book: the other two are Beren and Lúthien and The Children of Húrin."
        ]);
        DB::table('products')->insert([
            'categories_id' => 14,
            'name' => 'The Hound of the Baskervilles',
            'author' => 'Arthur Conan Doyle',
            'country' => 'United Kingdom',
            'published' => 1902,
            'price' => 45,
            'discount' => 0.10,
            'photo' => 'images/shop/The-Hound-of-the-Baskervilles.jpg',
            'description' => "The Hound of the Baskervilles is the third of the four crime novels by British writer Arthur Conan Doyle featuring the detective Sherlock Holmes. Originally serialised in The Strand Magazine from August 1901 to April 1902, it is set in 1889 largely on Dartmoor in Devon in England's West Country and tells the story of an attempted murder inspired by the legend of a fearsome, diabolical hound of supernatural origin. Holmes and Watson investigate the case. This was the first appearance of Holmes since his apparent death in 'The Final Problem', and the success of The Hound of the Baskervilles led to the character's eventual revival."
        ]);
        DB::table('products')->insert([
            'categories_id' => 2,
            'name' => 'The Heroes of Olympus',
            'author' => 'Rick Riordan',
            'country' => 'United States',
            'published' => 2010,
            'price' => 57,
            'discount' => 0.10,
            'photo' => 'images/shop/The-Heroes-of-Olympus.jpg',
            'description' => "The Heroes of Olympus is a pentalogy of fantasy-adventure novels written by American author Rick Riordan. The novels detail a conflict between Greek demigods, Roman demigods, and Gaia (Roman name Terra). In the fourth book of the series, there is also a semi-large fight against Tartarus, which, in Greek mythology, was the darkest and deepest point of the Underworld."
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
            'users_id' => 1,
            'products_id' => 1,
            'rating' => 5,
            'description' => 'This is so cool! i love it'
        ]);
        DB::table('feedbacks')->insert([
            'users_id' => 2,
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
