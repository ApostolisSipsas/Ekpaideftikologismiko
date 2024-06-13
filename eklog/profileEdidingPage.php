<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
            background-image: linear-gradient(to bottom right, #6a0dad,  #3d79c6, #2a83d2, #198cdd, #008ce5, #008aec, #0085f3, #0081f8, #007bff, #0a72ff);
            color: #333;
        }

        .profilePanel {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #1a3947;
            height: 80%;
            width: 50%;
            text-align: center;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #1f9484;
            font-weight: 1000;
            margin: 20px 0;
        }

        table {
            color: #329ba8;
            font-weight: bold;
            font-size: 1.2em;
            margin: 20px 0;
            width: 100%;
        }

        table td {
            padding: 10px;
        }

        input[type="text"], input[type="password"], input[type="email"], input[type="file"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .change-password-btn {
            background-color: #1f9484;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1em;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .change-password-btn:hover {
            background-color: #136f62;
        }

        #profile-pic {
            border-radius: 50%;
            margin-bottom: 20px;
            width: 150px;
            height: 150px;
            object-fit: cover;
        }

        #editForm {
            display: none;
        }
    </style>
</head>
<body>
    <?php 
    $conn = new mysqli("localhost", "root","" ,"ekpaideftikologismiko");
        session_start();
        $username=$_SESSION['username'];
        $stmt = $conn->prepare("SELECT email FROM usercredentials WHERE username = ?");
        $stmt->bind_param("s",$username);
        $stmt->execute();
        $stmt->bind_result($email);
        if ($stmt->fetch()) {
            $_SESSION['email']=$email;
        }
        $stmt->close();

    
    // Close connection
    $conn->close();
    ?>
<div class="profilePanel">
    <h1>Profile Name</h1>
    <img id="profile-pic" src="profile-pic.jpg" alt="Profile Picture">
    <div id="viewProfile">
        <table>
            <tr>
                <td>Username:</td>
                <td id="viewUsername"><?php echo $_SESSION['username']?></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td id="viewPassword">***</td>
            </tr>
            <tr>
                <td>Email:</td>
                <td id="viewEmail"><?php echo $_SESSION['email']?></td>
            </tr>
        </table>
        <button class="change-password-btn" onclick="toggleEditForm()">Edit Profile</button>
    </div>
    <form id="editForm" action="phpRequestCodes/changecredendials.php" method="post">
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" id="username" name="username" value=<?php echo $_SESSION['username']?>></td>
            </tr>
            <tr>
                <td>new Password:</td>
                <td><input type="password" id="password" name="password" value=""></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" id="email" name="email" value=<?php echo $_SESSION['email']?>></td>
            </tr>

        </table>
        <button type="submit"  class="change-password-btn">Save Changes</button>
    </form>
</div>


<script>
    function toggleEditForm() {
        const viewProfile = document.getElementById('viewProfile');
        const editForm = document.getElementById('editForm');
        if (viewProfile.style.display === 'none') {
            viewProfile.style.display = 'block';
            editForm.style.display = 'none';
        } else {
            viewProfile.style.display = 'none';
            editForm.style.display = 'block';
        }
    };
</script>

</body>
</html>
