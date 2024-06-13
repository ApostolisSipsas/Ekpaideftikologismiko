
<?php
$servername = "localhost";  // Replace with your server name
$username = "root";         // Replace with your database username
$password = "";             // Replace with your database password
$dbname = "ekpaideftikologismiko";    // Replace with your database name



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize input
function sanitizeInput($data, $conn) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $conn->real_escape_string($data);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $user = sanitizeInput($_POST["username"], $conn);
    $pass = sanitizeInput($_POST["password"], $conn);
    session_start();
    $_SESSION['username'] = $user;

    // Prepare and bind
    $stmt = $conn->prepare("SELECT username, password FROM usercredentials WHERE username = ?");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $stmt->store_result();

    // Check if user exists
    if ($stmt->num_rows > 0) {
        // Bind result variables
        $stmt->bind_result($username, $stored_password);
        $stmt->fetch();

        // Verify password
        if ($pass === $stored_password) {
            echo "<script> 
            alert('welacome');
            window.location.href='../mainPage.php';
            </script>";
            //Start session and set session variables here if needed
            session_start();
            $_SESSION['username'] = $username;
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that username.";
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>