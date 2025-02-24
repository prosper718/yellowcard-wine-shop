<?php

// INITIALIZE ALL THE INPUT WITH EMPTY VALUE
$email = $password = $error = '';

// ASSIGN EMPTY VALUE TO ALL THE INPUT ERROR
$errors = [
    'email'=>'', 
    'password'=>'',
    'name_error' => ''
];

if (isset($_POST['login'])) {

    // CHECKING EMAIL ERRORS
    if (empty($_POST['email'])) { // IF EMAIL IS EMPTY
        $errors['email'] = "Email is required!";
    } else {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // IF EMAIL INPUT IS NOT AN EMAIL FORMAT
            $errors['email'] = "Invalid email address!";
        }
    }

    // CHECKING PASSWORD ERRORS
    if (empty($_POST['password'])) { // IF TITLE IS EMPTY
        $errors['password'] = "Password is required!";
    } else {
        $password = $_POST['password'];
        if ( strlen($password) <= 3) { // IF PASSWORD LENGHT IS NOT UP TO 3
            $errors['password'] = "Invalid password!";
        }
    }

    // Fetch user details from the database
$sql = "SELECT id, full_name, email, password FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user) {
    // Verify the password
    if (password_verify($password, $user['password'])) {
        // Password is correct, login successful
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['email'] = $user['email'];
        header("Location: dashboard.php");
        exit();
    } else {
        // Incorrect password
        $error = "Incorrect email or password!";
    }
} else {
    // No user found with that email
    $error = "Incorrect email or password!";
}

}

?>