<?php

// Try to hack this form by inserting 
// <script>alert("Hello");</script>
// into the comment or the name.

// Try with rows 20-21 commented or uncommented.


$name = "";
$content = "";

// Check post and do stuff
if (isset($_POST['name'], $_POST['content']))

    // Associative array deconstructing.
    ['name' => $name, 'content' => $content] = $_POST;

// Sanitize
$name = htmlspecialchars($name, ENT_QUOTES);
$content = htmlspecialchars($content, ENT_QUOTES);

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
        <div class="row mt-5 justify-content-md-center">
            <div class="col-md-6 ml-center">
                <section id="content">
                    <h2><?= $name; ?></h2>
                    <p><?= $content; ?></p>
                </section>

                <form action="form.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" placeholder="Rune" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea name="content" id="content" rows="8" cols="80" class="form-control" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Add content</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>