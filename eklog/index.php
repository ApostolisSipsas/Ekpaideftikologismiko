<html>
    <head>
        <title>Javascript Monsters</title>
        <link rel="stylesheet" href="cssContainer/IndexStyle.css">
    </head>
    <body>
    <h1 class="title">Javascript Monsters</h1><br>
    <div class="container">
        <div class="tab">
            <div id="login-tab" class="active">Σύνδεση</div>
            <div id="register-tab">Εγγραφή</div>
        </div>
        <div id="login-form" class="form-container active">
            <h2>Σύνδεση</h2>
            <form action="phpRequestCodes/login.php" method="POST">
                <label for="login-username">Όνομα Χρήστη</label>
                <input type="text" id="login-username" name="username" required>

                <label for="login-password">Κωδικός Πρόσβασης</label>
                <input type="password" id="login-password" name="password" required>

                <button type="submit">Σύνδεση</button>
            </form>
        </div>
        <div id="register-form" class="form-container">
            <h2>Εγγραφή</h2>
            <form action="phpRequestCodes/Registry.php" method="POST">
                <label for="register-username">Όνομα Χρήστη</label>
                <input type="text" id="register-username" name="username" required>

                <label for="register-email">Email</label>
                <input type="email" id="register-email" name="email" required>

                <label for="register-password">Κωδικός Πρόσβασης</label>
                <input type="password" id="register-password" name="password" required>

                <button type="submit">Εγγραφή</button>
            </form>
        </div>
    </div>

<script>
        document.getElementById('login-tab').addEventListener('click', function() {
            document.getElementById('login-tab').classList.add('active');
            document.getElementById('register-tab').classList.remove('active');
            document.getElementById('login-form').classList.add('active');
            document.getElementById('register-form').classList.remove('active');
        });

        document.getElementById('register-tab').addEventListener('click', function() {
            document.getElementById('register-tab').classList.add('active');
            document.getElementById('login-tab').classList.remove('active');
            document.getElementById('register-form').classList.add('active');
            document.getElementById('login-form').classList.remove('active');
        });
    </script>

    </body>
</html>