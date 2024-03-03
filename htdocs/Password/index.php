<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup for me</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <form action="pass.php" method="post">

          <div>
            <label for="username">Username:</label>
            <input type="text" id="username" required>
         </div>
            <div>
              <label for="password">Password:</label>
              <input type="text" id="password" required>
            </div>

            <div>
              <label for="confirm_password">Confirm password:</label>
              <input type="password" id="confirm_password" name="confirm_password" required>
            </div>

            <div>
                <button type="sumbit">Register</button>
            </div>

             
    </form>

</body>
</html>