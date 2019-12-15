<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$error = false;

// process post request
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
    $data = json_decode(file_get_contents('php://input'), true);
    if (!isset($data['name']) ) {
        $error = true;
        die("Please enter username.\n");
    }

    if (!isset($data['password']) ) {
        $error = true;
        die("Please enter your password.\n");
    }
    $username = trim($data['name']);
    $password = trim($data['password']);

    // Check if username is empty
    if(empty($username)){
        $error = true;
        print("Please enter username.\n");
    } 

    // Check if password is empty
    if(empty($password)) {
        $error = true;
        print("Please enter your password.\n");
    } 

    // Validate credentials
    if(!$error) {
        $stmt = $db_connection -> prepare('SELECT id, username, password FROM users WHERE username = ?');

        if (
            $stmt &&
            $stmt -> bind_param('s', $username) &&
            $stmt -> execute() &&
            $stmt -> store_result() &&
            $stmt -> bind_result($id, $username, $hashed_password)
        ) {
            if(mysqli_stmt_num_rows($stmt) == 1){
                if(mysqli_stmt_fetch($stmt)){
                    if(md5($password) == $hashed_password) {
                        // Password is correct, so start a new session
                        session_start();
                                                
                        // Store data in session variables
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $id;
                        $_SESSION["username"] = $username;                            
                        
                        // Redirect user to welcome page
                        print("Login Successful.\n");
                    } else{
                        print("The password you entered was not valid.\n");
                    }
                }
            } else{
                print("No account found with that username.\n");
            }
        } else {
            print("Oops! Something went wrong. Please try again later.\n");
        }
    }
}

?>
