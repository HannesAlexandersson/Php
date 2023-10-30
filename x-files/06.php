<?php
/*When the user submits the form a new text file (txt) with the content should be created.
 The name attribute is the name of the file and the content attribute is the content of the file. 
 If everything went smoothly you should now see new files appearing within the files directory.
 */
mkdir(__DIR__ . '/files');
// TODO: Implement your logic here!
if (isset($_POST['name'],$_POST['content'])){
    $name = htmlspecialchars($_POST['name']);
    $content = htmlspecialchars($_POST['content']);
    file_put_contents('files/'.$name.'.txt',$content,FILE_APPEND);
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
        <div class="row mt-5 justify-content-md-center">
            <div class="col-md-6 ml-center">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" placeholder="dana-scully.txt" class="form-control" required>
                        <small class="form-text">Please provide a filename without an extension.</small>
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea name="content" id="content" rows="8" cols="80" class="form-control" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Add Note</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>