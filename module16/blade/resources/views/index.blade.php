<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
</head>
<body>

<form action="" method="POST">
    @csrf
    <label for="name">name</label>
    <input type="text" name="name" placeholder="name">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="email">email</label>
    <input type="text" name="email" placeholder="email">
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <label for="password">password</label>
    <input type="text" name="password" placeholder="password">
    @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit">submit</button>
</form>


</body>
</html>
