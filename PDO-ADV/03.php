<?php
/*
 The Movie Database is missing a movie by one of our directors. We need to create a way to 
 insert new movies into the database. When the user submits the <form>, insert the movie into 
 the movies table. Open the database in your terminal or TablePlus and check if the movie was inserted or not.
If you're working with user data, you should never use the query function. Instead use the bindParam, 
prepare and execute functions.
*/
$database = new PDO('sqlite:tmdb.db');

$statement = $database->query('SELECT * FROM directors ORDER BY first_name');

$directors = $statement->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST['title'], $_POST['tmdb_url'], $_POST['director_id'])) {
    $title = trim($_POST['title']);
    $tmdbUrl = trim($_POST['tmdb_url']);
    $directorId = trim($_POST['director_id']);

    // först förbereder vi vår query, vi använder placeholders för att sedan binda värden till dessa i bindParamraderna, där binds placeholderna i queryn till våra variabler som fått värden från $_GET/$_POST
    $statement = $database->prepare("INSERT INTO movies (title, tmdb_url, director_id) VALUES (:title, :tmdb_url, :director_id)");
    $statement->bindParam(':title', $title);
    $statement->bindParam(':tmdb_url', $tmdbUrl);
    $statement->bindParam(':director_id', $directorId);
    $statement->execute();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row pt-5 justify-content-center">
            <div class="col-md-6">
                <form action="03.php" method="post">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input class="form-control" type="text" name="title" id="title" placeholder="Eyes Wide Shut">
                        <small class="form-text">Please provide the movie's title.</small>
                    </div>

                    <div class="mb-3">
                        <label for="tmdb_url" class="form-label">TMDb URL</label>
                        <input class="form-control" type="url" name="tmdb_url" id="tmdb_url" placeholder="https://www.themoviedb.org/movie/345-eyes-wide-shut">
                        <small class="form-text">Please provide the movie's TMDb URL.</small>
                    </div>

                    <div class="mb-3">
                        <label for="director_id" class="form-label">Director</label>
                        <select class="form-control" name="director_id" id="director_id">
                            <?php foreach ($directors as $director) : ?>
                                <option value="<?php echo $director['id']; ?>">
                                    <?php echo $director['first_name'], ' ', $director['last_name']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <small class="form-text">Please provide the movie's director.</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>