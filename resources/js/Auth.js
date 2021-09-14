export default class Auth {
    check(){
        axios.get('/auth-check').then(res => {
            if (res.data == false){
                window.location.replace(window.redirectLogin);
            }
        });
    }
}

