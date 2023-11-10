<?php
/*
Oh shoot! One of our directors had their named spelled incorrectly. 
When the user submits the <form>, update the director based on the id 
in the form data. If the director was updated, it should be visible in 
the form after the page reload.
*/
//koppla databasen till en PDO object
$database = new PDO('sqlite:tmdb.db');
// Om user har fyllt i formuläret OCH postat det, så sparar vi datan i variabler
if (isset($_POST['id'], $_POST['first_name'], $_POST['last_name'], $_POST['tmdb_url'], $_POST['biography'])) {
    $id = trim($_POST['id']);
    $firstName = trim($_POST['first_name']);
    $lastName = trim($_POST['last_name']);
    $tmdbUrl = trim($_POST['tmdb_url']);
    $biography = trim($_POST['biography']);

    // Först så förbereder vi en query med prepare där vi sätter om firstname till en placeholder som vi senare i bindParam kopplar till den variabel som vi tidigare gav värdet av den datan som user har angett i formuläret.
    $statement = $database->prepare("UPDATE directors SET first_name = :first_name WHERE id = :id");
    $statement->bindParam(':first_name', $firstName); // här berättar vi vad placeholdern i queryn ska bindas till för value,, i detta fallet så binder vi den till variablen firstName som ju är värdet av den data som user har angett i formuläret
    $statement->bindParam(':id', $id); // samma sak här, vi talar om vad placeholdern har för value genom att binda det till den variablern som håller värdet av den data som användaren ahr anget i formuläret. 
    $statement->execute();
}

$statement = $database->query('SELECT * FROM directors WHERE id = 5');

$director = $statement->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row pt-5 justify-content-center">
            <div class="col-md-6">
                <form action="04.php" method="post">
                    <input type="hidden" name="id" value="<?= $director['id'] ?>">

                    <div class="mb-3">
                        <label for="first_name" class="form-label">First name</label>
                        <input class="form-control" type="text" name="first_name" id="first_name" value="<?= htmlspecialchars($director['first_name']) ?>">
                        <small class="form-text">Please provide the director's first name.</small>
                    </div>

                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last name</label>
                        <input class="form-control" type="text" name="last_name" id="last_name" value="<?= htmlspecialchars($director['last_name']) ?>">
                        <small class="form-text">Please provide the director's last name.</small>
                    </div>

                    <div class="mb-3">
                        <label for="tmdb_url" class="form-label">TMDb URL</label>
                        <input class="form-control" type="url" name="tmdb_url" id="tmdb_url" value="<?= htmlspecialchars($director['tmdb_url']) ?>">
                        <small class="form-text">Please provide the movie's TMDb URL.</small>
                    </div>

                    <div class="mb-3">
                        <label for="biography" class="form-label">Biography</label>
                        <textarea class="form-control" name="biography" id="biography" rows="8" cols="80"><?= htmlspecialchars($director['biography']) ?></textarea>
                        <small class="form-text">Please provide the director's biography.</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>