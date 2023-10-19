<?php
declare(strict_types=1);
$errors = [];
if (isset($_POST['character'],$_POST['quote'])){
    $name = $_POST['character'];
    $message = $_POST['quote'];
    array_push($quotes,$_POST);  
    if(htmlspecialchars($_POST['character'],ENT_QUOTES) === false || htmlspecialchars($_POST['quote'],ENT_QUOTES) === false){
        
};
$quotes = [
    ['character' => 'Mark Zuckerburg', 'quote' => 'You know, you really don\'t need a forensics team to get to the bottom of this. If you guys were the inventors of Facebook, you\'d have invented Facebook.'],
    ['character' => 'Marylin Delpy', 'quote' => 'You\'re not an asshole, Mark. You\'re just trying so hard to be.'],
];

// TODO: Implement the adding new quotes logic here.
function getQuotes(array $quotes):void
{
    foreach($quotes as $quote){?>    
        <h6><?=$quote['character'];?></h6>
        <p><?=$quote['quote'];?></p><?php
        }
        
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>08</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row mt-4">
            <div class="col-lg-8 offset-lg-2">
                <h1 class="h5">Quotes</h1>
                <!-- TODO: Implement the quotes list here. -->
                <?php getQuotes($quotes); ?>
            </div>
        </div>

        <div class="row">
            <form class="col-lg-8 offset-lg-2" action="08.php" method="post">
                <hr>
                <!-- TODO: Implement the errors list here. -->
                

                <div class="mb-3">
                    <label for="character" class="form-label">Character</label>
                    <input type="text" name="character" id="character" class="form-control" placeholder="Sean Parker">
                </div>

                <div class="mb-3">
                    <label for="quote" class="form-label">Quote</label>
                    <textarea name="quote" id="quote" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Add quote</button>
            </form>
        </div>
    </main>
</body>

</html>