export default class CheckLogin {
    constructor(){
        axios.get('/auth-check').then(res => {
            if (res.data){console.log('is login');}
            if (res.data == false){
                window.location.replace(window.redirectLogin);
            }
        });
    }
}

