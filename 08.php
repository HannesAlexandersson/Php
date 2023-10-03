<?php
$actors = [
    ['name' => 'Ally Sheedy ', 'year' => 1962],
    ['name' => 'Anthony Michael Hall', 'year' => 1968],
    ['name' => 'Emilio Estevez', 'year' => 1962],
    ['name' => 'Judd Nelson', 'year' => 1959],
    ['name' => 'Molly Ringwald', 'year' => 1968],
];
foreach ($actors as $key => $value){
    if ($value['year'] < 1960 && $value['year'] > 1965){
        continue;
    } else if ($value['year'] > 1960 && $value['year'] < 1965){
        echo $value['name'];?><br><?php
    }
}