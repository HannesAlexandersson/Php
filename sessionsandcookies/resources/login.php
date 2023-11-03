<?php
session_start();
$user = [
    'name' => 'Bertram Gilfoyle',
    'email' => 'gilfoyle@piedpiper.io',
    'password' => '$2y$10$Qx.ZsPJooxIqFDewbA9wS.fY6Nkp5qkmJynqkbwxmEyX5Q9Er5EBW',
];
if(isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];// vi sätter värden av $_POST till variabler
    $password = $_POST['password'];// se ovan
    if($email == $user['email'] && password_verify($password, $user['password'])){// om email matchar user email och password matchar user password vi verify password
        $message = 'Welcome, Bertram Gilfoyle!';
        $_SESSION['authenticated'] = true;
        $_SESSION['message'] = $message;        
    }else{
        $message = 'Whoops! Looks like you missed something. Please try again.';
        $_SESSION['authenticated'] = false;
        $_SESSION['message'] = $message;
        
    }
}
header('location: 06.php');
exit;