<?php

declare(strict_types=1);

function sayHelloTo(string $name): string
{
    return 'hello, '.$name;
}



function getMovieDescription(string $title, string $director, int $year):string
{
    return 'The movie '.$title.' was released '.$year.' and directed by '.$director.'.';
}



function getFirstChar(string $value):string
{
   return substr($value,0,1);
}



function getStringsLength(array $strings): array
{
    $stringLength = [];
    foreach($strings as $string){
        $stringLength[] = strlen($string);
    }
    return $stringLength;
}



function getBlock(int $block): string
{
    
    $blocks = [
        'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAFUlEQVR4AWPI7vlPEhrGGkY1jGoAAEwQ9hBqU6EFAAAAAElFTkSuQmCC',
        'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQAgMAAABinRfyAAAACVBMVEXnWhD31rUAAABagmvSAAAANklEQVR4AWMQDU0MYXBgUGFCIdRAhNIKIKEahi67gGECE0MUiHBd5QAUCwMRTA5cDForslYAAKVzDEjCrcCGAAAAAElFTkSuQmCC',
        'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAALElEQVR4AWP4fm0rSYjheZQAJmJgwClOogZyAH5TMcXpoIFUQJtgHY0HUgEAQR/y28nnCdAAAAAASUVORK5CYII=',
        'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQAgMAAABinRfyAAAADFBMVEVrjP/nWhD/pUIAAABg5DuiAAAAQElEQVR4AWMQDQ0NYchatWo1Q96qVbsZsqZGrWbIir8GJOKmw4h94UBiZT2IqAISq36BWFlgLkjbr90QA/4DAQBLbyVGZjjebAAAAABJRU5ErkJggg==',
    ];
    return $blocks[$block];
}
function getQuote(int $number): string
{
    $quotes = [
        'Different things can be sad... it\'s not all war!',
        'I want you to be the very best version of yourself that you can be.',
        'People go by the names their parents give them, but they don\'t believe in God.',
        'Some people aren\'t built happy, you know.',
        'The only thing exciting about 2002 is that it\'s a palindrome.',
    ];
    $newKey = $number -1;
    if (array_key_exists($newKey,$quotes) === false){
        return 'Error: quote '.$number.' does not exist.';
        
    }else {
        return $quotes[$newKey];
    }
}
function getRandomQuote()
{
    $quotes = [
        'Different things can be sad... it\'s not all war!',
        'I want you to be the very best version of yourself that you can be.',
        'People go by the names their parents give them, but they don\'t believe in God.',
        'Some people aren\'t built happy, you know.',
        'The only thing exciting about 2002 is that it\'s a palindrome.',
    ];

   return $quotes[rand(0,4)];
}

function getMap(int $width, int $height)
{
    for($i = 0; $i < $height; $i++){?>
        <div><?php
        if ($i === $height -1){    
        for($j = 0; $j < $width; $j++){?>
            <img src="<?php echo getBlock(1); ?>" /><?php
        }
    }
    else{
        for($j = 0; $j < $width; $j++){?>
        <img src="<?php echo getBlock(0); ?>" /><?php
        }
    }
    }?></div><?php
}