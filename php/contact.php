<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form Handling</title>
    <style>
        body{
            background-color: antiquewhite;
            padding: 10px;
        }
        p{
            font-size: 20px;
            color: brown;
        }
        ol{
            font-size: 17px;
        }
    </style>
</head>
<body>
    <h1>Thank You!</h1>
    <p>We have received your message:</p>
    <ol>
        <li><em> Message From:</em> <?php echo $_POST["name"]?></li>
        <li><em>User Email:</em> <?php echo $_POST["email"]?></li>
        <li><em>Message:</em> <?php echo $_POST["message"]?></li>
    </ol>
</body>
</html>