<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mat`jer</title>
    <link rel="stylesheet" href="{{ url('dist/css/auth/login.css') }}">
    <script src="{{ url('dist/js/axios.min.js') }}"></script>
</head>


<body>

<video id="bg-vid" autoplay muted loop src="{{ url('static/login.mp4') }}"></video>
<div id="main">
    <div id="form-body">
        <form action="{{ route('login') }}" method="post">
            @csrf
            <label for="email">your email :</label>
            <input type="email" name="email" id="email">
            <br>
            <label for="password">password :</label>
            <input type="password" name="password" id="password">
            <br>
{{--            <button type="submit" onclick="login()">Login</button>--}}
            <button type="submit">Login</button>
        </form>

        <br>
        <br>
        <br>
        <br>
        <form action="{{ route('register') }}" method="post">
            @csrf
        <label for="name">your name :</label>
        <input type="name" name="name" id="name">
        <br>
        <label for="email">your email :</label>
        <input type="email" name="email" id="emailR">
        <br>
        <label for="password">password :</label>
        <input type="password" name="password" id="passwordR">
        <br>
{{--        <button type="submit" onclick="register()">Login</button>--}}
        <button type="submit">Login</button>
        </form>
    </div>
</div>
<script>
    window.axios = axios;

    // window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
    window.axios.defaults.headers.common['Accept'] = 'application/json';

    window.onresize = ()=>{
        sizes()
    }


    let ss = document.getElementById('form-body');
    function sizes(){
        document.getElementById('main').style.height = window.innerHeight + 'px';
        document.getElementById('bg-vid').style.width = window.innerWidth + 'px';

    }
    sizes();

    {{--function login() {--}}
    {{--    let email = document.getElementById('email').value;--}}
    {{--    let password = document.getElementById('password').value;--}}

    {{--    let request = {--}}
    {{--        'email' : email,--}}
    {{--        'password' : password--}}
    {{--    }--}}


    {{--    axios.post('api/login',request).catch((response)=>{--}}
    {{--        console.log(response.data);--}}
    {{--    }).then((response)=>{--}}
    {{--        sessionStorage['token'] = response.data;--}}
    {{--        window.axios.defaults.headers.common['authorization'] = 'bearer '+ sessionStorage['token'];--}}
    {{--        location.href = '{{ url('items') }}';--}}
    {{--    });--}}
    {{--}--}}


    {{--function register() {--}}
    {{--    let name = document.getElementById('name').innerText;--}}
    {{--    let email = document.getElementById('emailR').innerText;--}}
    {{--    let password = document.getElementById('passwordR').innerText;--}}


    {{--    let request = {--}}
    {{--        'name' : name,--}}
    {{--        'email' : email,--}}
    {{--        'password' : password--}}
    {{--    }--}}
    {{--}--}}
</script>

</body>
</html>
