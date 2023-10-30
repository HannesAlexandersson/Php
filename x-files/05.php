<?php
$lines[] = nl2br(file_get_contents('x-lines.txt'));
foreach($lines as $line){
    echo $line;
}
