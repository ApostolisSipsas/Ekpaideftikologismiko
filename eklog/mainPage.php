<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Menu Page</title>
    <link rel="stylesheet" href="cssContainer/mainpage.css">
    <style>
        .profile {
            position: relative;
            display: inline-block;
        }

        .profile-circle {
            cursor: pointer;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: -20px; /* Adjust this value to shift the menu to the left */
            background-color: white;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-menu a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-menu a:hover {
            background-color: #ddd;
        }

        .profile:hover .dropdown-menu {
            display: block;
        }
    </style>
</head>
<body>
    <?php session_start(); ?>
    <div class="top-menu">
        <div class="menu-buttons">
            <button onclick="alert('Button 1 clicked!')">Κουμπί 1</button> 
            <button onclick="alert('Button 2 clicked!')">Κουμπί 2</button>
            <button onclick="alert('Button 3 clicked!')">Κουμπί 3</button>
            <button onclick="alert('Button 4 clicked!')">Κουμπί 4</button>
        </div>
        <div class="profile">
            <div class="profile-circle">
                <img src="path/to/profile-pic.jpg" alt="Profile Picture"> <!-- Replace with actual path to profile picture -->
            </div>
            <div class="dropdown-menu">
                <a href="#option1">Επιλογή 1</a>
                <a href="#option2">Επιλογή 2</a>
                <a href="#option3">Επιλογή 3</a>
                <a href="#option4">Επιλογή 4</a>
                <a href="#option5">Επιλογή 5</a>
            </div>
            <div class="profile-name"><?php echo $_SESSION['username']; ?></div>
        </div>
    </div>
    <div class="main-content">
        <div class="sidebar">
            <ul>
                <li><a href="#option1">Επιλογή 1</a></li>
                <li><a href="#option2">Επιλογή 2</a></li>
                <li><a href="#option3">Επιλογή 3</a></li>
                <li><a href="#option4">Επιλογή 4</a></li>
                <li><a href="#option5">Επιλογή 5</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>Καλώς Ήρθατε στην Κύρια Σελίδα</h1>
            <p>Αυτή είναι η κύρια σελίδα του λογισμικού σας. Χρησιμοποιήστε τα κουμπιά στο επάνω μέρος για να περιηγηθείτε και τις επιλογές στην αριστερή πλευρά για πρόσβαση σε διάφορες λειτουργίες.</p>
        </div>
    </div>
</body>
</html>