<?php
declare(strict_types=1);
$data_url = "https://yrgo.github.io/api/movies/what-we-do-in-the-shadows.json";
$showData_json = file_get_contents($data_url);
$showData = [];
$showData =
json_decode($showData_json, true);

?>
<!DOCTYPE html>
<body>
    <ul>
        <?php for ($i = 0; $i < count($showData); $i++) : ?>
            <li>
                <?=$showData[$i]['name']?>
            </li><?php endfor; ?>       
    </ul>
</body>