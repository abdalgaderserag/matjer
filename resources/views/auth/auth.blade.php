<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mat`jer</title>
{{--    <link rel="stylesheet" href="{{ url('dist/css/login.css') }}">--}}
    <style>
        body{
            margin: 0;
            width: 100%;
        }

        #form-body{
            width: 52%;
            height: 420px;
            position: fixed;
            background-color: rgba(255, 255, 255, 0.14);
            border: rgba(255, 255, 255, 0.14) solid 1px;
            border-radius: 14px;
        }

        #bg-vid{
            position: fixed;
            bottom: 0;
        }
    </style>
</head>


<body>

<video id="bg-vid" autoplay muted loop src="{{ url('static/login.mp4') }}"></video>
<div id="main">
    <div id="form-body">
        <form action="" method="post">
            <label for="email">your email :</label>
            <input type="email" name="email" id="email">
            <br>
            <label for="password">password :</label>
            <input type="password" name="password" id="password">
        </form>
    </div>
</div>

</body>
<script>
    var ss = document.getElementById('form-body');
    function sizes(){
        document.getElementById('main').style.height = window.innerHeight + 'px';
        document.getElementById('bg-vid').style.width = window.innerWidth + 'px';

    }
    sizes();
</script>
</html>
