<?php
declare(strict_types=1);

if (isset($_POST['email'], $_POST['password'])) {
    
   
    print_r($_POST);
}
?>
<form action="05.php" method="post">
    <label for="email">Email:</label>
            <input type="email" name="email">
    <label for="password" name="password">password:</label>
        <input type="password" name="password">
    <button type="submit">Submit</button>
</form>



<?php
/*
Create a new file and name it 05.php. We're going to build simple login form. Add a new <form> element and two <input> 
fields for email and password. Remember to add <label> elements for each <input> field. Then add an <button> element with 
the type submit. When the form is submitted, use the isset function to check if both the email and password attributes exists. 
If they do exist, use the print_r function to print the values. The output could look like the text below.

Array ( [email] => versace@yrgo.se [password] => v3rs4c3 )

*/
?>