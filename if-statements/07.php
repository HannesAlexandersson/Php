<link rel="Stylesheet" href="style.css"/>
<?php
// 0 = white, 1 = black
$map = [
    [0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0],
    [0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0],
    [0, 0, 1, 1, 1, 1, 1, 1, 1, 0, 0],
    [0, 1, 1, 0, 1, 1, 1, 0, 1, 1, 0],
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 0, 1, 1, 1, 1, 1, 1, 1, 0, 1],
    [1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 1],
    [0, 0, 0, 1, 1, 0, 1, 1, 0, 0, 0],
];/*?>
<div class="wrapper"><?php

for ($i = 0; $i < count($map[$i]); $i++){ ?>
    <div class="line-div"><?php
    for ($j = 0; $j < count($map[$i]); $j++)   
        if ($map[$i][$j] == 0){?>
        <div class="white"></div><?php        
        } 
        else {?>
        <div class="black"></div><?php
        }?>
        </div><?php
}?>
</div>
*/?>
<div class="wrapper"><?php

for ($i = 0; $i < count($map[$i]); $i++){ ?>
    <div class="line-div"><?php
    for ($j = 0; $j < count($map[$i]); $j++){  ?>
        <div class="<?php echo $map[$i][$j] === 0 ?  'white' : 'black';?>"></div>
        <?php
    }?></div><?php
}?>
</div>