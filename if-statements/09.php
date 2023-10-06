<?php
$stars = [
    ['color' => 'aqua', 'size' => 2],
    ['color' => 'aquamarin', 'size' => 3],
    ['color' => 'hotpink', 'size' => 1],
    ['color' => 'white', 'size' => 2],
    ['color' => 'yellow', 'size' => 1],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>09</title>
    <style>
        body {
            background-color: #111;
        }

        @keyframes fade-in {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        div {
            animation: fade-in 1s;
        }
        
    </style>
</head>

<body>
    <!-- TODO: Implement the space logic here. -->
    <?php 
    for ( $i = 0; $i < 256; $i++){?>
        <div style="background-color:<?= $stars[rand(0,5)]['color']?>;
                    width:<?= $stars[rand(0,5)]['size']?>px;
                    height:<?= $stars[rand(0,5)]['size']?>px;
                    position:absolute; 
                    left:<?= rand(0,1440)?>px; 
                    top:<?= rand(0,1024)?>px;"></div><?php
    }
    ?>
</body>

</html>