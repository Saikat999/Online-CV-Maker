

var formLeft = document.querySelector('.form-left');



formLeft.addEventListener('submit',function (event) {
    event.preventDefault();
    var fname = document.getElementById('fname').value;
    var lname = document.getElementById('lname').value;
    var designation = document.getElementById('designation').value;
    var number = document.getElementById('number').value;
    var email = document.getElementById('email').value;
    var address = document.getElementById('address').value;


    window.localStorage.setItem('fname', fname);
    window.localStorage.setItem('lname', lname);
    window.localStorage.setItem('designation', designation);
    window.localStorage.setItem('number', number);
    window.localStorage.setItem('email', email);
    window.localStorage.setItem('address', address);

    //alert(window.localStorage.getItem('name'));
    // To remove
    // window.localStorage.removeItem('name');

});
function check() {
    var fname = document.getElementById('fname').value;
    var lname = document.getElementById('lname').value;
    var designation = document.getElementById('designation').value;
    var number = document.getElementById('number').value;
    var email = document.getElementById('email').value;
    var address = document.getElementById('address').value;
    var birthdate = document.getElementById('birthdate').value;

    if ((fname && lname && designation &&  number && email && address && birthdate)===""){
        alert('Please enter all information properly');
        return false;
    }else{
        window.location='dashboard.php';
    }


        }




