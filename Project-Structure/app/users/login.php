<?php
declare(strict_types=1);
require __DIR__ . '/../autoload.php';


$_SESSION['user'] = null;

if(isset($_POST['email'], $_POST['password'])){
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];
if ($email !== false) {
    //prepare a sql query to fetch from db
    $query = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->execute();
    //execute the query
    $result = $query->fetch(PDO::FETCH_ASSOC);
    print_r($result);


    //check if the user exists
    if($result !== false){
        //if The Email exists in the database = check if the password is correct
        $dbPassword = $result['password'];
        if (password_verify($password, $dbPassword)) {
            // Password is correct
            $_SESSION['user'] = [
                'id' => $result['id'],
                'name' => $result['name'],
                'email' => $result['email'],
            ];
            echo "Welcome back ".$_SESSION['user']['name']."!";

            redirect('/project-structure/index.php');
            exit;

        } else {
            // Password is incorrect
            echo "Incorrect password";

            redirect('/project-structure/login.php?error=incorrect_password');
            exit;
        }
    } else {
        // Email doesn't exist in the database
        echo "Email not found in the database";

        redirect('/project-structure/login.php?error=incorrect_email');
        exit;
    }


} else {
    echo "Invalid email address";

    redirect('/project-structure/login.php?error=incorrect_email');
        exit;
}

}

