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
        //1.novel
        DB::table('categories')->insert([
            'categories' => 'Novel',//1
            'description' => 'A novel is a relatively long work of narrative fiction, typically written in prose and published as a book. The present English word for a long work of prose fiction derives from the Italian: novella for "new", "news", or "short story of something new", itself from the Latin: novella, a singular noun use of the neuter plural of novellus, diminutive of novus, meaning "new". Some novelists, including Nathaniel Hawthorne, Herman Melville, Ann Radcliffe, John Cowper Powys, preferred the term "romance" to describe their novels.',
            'photo' => 'images/categories/Novel.jpg'
        ]);
        //2.fantasy
        DB::table('categories')->insert([
            'categories' => 'Fantasy',//2
            'description' => 'Fantasy is a genre of speculative fiction involving magical elements, typically set in a fictional universe and sometimes inspired by mythology and folklore. Its roots are in oral traditions, which then became fantasy literature and drama. From the twentieth century, it has expanded further into various media, including film, television, graphic novels, manga, animations and video games.',
            'photo' => "images/categories/Fantasy.jpg"
        ]);
        //3.Historical fiction
        DB::table('categories')->insert([
            'categories' => 'Historical fiction',//3
            'description' => 'Historical fiction is a literary genre in which the plot takes place in a setting related to the past events, but is fictional. Although the term is commonly used as a synonym for historical fiction literature, it can also be applied to other types of narrative, including theatre, opera, cinema, and television, as well as video games and graphic novels.',
            'photo'=>'images/categories/HistoricalFiction.jpg'
        ]);
        //4.Speculative fiction
        DB::table('categories')->insert([
            'categories' => 'Speculative fiction',//4
            'description' => 'Speculative fiction is a category of fiction that, in its broadest sense, encompasses the genres that depart from reality,[1] such as in the context of supernatural, futuristic, and other imaginative realms.[2] This umbrella category includes, but is not limited to, science fiction, fantasy, horror, superhero fiction, alternate history, utopian and dystopian fiction, and supernatural fiction, as well as combinations thereof (for example, science fantasy).[3] The term has been used with a variety of meanings for works of literature.',
            'photo'=>'images/categories/Speculative fiction.jpg'
        ]);
        //5.Tragedy
        DB::table('categories')->insert([
            'categories' => 'Tragedy',//5
            'description' => 'Tragedy (from the Greek: τραγῳδία, tragōidia) is a genre of drama based on human suffering and, mainly, the terrible or sorrowful events that befall a main character. Traditionally, the intention of tragedy is to invoke an accompanying catharsis, or a "pain [that] awakens pleasure", for the audience.While many cultures have developed forms that provoke this paradoxical response, the term tragedy often refers to a specific tradition of drama that has played a unique and important role historically in the self-definition of Western civilization. That tradition has been multiple and discontinuous, yet the term has often been used to invoke a powerful effect of cultural identity and historical continuity—"the Greeks and the Elizabethans, in one cultural form; Hellenes and Christians, in a common activity," as Raymond Williams puts it.',
            'photo'=>'images/categories/Tragedy.jpg'
        ]);
        //6.Mystery
        DB::table('categories')->insert([
            'categories' => 'Mystery',//6
            'description' => 'Mystery is a fiction genre where the nature of an event, usually a murder or other crime, remains mysterious until the end of the story. Often within a closed circle of suspects, each suspect is usually provided with a credible motive and a reasonable opportunity for committing the crime. The central character is often a detective (such as Sherlock Holmes), who eventually solves the mystery by logical deduction from facts presented to the reader. Some mystery books are non-fiction. Mystery fiction can be detective stories in which the emphasis is on the puzzle or suspense element and its logical solution such as a whodunit. Mystery fiction can be contrasted with hardboiled detective stories, which focus on action and gritty realism.',
            'photo'=>'images/categories/Mystery.jpg'
        ]);
        //7.Coming-of-age
        DB::table('categories')->insert([
            'categories' => 'Coming-of-age',//7
            'description' => 'In genre studies, a coming-of-age story is a genre of literature, theatre, film, and video game that focuses on the growth of a protagonist from childhood to adulthood, or "coming of age". Coming-of-age stories tend to emphasize dialogue or internal monologue over action, and are often set in the past. The subjects of coming-of-age stories are typically teenagers. The Bildungsroman is a specific subgenre of coming-of-age story.

            The plot points of coming of age stories are usually emotional changes within the character(s) in question.',
            'photo'=>'images/categories/Coming-of-age.jpg'
        ]);
        //8.Romance novel
        DB::table('categories')->insert([
            'categories' => 'Romance novel',//8
            'description' => 'A romance novel or romantic novel generally refers to a type of genre fiction novel which places its primary focus on the relationship and romantic love between two people, and usually has an "emotionally satisfying and optimistic ending." Precursors include authors of literary fiction, such as Samuel Richardson, Jane Austen, and Charlotte Brontë.',
            'photo'=>'images/categories/Romance.jpg'
        ]);
        //9.Philosophy of education
        DB::table('categories')->insert([
            'categories' => 'Philosophy of education',//9
            'description' => 'The philosophy of education is the branch of applied philosophy that investigates the nature of education as well as its aims and problems. It includes the examination of educational theories, the presuppositions present in them, and the arguments for and against them. It is an interdisciplinary field that draws inspiration from various disciplines both within and outside philosophy, like ethics, political philosophy, psychology, and sociology. These connections are also reflected in the significant and wide-ranging influence the philosophy of education has had on other disciplines. Many of its theories focus specifically on education in schools but it also encompasses other forms of education. Its theories are often divided into descriptive and normative theories. Descriptive theories provide a value-neutral account of what education is and how to understand its fundamental concepts, in contrast to normative theories, which investigate how education should be practiced or what is the right form of education.',
            'photo'=>'images/categories/Philosophy of education.jpg'
        ]);
        //10.Magic Realism
        DB::table('categories')->insert([
            'categories' => 'Magic Realism',//10
            'description' => 'Magic realism or magical realism is a style of literary fiction and art. It paints a realistic view of the world while also adding magical elements, often blurring the lines between fantasy and reality. Magic realism often refers to literature in particular, with magical or supernatural phenomena presented in an otherwise real-world or mundane setting, commonly found in novels and dramatic performances. Despite including certain magic elements, it is generally considered to be a different genre from fantasy because magical realism uses a substantial amount of realistic detail and employs magical elements to make a point about reality, while fantasy stories are often separated from reality.Magical realism is often seen as an amalgamation of real and magical elements that produces a more inclusive writing form than either literary realism or fantasy.',
            'photo'=>'images/categories/MagicRealism.jpg'
        ]);
        //11.Southern Gothic
        DB::table('categories')->insert([
            'categories' => 'Southern Gothic',//11
            'description' => 'Southern Gothic is an artistic subgenre of fiction, country music, film and television that are heavily influenced by Gothic elements and the American South. Common themes of Southern Gothic include storytelling of deeply flawed, disturbing or eccentric characters who may be involved in hoodoo,decayed or derelict settings, grotesque situations, and other sinister events relating to or stemming from poverty, alienation, crime, or violence.',
            'photo'=>'images/categories/Southern Gothic.jpg'
        ]);
        //12.Novel of manner
        DB::table('categories')->insert([
            'categories' => 'Novel of manner',//12
            'description' => 'The novel of manners is a work of fiction that re-creates a social world, conveying with detailed observation the complex of customs, values, and mores of a stratified society. The behavioural conventions (manners) of the society dominate the plot of the story, and characters are differentiated by the degree to which they meet or fail to meet the uniform standard of ideal social behaviour, as established by society.',
            'photo'=>'images/categories/NovelOfManner.jpg'
        ]);
        //13.Popular science
        DB::table('categories')->insert([
            'categories' => 'Popular science',//13
            'description' => 'Popular science (also called pop-science or popsci) is an interpretation of science intended for a general audience. While science journalism focuses on recent scientific developments, popular science is more broad-ranging. It may be written by professional science journalists or by scientists themselves. It is presented in many forms, including books, film and television documentaries, magazine articles, and web pages.',
            'photo'=>'images/categories/Popular_science.jpg'
        ]);
        //14.Detective fiction
        DB::table('categories')->insert([
            'categories' => 'Detective fiction',//14
            'description' => 'Detective fiction is a subgenre of crime fiction and mystery fiction in which an investigator or a detective—whether professional, amateur or retired—investigates a crime, often murder. The detective genre began around the same time as speculative fiction and other genre fiction in the mid-nineteenth century and has remained extremely popular, particularly in novels.[1] Some of the most famous heroes of detective fiction include C. Auguste Dupin, Sherlock Holmes, and Hercule Poirot. Juvenile stories featuring The Hardy Boys, Nancy Drew, and The Boxcar Children have also remained in print for several decades.',
            'photo'=>'images/categories/DetectiveFiction.jpg'
        ]);
        //15.Novella
        DB::table('categories')->insert([
            'categories' => 'Novella',//15
            'description' => 'A novella is a narrative prose fiction whose length is shorter than most novels, but longer than most short stories. The English word novella derives from the Italian novella meaning a short story related to true (or apparently so) facts.',
            'photo'=>'images/categories/Novel.jpg'
        ]);
        //16.Literary realism
        DB::table('categories')->insert([
            'categories' => 'Literary realism',//16
            'description' => 'Literary realism is a literary genre, part of the broader realism in arts, that attempts to represent subject-matter truthfully, avoiding speculative fiction and supernatural elements. It originated with the realist art movement that began with mid-nineteenth-century French literature (Stendhal) and Russian literature (Alexander Pushkin). Literary realism attempts to represent familiar things as they are. Realist authors chose to depict everyday and banal activities and experiences.',
            'photo'=>'images/categories/Literary realism.jpg'
        ]);
        //17.Social novel
        DB::table('categories')->insert([
            'categories' => 'Social novel',//17
            'description' => 'The social novel, also known as the social problem (or social protest) novel, is a "work of fiction in which a prevailing social problem, such as gender, race, or class prejudice, is dramatized through its effect on the characters of a novel". More specific examples of social problems that are addressed in such works include poverty, conditions in factories and mines, the plight of child labor, violence against women, rising criminality, and epidemics because of over-crowding and poor sanitation in cities.',
            'photo'=>'images/categories/Social novel.jpg'
        ]);
        //18.Gothic fiction
        DB::table('categories')->insert([
            'categories' => 'Gothic fiction',//18
            'description' => 'Gothic fiction, sometimes called Gothic horror in the 20th century, is a loose literary aesthetic of fear and haunting. The name is a reference to Gothic architecture of the European Middle Ages, which was characteristic of the settings of early Gothic novels.

            The first work to call itself Gothic was Horace Walpoles 1764 novel The Castle of Otranto, later subtitled "A Gothic Story". Subsequent 18th century contributors included Clara Reeve, Ann Radcliffe, William Thomas Beckford, and Matthew Lewis. The Gothic influence continued into the early 19th century, works by the Romantic poets, and novelists such as Mary Shelley, Charles Maturin, Walter Scott and E. T. A. Hoffmann frequently drew upon gothic motifs in their works.',
            'photo'=>'images/categories/Gothic fiction.jpg'
        ]);
        //19.Slave narrative
        DB::table('categories')->insert([
            'categories' => 'Slave narrative',//19
            'description' => 'The slave narrative is a type of literary genre involving the (written) autobiographical accounts of enslaved Africans, particularly in the Americas. Over six thousand such narratives are estimated to exist; about 150 narratives were published as separate books or pamphlets. In the United States during the Great Depression (1930s), more than 2,300 additional oral histories on life during slavery were collected by writers sponsored and published by the Works Progress Administration, a New Deal program. Most of the 26 audio-recorded interviews are held by the Library of Congress.',
            'photo'=>'images/categories/Slave narrative.jpg'
        ]);
        //20.Childrens literature
        DB::table('categories')->insert([
            'categories' => 'Childrens literature',//20
            'description' => "Children's literature or juvenile literature includes stories, books, magazines, and poems that are created for children. Modern children's literature is classified in two different ways: genre or the intended age of the reader.

            Children's literature can be traced to traditional stories like fairy tales, that have only been identified as children's literature in the eighteenth century, and songs, part of a wider oral tradition, that adults shared with children before publishing existed. The development of early children's literature, before printing was invented, is difficult to trace. Even after printing became widespread, many classic children's tales were originally created for adults and later adapted for a younger audience. Since the fifteenth century much literature has been aimed specifically at children, often with a moral or religious message. Children's literature has been shaped by religious sources, like Puritan traditions, or by more philosophical and scientific standpoints with the influences of Charles Darwin and John Locke.[2] The late nineteenth and early twentieth centuries are known as the Golden Age of Children's Literature because many classic children's books were published then.",
            'photo'=>'images/categories/Childrens literature.jpg'
        ]);
        //21.Romanticism
        DB::table('categories')->insert([
            'categories' => 'Romanticism',//21
            'description' => "Romanticism (also known as the Romantic movement or Romantic era) was an artistic, literary, musical, and intellectual movement that originated in Europe towards the end of the 18th century; in most areas it was at its peak in the approximate period from 1800 to 1850. Romanticism was characterized by its emphasis on emotion and individualism, clandestine literature, paganism, idealization of nature, suspicion of science and industrialization, as well as glorification of the past with a strong preference for the medieval rather than the classical. It was partly a reaction to the Industrial Revolution, the social and political norms of the Age of Enlightenment, but also the scientific rationalization of nature. It was embodied most strongly in the visual arts, music and literature; it had a major impact on historiography, education, chess, social sciences and the natural sciences. It had a significant and complex effect on politics, with romantic thinkers influencing conservatism, liberalism, radicalism and nationalism.",
            'photo'=>'images/categories/Romanticism.jpg'
        ]);
        //22.Adventure fiction
        DB::table('categories')->insert([
            'categories' => 'Adventure fiction',//22
            'description' => "Adventure fiction is a type of fiction that usually presents danger, or gives the reader a sense of excitement. Some adventure fiction also satisfies the literary definition of romance fiction.",
            'photo'=>'images/categories/Adventure fiction.jpg'
        ]);
        //23.Satire
        DB::table('categories')->insert([
            'categories' => 'Satire',//23
            'description' => "Satire is a genre of the visual, literary, and performing arts, usually in the form of fiction and less frequently non-fiction, in which vices, follies, abuses, and shortcomings are held up to ridicule, often with the intent of shaming or exposing the perceived flaws of individuals, corporations, government, or society itself into improvement. Although satire is usually meant to be humorous, its greater purpose is often constructive social criticism, using wit to draw attention to both particular and wider issues in society.",
            'photo'=>'images/categories/Satire.jpg'
        ]);
        //24.Philosophical fiction
        DB::table('categories')->insert([
            'categories' => 'Philosophical fiction',//24
            'description' => "Philosophical fiction refers to the class of works of fiction which devote a significant portion of their content to the sort of questions normally addressed in philosophy. These might explore any facet of the human condition, including the function and role of society, the nature and motivation of human acts, the purpose of life, ethics or morals, the role of art in human lives, the role of experience or reason in the development of knowledge, whether there exists free will, or any other topic of philosophical interest. Philosophical fiction works would include the so-called novel of ideas, including some science fiction, utopian and dystopian fiction, and the Bildungsroman.",
            'photo'=>'images/categories/Philosophical fiction.jpg'
        ]);
        //25.Bildungsroman
        DB::table('categories')->insert([
            'categories' => 'Bildungsroman',//25
            'description' => "In literary criticism, a bildungsroman (German pronunciation: ['bildʊŋs.ʁoˌma:n], plural bildungsromane, German pronunciation: ['bildʊŋs.ʁoˌma:nə]) is a literary genre that focuses on the psychological and moral growth of the protagonist from childhood to adulthood (coming of age), in which character change is important. The term comes from the German words Bildung ('education', alternatively 'forming') and Roman ('novel').",
            'photo'=>'images/categories/Bildungsroman.jpg'
        ]);
        //26.Crime fiction
        DB::table('categories')->insert([
            'categories' => 'Crime fiction',//26
            'description' => "Crime fiction, detective story, murder mystery, mystery novel, and police novel are terms used to describe narratives that centre on criminal acts and especially on the investigation, either by an amateur or a professional detective, of a crime, often a murder. It is usually distinguished from mainstream fiction and other genres such as historical fiction or science fiction, but the boundaries are indistinct. Crime fiction has multiple subgenres, including detective fiction (such as the whodunit), courtroom drama, hard-boiled fiction, and legal thrillers. Most crime drama focuses on crime investigation and does not feature the courtroom. Suspense and mystery are key elements that are nearly ubiquitous to the genre.",
            'photo'=>'images/categories/Crime fiction.jpg'
        ]);
        //27.Science fiction
        DB::table('categories')->insert([
            'categories' => 'Science fiction',//27
            'description' => "Science fiction (sometimes shortened to sf or sci-fi) is a genre of speculative fiction, which typically deals with imaginative and futuristic concepts such as advanced science and technology, space exploration, time travel, parallel universes, and extraterrestrial life. Science fiction can trace its roots to ancient mythology. It is related to fantasy, horror, and superhero fiction and contains many subgenres. Its exact definition has long been disputed among authors, critics, scholars, and readers.",
            'photo'=>'images/categories/Science fiction.jpg'
        ]);
        //28.Literary fiction
        DB::table('categories')->insert([
            'categories' => 'Literary fiction',//28
            'description' => "Literary fiction, mainstream fiction, non-genre fiction or serious fiction is a label that, in the book trade, refers to market novels that do not fit neatly into an established genre; or, otherwise, refers to novels that are character-driven rather than plot-driven, examine the human condition, use language in an experimental or poetic fashion, or are simply considered serious art.

            Literary fiction is often used as a synonym for literature, in the exclusive sense of writings specifically considered to have considerable artistic merit. While literary fiction is commonly regarded as artistically superior to genre fiction, the two are not mutually exclusive, and major literary figures have employed the genres of science fiction, crime fiction, romance, etc., to create works of literature. Furthermore, the study of genre fiction has developed within academia in recent decades.",
            'photo'=>'images/categories/Literary fiction.jpg'
        ]);
        //29.Allegory
        DB::table('categories')->insert([
            'categories' => 'Allegory',//29
            'description' => "As a literary device or artistic form, an allegory is a narrative or visual representation in which a character, place, or event can be interpreted to represent a hidden meaning with moral or political significance. Authors have used allegory throughout history in all forms of art to illustrate or convey complex ideas and concepts in ways that are comprehensible or striking to its viewers, readers, or listeners.

            Writers and speakers typically use allegories to convey (semi-) hidden or complex meanings through symbolic figures, actions, imagery, or events, which together create the moral, spiritual, or political meaning the author wishes to convey. Many allegories use personification of abstract concepts.",
            'photo'=>'images/categories/Allegory.jpg'
        ]);
        //30.Avant-garde
        DB::table('categories')->insert([
            'categories' => 'Avant-garde',//30
            'description' => "In the arts and in literature, the term avant-garde (advance guard and vanguard) identifies a genre of art, an experimental work of art, and the experimental artist who created the work of art, which usually is aesthetically innovative, whilst initially being ideologically unacceptable to the artistic establishment of the time. The military metaphor of an advance guard identifies the artists and writers whose innovations in style, form, and subject-matter challenge the artistic and aesthetic validity of the established forms of art and the literary traditions of their time; thus how the artists who created the anti-novel and Surrealism were ahead of their times.",
            'photo'=>'images/categories/Avant-garde.jpg'
        ]);
        //31.Horror fiction
        DB::table('categories')->insert([
            'categories' => 'Horror fiction',//31
            'description' => "Horror is a genre of fiction that is intended to disturb, frighten or scare. Horror is often divided into the sub-genres of psychological horror and supernatural horror, which are in the realm of speculative fiction. Literary historian J. A. Cuddon, in 1984, defined the horror story as 'a piece of fiction in prose of variable length... which shocks, or even frightens the reader, or perhaps induces a feeling of repulsion or loathing'. Horror intends to create an eerie and frightening atmosphere for the reader. Often the central menace of a work of horror fiction can be interpreted as a metaphor for larger fears of a society.",
            'photo'=>'images/categories/Horror fiction.jpg'
        ]);
        //32.Victorian literature
        DB::table('categories')->insert([
            'categories' => 'Victorian literature',//32
            'description' => "Victorian literature refers to English literature during the reign of Queen Victoria (1837-1901). The 19th century is considered by some to be the Golden Age of English Literature, especially for British novels. It was in the Victorian era that the novel became the leading literary genre in English. English writing from this era reflects the major transformations in most aspects of English life, from scientific, economic, and technological advances to changes in class structures and the role of religion in society. Famous novelists from this period include Charles Dickens, William Makepeace Thackeray, the three Brontë sisters, George Eliot, Thomas Hardy and Rudyard Kipling.",
            'photo'=>'images/categories/Victorian literature.jpg'
        ]);
        //33.Utopian and dystopian fiction
        DB::table('categories')->insert([
            'categories' => 'Utopian and dystopian fiction',//33
            'description' => "Utopian and dystopian fiction are genres of speculative fiction that explore social and political structures. Utopian fiction portrays a setting that agrees with the author's ethos, having various attributes of another reality intended to appeal to readers. Dystopian fiction offers the opposite: the portrayal of a setting that completely disagrees with the author's ethos. Some novels combine both genres, often as a metaphor for the different directions humanity can take depending on its choices, ending up with one of two possible futures. Both utopias and dystopias are commonly found in science fiction and other types of speculative fiction.",
            'photo'=>'images/categories/Utopian and dystopian fiction.jpg'
        ]);
        //34.Modernism
        DB::table('categories')->insert([
            'categories' => 'Modernism',//34
            'description' => "Modernism is both a philosophical and arts movement that arose from broad transformations in Western society during the late 19th and early 20th centuries. The movement reflected a desire for the creation of new forms of art, philosophy, and social organization which reflected the newly emerging industrial world, including features such as urbanization, architecture, new technologies, and war. Artists attempted to depart from traditional forms of art, which they considered outdated or obsolete. The poet Ezra Pound's 1934 injunction to ".'"Make it New"'." was the touchstone of the movement's approach.",
            'photo'=>'images/categories/Modernism.jpg'
        ]);
        //35.Comedy
        DB::table('categories')->insert([
            'categories' => 'Comedy',//35
            'description' => "Comedy is a genre of dramatic performance having a light or humorous tone that depicts amusing incidents and in which the characters ultimately triumph over adversity.[1] For ancient Greeks and Romans, a comedy was a stage-play with a happy ending. In the Middle Ages, the term expanded to include narrative poems with happy endings and a lighter tone. In this sense Dante used the term in the title of his poem, the Divine Comedy (Italian: Divina Commedia).",
            'photo'=>'images/categories/Comedy.jpg'
        ]);
        //36.Frame story
        DB::table('categories')->insert([
            'categories' => 'Frame story',//36
            'description' => "A frame story (also known as a frame tale, frame narrative, sandwich narrative, or intercalation) is a literary technique that serves as a companion piece to a story within a story, where an introductory or main narrative sets the stage either for a more emphasized second narrative or for a set of shorter stories. The frame story leads readers from a first story into one or more other stories within it. The frame story may also be used to inform readers about aspects of the secondary narrative(s) that may otherwise be hard to understand. This should not be confused with narrative structure.",
            'photo'=>'images/categories/Frame story.jpg'
        ]);
        //37.History
        DB::table('categories')->insert([
            'categories' => 'History',//37
            'description' => "Stories common to a particular culture, but not supported by external sources (such as the tales surrounding King Arthur), are usually classified as cultural heritage or legends. History differs from myth in that it is supported by verifiable evidence. However, ancient cultural influences have helped spawn variant interpretations of the nature of history which have evolved over the centuries and continue to change today. The modern study of history is wide-ranging, and includes the study of specific regions and the study of certain topical or thematic elements of historical investigation. History is often taught as a part of primary and secondary education, and the academic study of history is a major discipline in university studies.",
            'photo'=>'images/categories/History.jpg'
        ]);
        //38.Epistolary novel
        DB::table('categories')->insert([
            'categories' => 'Epistolary novel',//38
            'description' => "An epistolary novel is a novel written as a series of letters. The term is often extended to cover novels that intersperse documents of other kinds with the letters, most commonly diary entries and newspaper clippings, and sometimes considered to include novels composed of documents even if they do not include letters at all.More recently, epistolaries may include electronic documents such as recordings and radio, blog posts, and e-mails. The word epistolary is derived from Latin from the Greek word ἐπιστολή, epistolē, meaning a letter ((see epistle). In German, this type of novel is known as a Briefroman.",
            'photo'=>'images/categories/Epistolary novel.jpg'
        ]);
        //39.Psychological fiction
        DB::table('categories')->insert([
            'categories' => 'Psychological fiction',//38
            'description' => "In literature, psychological fiction (also psychological realism) is a narrative genre that emphasizes interior characterization and motivation to explore the spiritual, emotional, and mental lives of the characters. The mode of narration examines the reasons for the behaviors of the character, which propel the plot and explain the story. Psychological realism is achieved with deep explorations and explanations of the mental states of the character's inner person, usually through narrative modes such as stream of consciousness and flashbacks.",
            'photo'=>'images/categories/Psychological fiction.jpg'
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
            'discount' => 0.15,
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
            'discount' => 0.12,
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
            'discount' => 0.16,
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
            'discount' => 0.20,
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
            'discount' => 0.30,
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
            'discount' => 0.25,
            'photo' => 'images/shop/One-Hundred-Years-of-Solitude.jpg',
            'description' => "One Hundred Years of Solitude (Spanish: Cien años de soledad, American Spanish: [sjen 'aɲoz ðe sole'ðað]) is a 1967 novel by Colombian author Gabriel García Márquez that tells the multi-generational story of the Buendía family, whose patriarch, José Arcadio Buendía, founded the fictitious town of Macondo. The novel is often cited as one of the supreme achievements in world literature."
        ]);
        DB::table('products')->insert([
            'categories_id' => 21,
            'name' => 'The Hunchback of Notre-Dame',
            'author' => 'Victor Hugo',
            'country' => 'France',
            'published' => 1833,
            'price' => 29,
            'discount' => 0.22,
            'photo' => 'images/shop/The Hunchback of Notre-Dame.jpg',
            'description' => "The Hunchback of Notre-Dame (French: Notre-Dame de Paris, lit.'Our Lady of Paris', originally titled Notre-Dame de Paris. 1482) is a French Gothic novel by Victor Hugo, published in 1831. It focuses on the unfortunate story of Quasimodo, the Romani street dancer Esmeralda and Quasimodo's guardian the Archdeacon Claude Frollo in 15th-century Paris. All its elements—Renaissance setting, impossible love affairs, marginalized characters—make the work a model of the literary themes of Romanticism."
        ]);
        DB::table('products')->insert([
            'categories_id' => 12,
            'name' => 'Emma ',
            'author' => 'Jane Austen',
            'country' => 'United Kingdom',
            'published' => 1816,
            'price' => 40,
            'discount' => 0.23,
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
            'discount' => 0.16,
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
            'discount' => 0.18,
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
            'discount' => 0.29,
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
            'discount' => 0.35,
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
            'discount' => 0.50,
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
            'discount' => 0.45,
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
            'discount' => 0.40,
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
            'discount' => 0.35,
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
            'discount' => 0.30,
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
            'discount' => 0.25,
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
            'discount' => 0.20,
            'photo' => 'images/shop/The-Heroes-of-Olympus.jpg',
            'description' => "The Heroes of Olympus is a pentalogy of fantasy-adventure novels written by American author Rick Riordan. The novels detail a conflict between Greek demigods, Roman demigods, and Gaia (Roman name Terra). In the fourth book of the series, there is also a semi-large fight against Tartarus, which, in Greek mythology, was the darkest and deepest point of the Underworld."
        ]);
        DB::table('products')->insert([
            'categories_id' => 3,
            'name' => 'Quo Vadis',
            'author' => 'Henryk Sienkiewicz',
            'country' => 'Poland',
            'published' => 1896,
            'price' => 26,
            'discount' => 0.15,
            'photo' => 'images/shop/Quo Vadis.jpg',
            'description' => "Quo Vadis: A Narrative of the Time of Nero is a historical novel written by Henryk Sienkiewicz in Polish.

            The novel Quo Vadis tells of a love that develops between a young Christian woman, Lygia (Ligia in Polish) and Marcus Vinicius, a Roman patrician. It takes place in the city of Rome under the rule of emperor Nero, c. AD 64.
            
            Sienkiewicz studied the Roman Empire extensively before writing the novel, with the aim of getting historical details correct. Consequently, several historical figures appear in the book. As a whole, the novel carries a pro-Christian message."
        ]);
        DB::table('products')->insert([
            'categories_id' => 3,
            'name' => 'The Count Of Monte Cristo',
            'author' => 'Alexandre Dumas',
            'country' => 'France',
            'published' => 1846,
            'price' => 37,
            'discount' => 0.05,
            'photo' => 'images/shop/The Count Of Monte Cristo.jpg',
            'description' => "The Count of Monte Cristo (French: Le Comte de Monte-Cristo) is an adventure novel written by French author Alexandre Dumas (père) completed in 1844. It is one of the author's most popular works, along with The Three Musketeers. Like many of his novels, it was expanded from plot outlines suggested by his collaborating ghostwriter Auguste Maquet."
        ]);
        DB::table('products')->insert([
            'categories_id' => 8,
            'name' => 'Sense and Sensibility',
            'author' => 'Jane Austen',
            'country' => 'United Kingdom',
            'published' => 1811,
            'price' => 31,
            'discount' => 0.00,
            'photo' => 'images/shop/Sense and Sensibility.jpg',
            'description' => "Sense and Sensibility is a novel by Jane Austen, published in 1811. It was published anonymously; By A Lady appears on the title page where the author's name might have been. It tells the story of the Dashwood sisters, Elinor (age 19) and Marianne (age 16½) as they come of age. They have an older half-brother, John, and a younger sister, Margaret (age 13)."
        ]);
        DB::table('products')->insert([
            'categories_id' => 16,
            'name' => 'Anna Karenina',
            'author' => 'Leo Tolstoy',
            'country' => 'Russia',
            'published' => 1878,
            'price' => 16,
            'discount' => 0.1,
            'photo' => 'images/shop/Anna Karenina.jpg',
            'description' => "Anna Karenina (Russian: «Анна Каренина», IPA: ['an:ə kɐ'rʲenʲinə]) is a novel by the Russian author Leo Tolstoy, first published in book form in 1878. Widely considered to be one of the greatest works of literature ever written, Tolstoy himself called it his first true novel. It was initially released in serial installments from 1875 to 1877, all but the last part appearing in the periodical The Russian Messenger."
        ]);
        DB::table('products')->insert([
            'categories_id' => 12,
            'name' => 'Mansfield Park',
            'author' => 'Jane Austen',
            'country' => 'United Kingdom',
            'published' => 1814,
            'price' => 22,
            'discount' => 0.4,
            'photo' => 'images/shop/Mansfield Park.jpg',
            'description' => "Mansfield Park is the third published novel by Jane Austen, first published in 1814 by Thomas Egerton. A second edition was published in 1816 by John Murray, still within Austen's lifetime. The novel did not receive any public reviews until 1821.

            The novel tells the story of Fanny Price, starting when her overburdened family sends her at the age of ten to live in the household of her wealthy aunt and uncle and following her development into early adulthood. From early on critical interpretation has been diverse, differing particularly over the character of the heroine, Austen's views about theatrical performance and the centrality or otherwise of ordination and religion, and on the question of slavery. Some of these problems have been highlighted in the several later adaptations of the story for stage and screen."
        ]);
        DB::table('products')->insert([
            'categories_id' => 17,
            'name' => 'Shirley',
            'author' => 'Charlotte Brontë',
            'country' => 'United Kingdom',
            'published' => 1849,
            'price' => 25,
            'discount' => 0.6,
            'photo' => 'images/shop/Shirley.jpg',
            'description' => "Shirley, A Tale is a social novel by the English novelist Charlotte Brontë, first published in 1849. It was Brontë's second published novel after Jane Eyre (originally published under Brontë's pseudonym Currer Bell). The novel is set in Yorkshire in 1811-12, during the industrial depression resulting from the Napoleonic Wars and the War of 1812. The novel is set against the backdrop of the Luddite uprisings in the Yorkshire textile industry."
        ]);
        DB::table('products')->insert([
            'categories_id' => 18,
            'name' => 'Frankenstein',
            'author' => 'Mary Shelley',
            'country' => 'United Kingdom',
            'published' => 1818,
            'price' => 39,
            'discount' => 0.55,
            'photo' => 'images/shop/Frankenstein.jpg',
            'description' => "Frankenstein; or, The Modern Prometheus is an 1818 novel written by English author Mary Shelley. Frankenstein tells the story of Victor Frankenstein, a young scientist who creates a sapient creature in an unorthodox scientific experiment. Shelley started writing the story when she was 18, and the first edition was published anonymously in London on 1 January 1818, when she was 20. Her name first appeared in the second edition, which was published in Paris in 1821."
        ]);
        DB::table('products')->insert([
            'categories_id' => 1,
            'name' => 'Oliver Twist',
            'author' => 'Charles Dickens',
            'country' => 'United Kingdom',
            'published' => 1838,
            'price' => 40,
            'discount' => 0.3,
            'photo' => 'images/shop/Oliver Twist.jpg',
            'description' => "Oliver Twist; or, The Parish Boy's Progress, is the second novel by English author Charles Dickens. It was originally published as a serial from 1837 to 1839, and as a three-volume book in 1838.[1] The story follows the titular orphan, who, after being raised in a workhouse, escapes to London, where he meets a gang of juvenile pickpockets led by the elderly criminal Fagin, discovers the secrets of his parentage, and reconnects with his remaining family."
        ]);
        DB::table('products')->insert([
            'categories_id' => 19,
            'name' => 'Incidents in the Life of a Slave Girl',
            'author' => 'Harriet Jacobs',
            'country' => 'United States',
            'published' => 1861,
            'price' => 51,
            'discount' => 0.1,
            'photo' => 'images/shop/Incidents in the Life of a Slave Girl.jpg',
            'description' => "Incidents in the Life of a Slave Girl, written by herself is an autobiography by Harriet Jacobs, a mother and fugitive slave, published in 1861 by L. Maria Child, who edited the book for its author. Jacobs used the pseudonym Linda Brent. The book documents Jacobs's life as a slave and how she gained freedom for herself and for her children. Jacobs contributed to the genre of slave narrative by using the techniques of sentimental novels 'to address race and gender issues.' She explores the struggles and sexual abuse that female slaves faced as well as their efforts to practice motherhood and protect their children when their children might be sold away."
        ]);
        DB::table('products')->insert([
            'categories_id' => 11,
            'name' => 'To Kill a Mockingbird',
            'author' => 'Harper Lee',
            'country' => 'United States',
            'published' => 1960,
            'price' => 52,
            'discount' => 0.0,
            'photo' => 'images/shop/To Kill a Mockingbird.jpg',
            'description' => "To Kill a Mockingbird is a novel by the American author Harper Lee. It was published in 1960 and was instantly successful. In the United States, it is widely read in high schools and middle schools. To Kill a Mockingbird has become a classic of modern American literature, winning the Pulitzer Prize. The plot and characters are loosely based on Lee's observations of her family, her neighbors and an event that occurred near her hometown of Monroeville, Alabama, in 1936, when she was ten."
        ]);
        DB::table('products')->insert([
            'categories_id' => 18,
            'name' => 'Jane Eyre',
            'author' => 'Charlotte Brontë',
            'country' => 'United Kingdom',
            'published' => 1847,
            'price' => 54,
            'discount' => 0.0,
            'photo' => 'images/shop/Jane Eyre.jpg',
            'description' => "Jane Eyre (/ɛər/ AIR; originally published as Jane Eyre: An Autobiography) is a novel by the English writer Charlotte Brontë. It was published under her pen name 'Currer Bell' on 19 October 1847 by Smith, Elder & Co. of London. The first American edition was published the following year by Harper & Brothers of New York.[2] Jane Eyre is a Bildungsroman which follows the experiences of its eponymous heroine, including her growth to adulthood and her love for Mr Rochester, the brooding master of Thornfield Hall."
        ]);
        DB::table('products')->insert([
            'categories_id' => 7,
            'name' => 'Northanger Abbey',
            'author' => 'Jane Austen',
            'country' => 'United Kingdom',
            'published' => 1817,
            'price' => 45,
            'discount' => 0.10,
            'photo' => 'images/shop/Northanger Abbey.jpg',
            'description' => "Northanger Abbey (/'nɔ:rθæŋər/) is a coming-of-age novel and a satire of Gothic novels written by Jane Austen. Austen was also influenced by Charlotte Lennox's The Female Quixote (1752). Northanger Abbey was completed in 1803, the first of Austen's novels completed in full, but was published posthumously in 1817 with Persuasion. The story concerns Catherine Morland, the naïve young protagonist, and her journey to a better understanding of herself and of the world around her. How Catherine views the world has been distorted by her fondness for Gothic novels and an active imagination."
        ]);
        DB::table('products')->insert([
            'categories_id' => 20,
            'name' => 'Wonder',
            'author' => 'R. J. Palacio',
            'country' => 'United States',
            'published' => 2012,
            'price' => 57,
            'discount' => 0.10,
            'photo' => 'images/shop/Wonder.jpg',
            'description' => "Wonder is a children's novel written by R. J. Palacio, published on 14 February 2012. Wonder was inspired by an incident where her son started to cry after noticing a girl with a severe facial deformity. Fearing her son would react badly, Palacio attempted to remove him from the situation so as not to upset the girl and her family but ended up worsening the situation. Natalie Merchant's song of the same name made her realize that the incident could illustrate a valuable lesson. Palacio was inspired by Merchant's lyrics and she began writing. She named the book directly after the song and used the song's chorus as the prologue of the first chapter."
        ]);
        DB::table('products')->insert([
            'categories_id' => 8,
            'name' => 'Persuasion',
            'author' => 'Jane Austen',
            'country' => 'United Kingdom',
            'published' => 1818,
            'price' => 37,
            'discount' => 0.10,
            'photo' => 'images/shop/Persuasion.jpg',
            'description' => "Persuasion is the last novel completed by Jane Austen. It was published on December 20, 1817, along with Northanger Abbey, six months after her death, although the title page is dated 1818.

            The story concerns Anne Elliot, an Englishwoman of 27 years, whose family moves to lower their expenses and reduce their debt by renting their home to an admiral and his wife. The wife's brother, Captain Frederick Wentworth, was engaged to Anne in 1806, but the engagement was broken when Anne was persuaded by her friends and family to end their relationship. Anne and Captain Wentworth, both single and unattached, meet again after a separation lasting almost eight years, setting the scene for many humorous encounters as well as a second, well-considered chance at love and marriage for Anne."
        ]);
        DB::table('products')->insert([
            'categories_id' => 1,
            'name' => 'The Portrait of a Lady',
            'author' => 'Henry James',
            'country' => 'United States',
            'published' => 1881,
            'price' => 50,
            'discount' => 0.10,
            'photo' => 'images/shop/The Portrait of a Lady.jpg',
            'description' => "The Portrait of a Lady is a novel by Henry James, first published as a serial in The Atlantic Monthly and Macmillan's Magazine in 1880-81 and then as a book in 1881. It is one of James's most popular novels and is regarded by critics as one of his finest.

            The Portrait of a Lady is the story of a spirited young American woman, Isabel Archer, who, 'affronting her destiny,' finds it overwhelming. She inherits a large amount of money and subsequently becomes the victim of Machiavellian scheming by two American expatriates. Like many of James's novels, it is set in Europe, mostly England and Italy. Generally regarded as the masterpiece of James's early period,[2] this novel reflects James's continuing interest in the differences between the New World and the Old, often to the detriment of the former. It also treats in a profound way the themes of personal freedom, responsibility, and betrayal."
        ]);
        DB::table('products')->insert([
            'categories_id' => 3,
            'name' => 'War and Peace',
            'author' => 'Leo Tolstoy',
            'country' => 'Russia',
            'published' => 1869,
            'price' => 42,
            'discount' => 0.10,
            'photo' => 'images/shop/War and Peace.jpg',
            'description' => "War and Peace (Russian: Война и мир, romanized: Voyna i mir; pre-reform Russian: Война и миръ; [vɐj'na i 'mʲir]) is a literary work by the Russian author Leo Tolstoy that mixes fictional narrative with chapters on history and philosophy. It was first published serially, then published in its entirety in 1869. It is regarded as Tolstoy's finest literary achievement and remains an internationally praised classic of world literature.

            The novel chronicles the French invasion of Russia and the impact of the Napoleonic era on Tsarist society through the stories of five Russian aristocratic families. Portions of an earlier version, titled The Year 1805, were serialized in The Russian Messenger from 1865 to 1867 before the novel was published in its entirety in 1869."
        ]);
        DB::table('products')->insert([
            'categories_id' => 3,
            'name' => 'Les Misérables',
            'author' => 'Victor Hugo',
            'country' => 'Guernsey',
            'published' => 1862,
            'price' => 33,
            'discount' => 0.10,
            'photo' => 'images/shop/Les Misérables.jpg',
            'description' => "Les Misérables (/lei ˌmizə'ra:b(əl), -blə/ lay MIZ-ə-RAHB(-əl), -RAH-blə, French: [le mizeʁabl]) is a French historical novel by Victor Hugo, first published in 1862, that is considered one of the greatest novels of the 19th century. Les Misérables has been popularized through numerous adaptations for film, television and the stage, including a musical."
        ]);
        DB::table('products')->insert([
            'categories_id' => 1,
            'name' => 'Wives and Daughters',
            'author' => 'Elizabeth Gaskell',
            'country' => 'United Kingdom',
            'published' => 1866,
            'price' => 52,
            'discount' => 0.10,
            'photo' => 'images/shop/Wives and Daughters.jpg',
            'description' => "Wives and Daughters, An Every-Day Story is a novel by English novelist Elizabeth Gaskell, first published in the Cornhill Magazine as a serial from August 1864 to January 1866. It was partly written whilst Gaskell was staying with the salon hostess Mary Elizabeth Mohl at her home on the Rue de Bac in Paris. When Mrs Gaskell died suddenly in 1865, it was not quite complete, and the last section was written by Frederick Greenwood.

            The story is about Molly Gibson, the only daughter of a widowed doctor living in a provincial English town in the 1830s."
        ]);
        DB::table('products')->insert([
            'categories_id' => 1,
            'name' => 'Mrs Dalloway',
            'author' => 'Virginia Woolf',
            'country' => 'United Kingdom',
            'published' => 1925,
            'price' => 28,
            'discount' => 0.10,
            'photo' => 'images/shop/Mrs Dalloway.jpg',
            'description' => "Mrs. Dalloway is a novel by Virginia Woolf published on 14 May 1925.[1] It details a day in the life of Clarissa Dalloway, a fictional upper-class woman in post-First World War England. It is one of Woolf's best-known novels.

            The working title of Mrs. Dalloway was The Hours. The novel began with two short stories, 'Mrs. Dalloway in Bond Street' and the unfinished 'The Prime Minister'. The book describes Clarissa's preparations for a party she will host in the evening and the ensuing party. With an interior perspective, the story travels forwards and backwards in time, to construct an image of Clarissa's life and the inter-war social structure. The novel addresses the nature of time in personal experience through multiple interwoven stories."
        ]);
        DB::table('products')->insert([
            'categories_id' => 22,
            'name' => 'The Three Musketeers',
            'author' => 'Alexandre Dumas',
            'country' => 'France',
            'published' => 1844,
            'price' => 54,
            'discount' => 0.10,
            'photo' => 'images/shop/The Three Musketeers.jpg',
            'description' => "The Three Musketeers (French: Les Trois Mousquetaires, [le tʁwa muskətɛ:ʁ]) is a French historical adventure novel written in 1844 by French author Alexandre Dumas. It is in the swashbuckler genre, which has heroic, chivalrous swordsmen who fight for justice.

            Set between 1625 and 1628, it recounts the adventures of a young man named d'Artagnan (a character based on Charles de Batz-Castelmore d'Artagnan) after he leaves home to travel to Paris, hoping to join the Musketeers of the Guard. Although d'Artagnan is not able to join this elite corps immediately, he is befriended by three of the most formidable musketeers of the age - Athos, Porthos and Aramis, 'the three musketeers' or 'the three inseparables' - and becomes involved in affairs of state and at court."
        ]);
        DB::table('products')->insert([
            'categories_id' => 23,
            'name' => 'Vanity Fair',
            'author' => 'William Makepeace Thackeray',
            'country' => 'United Kingdom',
            'published' => 1848,
            'price' => 41,
            'discount' => 0.10,
            'photo' => 'images/shop/Vanity Fair.jpg',
            'description' => "Vanity Fair is an English novel by William Makepeace Thackeray, which follows the lives of Becky Sharp and Amelia Sedley amid their friends and families during and after the Napoleonic Wars. It was first published as a 19-volume monthly serial (the last containing Parts 19 and 20) from 1847 to 1848, carrying the subtitle Pen and Pencil Sketches of English Society, which reflects both its satirisation of early 19th-century British society and the many illustrations drawn by Thackeray to accompany the text. It was published as a single volume in 1848 with the subtitle A Novel without a Hero, reflecting Thackeray's interest in deconstructing his era's conventions regarding literary heroism. It is sometimes considered the 'principal founder' of the Victorian domestic novel."
        ]);
        DB::table('products')->insert([
            'categories_id' => 24,
            'name' => 'Resurrection',
            'author' => 'Leo Tolstoy',
            'country' => 'Russia',
            'published' => 1899,
            'price' => 32,
            'discount' => 0.10,
            'photo' => 'images/shop/Resurrection.jpg',
            'description' => "Resurrection (pre-reform Russian: Воскресеніе; post-reform Russian: Воскресение, tr. Voskreséniye, also translated as The Awakening), first published in 1899, was the last novel written by Leo Tolstoy. The book is the last of his major long fiction works published in his lifetime. Tolstoy intended the novel as a panoramic view of Russia at the end of the 19th century from the highest to the lowest levels of society and an exposition of the injustice of man-made laws and the hypocrisy of the institutionalized church. The novel also explores the economic philosophy of Georgism, of which Tolstoy had become a very strong advocate towards the end of his life, and explains the theory in detail. The publication of Resurrection led to Tolstoy's excommunication by the Holy Synod from the Russian Orthodox Church in 1901"
        ]);
        DB::table('products')->insert([
            'categories_id' => 3,
            'name' => 'Ivanhoe',
            'author' => 'Walter Scott',
            'country' => 'Scotland',
            'published' => 1819,
            'price' => 55,
            'discount' => 0.10,
            'photo' => 'images/shop/Ivanhoe.jpg',
            'description' => "Ivanhoe: A Romance (/'aivənˌhoʊ/) by Walter Scott is a historical novel published in three volumes, in 1819, as one of the Waverley novels. Set in England in the Middle Ages, this novel marked a shift away from Scott's prior practice of setting stories in Scotland and in the more recent past. Ivanhoe became one of Scott's best-known and most influential novels.

            Set in 12th-century England, with colourful descriptions of a tournament, outlaws, a witch trial, and divisions between Jews and Christians, Normans and Saxons, Ivanhoe was credited by many, including Thomas Carlyle and John Ruskin, with inspiring increased interest in chivalric romance and medievalism. As John Henry Newman put it, Scott 'had first turned men's minds in the direction of the Middle Ages'. Ivanhoe was also credited with influencing contemporary popular perceptions of historical figures such as King Richard the Lionheart, Prince John, and Robin Hood."
        ]);
        DB::table('products')->insert([
            'categories_id' => 21,
            'name' => 'The Scarlet Letter',
            'author' => 'Nathaniel Hawthorne',
            'country' => 'United States',
            'published' => 1850,
            'price' => 44,
            'discount' => 0.10,
            'photo' => 'images/shop/The Scarlet Letter.jpg',
            'description' => "The Scarlet Letter: A Romance is a work of historical fiction by American author Nathaniel Hawthorne, published in 1850. Set in the Puritan Massachusetts Bay Colony during the years 1642 to 1649, the novel tells the story of Hester Prynne, who conceives a daughter with a man to whom she is not married and then struggles to create a new life of repentance and dignity. Containing a number of religious and historic allusions, the book explores themes of legalism, sin and guilt."
        ]);
        DB::table('products')->insert([
            'categories_id' => 25,
            'name' => 'Great Expectations',
            'author' => 'Charles Dickens',
            'country' => 'United Kingdom',
            'published' => 1861,
            'price' => 32,
            'discount' => 0.10,
            'photo' => 'images/shop/Great Expectations.jpg',
            'description' => "Great Expectations is the thirteenth novel by Charles Dickens and his penultimate completed novel. It depicts the education of an orphan nicknamed Pip (the book is a bildungsroman; a coming-of-age story). It is Dickens' second novel, after David Copperfield, to be fully narrated in the first person. The novel was first published as a serial in Dickens's weekly periodical All the Year Round, from 1 December 1860 to August 1861. In October 1861, Chapman and Hall published the novel in three volumes."
        ]);
        DB::table('products')->insert([
            'categories_id' => 26,
            'name' => 'The Godfather',
            'author' => 'Mario Puzo',
            'country' => 'United States',
            'published' => 1969,
            'price' => 60,
            'discount' => 0.10,
            'photo' => 'images/shop/The Godfather.jpg',
            'description' => "The Godfather is a crime novel by American author Mario Puzo. Originally published in 1969 by G. P. Putnam's Sons, the novel details the story of a fictional Mafia family in New York City (and Long Island), headed by Vito Corleone, the Godfather. The novel covers the years 1945 to 1955 and includes the back story of Vito Corleone from early childhood to adulthood.

            The first in a series of novels, The Godfather is noteworthy for introducing Italian words like consigliere, caporegime, Cosa Nostra, and omertà to an English-speaking audience. It inspired a 1972 film of the same name. Two film sequels, including new contributions by Puzo himself, were made in 1974 and 1990."
        ]);
        DB::table('products')->insert([
            'categories_id' => 27,
            'name' => 'The War of the Worlds',
            'author' => 'H. G. Wells',
            'country' => 'United Kingdom',
            'published' => 1898,
            'price' => 36,
            'discount' => 0.10,
            'photo' => 'images/shop/The War of the Worlds.jpg',
            'description' => "The War of the Worlds is a science fiction novel by English author H. G. Wells, written between 1895 and 1897, first serialised in 1897 by Pearson's Magazine in the UK and by Cosmopolitan magazine in the US. The novel's first appearance in hardcover was in 1898 from publisher William Heinemann of London. It is one of the earliest stories to detail a conflict between mankind and an extraterrestrial race. The novel is the first-person narrative of both an unnamed protagonist in Surrey and of his younger brother in London as southern England is invaded by Martians. The novel is one of the most commented-on works in the science fiction canon."
        ]);
        DB::table('products')->insert([
            'categories_id' => 27,
            'name' => 'The Island of Doctor Moreau',
            'author' => 'H. G. Wells',
            'country' => 'United Kingdom',
            'published' => 1896,
            'price' => 37,
            'discount' => 0.10,
            'photo' => 'images/shop/The Island of Doctor Moreau.jpg',
            'description' => "The Island of Doctor Moreau is an 1896 science fiction novel by English author H. G. Wells (1866-1946). The text of the novel is the narration of Edward Prendick, a shipwrecked man rescued by a passing boat. He is left on the island home of Doctor Moreau, a mad scientist who creates human-like hybrid beings from animals via vivisection. The novel deals with a number of themes, including pain and cruelty, moral responsibility, human identity, human interference with nature, and the effects of trauma.[2] Wells described it as 'an exercise in youthful blasphemy'."
        ]);
        DB::table('products')->insert([
            'categories_id' => 1,
            'name' => 'A Pair of Blue Eyes',
            'author' => 'Thomas Hardy',
            'country' => 'United Kingdom',
            'published' => 1873,
            'price' => 39,
            'discount' => 0.10,
            'photo' => 'images/shop/A Pair of Blue Eyes.jpg',
            'description' => "A Pair of Blue Eyes is a novel by Thomas Hardy, published in 1873, first serialised between September 1872 and July 1873. It was Hardy's third published novel, and the first not published anonymously upon its first publication. Hardy included it with his 'romances and fantasies'."
        ]);
        DB::table('products')->insert([
            'categories_id' => 27,
            'name' => 'The Time Machine',
            'author' => 'H. G. Wells',
            'country' => 'United Kingdom',
            'published' => 1895,
            'price' => 46,
            'discount' => 0.10,
            'photo' => 'images/shop/The Time Machine.jpg',
            'description' => "The Time Machine is a post-apocalyptic science fiction novella by H. G. Wells, published in 1895. The work is generally credited with the popularization of the concept of time travel by using a vehicle or device to travel purposely and selectively forward or backward through time. The term 'time machine', coined by Wells, is now almost universally used to refer to such a vehicle or device."
        ]);
        DB::table('products')->insert([
            'categories_id' => 28,
            'name' => 'The Old Man and the Sea',
            'author' => 'Ernest Hemingway',
            'country' => 'United States',
            'published' => 1952,
            'price' => 57,
            'discount' => 0.10,
            'photo' => 'images/shop/The Old Man and the Sea.jpg',
            'description' => "The Old Man and the Sea is a novella written by the American author Ernest Hemingway in 1951 in Cayo Blanco (Cuba), and published in 1952. It was the last major work of fiction written by Hemingway that was published during his lifetime. One of his most famous works, it tells the story of Santiago, an aging Cuban fisherman who struggles with a giant marlin far out in the Gulf Stream off the coast of Cuba.

            In 1953, The Old Man and the Sea was awarded the Pulitzer Prize for Fiction, and it was cited by the Nobel Committee as contributing to their awarding of the Nobel Prize in Literature to Hemingway in 1954."
        ]);
        DB::table('products')->insert([
            'categories_id' => 17,
            'name' => 'North and South',
            'author' => 'Elizabeth Gaskell',
            'country' => 'United Kingdom',
            'published' => 1855,
            'price' => 41,
            'discount' => 0.10,
            'photo' => 'images/shop/North and South.jpg',
            'description' => "North and South is a social novel published in 1854-55 by English writer Elizabeth Gaskell. With Wives and Daughters (1865) and Cranford (1853), it is one of her best-known novels and was adapted for television three times (1966, 1975 and 2004). The 2004 version renewed interest in the novel and attracted a wider readership. Initially, Gaskell wanted the novel to be titled after the heroine, Margaret Hale, but Charles Dickens, the editor of Household Words, the magazine in which the novel was serialised, insisted on North and South."
        ]);
        DB::table('products')->insert([
            'categories_id' => 20,
            'name' => 'The Story of King Arthur and His Knights',
            'author' => 'Howard Pyle',
            'country' => 'United States',
            'published' => 1903,
            'price' => 32,
            'discount' => 0.10,
            'photo' => 'images/shop/The Story of King Arthur and His Knights.jpg',
            'description' => "The Story of King Arthur and His Knights is a 1903 children's novel by the American illustrator and writer Howard Pyle. The book contains a compilation of various stories, adapted by Pyle, regarding the legendary King Arthur of Britain and select Knights of the Round Table. Pyle's novel begins with Arthur in his youth and continues through numerous tales of bravery, romance, battle, and knighthood.

            Pyle's rendition is an American adaption of traditionally English stories of the Arthurian legends. Although with some unique embellishments, it draws heavily on previous authors' stories, such as the then-recent The Boy's King Arthur (1880) by fellow American Sidney Lanier; Tennyson's Idylls of the King (1859-1885); James Thomas Knowles's The Legends of King Arthur and His Knights (1860); and ultimately Mallory's Le Morte d'Arthur (1485), the primary source material for all of the above."
        ]);
        DB::table('products')->insert([
            'categories_id' => 22,
            'name' => 'Around the World in Eighty Days',
            'author' => 'Jules Verne',
            'country' => 'France',
            'published' => 1873,
            'price' => 29,
            'discount' => 0.10,
            'photo' => 'images/shop/Around the World in Eighty Days.jpg',
            'description' => "Around the World in Eighty Days (French: Le tour du monde en quatre-vingts jours) is an adventure novel by the French writer Jules Verne, first published in French in 1872. In the story, Phileas Fogg of London and his newly employed French valet Passepartout attempt to circumnavigate the world in 80 days on a wager of £20,000 (equivalent to £1.9 million in 2019) set by his friends at the Reform Club. It is one of Verne's most acclaimed works."
        ]);
        DB::table('products')->insert([
            'categories_id' => 1,
            'name' => 'The Grapes of Wrath',
            'author' => 'John Steinbeck',
            'country' => 'United States',
            'published' => 1939,
            'price' => 43,
            'discount' => 0.10,
            'photo' => 'images/shop/The Grapes of Wrath.jpg',
            'description' => "The Grapes of Wrath is an American realist novel written by John Steinbeck and published in 1939. The book won the National Book Award and Pulitzer Prize for fiction, and it was cited prominently when Steinbeck was awarded the Nobel Prize in 1962.

            Set during the Great Depression, the novel focuses on the Joads, a poor family of tenant farmers driven from their Oklahoma home by drought, economic hardship, agricultural industry changes, and bank foreclosures forcing tenant farmers out of work. Due to their nearly hopeless situation, and in part because they are trapped in the Dust Bowl, the Joads set out for California along with thousands of other 'Okies' seeking jobs, land, dignity, and a future."
        ]);
        DB::table('products')->insert([
            'categories_id' => 29,
            'name' => "The Pilgrim's Progress",
            'author' => 'John Bunyan',
            'country' => 'United Kingdom',
            'published' => 1678,
            'price' => 35,
            'discount' => 0.10,
            'photo' => "images/shop/The Pilgrim's Progress.jpg",
            'description' => "The Pilgrim's Progress from This World, to That Which Is to Come is a 1678 Christian allegory written by John Bunyan. It is regarded as one of the most significant works of theological fiction in English literature and a progenitor of the narrative aspect of Christian media. It has been translated into more than 200 languages and never been out of print. It appeared in Dutch in 1681, in German in 1703 and in Swedish in 1727. The first North American edition was issued in 1681. It has also been cited as the first novel written in English. According to literary editor Robert McCrum, there's no book in English, apart from the Bible, to equal Bunyan's masterpiece for the range of its readership, or its influence on writers as diverse as William Hogarth, C. S. Lewis, Nathaniel Hawthorne, Herman Melville, Charles Dickens, Louisa May Alcott, George Bernard Shaw, William Thackeray, Charlotte Bronte, Mark Twain, John Steinbeck and Enid Blyton. The words on which the hymn To be a Pilgrim is based come from the novel."
        ]);
        DB::table('products')->insert([
            'categories_id' => 8,
            'name' => 'The Pursuit of Love',
            'author' => 'Nancy Mitford',
            'country' => 'United Kingdom',
            'published' => 1945,
            'price' => 46,
            'discount' => 0.10,
            'photo' => 'images/shop/The Pursuit of Love.jpg',
            'description' => "The Pursuit of Love is a novel by Nancy Mitford, first published in 1945. It is the first in a trilogy about an upper-class English family in the interwar period focusing on the romantic life of Linda Radlett, as narrated by her cousin, Fanny Logan. Although a comedy, the story has tragic overtones.

            The book was an immediate best-seller and sold 200,000 copies within a year of publication.
            
            Mitford wrote two sequels to the novel, Love in a Cold Climate (1949) and Don't Tell Alfred (1960). Her penultimate novel, The Blessing (1951), also makes references to The Pursuit of Love and characters from The Blessing later appear in Don't Tell Alfred."
        ]);
        DB::table('products')->insert([
            'categories_id' => 2,
            'name' => "Gulliver's Travels",
            'author' => 'Jonathan Swift',
            'country' => 'United Kingdom',
            'published' => 1726,
            'price' => 61,
            'discount' => 0.10,
            'photo' => "images/shop/Gulliver's Travels.jpg",
            'description' => "Gulliver's Travels, or Travels into Several Remote Nations of the World. In Four Parts. By Lemuel Gulliver, First a Surgeon, and then a Captain of Several Ships is a 1726 prose satire[1][2] by the Anglo-Irish writer and clergyman Jonathan Swift, satirising both human nature and the 'travellers' tales' literary subgenre. It is Swift's best known full-length work, and a classic of English literature. Swift claimed that he wrote Gulliver's Travels 'to vex the world rather than divert it'.

            The book was an immediate success. The English dramatist John Gay remarked: 'It is universally read, from the cabinet council to the nursery.' In 2015, Robert McCrum released his selection list of 100 best novels of all time, where he called Gulliver's Travels 'a satirical masterpiece'"
        ]);
        DB::table('products')->insert([
            'categories_id' => 30,
            'name' => 'A Spy in the House of Love',
            'author' => 'Anaïs Nin',
            'country' => 'United States',
            'published' => 1954,
            'price' => 34,
            'discount' => 0.10,
            'photo' => 'images/shop/A Spy in the House of Love.jpg',
            'description' => "A Spy in the House of Love is a 1954 novel by Anaïs Nin. Alongside her other novels, Ladders to Fire, Children of the Albatross, The Four-Chambered Heart and Seduction of the Minotaur, it was gathered into a collection known as Cities of the Interior. The novel follows the character of Sabina, a woman who enjoys the sexual licence typically associated with men. Sabina wears extravagant outfits and deliberately avoids romantic commitments. She pursues sexual pleasure in isolation of any other romantic attachment."
        ]);
        DB::table('products')->insert([
            'categories_id' => 3,
            'name' => 'The Book Thief',
            'author' => 'Markus Zusak',
            'country' => 'Australia',
            'published' => 2005,
            'price' => 48,
            'discount' => 0.10,
            'photo' => 'images/shop/The Book Thief.jpg',
            'description' => "The Book Thief is a historical fiction novel by the Australian author Markus Zusak, set in Nazi Germany during World War II. Published in 2005, The Book Thief became an international bestseller and was translated into 63 languages and sold 16 million copies. It was adapted into the 2013 feature film, The Book Thief.

            The novel follows the adventures of young Liesel Meminger. By personifying 'Death' as a tangible being who narrates the story, the novel presents a unique perspective into the world of the victims of the war. There are many tangible themes throughout the entire story."
        ]);
        DB::table('products')->insert([
            'categories_id' => 3,
            'name' => 'Robinson Crusoe',
            'author' => 'Daniel Defoe',
            'country' => 'United Kingdom',
            'published' => 1719,
            'price' => 62,
            'discount' => 0.10,
            'photo' => 'images/shop/Robinson Crusoe.jpg',
            'description' => "Robinson Crusoe (/'kru:soʊ/) is a novel by Daniel Defoe, first published on 25 April 1719. The first edition credited the work's protagonist Robinson Crusoe as its author, leading many readers to believe he was a real person and the book a travelogue of true incidents.

            Epistolary, confessional, and didactic in form, the book is presented as an autobiography of the title character (whose birth name is Robinson Kreutznaer) - a castaway who spends 28 years on a remote tropical desert island near the coasts of Venezuela and Trinidad, roughly resembling Tobago, encountering cannibals, captives, and mutineers before being rescued. The story has been thought to be based on the life of Alexander Selkirk, a Scottish castaway who lived for four years on a Pacific island called 'Más a Tierra' (now part of Chile) which was renamed Robinson Crusoe Island in 1966."
        ]);
        DB::table('products')->insert([
            'categories_id' => 31,
            'name' => 'The Turn of the Screw',
            'author' => 'Henry James',
            'country' => 'United Kingdom',
            'published' => 1898,
            'price' => 65,
            'discount' => 0.10,
            'photo' => 'images/shop/The Turn of the Screw.jpg',
            'description' => "The Turn of the Screw is an 1898 horror novella by Henry James which first appeared in serial format in Collier's Weekly (January 27 - April 16, 1898). In October 1898, it was collected in The Two Magics, published by Macmillan in New York City and Heinemann in London. The novella follows a governess who, caring for two children at a remote estate, becomes convinced that the grounds are haunted. The Turn of the Screw is considered a work of both Gothic and horror fiction."
        ]);
        DB::table('products')->insert([
            'categories_id' => 27,
            'name' => 'From the Earth to the Moon',
            'author' => 'Jules Verne',
            'country' => 'France',
            'published' => 1867,
            'price' => 67,
            'discount' => 0.10,
            'photo' => 'images/shop/From the Earth to the Moon.jpg',
            'description' => "From the Earth to the Moon: A Direct Route in 97 Hours, 20 Minutes (French: De la Terre à la Lune, trajet direct en 97 heures 20 minutes) is an 1865 novel by Jules Verne. It tells the story of the Baltimore Gun Club, a post-American Civil War society of weapons enthusiasts, and their attempts to build an enormous Columbiad space gun and launch three people—the Gun Club's president, his Philadelphian armor-making rival, and a French poet—in a projectile with the goal of a Moon landing. Five years later, Verne wrote a sequel called Around the Moon."
        ]);
        DB::table('products')->insert([
            'categories_id' => 1,
            'name' => 'Nicholas Nickleby',
            'author' => 'Charles Dickens',
            'country' => 'United Kingdom',
            'published' => 1839,
            'price' => 45,
            'discount' => 0.10,
            'photo' => 'images/shop/Nicholas Nickleby.jpg',
            'description' => "Nicholas Nickleby, or The Life and Adventures of Nicholas Nickleby, is the third novel by Charles Dickens, originally published as a serial from 1838 to 1839. The character of Nickleby is a young man who must support his mother and sister after his father dies.

            The Life and Adventures of Nicholas Nickleby, Containing a Faithful Account of the Fortunes, Misfortunes, Uprisings, Downfallings, and Complete Career of the Nickleby Family saw Dickens return to his favourite publishers and to the format that proved so successful with The Pickwick Papers. The story first appeared in monthly parts, after which it was issued in one volume. Dickens began writing Nickleby while still working on Oliver Twist."
        ]);
        DB::table('products')->insert([
            'categories_id' => 26,
            'name' => "The Mirror Crack'd from Side to Side",
            'author' => 'Agatha Christie',
            'country' => 'United Kingdom',
            'published' => 1962,
            'price' => 59,
            'discount' => 0.10,
            'photo' => "images/shop/The Mirror Crack'd from Side to Side.jpg",
            'description' => "The Mirror Crack'd from Side to Side, a novel by Agatha Christie, was published in the UK in 1962 and a year later in the US under the title The Mirror Crack'd. The story features amateur detective Miss Marple solving a mystery in St. Mary Mead.
            
            Jane Marple falls while walking in St. Mary Mead. She is helped by Heather Badcock, who brings her into her own home to rest. Over a cup of tea, Heather tells Miss Marple how she met the American actress Marina Gregg, who recently moved into the area and bought Gossington Hall from Miss Marple's friend Dolly Bantry."
        ]);
        DB::table('products')->insert([
            'categories_id' => 14,
            'name' => "The Return of Sherlock Holmes",
            'author' => 'Arthur Conan Doyle',
            'country' => 'United Kingdom',
            'published' => 1905,
            'price' => 48,
            'discount' => 0.10,
            'photo' => "images/shop/The Return of Sherlock Holmes.jpg",
            'description' => "The Return of Sherlock Holmes is a 1905 collection of 13 Sherlock Holmes stories, originally published in 1903-1904, by British writer Arthur Conan Doyle. The stories were published in the Strand Magazine in Britain and Collier's in the United States.
            
            Multiple series have featured adaptations of all the stories in The Return of Sherlock Holmes, including the Sherlock Holmes Stoll film series (1921-1923), the radio series The Adventures of Sherlock Holmes (1930-1936), the radio series The New Adventures of Sherlock Holmes (1939-1950), and the BBC Sherlock Holmes 1952-1969 radio series."
        ]);
        DB::table('products')->insert([
            'categories_id' => 6,
            'name' => "Inferno",
            'author' => 'Dan Brown',
            'country' => 'United Kingdom',
            'published' => 2013,
            'price' => 50,
            'discount' => 0.10,
            'photo' => "images/shop/Inferno.jpg",
            'description' => "Inferno is a 2013 mystery thriller novel by American author Dan Brown and the fourth book in his Robert Langdon series, following Angels & Demons, The Da Vinci Code and The Lost Symbol. The book was published on May 14, 2013, ten years after publication of The Da Vinci Code (2003), by Doubleday. It was number one on the New York Times Best Seller list for hardcover fiction and Combined Print & E-book fiction for the first eleven weeks of its release, and also remained on the list of E-book fiction for the first seventeen weeks of its release. A film adaptation was released in the United States on October 28, 2016."
        ]);
        DB::table('products')->insert([
            'categories_id' => 6,
            'name' => "The Woman in White",
            'author' => 'Wilkie Collins',
            'country' => 'United Kingdom',
            'published' => 1860,
            'price' => 39,
            'discount' => 0.10,
            'photo' => "images/shop/The Woman in White.jpg",
            'description' => "The Woman in White is Wilkie Collins's fifth published novel, written in 1859 and set from 1849 to 1850. It is a mystery novel and falls under the genre of 'sensation novels'.

            The story can be seen as an early example of detective fiction with protagonist Walter Hartright employing many of the sleuthing techniques of later private detectives. The use of multiple narrators (including nearly all the principal characters) draws on Collins's legal training, and as he points out in his preamble: 'the story here presented will be told by more than one pen, as the story of an offence against the laws is told in Court by more than one witness'. Collins also drew on memories of his father, the artist William Collins, in the creation of drawing master Walter Hartright, and populates his story with a number of Italian characters, likely inspired by two years spent in Italy during childhood."
        ]);
        DB::table('products')->insert([
            'categories_id' => 16,
            'name' => "Madame Bovary",
            'author' => 'Gustave Flaubert',
            'country' => 'France',
            'published' => 1856,
            'price' => 42,
            'discount' => 0.10,
            'photo' => "images/shop/Madame Bovary.jpg",
            'description' => "Madame Bovary (/'boʊvəri/; French: [madam bɔvaʁi]), originally published as Madame Bovary: Provincial Manners (French: Madame Bovary: Mœurs de province [madam bɔvaʁi mœʁ(s) də pʁɔvɛ̃s]), is a novel by French writer Gustave Flaubert, published in 1856. The eponymous character lives beyond her means in order to escape the banalities and emptiness of provincial life.

            When the novel was first serialized in Revue de Paris between 1 October 1856 and 15 December 1856, public prosecutors attacked the novel for obscenity. The resulting trial in January 1857 made the story notorious. After Flaubert's acquittal on 7 February 1857, Madame Bovary became a bestseller in April 1857 when it was published in two volumes. A seminal work of literary realism, the novel is now considered Flaubert's masterpiece, and one of the most influential literary works in history."
        ]);
        DB::table('products')->insert([
            'categories_id' => 32,
            'name' => "Villette",
            'author' => 'Charlotte Brontë',
            'country' => 'United Kingdom',
            'published' => 1853,
            'price' => 51,
            'discount' => 0.10,
            'photo' => "images/shop/Villette.jpg",
            'description' => "Villette (/vi:'lɛt/) is an 1853 novel written by English author Charlotte Brontë. After an unspecified family disaster, the protagonist Lucy Snowe travels from her native England to the fictional Continental city of Villette to teach at a girls' school, where she is drawn into adventure and romance.

            Villette was Charlotte Brontë's third and last novel published during her life. It was preceded in writing by The Professor (her posthumously published first novel, of which Villette is a reworking, though still not very similar), Jane Eyre, and Shirley."
        ]);
        DB::table('products')->insert([
            'categories_id' => 18,
            'name' => "The Phantom of the Opera",
            'author' => 'Gaston Leroux',
            'country' => 'France',
            'published' => 1911,
            'price' => 53,
            'discount' => 0.10,
            'photo' => "images/shop/The Phantom of the Opera.jpg",
            'description' => "The Phantom of the Opera (French: Le Fantôme de l'Opéra) is a novel by French author Gaston Leroux. It was first published as a serial in Le Gaulois from 23 September 1909 to 8 January 1910, and was released in volume form in late March 1910 by Pierre Lafitte. The novel is partly inspired by historical events at the Paris Opera during the nineteenth century, and by an apocryphal tale concerning the use of a former ballet pupil's skeleton in Carl Maria von Weber's 1841 production of Der Freischütz. It has been successfully adapted into various stage and film adaptations, most notable of which are the 1925 film depiction featuring Lon Chaney, and Andrew Lloyd Webber's 1986 musical."
        ]);
        DB::table('products')->insert([
            'categories_id' => 8,
            'name' => "Washington Square",
            'author' => 'Henry James',
            'country' => 'United States',
            'published' => 1880,
            'price' => 45,
            'discount' => 0.10,
            'photo' => "images/shop/Washington Square.jpg",
            'description' => "Washington Square is a novel written in 1880 by Henry James about a father's attempts to thwart a romance between his naive daughter and the man he believes wishes to marry her for her money. The novel was famously adapted into a play, The Heiress, which in turn became an Academy Award-winning film starring Olivia de Havilland in the title role."
        ]);
        DB::table('products')->insert([
            'categories_id' => 1,
            'name' => "The Old Curiosity Shop",
            'author' => 'Charles Dickens',
            'country' => 'United Kingdom',
            'published' => 1841,
            'price' => 51,
            'discount' => 0.10,
            'photo' => "images/shop/The Old Curiosity Shop.jpg",
            'description' => "The Old Curiosity Shop is one of two novels (the other being Barnaby Rudge) which Charles Dickens published along with short stories in his weekly serial Master Humphrey's Clock, from 1840 to 1841. It was so popular that New York readers stormed the wharf when the ship bearing the final instalment arrived in 1841.

            The Old Curiosity Shop was printed in book form in 1841. Queen Victoria read the novel that year and found it 'very interesting and cleverly written'.

            The plot follows the life of Nell Trent and her grandfather, both residents of The Old Curiosity Shop in London."
        ]);
        DB::table('products')->insert([
            'categories_id' => 33,
            'name' => "The Handmaid's Tale",
            'author' => 'Margaret Atwood',
            'country' => 'Canada',
            'published' => 1985,
            'price' => 57,
            'discount' => 0.10,
            'photo' => "images/shop/The Handmaid's Tale.jpg",
            'description' => "The Handmaid's Tale is a futuristic dystopian novel by Canadian author Margaret Atwood and published in 1985. It is set in a near-future New England in a patriarchal, totalitarian theonomic state known as the Republic of Gilead, which has overthrown the United States government. Offred is the central character and narrator and one of the ".'"handmaids"'.", women who are forcibly assigned to produce children for the ".'"commanders"'.", who are the ruling class in Gilead."
        ]);
        DB::table('products')->insert([
            'categories_id' => 34,
            'name' => "Ulysses",
            'author' => 'James Joyce',
            'country' => 'United Kingdom',
            'published' => 1922,
            'price' => 52,
            'discount' => 0.10,
            'photo' => "images/shop/Ulysses.jpg",
            'description' => "Ulysses is a modernist novel by Irish writer James Joyce. Parts of it were first serialized in the American journal The Little Review from March 1918 to December 1920, and the entire work was published in Paris by Sylvia Beach on 2 February 1922, Joyce's fortieth birthday. It is considered one of the most important works of modernist literature and has been called ".'"a demonstration and summation of the entire movement."'." According to Declan Kiberd, ".'"Before Joyce, no writer of fiction had so foregrounded the process of thinking."'
        ]);
        DB::table('products')->insert([
            'categories_id' => 1,
            'name' => "Little Dorrit",
            'author' => 'Charles Dickens',
            'country' => 'United Kingdom',
            'published' => 1857,
            'price' => 47,
            'discount' => 0.10,
            'photo' => "images/shop/Little Dorrit.jpg",
            'description' => "Little Dorrit is a novel by Charles Dickens, originally published in serial form between 1855 and 1857. The story features Amy Dorrit, youngest child of her family, born and raised in the Marshalsea prison for debtors in London. Arthur Clennam encounters her after returning home from a 20-year absence, ready to begin his life anew.

            The novel satirises some shortcomings of both government and society, including the institution of debtors' prisons, where debtors were imprisoned, unable to work and yet incarcerated until they had repaid their debts. The prison in this case is the Marshalsea, where Dickens's own father had been imprisoned. Dickens is also critical of the impotent bureaucracy of the British government, in this novel in the form of the fictional ".'"Circumlocution Office"'.". Dickens also satirises the stratification of society that results from the British class system."
        ]);
        DB::table('products')->insert([
            'categories_id' => 1,
            'name' => "Dombey And Son",
            'author' => 'Charles Dickens',
            'country' => 'United Kingdom',
            'published' => 1848,
            'price' => 43,
            'discount' => 0.10,
            'photo' => "images/shop/Dombey And Son.jpg",
            'description' => "Dombey and Son is a novel by English author Charles Dickens. It follows the fortunes of a shipping firm owner, who is frustrated at the lack of a son to follow him in his footsteps; he initially rejects his daughter's love before eventually becoming reconciled with her before his death.

            The story features many Dickensian themes, such as arranged marriages, child cruelty, betrayal, deceit, and relations between people from different British social classes. The novel was first published in monthly parts between 1846 and 1848, with illustrations by Hablot Knight Browne (".'"Phiz"'.")."
        ]);
        DB::table('products')->insert([
            'categories_id' => 1,
            'name' => "The Prince",
            'author' => 'Niccolò Machiavelli',
            'country' => 'Italy',
            'published' => 1532,
            'price' => 38,
            'discount' => 0.10,
            'photo' => "images/shop/The Prince.jpg",
            'description' => "The Prince (Italian: Il Principe [il 'printʃipe]; Latin: De Principatibus) is a 16th-century political treatise written by Italian diplomat and political theorist Niccolò Machiavelli as an instruction guide for new princes and royals. The general theme of The Prince is of accepting that the aims of princes - such as glory and survival - can justify the use of immoral means to achieve those ends."
        ]);
        DB::table('products')->insert([
            'categories_id' => 26,
            'name' => "The Wonderful Wizard of Oz",
            'author' => 'L. Frank Baum',
            'country' => 'United States',
            'published' => 1900,
            'price' => 47,
            'discount' => 0.10,
            'photo' => "images/shop/The Wonderful Wizard of Oz.jpg",
            'description' => "The Wonderful Wizard of Oz is a 1900 children's novel written by author L. Frank Baum and illustrated by W. W. Denslow. It is the first novel in the Oz series of books. A Kansas farm girl named Dorothy ends up in the magical Land of Oz after she and her pet dog Toto are swept away from their home by a tornado. Upon her arrival in the magical world of Oz, she learns she cannot return home until she has destroyed the Wicked Witch of the West."
        ]);
        DB::table('products')->insert([
            'categories_id' => 35,
            'name' => "A Midsummer Night's Dream",
            'author' => 'William Shakespeare',
            'country' => 'United Kingdom',
            'published' => 1605,
            'price' => 54,
            'discount' => 0.10,
            'photo' => "images/shop/A Midsummer Night's Dream.jpg",
            'description' => "A Midsummer Night's Dream is a comedy written by William Shakespeare c. 1595 or 1596. The play is set in Athens, and consists of several subplots that revolve around the marriage of Theseus and Hippolyta. One subplot involves a conflict among four Athenian lovers. Another follows a group of six amateur actors rehearsing the play which they are to perform before the wedding. Both groups find themselves in a forest inhabited by fairies who manipulate the humans and are engaged in their own domestic intrigue. The play is one of Shakespeare's most popular and is widely performed."
        ]);
        DB::table('products')->insert([
            'categories_id' => 7,
            'name' => "Little Women",
            'author' => 'Louisa May Alcott',
            'country' => 'United States',
            'published' => 1869,
            'price' => 45,
            'discount' => 0.10,
            'photo' => "images/shop/Little Women.jpg",
            'description' => "Little Women is a coming-of-age novel written by American novelist Louisa May Alcott, originally published in two volumes in 1868 and 1869 at the request of her publisher.= The story follows the lives of the four March sisters—Meg, Jo, Beth, and Amy—and details their passage from childhood to womanhood. Loosely based on the lives of the author and her three sisters, it is classified as an autobiographical or semi-autobiographical novel."
        ]);
        DB::table('products')->insert([
            'categories_id' => 25,
            'name' => "David Copperfield",
            'author' => 'Charles Dickens',
            'country' => 'United Kingdom',
            'published' => 1850,
            'price' => 61,
            'discount' => 0.10,
            'photo' => "images/shop/David Copperfield.jpg",
            'description' => "David Copperfield is a novel in the bildungsroman genre by Charles Dickens, narrated by the eponymous David Copperfield, detailing his adventures in his journey from infancy to maturity. It was first published as a serial in 1849 and 1850 and as a book in 1850.

            David Copperfield is also an autobiographical novel: ".'"a very complicated weaving of truth and invention"'.", with events following Dickens's own life.Of the books he wrote, it was his favourite. Called ".'"the triumph of the art of Dickens"'.", it marks a turning point in his work, separating the novels of youth and those of maturity."
        ]);
        DB::table('products')->insert([
            'categories_id' => 20,
            'name' => "Heidi",
            'author' => 'Johanna Spyri',
            'country' => 'Switzerland',
            'published' => 1880,
            'price' => 55,
            'discount' => 0.10,
            'photo' => "images/shop/Heidi.jpg",
            'description' => "Heidi (/'haidi/; German: ['haidi]) is a work of children's fiction published between 1880 and 1881 by Swiss author Johanna Spyri, originally published in two parts as Heidi: Her Years of Wandering and Learning (German: Heidis Lehr- und Wanderjahre) and Heidi: How She Used What She Learned (German: Heidi kann brauchen, was es gelernt hat). It is a novel about the events in the life of a 5-year-old girl in her paternal grandfather's care in the Swiss Alps. It was written as a book ".'"for children and those who love children"'." (as quoted from its subtitle)."
        ]);
        DB::table('products')->insert([
            'categories_id' => 20,
            'name' => "A Little Princess",
            'author' => 'Frances Hodgson Burnett',
            'country' => 'United Kingdom',
            'published' => 1905,
            'price' => 54,
            'discount' => 0.10,
            'photo' => "images/shop/A Little Princess.jpg",
            'description' => "A Little Princess is a children's novel by Frances Hodgson Burnett, first published as a book in 1905. It is an expanded version of the short story ".'"Sara Crewe: or, What Happened at Miss Minchins"'.", which was serialized in St. Nicholas Magazine from December 1887, and published in book form in 1888. According to Burnett, after she composed the 1902 play A Little Un-fairy Princess based on that story, her publisher asked that she expand the story as a novel with ".'"the things and people that had been left out before"'.". The novel was published by Charles Scribner's Sons (also publisher of St. Nicholas) with illustrations by Ethel Franklin Betts and the full title A Little Princess: Being the Whole Story of Sara Crewe Now Being Told for the First Time."
        ]);
        DB::table('products')->insert([
            'categories_id' => 37,
            'name' => "Twenty Years After",
            'author' => 'Alexandre Dumas',
            'country' => 'France',
            'published' => 1845,
            'price' => 53,
            'discount' => 0.10,
            'photo' => "images/shop/Twenty Years After.jpg",
            'description' => "Twenty Years After (French: Vingt ans après) is a novel by Alexandre Dumas, first serialized from January to August 1845. A book of The d'Artagnan Romances, it is a sequel to The Three Musketeers (1844) and precedes the 1847-1850 novel The Vicomte de Bragelonne (which includes the sub-plot Man in the Iron Mask)."
        ]);
        DB::table('products')->insert([
            'categories_id' => 26,
            'name' => "The Tenant of Wildfell Hall",
            'author' => 'Anne Brontë',
            'country' => 'United Kingdom',
            'published' => 1848,
            'price' => 40,
            'discount' => 0.10,
            'photo' => "images/shop/The Tenant of Wildfell Hall.jpg",
            'description' => "The Tenant of Wildfell Hall is the second and final novel written by English author Anne Brontë. It was first published in 1848 under the pseudonym Acton Bell. Probably the most shocking of the Brontës' novels, it had an instant and phenomenal success, but after Anne's death her sister Charlotte prevented its re-publication in England until 1854."
        ]);
        DB::table('products')->insert([
            'categories_id' => 20,
            'name' => "Jo's Boys",
            'author' => 'Louisa May Alcott',
            'country' => 'United States',
            'published' => 1886,
            'price' => 52,
            'discount' => 0.10,
            'photo' => "images/shop/Jo's Boys.jpg",
            'description' => "Jo's Boys, and How They Turned Out: A Sequel to ".'"Little Men"'." is a novel by American author Louisa May Alcott, first published in 1886. The novel is the final book in the unofficial Little Women series. In it, Jo's children, now grown, are caught up in real world troubles."
        ]);
        DB::table('products')->insert([
            'categories_id' => 20,
            'name' => "Little Men",
            'author' => 'Louisa May Alcott',
            'country' => 'United Statse',
            'published' => 1871,
            'price' => 51,
            'discount' => 0.10,
            'photo' => "images/shop/Little Men.jpg",
            'description' => "Little Men, or Life at Plumfield with Jo's Boys, is a children's novel by American author Louisa May Alcott (1832-1888), which was first published in 1871 by Roberts Brothers. The book reprises characters from her 1868-69 two-volume novel Little Women, and acts as a sequel, or as the second book in an unofficial Little Women trilogy. The trilogy ends with Alcott's 1886 novel Jo's Boys, and How They Turned Out: A Sequel to Little Men. Alcott's story recounts the life of Jo Bhaer, her husband, and the various children at Plumfield Estate School. Alcott's classic novel has been adapted to a 1934 film, a 1940 film, a 1998 film, a television series, and a Japanese animated television series."
        ]);
        DB::table('products')->insert([
            'categories_id' => 33,
            'name' => "The Giver",
            'author' => 'Lois Lowry',
            'country' => 'United States',
            'published' => 1993,
            'price' => 56,
            'discount' => 0.10,
            'photo' => "images/shop/The Giver.jpg",
            'description' => "The Giver is a 1993 American young adult dystopian novel written by Lois Lowry, set in a society which at first appears to be utopian but is revealed to be dystopian as the story progresses. In the novel, the society has taken away pain and strife by converting to ".'"Sameness"'.", a plan that has also eradicated emotional depth from their lives. In an effort to preserve order, the society also lacks any color, climate, terrain, and a true sense of equality. The protagonist of the story, a 12-year-old boy named Jonas, is selected to inherit the position of Receiver of Memory, the person who stores all the past memories of the time before Sameness. Jonas struggles with concepts of the new emotions and things introduced to him, and whether they are inherently good, evil, or in between, and whether it is possible to have one without the other."
        ]);
        DB::table('products')->insert([
            'categories_id' => 20,
            'name' => "Under Wildwood",
            'author' => 'Colin Meloy',
            'country' => 'United States',
            'published' => 2012,
            'price' => 63,
            'discount' => 0.10,
            'photo' => "images/shop/Under Wildwood.jpg",
            'description' => "Under Wildwood: The Wildwood Chronicles, Book Two is a 2012 children's fantasy novel by The Decemberists' singer-songwriter Colin Meloy, illustrated by his wife Carson Ellis. The 576-page novel, the sequel to Wildwood: The Wildwood Chronicles, Book One, continues the tale of Prue McKeel and her adventures in the ".'"Impassable Wilderness,"'." a fantastical version of Portland, Oregon's Forest Park.[1] The natural beauty and local color of the city figure prominently. Ellis contributed 80 illustrations to the novel."
        ]);
        DB::table('products')->insert([
            'categories_id' => 3,
            'name' => "Farm Boy",
            'author' => 'Michael Morpurgo',
            'country' => 'United Kingdom',
            'published' => 1997,
            'price' => 49,
            'discount' => 0.10,
            'photo' => "images/shop/Farm Boy.jpg",
            'description' => "Farm Boy is a novel by Michael Morpurgo, best known as being the sequel to the popular novel War Horse. The book was first published in the United Kingdom in 1997 by Pavilion Books Limited and is illustrated by Michael Foreman. It was not initially planned for Morpurgo to write a sequel to War Horse, but the story was inspired after receiving many enquiries about what happens to Joey, a horse in service of the Army (the main character from War Horse) after the Great War. In an article in ChronicleLive Michael Morpurgo also stated that his favourite of his own works was Farm Boy. The book captures modern life on a farm in rural Devon, where Michael Morpurgo lives, while having retrospective flashbacks to the lives of Albert and Joey (characters from War Horse)"
        ]);
        DB::table('products')->insert([
            'categories_id' => 3,
            'name' => "Boy In The Striped Pajamas",
            'author' => 'John Boyne',
            'country' => 'United Kingdom',
            'published' => 2006,
            'price' => 65,
            'discount' => 0.10,
            'photo' => "images/shop/Boy In The Striped Pajamas.jpg",
            'description' => "The Boy in the Striped Pyjamas is a 2006 Holocaust novel by Irish novelist John Boyne. The plot concerns a German boy named Bruno whose father is the commandant of Auschwitz and Bruno's friendship with a Jewish detainee named Shmuel.

            Boyne wrote the entire first draft in two and a half days, without sleeping much; but also said that he was quite a serious student of Holocaust-related literature for years before the idea for the novel even came to him."
        ]);
        DB::table('products')->insert([
            'categories_id' => 1,
            'name' => "Women in Love",
            'author' => 'D. H. Lawrence',
            'country' => 'United Kingdom',
            'published' => 1920,
            'price' => 66,
            'discount' => 0.10,
            'photo' => "images/shop/Women in Love.jpg",
            'description' => "Women in Love (1920) is a novel by English author D. H. Lawrence. It is a sequel to his earlier novel The Rainbow (1915) and follows the continuing loves and lives of the Brangwen sisters, Gudrun and Ursula. Gudrun Brangwen, an artist, pursues a destructive relationship with Gerald Crich, an industrialist. Lawrence contrasts this pair with the love that develops between Ursula Brangwen and Rupert Birkin, an alienated intellectual who articulates many opinions associated with the author. The emotional relationships thus established are given further depth and tension by an intense psychological and physical attraction between Gerald and Rupert."
        ]);
        DB::table('products')->insert([
            'categories_id' => 2,
            'name' => "Alice's Adventures in Wonderland",
            'author' => 'Lewis Carroll',
            'country' => 'United Kingdom',
            'published' => 1865,
            'price' => 66,
            'discount' => 0.10,
            'photo' => "images/shop/Alice's Adventures in Wonderland.jpg",
            'description' => "The Mirror Crack'd from Side to Side, a novel by Agatha Christie, was published in the UK in 1962 and a year later in the US under the title The Mirror Crack'd. The story features amateur detective Miss Marple solving a mystery in St. Mary Mead.
            
            Jane Marple falls while walking in St. Mary Mead. She is helped by Heather Badcock, who brings her into her own home to rest. Over a cup of tea, Heather tells Miss Marple how she met the American actress Marina Gregg, who recently moved into the area and bought Gossington Hall from Miss Marple's friend Dolly Bantry."
        ]);
        DB::table('products')->insert([
            'categories_id' => 39,
            'name' => "The Mill on the Floss",
            'author' => 'George Eliot',
            'country' => 'United Kingdom',
            'published' => 1860,
            'price' => 39,
            'discount' => 0.10,
            'photo' => "images/shop/The Mill on the Floss.jpg",
            'description' => "The Mill on the Floss is a novel by George Eliot, first published in three volumes in 1860 by William Blackwood. The first American edition was published by Harper & Brothers, Publishers, New York.
            
            Spanning a period of 10 to 15 years, the novel details the lives of Tom and Maggie Tulliver, siblings who grow up at Dorlcote Mill on the River Floss. The mill is at the junction of the River Floss and the more minor River Ripple, near the village of St Ogg's in Lincolnshire, England. Both the rivers and the village are fictional."
        ]);
        DB::table('products')->insert([
            'categories_id' => 3,
            'name' => "The Last Of The Mohicans",
            'author' => 'James Fenimore Cooper',
            'country' => 'United States',
            'published' => 1826,
            'price' => 27,
            'discount' => 0.20,
            'photo' => "images/shop/The Last Of The Mohicans.jpg",
            'description' => "The Last of the Mohicans: A Narrative of 1757 is an historical romance novel written by James Fenimore Cooper in 1826.

            It is the second book of the Leatherstocking Tales pentalogy and the best known to contemporary audiences. The Pathfinder, published 14 years later in 1840, is its sequel. The Last of the Mohicans is set in 1757, during the French and Indian War (the North American theater of the Seven Years' War), when France and Great Britain battled for control of North America. During this war, both the French and the British used Native American allies, but the French were particularly dependent, as they were outnumbered in the Northeast frontier areas by the British. Specifically, the events of the novel are set immediately before, during, and after the Siege of Fort William Henry."
        ]);
        DB::table('products')->insert([
            'categories_id' => 1,
            'name' => "The Mayor of Casterbridge",
            'author' => 'Thomas Hardy',
            'country' => 'United Kingdom',
            'published' => 1886,
            'price' => 39,
            'discount' => 0.15,
            'photo' => "images/shop/The Mayor of Casterbridge.jpg",
            'description' => "The Mayor of Casterbridge: The Life and Death of a Man of Character is an 1886 novel by the English author Thomas Hardy. One of Hardy's Wessex novels, it is set in a fictional rural England with Casterbridge standing in for Dorchester in Dorset where the author spent his youth. It was first published as a weekly serialisation from January 1886.

            The novel is considered to be one of Hardy's masterpieces, although it has been criticised for incorporating too many incidents, a consequence of the author trying to include something in every weekly published instalment."
        ]); 
        DB::table('users')->insert([
            'name'=>'admin1',
            'role'=>'admin',
            'email'=>'admin1@gmail.com',
            'password'=>Hash::make('12345678')
        ]);
        DB::table('users')->insert([
            'name'=>'user1',
            'role'=>'user',
            'email'=>'user1@gmail.com',
            'password'=>Hash::make('12345678')
        ]);
        DB::table('users')->insert([
            'name'=>'user2',
            'role'=>'user',
            'email'=>'user2@gmail.com',
            'password'=>Hash::make('12345678')
        ]);
        DB::table('users')->insert([
            'name'=>'user3',
            'role'=>'user',
            'email'=>'user3@gmail.com',
            'password'=>Hash::make('12345678')
        ]);
        DB::table('users')->insert([
            'name'=>'user4',
            'role'=>'user',
            'email'=>'user4@gmail.com',
            'password'=>Hash::make('12345678')
        ]);
        
        //insert feedbacks table
        DB::table('feedbacks')->insert([
            'users_id' => 2,
            'products_id' => 4,
            'rating' => 5,
            'description' => 'This is so cool! i love it'
        ]);
        DB::table('feedbacks')->insert([
            'users_id' => 2,
            'products_id' => 1,
            'rating' => 4,
            'description' => 'This is quite good'
        ]);
        DB::table('feedbacks')->insert([
            'users_id' => 3,
            'products_id' => 2,
            'rating' => 3,
            'description' => 'This is acceptable'
        ]);
        DB::table('feedbacks')->insert([
            'users_id' => 4,
            'products_id' => 3,
            'rating' => 2,
            'description' => 'Kinda bad imo'
        ]);
        DB::table('feedbacks')->insert([
            'users_id' => 2,
            'products_id' => 1,
            'rating' => 1,
            'description' => 'This is the worst!'
        ]);
        DB::table('feedbacks')->insert([
            'users_id' => 5,
            'products_id' => 3,
            'rating' => 4,
            'description' => 'Nice'
        ]);
        DB::table('feedbacks')->insert([
            'users_id' => 2,
            'products_id' => 2,
            'rating' => 5,
            'description' => "Just what I'm expecting"
        ]);
        DB::table('feedbacks')->insert([
            'users_id' => 4,
            'products_id' => 4,
            'rating' => 2,
            'description' => 'Meh'
        ]);
        DB::table('feedbacks')->insert([
            'users_id' => 3,
            'products_id' => 3,
            'rating' => 4,
            'description' => 'Good enough'
        ]);
        DB::table('feedbacks')->insert([
            'users_id' => 3,
            'products_id' => 2,
            'rating' => 4,
            'description' => 'daoksdmaoksdaoksdmaokcmscohsdguifdsgvjfdnbjfdsiobsdnb'
        ]);
        DB::table('feedbacks')->insert([
            'users_id' => 5,
            'products_id' => 1,
            'rating' => 4,
            'description' => 'This is quite good'
        ]);
        DB::table('feedbacks')->insert([
            'users_id' => 4,
            'products_id' => 5,
            'rating' => 1,
            'description' => 'Meh'
        ]);
        DB::table('feedbacks')->insert([
            'users_id' => 3,
            'products_id' => 5,
            'rating' => 4,
            'description' => 'Easy to understand'
        ]);
        DB::table('feedbacks')->insert([
            'users_id' => 2,
            'products_id' => 6,
            'rating' => 5,
            'description' => 'Perfect'
        ]);
        DB::table('feedbacks')->insert([
            'users_id' => 5,
            'products_id' => 6,
            'rating' => 3,
            'description' => 'Whatever'
        ]);
        DB::table('feedbacks')->insert([
            'users_id' => 3,
            'products_id' => 7,
            'rating' => 4,
            'description' => 'Nice'
        ]);
        DB::table('feedbacks')->insert([
            'users_id' => 2,
            'products_id' => 7,
            'rating' => 2,
            'description' => 'This is not good'
        ]);
        DB::table('feedbacks')->insert([
            'users_id' => 5,
            'products_id' => 8,
            'rating' => 3,
            'description' => 'Normal'
        ]);
        DB::table('feedbacks')->insert([
            'users_id' => 4,
            'products_id' => 5,
            'rating' => 4,
            'description' => 'Interesting story'
        ]);
        DB::table('feedbacks')->insert([
            'users_id' => 3,
            'products_id' => 8,
            'rating' => 2,
            'description' => 'Bleh'
        ]);
        DB::table('replies')->insert([
            'feedbacks_id' => 1,
            'users_id' => 3,
            'description' => 'It is not that good'
        ]);
        DB::table('replies')->insert([
            'feedbacks_id' => 1,
            'users_id' => 2,
            'description' => 'Agreed'
        ]);
        DB::table('replies')->insert([
            'feedbacks_id' => 2,
            'users_id' => 5,
            'description' => 'Heh'
        ]);
        DB::table('replies')->insert([
            'feedbacks_id' => 2,
            'users_id' => 4,
            'description' => 'Hi'
        ]);
        DB::table('replies')->insert([
            'feedbacks_id' => 3,
            'users_id' => 3,
            'description' => 'Pls read more be4 comment'
        ]);
        DB::table('replies')->insert([
            'feedbacks_id' => 3,
            'users_id' => 2,
            'description' => 'bruh'
        ]);
        DB::table('replies')->insert([
            'feedbacks_id' => 4,
            'users_id' => 5,
            'description' => 'Yes'
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
