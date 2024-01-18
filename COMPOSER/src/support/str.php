<?php

declare(strict_types=1);

namespace App\Support;

class Str
{
    public static function camelCase(string $string): string
    {
        $string = str_replace(['_', '-'], ' ', $string);

        $words = explode(' ', $string);

        $words = array_map(function ($word) {
            return ucwords(strtolower($word));
        }, $words);

        return lcfirst(implode('', $words));
    }

    public static function kebabCase(string $string): string
    {
        $string = str_replace(['_', ' ', ',', '.'], '-', $string);// it takes all the instances inside the [] and replaces it with an -

        return strtolower($string);//returns the new string that now has an - between words instead of _, , ,, .
    }

    public static function snakeCase(string $string)
    {
        $string = str_replace(['-', ' ', ',', '.'], '_', $string);

        return strtolower($string);
    }
    public static function constantCase(string $string)
    {
        $string = str_replace(['-', ' ', ',', '.'], '_', $string);
        return strtoupper($string);
    }
    public static function pascalCase(string $string)
    {
       // Remove spaces and underscores, capitalize each word
    $words = preg_split('/[\s_]+/', $string);
    $capitalizedWords = array_map('ucfirst', $words);

    // Concatenate the words to form PascalCase
    $pascalCaseString = implode('', $capitalizedWords);

    return $pascalCaseString;
    }
}