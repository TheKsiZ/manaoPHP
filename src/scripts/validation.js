let validate_passwords = () => {
    if(document.getElementById('password').value != document.getElementById('confirmpassword').value){
        document.getElementById('error').innerHTML = 'Пароли не совпадают';
        document.getElementById('submit').disabled = true;
    }
    else {
        document.getElementById('error').innerHTML = '';
        document.getElementById('submit').disabled = false;
    }
}