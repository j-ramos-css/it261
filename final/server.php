<?php // server page - connecting to database
session_start(); // a session is a way to store information - variables used across several pages
include('config.php'); // this is where our include is for header.php

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
// connect to database, and show errors

// register users

if(isset($_POST['reg_user'])) {
    $first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
    $email = mysqli_real_escape_string($iConn, $_POST['email']);
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password_1 = mysqli_real_escape_string($iConn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($iConn, $_POST['password_2']);

    // errors if not filled out by user

    if(empty($first_name)) {
        array_push($errors, 'First name required');
    }

    if(empty($last_name)) {
        array_push($errors, 'Last name required');
    }

    if(empty($email)) {
        array_push($errors, 'Email required');
    }

    if(empty($username)) {
        array_push($errors, 'Username required');
    }

    if(empty($password_1)) {
        array_push($errors, 'Password required');
    }

    if($password_1 !== $password_2) {
        array_push($errors, 'Passwords do not match!');
    }

    // check username and password from table - only one username or email allowed

    $user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";

    $result = mysqli_query($iConn, $user_check_query) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

    $rows = mysqli_fetch_assoc($result);

    if($rows) {
        if($rows['username'] == $username) {
            array_push($errors, 'Username already exists!');
        }

        if($rows['email'] == $email) {
            array_push($errors, 'Email already exists!');
        }
    } // end if rows

    if(count($errors) == 0) {

        // new function= md5() - this will spit out in database a 32 hex character value for password
        $password = md5($password_1);

        // this will insert our registrations data into table in database
        $query = "INSERT INTO users (first_name, last_name, email, username, password) VALUES ('$first_name', '$last_name', '$email', '$username', '$password')";

        mysqli_query($iConn, $query);

        $_SESSION['username'] = $username;
        $_SESSION['success'] = $success;

        header('Location:login.php');


    } // end count

} // end isset reg user

// now we communicate with login.php
if(isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password = mysqli_real_escape_string($iConn, $_POST['password']);

    if(empty($username)) {
        array_push($errors, 'Username is required!');
    }

    if(empty($password)) {
        array_push($errors, 'Password is required!');
    }
    // counting errors, happy if 0
    if(count($errors) == 0) {
        $password = md5($password);
    
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

        $results = mysqli_query($iConn, $query);
    
        
        if(mysqli_num_rows($results) == 1 ) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = $success;
            header('Location:index.php');
        } else {
            array_push($errors, 'Wrong undername/password combo');
    }
}
    

} // end isset login