<?php


session_start();


if(isset($_POST['singin'])){

    $userName = $_POST['userName'] ?? false;
    $password = $_POST['password'] ?? false;


    if($userName === 'admin'){
        if($password === 'pass'){
                
            $_SESSION['username'] = $userName;
            header('location: index.php');

        } else {
            $_SESSION['message'] = 'Your Password is Incorrect!';
            header('location: login.php');
        } 
        
    } else {
        $_SESSION['message'] = 'Your User is Incorrect!';
        header('location: login.php');
    }

    
    


}

    
