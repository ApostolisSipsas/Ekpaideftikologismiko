
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
    $email = sanitizeInput($_POST["email"], $conn);
    $pass = sanitizeInput($_POST["password"], $conn);

    // Check if username or email already exists
    $sql = "SELECT * FROM usercredentials WHERE username = ? OR email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $user, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script> 
        alert('Username or Email already exists.');
        window.location.href='../index.php';
        </script>";
        
    } else {

        $stmt = $conn->prepare("INSERT INTO usercredentials (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $user, $email, $pass);

        // Execute the statement
        if ($stmt->execute()) {
            echo "<script> 
            alert('Profil Created');
            window.location.href='../index.php';
            </script>";

        } else {
            echo "Error: " . $stmt->error;
        }
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>