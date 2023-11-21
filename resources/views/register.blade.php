<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
<h2 class="title text-center mb-3">Register</h2>
<form method="POST" action="{{ route("api.register")  }}">
    <div class="">
        <label> Username</label>
        <input class="form-control" type="text" name="username" placeholder="">
    </div>
    <div class="">
        <label> Email</label>
        <input  class="form-control"  type="text" name="email" placeholder="">
    </div>
    <div class="">
        <label> Password </label>
        <input  class="form-control" type="password" name="password" placeholder="">
    </div>

    <button class="btn btn-outline-primary mt-3"  > Register </button>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</form>
</div>

</body>
</html>

