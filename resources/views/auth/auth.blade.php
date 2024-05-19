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
            background-image: url("{{ url('static/test.jpeg') }}");
            background-position: center;
            background-size: cover;
        }
        #main{
            height: 1000px;
            display: flex;
            align-content: center;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.44);
        }

        .form-body{
            width: 52%;
            height: 420px;
            background-color: rgba(255, 255, 255, 0.14);
            border: rgba(255, 255, 255, 0.14) solid 1px;
            border-radius: 14px;
        }
    </style>
</head>


<body>
<div id="main">
    <div class="form-body">
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
    function sizes(){
        document.getElementById('main').style.height = window.innerHeight + 'px';
    }
    sizes();
</script>
</html>
