<?php

declare(strict_types=1);

require __DIR__ . '/functions.php';

$map = [
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 3, 0, 0, 2, 3, 2, 3, 2, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
];


for ($i = 0; $i < count($map[$i]); $i++){?>
    <div class="row"><?php
        for($j = 0; $j < count($map[$i]); $j++){?>
            <img src="<?php echo getBlock($map[$i][$j]); ?>" /><?php
        }?>
    </div><?php
}


/*
foreach ($map as $key){?>
    <div><?php
    foreach( $key as $block){?>
        <img src="<?php echo getBlock($block); ?>" /><?php
    }?>
    </div><?php
}


    */