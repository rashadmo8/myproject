let btn =document.getElementById("btn");
btn.onclick=function() {
    // Get the values of the email and password inputs
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    // Email validation regex
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    // Validate email
    if (!emailPattern.test(email)) {
        document.getElementById('e').style.color="red";
        alert('Please enter a valid email address.');

        return false;
    }

    // Validate password
    if (password.length < 8) {
        document.getElementById('pass').style.color="red";
        alert('Password must be at least 8 characters long.');
        return false;
    }

    // If both validations pass
    alert('Form submitted successfully!');
    // return true;
}


    email.addEventListener('mouseout', function(event) {
        var email = event.target.value;
        var regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (regex.test(email)) {
           
            document.getElementById('e').style.color="green";
        }
    })
    password.addEventListener('mouseout', function(event) {
        var pass = event.target.value;
        if(pass.length>=8)
        document.getElementById('pass').style.color="green";
    })
       
        
    

    

