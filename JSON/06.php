<?php
declare(strict_types=1);
/*
We've learned how we can fetch and save data using a JSON file. 
Now we should be able to save user data from a <form> into a 
JSON file. Copy the 06.php from the resources directory. When 
the user submits the form, sanitize the data and save it to a 
JSON file called actors.json. The actors within the actors.json 
file should never be overwritten. When the user submits new actors, 
they should be added to the actors.json file. The data in the 
actors.json file should be an array of actors in JSON format. 
You will not need the FILE_APPEND constant to complete this 
exercise. GLHF! ✌️
*/
function sanitizeUserData($input)
{
    return htmlspecialchars($input);
}
$submitSuccessMessage = '';
if (isset($_POST['name'], $_POST['tmdb_url'])) {
    // Ta emot och sanera data
    $name = sanitizeUserData($_POST['name']);
    $tmdb_url = sanitizeUserData($_POST['tmdb_url']);

    // Läs befintlig JSON-fil (om den finns)
    $jsonFile = 'actors.json';
    if (file_exists($jsonFile)) {
        $existingData = json_decode(file_get_contents($jsonFile), true);
    } else {
        // Skapa en tom array om filen inte finns
        $existingData = [];
    }

    // Lägg till ny data i arrayen
    $existingData[] = [
        'name' => $name,
        'tmdb_url' => $tmdb_url
    ];

    // Konvertera arrayen till JSON-format
    $jsonData = json_encode($existingData, JSON_PRETTY_PRINT);

    // Spara JSON-data till filen
    if ($existingData === null) {
        die('Error decoding existing JSON data.');
    }

    if (file_put_contents($jsonFile, $jsonData) === false) {
        die('Error saving JSON data to file.');
    }
    // Uppdatera meddelandet
    $submitSuccessMessage = 'Formuläret har skickats och datan har lagrats!';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row pt-5 justify-content-center">
            <div class="col-md-6">
            <?php if ($submitSuccessMessage): ?>
                    <div class="alert alert-success" role="alert">
                        <?= $submitSuccessMessage ?>
                    </div>
                <?php endif; ?>
                <form action="06.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input class="form-control" type="text" name="name" id="name" placeholder="Lena Dunham">
                        <small class="form-text">Please provide the actor's full name.</small>
                    </div>

                    <div class="mb-3">
                        <label for="tmdb_url">TMDb URL</label>
                        <input class="form-control" type="url" name="tmdb_url" id="tmdb_url" placeholder="https://www.themoviedb.org/person/139135-lena-dunham">
                        <small class="form-text">Please provide the actor's TMDb URL.</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>