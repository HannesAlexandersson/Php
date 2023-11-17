<?php
declare(strict_types=1);
header('Content-Type: application/json');
$vampires = json_decode(file_get_contents(__DIR__ . '/vampires.json'));
if(isset($_GET['sortBy'])){   
    $sort = htmlspecialchars($_GET['sortBy']);
    if($sort === 'actor'){   
    $vampires = arsort($vampires['actor']);
    }elseif($sort === 'name'){    
    $vampires = krsort($vampires['name']);
    }
    else  {
        echo 'error';
    }
}


echo json_encode($vampires);