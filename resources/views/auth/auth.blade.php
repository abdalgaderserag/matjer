<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mat`jer</title>
    <link rel="stylesheet" href="{{ url('dist/css/auth/login.css') }}">
</head>


<body>

<video id="bg-vid" autoplay muted loop src="{{ url('static/login.mp4') }}"></video>
<div id="main">
    <div id="form-body">
{{--        <form action="" method="post">--}}
            <label for="email">your email :</label>
            <input type="email" name="email" id="email">
            <br>
            <label for="password">password :</label>
            <input type="password" name="password" id="password">
            <br>
            <button type="submit" onclick="login()">Login</button>
{{--        </form>--}}


        {{--        <form action="" method="post">--}}
        <label for="name">your name :</label>
        <input type="name" name="name" id="name">
        <label for="email">your email :</label>
        <input type="email" name="email" id="emailR">
        <br>
        <label for="password">password :</label>
        <input type="password" name="password" id="passwordR">
        <br>
        <button type="submit" onclick="login()">Login</button>
        {{--        </form>--}}
    </div>
</div>

</body>
<script src="{{ url('dist/auth/js/login.js') }}"></script>
</html>
