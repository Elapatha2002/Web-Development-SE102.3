<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <form action="process.php" method="POST">
            <label class="text">Name</label><br>
            <input type="text" name="name" placeholder="Enter Name" required><br>

            <label class="text">E-mail</label><br>
            <input type="email" name="email" placeholder="Enter E-mail" required><br>

            <label class="text">Password</label><br>
            <input type="password" name="password" placeholder="Enter Password" required><br>

            
        <div class="submit-div">
            <input type="submit" value="submit" class="submit-btn"></input>
        </div>
        </form>

    </div>
</body>
</html>