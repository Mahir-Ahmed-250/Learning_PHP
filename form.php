<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form In PHP</title>
</head>
<body>

    <form action="contact.php" method="POST">
        <label>User Name</label><br>
        <input type="text" name="user_name"><br>
        <label>Email</label><br>
        <input type="email" name="user_email"><br>
        <label>Password</label><br>
        <input type="password" name="user_password"><br>
        <br>
        <input type="submit" value="Submit Data" name="btn">
    </form>
</body>
</html>