<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php  $errors || dd($errors) ?>
    <h2 class="bold"> Register </h2>
    <form action="{{ route("api.login")  }}" method="POST">
        <div class="">
            <label> Username</label>
            <input class="form-control" name="username" type="text" placeholder="">
        </div>

        <div class="">
            <label> Password </label>
            <input class="form-control"  name="password" type="password" placeholder="">
        </div>

        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
