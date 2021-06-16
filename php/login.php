<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form Data</title>
</head>
<body>
    <h1>Thank You</h1>
    <p>Here is the information you have submitted:</p>
    <ol>
        <li><em>Name:</em> <?php echo $_POST["username"]?></li>
        <li><em>Password:</em> <?php echo $_POST["password"]?></li>
    </ol>
</body>
</html>