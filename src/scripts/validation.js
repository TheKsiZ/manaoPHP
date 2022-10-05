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
                if(response.length == 0){ 
                    window.location.href = "./../index.php";
                }

                let json = $.parseJSON(response);                    
                if(typeof json.ERROR === 'undefined'){                    
                    window.location.href = "./../index.php";
                }                                                                               
                $("#invalidError").text(json.ERROR.invalidError);                
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
                if(response.length == 0){ 
                    window.location.href = "./../index.php";
                }
                console.log(response);

                let json = $.parseJSON(response); 
                if(typeof json.ERROR === 'undefined'){
                    window.location.href = "./../index.php";
                }                                                            
                console.log(json);
                if(typeof json.ERROR.usernameError !== 'undefined'){
                    $("#usernameError").text(json.ERROR.usernameError);
                }
                if(typeof json.ERROR.emailError !== 'undefined'){
                    $("#emailError").text(json.ERROR.emailError);
                }                
            }
        });
        return false;
    });    
})
