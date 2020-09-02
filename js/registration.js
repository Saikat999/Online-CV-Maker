function validation() {

    var email = document.getElementById('email').value;
    var password = document.getElementById("password").value;
    var phone = document.getElementById("phone").value;



    if (email === "") {
        alert("Please Enter Your Email Address!");
        return false;
    }
    if(email.indexOf('@') <= 0 ){
        alert(" ** @ Invalid Position");
        return false;
    }

    if((email.charAt(email.length-4)!=='.') && (email.charAt(email.length-3)!=='.')){
        alert(" ** .com Invalid Position");
        return false;
    }


    if (password === "") {
        alert("Please Enter a Password!");
        return false
    }




    var pass =  /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
    if (!pass.test(password)) {
        alert("Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters");
        return false;
    }

    if (phone === "") {
        alert("Please Enter Your 11 Digit Mobile Number!");
        return false
    }



    var mobile = /^\d{11}$/;
    if(!mobile.test(phone)){
        alert("Invalid Mobile Number");
        return false;
    }

}