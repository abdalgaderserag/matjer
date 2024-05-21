import axios from 'axios';
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

function login() {
    let email = document.getElementById('email').innerText;
    let password = document.getElementById('password').innerText;

    let request = {
        'email' : email,
        'password' : password
    }

    axios.post('api/login',request).catch((response)=>{
        console.log(response);
    }).then((response)=>{
        console.log(response);
    });
    console.log(123)
}


function register() {
    let name = document.getElementById('name').innerText;
    let email = document.getElementById('emailR').innerText;
    let password = document.getElementById('passwordR').innerText;


    let request = {
        'name' : name,
        'email' : email,
        'password' : password
    }
}
