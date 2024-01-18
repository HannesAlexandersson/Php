<?php

declare(strict_types=1);

namespace App;

use DateTime;
use App\Support\Str;// we need to point at where in the namespace the class is

class Article
{
    public string $slug;
    public function __construct(public string $title, public string $content, public DateTime $date, public Author $author)
    {
        $this->slug = Str::kebabCase($title);
    }

    public function getExcerpt($numberOfWords) {
        $words = str_word_count($this->content, 1); // Split the content into an array of words
        $excerpt = implode(' ', array_slice($words, 0, $numberOfWords)); // Take the specified number of words

        // Append ellipsis if the content has more words than the excerpt
        if (count($words) > $numberOfWords) {
            $excerpt .= '...';
        }

        return $excerpt;
    }
}