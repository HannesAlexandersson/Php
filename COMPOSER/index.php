<?php

declare(strict_types=1);
/*
2.
We don't want to show the entire content. Implement a new method on the Article class which is called getExcerpt. 
It should be public and accept the integer $numberOfWords and return the specified number of words from the 
$content property as a string. Print the string from the method instead of the $content property in the article 
and end with an ellipsis. Below is an example from the first article.

3.
The client has asked us to implement publish dates for our articles. Update the Article class 
to accept the property $date which should be an instance of the built-in DateTime class. 
Update the index.php file with the two dates below and print them below the title in the 
article within an <time> element in the following format: March 24th 2020. Remember to add 
the datetime attribute to the <time> element.

4.
Great, we've now added title, excerpt and publish date for each article. 
Now we need to display the article's author. Add a new Author class under the App namespace. 
Each author should accept the author's name as first property. Add the Author class as an property on 
the Article class. Within the new index.php file, create a new author instance and give it the name Mando. 
Mando has written both articles. Below the title, display the author and time within the same paragraph.

5.
We're almost done. The last step is to add a link for each article. It would be cool if we could create a 
good looking and valid URL for each article based on the title. You probably remember camelCase from an 
earlier class but do you remember kebab-case? Add a new static method to the Str class and name it kebabCase. 
The method accepts a string and should return it in kebab-case. Within Article constructor, add a new $slug 
property to the class using $this which uses the new kebabCase method and converts the title to a slug. 
Add a new link below the excerpt in the article which contains Continue reading → and links to the new $slug.
*/
require __DIR__ . '/vendor/autoload.php';
use App\Support\Str;
use App\Article;
use App\Blog;
use App\Author;

$author = new Author('Mando');
$blog = new Blog('The Mandalorian');


$blog->addArticle(new Article("Mandos Tips for Traveling the Galaxy", "With all the stress that goes into booking flights and lodging, packing (and not forgetting) everything you'll need, finding pet sitters, and everything else that goes with a trip overseas, there's the added stress of staying connected while abroad.", new DateTime('2020-03-24'), $author));
$blog->addArticle(new Article("A Galaxy Extremely Far Far Away", "A long time ago, a galaxy far, far away sprang into existence. Billions of years later, light from that galaxy hit a mirror in a solar-powered satellite orbiting the third planet of a medium-sized star, and the scientific community of the ruling species of that planet got really excited. And they all lived happily ever after.", new DateTime("2020-10-30"), $author));
?>
<h1><?= $blog->name ?></h1>
<main>
    <?php foreach ($blog->articles as $article) : ?>
        <article>
            <h2><?= $article->title ?></h2>
            <p>Written by:<?= $article->author->name ?> on <time><?= $article->date->format('F jS, Y') ?></time></p><!--date-format: fullmonth, day of month, full year -->
            <p><?= $article->getExcerpt(20) ?></p>
            <p><a href="/<?= $article->slug ?>">Continue reading-></a></p>
        </article>
    <?php endforeach; ?>
</main>
<?php

echo Str::snakeCase('This is the Way'), PHP_EOL; // this_is_the_way

echo Str::constantCase('This is the Way'), PHP_EOL; // THIS_IS_THE_WAY

echo Str::pascalCase('This is the Way'), PHP_EOL; // ThisIsTheWay