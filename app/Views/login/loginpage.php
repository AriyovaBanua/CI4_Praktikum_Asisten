<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Login Form</title>
</head>

<body>
    <form action="/login/check" method="post">
        <?= csrf_field() ?>
        User: <input type="text" name="username" /><br>
        Password: <input type="text" name="password" /><br>
        <input type="submit" name="submit" value="Login" /><br>
    </form>
</body>

</html>