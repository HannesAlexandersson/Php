<?php
declare(strict_types=1);
// array måste initilazisas innan isset!annars vet php inte vad den ska pusha in POST i 
$comments = [
    ['name' => 'Andrew Cunanan', 'message' => 'My father. My father. He\'s a liar. My father\'s a thief.'],
    ['name' => 'Modesto Cunanan', 'message' => 'Don\'t believe a word they say.'],
    ['name' => 'Gianni Versace', 'message' => 'Success only comes with hard work.'],
];

if (isset($_POST['name'],$_POST['message'])){
    $name = $_POST['name'];
    $message = $_POST['message'];
    array_push($comments,$_POST);  
    
 }

function getMessages(array $comments):void
{
    foreach($comments as $comment){?>    
        <h6><?=$comment['name'];?></h6>
        <p><?=$comment['message'];?></p><?php
        }
}
// TODO: Implement the comments logic here.
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>07</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row mt-4">
            <div class="col-lg-6 offset-lg-3">
                <h1 class="h5">Comments</h1><?php
                
                //<!-- TODO: Implement the comments list here. -->
                getMessages($comments); ?>
            </div>
        </div>

        <div class="row">
            <form class="col-lg-6 offset-lg-3" action="07.php" method="post">
                <hr>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="mb-3" class="form-label">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add comment</button>
            </form>
        </div>
    </main>
</body>

</html>