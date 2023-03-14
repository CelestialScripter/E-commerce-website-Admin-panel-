$('#btn-reg').click(function(e){
    var first_name = $('#first_name').val();
    var last_name = $('#last_name').val();
    var DOB= $('#DOB').val();
    var email = $('#email').val();
    var mobile_no= $('#mobile_no').val();
    var gender = $('#gender').val();
    var password = $('#password').val();
    var confirm_password = $('#confirm_password').val();

    
/*validation */
    if( !first_name )
    {
        alert("Enter first name")
        document.getElementById("first_name").style.borderColor = "red";
    }
     else if( !last_name )
    {
        alert("Enter last_name");
        document.getElementById("last_name").style.borderColor = "red";
    }
     else if( !DOB )
    {
        alert("Enter your date of birth");
        document.getElementById("DOB").style.borderColor = "red";
    }

    else if( !email )
    {
        alert("Enter your email");
        document.getElementById("email").style.borderColor = "red";
    }
     else if( !mobile_no )
    {
        alert("Enter your mobile number");
        document.getElementById("mobile_no").style.borderColor = "red";
    }
     else if( !gender )
    {
        alert("Confirm Gender");
        document.getElementById("gender").style.borderColor = "red";
    }

    else if( !password )
    {
        alert("Enter Password")
        document.getElementById("password").style.borderColor = "red";
    }
    else if( !confirm_password )
    {
        alert("confrim password")
        document.getElementById("confirm_password").style.borderColor = "red";
    }

    else if( password !== confirm_password )
    {
        alert("Passwords don't match");
        document.getElementById("password").style.borderColor = "red";
        document.getElementById("confirm_password").style.borderColor = "red";
    }
    else
    {
        $.ajax({
            type:'POST',
            url: 'add_user_action.php',
            data: { first_name:first_name, last_name:last_name, DOB:DOB,  email:email, mobile_no:mobile_no, gender:gender, password:password},
            success:function(response){
                // alert(response);
                
                if( response == "pass" )
                {
                   
                    alert("New user Created")
                    window.location.href = 'add_company';
                }
                else if( response == "email_exists" )
                {
                    alert(" Email is in use by another user");
                    document.getElementById("email").style.borderColor = "red";
                }
                else if( response == "email_error" )
                {
                    alert("That is not a valid email");
                    document.getElementById("email").style.borderColor = "red";
                }
                else
                {
                    alert(response);
                }
            }
        });
    }
  
});