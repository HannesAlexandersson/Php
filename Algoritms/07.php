<?php
$people = [
    'Christopher Læssø' => true,
    'Ruben Östlund' => false,
    'Elisabeth Moss' => true,
];
?>
<ol><?php
foreach($people as $key => $value){?>
    <li><?php if ($value === true){
        echo $key.' is an actor';
    }else {
        echo $key.' is NOT an actor';
    }?></li><?php
}?>
</ol>
