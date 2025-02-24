<?php
// INCLUDE CONFIG FILE 
require_once "db_connect.php";

// INITIALIZE ALL THE INPUT WITH EMPTY VALUE
$email = $number = $name = $password = $confirm_password = $error = '';

// ASSIGN EMPTY VALUE TO ALL THE INPUT ERROR
$errors = [
    'email'=>'', 
    'name'=>'', 
    'number'=>'', 
    'confirm_password'=>'', 
    'password'=>''
];

if (isset($_POST['register'])) {

    // CHECKING EMAIL ERRORS
    if (empty($_POST['email'])) { 
        $errors['email'] = "Email is required!";
    } else {
        $email = trim($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
            $errors['email'] = "Invalid email address!";
        }
    }

    // CHECKING FULL NAME ERRORS
    if (empty($_POST['name'])) { 
        $errors['name'] = "Full name is required!";
    } else {
        $name = trim($_POST['name']);
        if (!preg_match('/^[a-zA-Z\s]+$/', $name)) { 
            $errors['name'] = "Invalid Full name!";
        }
    }

    // CHECKING PHONE NUMBER ERRORS
    if (empty($_POST['number'])) { 
        $errors['number'] = "Number is required!";
    } else {
        $number = trim($_POST['number']);
        if (!preg_match('/^[0-9]+$/', $number)) { 
            $errors['number'] = "Invalid number!";
        }
    }

    // CHECKING PASSWORD ERRORS
    if (empty($_POST['password'])) { 
        $errors['password'] = "Password is required!";
    } else {
        $password = trim($_POST['password']);
        if (strlen($password) < 6) { 
            $errors['password'] = "Password should be at least 6 characters!";
        }
    }

    // CHECKING CONFIRM PASSWORD
    if (empty($_POST['confirm_password'])) { 
        $errors['confirm_password'] = "Confirm password is required!";
    } else {
        $confirm_password = trim($_POST['confirm_password']);
        if ($confirm_password !== $password) { 
            $errors['confirm_password'] = "Passwords do not match!";
        }
    }

    // IF NO ERRORS, PROCEED WITH DATABASE INSERTION
    if (!array_filter($errors)) {
        // Escape values to prevent SQL injection
        $email = mysqli_real_escape_string($conn, $email);
        $number = mysqli_real_escape_string($conn, $number);
        $name = mysqli_real_escape_string($conn, $name);

        // CHECK IF EMAIL OR NUMBER ALREADY EXISTS
        $num_mail_check_sql = "SELECT email, phone FROM users WHERE email = '$email' OR phone = '$phone'";
        $check_stmtt = mysqli_query($conn, $num_mail_check_sql);
        $result = mysqli_fetch_array($check_stmtt);

        if ($result) {
            $error = "Email or number already exists!";
        } else { 
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            
            // INSERT INTO USERS TABLE
            $sql = "INSERT INTO users (full_name, email, password, phone) VALUES ('$name', '$email', '$hashed_password', '$number')";
            $query = mysqli_query($conn, $sql);

            if ($query) {
                $success = "Registration successful!";
                // RESET FORM FIELDS
                $email = $number = $name = $password = $confirm_password = '';
            } else {
                $error = "Unable to submit your data!";
            }
        }
    }
}
?>
