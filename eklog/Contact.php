<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        body {
            background-color: #4e0d57 ; 
            color: #cf66de; 
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
            width:30%;
        }

        form {
            background-color: #68b0b0; 
            color: #440a4d; 
            font-size:150%;
            font-weight:bold;
            padding:10%;
            width:80%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: inline-block;
            text-align: center;
        }

        label, input, textarea {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }

        input, textarea {
            font-size:100%;
            font-weight:bold;
            padding: 10px;
            border: 1px solid #CCC;
            border-radius: 5px;
            background-color:#440a4d;
            color:#68b0b0;
        }

        button {
            background-color: #007BFF;
            color: #FFFFFF;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contact Us</h1>
        <form action="phpRequestCodes/send_email.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <br>
            <button type="submit">Send</button>
        </form>
    </div>
</body>
</html>