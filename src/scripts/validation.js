let validate_passwords = () => {
    if(document.getElementById('confirmpassword').value == '' || document.getElementById('password').value == ''){
        return;
    }
    
    if(document.getElementById('password').value != document.getElementById('confirmpassword').value){
        document.getElementById('errorPassword').innerHTML = 'Пароли не совпадают';
        document.getElementById('submit').disabled = true;
    }
    else {
        document.getElementById('errorPassword').innerHTML = '';
        document.getElementById('submit').disabled = false;
    }
}

$(document).ready(function(){
    $("#login").submit(function(){
        $.ajax({
            method: "POST",
            url: "./scripts/login.php",
            data: $(this).serialize(),            
            success: function(response) {                                                
                if(!response){
                    window.location.href = "./../index.php";
                }                         
                else{
                    $("#invalidError").text(response.slice(1,-1));
                }
            }
        });
        return false;
    });

    $("#registration").submit(function(){
        $.ajax({
            method: "POST",
            url: "./scripts/registrateUser.php",
            data: $(this).serialize(),            
            success: function(response) {                                
                if(response[1] == 'u'){
                    $("#usernameError").text(response.slice(2,-1));
                }
                else if(response[1] == 'e'){
                    $("#emailError").text(response.slice(2,-1));
                }
                else{
                    window.location.href = "./../index.php";
                }
            }
        });
        return false;
    });    
})
