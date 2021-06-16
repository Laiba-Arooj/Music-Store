<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Album</title>
</head>
<body>
    <h1>Thank You For Adding New Song in to the Album!</h1>
    <p>Information you have submitted is:</p>
    <ol>
        <li><em>Album Name:</em> <?php echo $_POST["albumname"]?></li>
        <li><em>Song Name:</em> <?php echo $_POST["songname"]?></li>
        <li><em>Duration:</em> <?php echo $_POST["duration"]?></li>
        <li><em>Message:</em> <?php echo $_POST["artistname"]?></li>
    </ol>
</body>
</html>