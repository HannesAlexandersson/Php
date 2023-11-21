<?php
declare(strict_types=1);
/*
Create a new file and name it 06.php. We're going to create a quote machine which saves the 
quotes to a file on our system. Setup the basic HTML markup tree and add an <form> element to it. 
Add an <textarea> field named quote and a submit <button> to the form. When the user submits the form:
Fetch the quote attribute from the $_POST superglobal.
Sanitize the quote string using the filter_var function.
Append the quote onto its new line in a file called quotes.txt on your system.
Try submitting quotes and see them appear in the quotes.txt file.
*/
if(isset($_POST['quote'])){
    $sanQuote = filter_var($_POST['quote'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);    
    $quote = $_POST['quote'].PHP_EOL;
    // Skapa en ny fil eller skriv över befintlig fil
    file_put_contents('quotes.txt', $quote, FILE_APPEND);
}
?>
<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <form action="06.php" method="post">
            <textarea name="quote" id="quote"></textarea>
            <button type="submit">SUBMIT</button>
        </form>
    </body>
</html>